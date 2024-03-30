<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Doctor extends Authenticatable
{
    use HasFactory;
    protected $guard = 'doctor';
    protected $guarded = [];

    public static function updateOrCreateDoctor($request, $id = null)
    {
        Doctor::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make(123456),
            'degree' => $request->degree,
            'hospital_name' => $request->hospital_name,
            'weekly_availability' => json_encode($request->weekly_availability),
            'time' => $request->time,
            'image' => Helper::uploadImage($request->image, 'doctor/img/', $id === null ? '' : Doctor::find($id)->image, 600, 600),
        ]);
    }
}
