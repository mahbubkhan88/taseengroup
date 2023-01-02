<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //Logout function
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message'    => 'User logout has been success',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }


    //Profile funtion
    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('dashboard.profile', compact('adminData'));
    }


    //Edit profile function
    public function editProfile()
    {
        $id = Auth::user()->id;
        $eidtData = User::find($id);
        return view('dashboard.edit_profile', compact('eidtData'));
    }


    //Update profile function
    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = date('YmdHi') . '.' . $extenstion;
            $file->move(public_path('uploads/admin_images'), $filename);
            $data->image = $filename;
        }

        $data->save();

        $notification = array(
            'message'    => 'Profile has been updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }


    //Change password
    public function changePassword()
    {
        return view('dashboard.change_password');
    }


    //Update password
    public function updatePassword(Request $request)
    {
        $validateData = $request->validate([
            'old_password'     => 'required',
            'new_password'     => 'required|min:5',
            'confirm_password' => 'required|same:new_password'
        ]);

        $hasPassword = Auth::user()->password;

        if (Hash::check($request->old_password, $hasPassword)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->new_password);
            $user->save();

            session()->flash('message', 'Password has been changed');

            return redirect()->back();
        } else {
            session()->flash('message', 'Old password is not match');

            return redirect()->back();
        }
    }
}