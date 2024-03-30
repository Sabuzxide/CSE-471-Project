@extends('admin.master')
@section('title', 'Appointment Details')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>All Patient Appointment List</h4>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
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
                                    <td>
                                        @if ($appointment->status == 0)
                                        <a href="{{ route('appointment.delete', $appointment->id) }}" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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
