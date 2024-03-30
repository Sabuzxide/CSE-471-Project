<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\DoctorLoginController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Admin Route

// Admin login
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'store'])->name('admin.login');
Route::get('/admin/register', [AdminLoginController::class, 'create'])->name('admin.register');
Route::post('/admin/logout', [AdminLoginController::class, 'destroy'])->name('admin.logout');

// Doctor Login
Route::get('/doctor/login', [DoctorLoginController::class, 'index'])->name('doctor.login');
Route::post('/doctor/login', [DoctorLoginController::class, 'store'])->name('doctor.login');

Route::post('/doctor/logout', [DoctorLoginController::class, 'destroy'])->name('doctor.logout')->middleware('doctor');
Route::get('/doctor/dashboard', [DoctorDashboardController::class, 'index'])->name('doctor.dashboard')->middleware('doctor');

Route::get('/doctor/change-password', [DoctorLoginController::class, 'changePassword'])->name('doctor.change-password');
Route::post('/doctor/change-password', [DoctorLoginController::class, 'changePasswordStore'])->name('doctor.change-password');

// Middleware group
Route::group(['middleware' => 'admin'], function () {
    // Dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/appointment-list', [DashboardController::class, 'appointmentList'])->name('admin.appointment-list');
    Route::get('/admin/change-password', [AdminLoginController::class, 'changePassword'])->name('admin.change-password');
    Route::post('/admin/change-password', [AdminLoginController::class, 'changePasswordStore'])->name('admin.change-password');

    // Doctor Route
    Route::resource('doctors', DoctorController::class);
    Route::get('/doctors/status/{doctor}', [DoctorController::class, 'status'])->name('doctors.status');
});


// Frontend Route
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/doctor-list', [IndexController::class, 'doctorList'])->name('doctor.list')->middleware('auth');
Route::post('/make-appointment', [IndexController::class, 'makeAppointment'])->name('make.appointment');
Route::get('/appointment-status/{appointment}', [DoctorDashboardController::class, 'status'])->name('appointment.status');
Route::get('/appointment-delete/{appointment}', [DoctorDashboardController::class, 'destroy'])->name('appointment.delete');
