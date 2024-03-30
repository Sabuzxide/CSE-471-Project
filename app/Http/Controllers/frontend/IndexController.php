<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function doctorList()
    {
        return view('frontend.doctor-list', [
            'doctors' => Doctor::where('status', 1)->latest()->get(),
        ]);
    }

    public function makeAppointment(Request $request)
    {
        $appointments = Appointment::create($request->all());
        return view('frontend.success');
    }
}
