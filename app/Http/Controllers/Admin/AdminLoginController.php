<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $attributes['status'] = 1;

        if (!Auth::guard('admin')->attempt($attributes)) {
            return redirect()->back()->with('error', 'Invalid Email Or Password!');
        }
        session()->regenerate();
        return redirect()->route('admin.dashboard')->with('success', 'Welcome Back Sir !');
    }

    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }


    public function changePassword()
    {
        return view('admin.auth.change-password');
    }

    public function changePasswordStore(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:6',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password|min:6',
        ]);
        $admin = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        if ($admin) {
            if (Hash::check($request->current_password, $admin->password)) {
                $admin->password = Hash::make($request->new_password);
                $admin->save();
                return redirect()->back()->with('success', 'Password Changed Successfully!');
            }
            return redirect()->back()->with('error', 'Invalid Current Password!');
        }
    }
}
