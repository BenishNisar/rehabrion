<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FrontendProfileController extends Controller
{
    /**
     * Profile Page Display
     */
    public function index()
    {
        $user = Auth::user();
        return view('Home.profile', compact('user'));
    }

    /**
     * Update Profile (Form Submit)
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:50',
            'mobile_phone' => 'nullable|string|max:50',
            'organization' => 'nullable|string|max:255',
            'gender' => 'nullable|string|in:male,female,other',
            'date_of_birth' => 'nullable|date',
            'address_line1' => 'nullable|string|max:500',
            'address_line2' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:1000',
        ]);

        // Update user
        User::where('id', $user->id)->update($validated);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Upload Profile Image via AJAX
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'profile_img' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_img')) {
            // Delete old image if not default
            if ($user->profile_img && 
                $user->profile_img !== 'assets/profile_images/default.png' && 
                File::exists(public_path($user->profile_img))) {
                File::delete(public_path($user->profile_img));
            }

            // Upload new image
            $file = $request->file('profile_img');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/profile_images'), $filename);

            $path = 'assets/profile_images/' . $filename;

            // Update database
            $user->profile_img = $path;
            $user->save();

            return response()->json([
                'success' => true,
                'image_url' => asset($path),
                'message' => 'Profile picture updated successfully!'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Failed to upload image.'
        ]);
    }

    /**
     * Update Single Field via AJAX (Inline Editing)
     */
    public function updateField(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'field' => 'required|string',
            'value' => 'nullable|string'
        ]);
        
        $field = $request->field;
        $value = $request->value;
        
        // Handle special fields
        if ($field == 'location') {
            $parts = explode(', ', $value);
            $user->city = $parts[0] ?? null;
            $user->country = $parts[1] ?? null;
        } 
        elseif ($field == 'email') {
            // Validate email uniqueness
            $request->validate([
                'value' => 'email|unique:users,email,' . $user->id
            ]);
            $user->email = $value;
        }
        elseif ($field == 'phone') {
            $user->phone = $value;
        }
        elseif ($field == 'mobile_phone') {
            $user->mobile_phone = $value;
        }
        elseif ($field == 'organization') {
            $user->organization = $value;
        }
        elseif ($field == 'firstname') {
            $user->firstname = $value;
        }
        elseif ($field == 'lastname') {
            $user->lastname = $value;
        }
        elseif ($field == 'city') {
            $user->city = $value;
        }
        elseif ($field == 'country') {
            $user->country = $value;
        }
        elseif ($field == 'zip_code') {
            $user->zip_code = $value;
        }
        elseif ($field == 'address_line1') {
            $user->address_line1 = $value;
        }
        elseif ($field == 'address_line2') {
            $user->address_line2 = $value;
        }
        elseif ($field == 'gender') {
            $user->gender = $value;
        }
        elseif ($field == 'date_of_birth') {
            $user->date_of_birth = $value;
        }
        
        $user->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Field updated successfully!',
            'value' => $value
        ]);
    }

    /**
     * Update Bio via AJAX
     */
    public function updateBio(Request $request)
    {
        $request->validate([
            'bio' => 'nullable|string|max:1000'
        ]);

        $user = Auth::user();
        $user->bio = $request->bio;
        $user->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Bio updated successfully!'
        ]);
    }

    /**
     * Change Password
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Check current password
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Current password is incorrect!'
            ]);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Password changed successfully!'
        ]);
    }
}