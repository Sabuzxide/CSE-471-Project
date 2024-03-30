<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.doctor.index', [
            'doctors' => Doctor::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'degree' => 'required',
            'hospital_name' => 'required',
            'weekly_availability' => 'required',
            'time' => 'required',
        ]);

        Doctor::updateOrCreateDoctor($request);
        return redirect()->back()->with('success', 'Doctor Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.edit', [
            'doctor' => $doctor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'degree' => 'required',
            'hospital_name' => 'required',
            'weekly_availability' => 'required',
            'time' => 'required',
        ]);
        Doctor::updateOrCreateDoctor($request, $id);
        return redirect()->route('doctors.index')->with('success', 'Doctor Updated Successfully');
    }

    public function status(Doctor $doctor)
    {
        if ($doctor->status == 1) {
            $doctor->status = 0;
            $message = 'Deactivate Successfully!';
        } else {
            $doctor->status = 1;
            $message = 'Activated Successfully!';
        }
        $doctor->save();
        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->back()->with('success', 'Deleted Successfully!');
    }
}
