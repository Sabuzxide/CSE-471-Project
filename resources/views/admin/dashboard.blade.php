@extends('admin.master')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card p-3 bg-info">
                    <h4 class="card-title">Total Patient</h4>
                    <h2 class="text-center">{{ $patientCount }}</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-3 bg-success text-white">
                    <h4 class="card-title">Total Doctor</h4>
                    <h2 class="text-center">{{ $doctorCount }}</h2>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-3 bg-primary text-white">
                    <h4 class="card-title">Successful Patient</h4>
                    <h2 class="text-center">{{ $doctorCount }}</h2>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Current Patient Appointment List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Patient Name</th>
                                    <th>Patient Phone</th>
                                    <th>Doctor Name</th>
                                    <th>Doctor Phone</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($currentPatientAppointments as $appointment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $appointment->user->name }}</td>
                                    <td>{{ $appointment->user->phone }}</td>
                                    <td>{{ $appointment->doctor->name }}</td>
                                    <td>{{ $appointment->doctor->phone }}</td>
                                    <td>
                                        @if ($appointment->status == 0)
                                        <span class="badge text-bg-warning">Pending</span>
                                        @else
                                        <span class="badge text-bg-success">Success</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
