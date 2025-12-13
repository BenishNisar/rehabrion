<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Mail\ContactMail;
use App\Mail\UserThankYouMail;
use Illuminate\Http\Request;
use App\Models\InnerBanner;         // ⬅️ add this
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
class ContactController extends Controller
{
    //
      public function index()
    {
        // inner_banners: id = 8 (change number if needed)
        $banner = InnerBanner::find(8);

        // fallback image if record or path missing
        $bannerImage = $banner?->image ?? 'assets/images/home/contact.jpg';

        return view('Home.contact', compact('bannerImage'));
    }


    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'country'=> 'required',
    //         'phone'=>'nullable',
    //         'message' => 'required|string',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['errors' => $validator->errors()], 422);
    //     }

    //     $contact = Contact::create($request->only(['name', 'email', 'country', 'phone', 'message']));

    //     // ✅ Send to Admin
    //     Mail::to('benishk800@gmail.com')->queue(new ContactMail($contact));

    //     // ✅ Send to User
    //     Mail::to($contact->email)->send(new UserThankYouMail($contact->name));

    //     return response()->json(['message' => 'Contact submitted successfully.']);
    // }


public function store(Request $request)
{
    $v = Validator::make($request->all(), [
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'country' => 'required|string|max:100',
        'phone'   => 'required|regex:/^[0-9+\-\s()]{7,20}$/',
        'message' => 'required|string',
    ], [
        'country.required' => 'Please enter your country.',
        'phone.regex'      => 'Please enter a valid phone number.',
    ]);

    if ($v->fails()) {
        // AJAX => 422 JSON | Normal => back with errors
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['errors' => $v->errors()], 422);
        }
        return back()->withErrors($v)->withInput();
    }

    $contact = Contact::create($v->validated());

    try { Mail::to('benishk800@gmail.com')->send(new ContactMail($contact)); } catch (\Throwable $e) {}
    try { Mail::to($contact->email)->send(new UserThankYouMail($contact)); } catch (\Throwable $e) {}

    $msg = 'Thank you for message submitting.';
    // ✅ AJAX => JSON; Non-AJAX => redirect back with toast
    if ($request->ajax() || $request->wantsJson()) {
        return response()->json(['message' => $msg]);
    }
    return back()->with('toast.ok', $msg);
}


}
