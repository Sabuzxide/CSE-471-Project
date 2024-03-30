<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorDashboardController extends Controller
{
    public function index()
    {
        return view('doctor.dashboard', [
            'appointmentsPending' => Appointment::where('doctor_id', Auth::guard('doctor')->user()->id)->where('status', 0)->get(),
            'appointmentsApproved' => Appointment::where('doctor_id', Auth::guard('doctor')->user()->id)->where('status', 1)->get(),
        ]);
    }

    public function status(Appointment $appointment)
    {
        if ($appointment->status == 0) {
            $appointment->status = 1;
        }
        $appointment->save();
        return redirect()->back()->with('Approved Successfully!');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->back()->with('Deleted Successfully!');
    }
}
