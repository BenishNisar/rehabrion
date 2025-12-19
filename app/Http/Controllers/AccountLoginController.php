<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountLoginController extends Controller
{
    //
    // public function index(){
    //     return view("auth.accountlogin");
    // }
public function index()
{
    return response()
        ->view("auth.accountlogin")
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
        ->header('Pragma', 'no-cache')
        ->header('Expires', '0');
}

// public function store(Request $request){
// $request->validate([

// "email"=>"required",
// "password"=>"required"


// ]);

// $credentials=$request->only("email","password");
// if(Auth::attempt($credentials)){
//     $user=Auth::user();
//     if($user->role_id==1){

//         return redirect()->route("Dashboard.admin.dashboard");


//     } else{
//         Auth::logout();
//         return redirect("/account/login")->withErrors(["error" => "Unauthorized access."]);

//     }
// }

// return redirect("/accountlogin")->withErrors(["email" => "Invalid login credentials."]);


// }


public function store(Request $request)
{
    $request->validate([
        "email" => "required",
        "password" => "required"
    ]);

    $credentials = $request->only("email","password");

    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->role_id == 1) {
            return redirect()->route("Dashboard.admin.dashboard");
        }

        if ($user->role_id == 2) {
            return redirect()->route("Home.submit-medical-history");
        }

        Auth::logout();
        return redirect("/accountlogin")->withErrors(["error" => "Unauthorized access."]);
    }

    return redirect("/accountlogin")->withErrors(["email" => "Invalid login credentials."]);
}

public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect("/accountlogin")->with("successfully");
    }


    public function showForgetForm(){
        return view('auth.forget-password');
    }

    public function submitForgetForm(Request $request){
        $request->validate(['email' => 'required|email|exists:users,email']);
        $token = Str::random(64);

        PasswordReset::create([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now()
        ]);

        // ✅ Correct Reset Link
        $link = url('/reset-password/'.$token.'?email='.$request->email);

        // ✅ Send Mail
        Mail::raw("Reset your password using this link: ".$link, function($message) use($request){
            $message->to($request->email);
            $message->subject('Password Reset Link');
        });

        // ✅ Pass Link to View using Session
        return back()->with([
            'message' => 'Reset link sent successfully.',
            'reset_link' => $link
        ]);
    }




    public function showResetForm(Request $request, $token){
        $email = $request->query('email'); // URL se email lo

        return view('auth.reset-password', compact('token', 'email'));
    }


    public function submitResetForm(Request $request){

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $updatePassword = PasswordReset::where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if(!$updatePassword){
            return back()->withErrors(['email' => 'Invalid token!']);
        }

        // Update password
        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        // Auto-login
        $user = User::where('email', $request->email)->first();
        Auth::login($user);

        // Delete token
        PasswordReset::where(['email'=> $request->email])->delete();

        return redirect()->route('Dashboard.admin.dashboard')->with('message', 'Password changed and you are now logged in!');
    }



    public function showRegisterForm()
{
    return view('auth.register');
}

// public function register(Request $request)
// {
//     $request->validate([
//         'firstname' => 'required|string|max:255',
//         'lastname' => 'required|string|max:255',
//         'email' => 'required|email|unique:users,email',
//         'phone' => 'required|string|max:50',
//         'gender' => 'required|string|max:50',
//         'city' => 'required|string|max:255',
//         'country' => 'required|string|max:255',
//         'zip_code' => 'required|string|max:50',
//         'organization' => 'required|string|max:255',
//         'password' => 'required|min:6|confirmed',
//     ]);

//     $user = User::create([
//         'firstname' => $request->firstname,
//         'lastname' => $request->lastname,
//         'email' => $request->email,
//         'phone' => $request->phone,
//         'mobile_phone' => $request->mobile_phone,
//         'password' => Hash::make($request->password),
//         'gender' => $request->gender,
//         'date_of_birth' => $request->date_of_birth,
//         'city' => $request->city,
//         'country' => $request->country,
//         'zip_code' => $request->zip_code,
//         'address_line1' => $request->address_line1,
//         'address_line2' => $request->address_line2,
//         'role_id' => 2,
//         'organization' => $request->organization,
//         'profile_img' => null,
//     ]);

//     Auth::login($user);
//     $request->session()->regenerate();

//     return redirect()->route('Home.submit-medical-history');
// }
// public function register(Request $request)
// {
//     $request->validate([
//         'firstname' => 'required|string|max:255',
//         'lastname' => 'required|string|max:255',
//         'email' => 'required|email|unique:users,email',
//         'phone' => 'required|string|max:50',
//         'gender' => 'required|string|max:50',
//         'city' => 'required|string|max:255',
//         'country' => 'required|string|max:255',
//         'zip_code' => 'required|string|max:50',
//         'organization' => 'required|string|max:255',
//         'password' => 'required|min:6|confirmed',
//     ]);

//     User::create([
//         'firstname' => $request->firstname,
//         'lastname' => $request->lastname,
//         'email' => $request->email,
//         'phone' => $request->phone,
//         'mobile_phone' => $request->mobile_phone,
//         'password' => Hash::make($request->password),
//         'gender' => $request->gender,
//         'date_of_birth' => $request->date_of_birth,
//         'city' => $request->city,
//         'country' => $request->country,
//         'zip_code' => $request->zip_code,
//         'address_line1' => $request->address_line1,
//         'address_line2' => $request->address_line2,
//         'role_id' => 2,
//         'organization' => $request->organization,
//         'profile_img' => null,
//     ]);

//     return redirect()->route('auth.accountlogin')
//         ->with('success', 'Account created successfully. Please sign in.');
// }

public function register(Request $request)
{
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname'  => 'required|string|max:255',
        'email'     => 'required|email|unique:users,email',
        'phone'     => 'required|string|max:50',
        'password'  => 'required|min:6|confirmed',
    ]);

    User::create([
        'firstname'     => $request->firstname,
        'lastname'      => $request->lastname,
        'email'         => $request->email,
        'phone'         => $request->phone,
        'mobile_phone'  => $request->mobile_phone,
        'password'      => Hash::make($request->password),
        'role_id'       => 2,

        // Optional fields left empty for now
        'gender'        => null,
        'date_of_birth' => null,
        'city'          => null,
        'country'       => null,
        'zip_code'      => null,
        'organization'  => null,
        'address_line1' => null,
        'address_line2' => null,
        'profile_img'   => null,
    ]);

    return redirect()->route('auth.accountlogin')
        ->with('success', 'Account created successfully. Please sign in.');
}


}




