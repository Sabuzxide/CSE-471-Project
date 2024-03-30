<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'patientCount' => User::count(),
            'doctorCount' => Doctor::count(),
            'patientSuccessCount' => Appointment::where('status', 1)->count(),
            'currentPatientAppointments' => Appointment::whereDay('created_at', now()->day)->get(),
        ]);
    }

    public function appointmentList()
    {
        return view('admin.appointment.index', [
            'appointments' => Appointment::latest()->get(),
        ]);
    }
}
