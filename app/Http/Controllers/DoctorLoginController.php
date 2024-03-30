<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorLoginController extends Controller
{
    public function index()
    {
        return view('doctor.auth.doctor-login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $attributes['status'] = 1;

        if (!Auth::guard('doctor')->attempt($attributes)) {
            return redirect()->back()->with('error', 'Invalid Email Or Password!');
        }
        session()->regenerate();
        return redirect()->route('doctor.dashboard')->with('success', 'Welcome Back !');
    }

    public function destroy()
    {
        Auth::guard('doctor')->logout();
        return redirect()->route('doctor.login');
    }

    public function changePassword()
    {
        return view('doctor.auth.change-password');
    }

    public function changePasswordStore(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:6',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password|min:6',
        ]);
        $doctor = Doctor::where('id', Auth::guard('doctor')->user()->id)->first();
        if ($doctor) {
            if (Hash::check($request->current_password, $doctor->password)) {
                $doctor->password = Hash::make($request->new_password);
                $doctor->save();
                return redirect()->back()->with('success', 'Password Changed Successfully!');
            }
            return redirect()->back()->with('error', 'Invalid Current Password!');
        }
    }
}
