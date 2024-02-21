<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function editUserProfile()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        return view('frontend.user.profile', compact('user'));
    }

    public function UpdateUserProfile(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->file($request->photo)) {
            $file = $request->file('photo');
            if (file_exists($user->photo)) {
                @unlink(public_path('uploads/user_images/'.$user->photo));
            }
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/user_images'),$filename);
            $user['photo'] = $filename;
        }
        $user->save();

        $notification = array(
            'message' => 'User profile Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User logged out successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }

    public function userChangePassword()
    {
        return view('frontend.user.change-password');
    }

    public function userPasswordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => ['required'],
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }

        User::whereId(auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }


}
