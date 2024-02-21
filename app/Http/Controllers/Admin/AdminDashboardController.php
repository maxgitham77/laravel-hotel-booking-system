<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('backend.admin.dashboard.admin-dashboard');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function adminLogin()
    {
        return view('backend.admin.login');
    }

    public function adminProfile()
    {
        $admin_id = Auth::user()->id;
        $user = User::find($admin_id);
        return view('backend.admin.profile.index', compact('user'));
    }

    public function adminProfileStore(Request $request)
    {

        $admin_id = Auth::user()->id;
        $user = User::find($admin_id);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->file($request->photo)) {
            //dd($request->file($request->photo));
            $file = $request->file('photo');
            if (file_exists($user->photo)) {
                @unlink(public_path('uploads/admin_images/'.$user-photo));
            }
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin_images'),$filename);
            $user['photo'] = $filename;
        }
        $user->save();

        $notification = array(
            'message' => 'Admin profile Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function adminProfileChangePassword()
    {
        $admin_id = Auth::user()->id;
        $user = User::find($admin_id);
        return view('backend.admin.profile.change-password', compact('user'));
    }

    public function adminProfilePasswordUpdate(Request $request)
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

        return back()->with($notification);
    }

}
