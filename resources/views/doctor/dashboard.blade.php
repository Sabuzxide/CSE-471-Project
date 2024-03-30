@extends('doctor.master')
@section('title', 'Doctor Dashboard')
@section('content')
    <div class="container mt-3">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>MY Patient Pending List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Patent Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointmentsPending as $appointment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $appointment->user->name }}</td>
                                    <td>{{ $appointment->user->email }}</td>
                                    <td>{{ $appointment->user->phone }}</td>
                                    <td>{{ $appointment->user->address }}</td>
                                    <td>
                                        @if ($appointment->status == 0)
                                        <span class="badge text-bg-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('appointment.status', $appointment->id) }}" class="btn btn-primary">Approved</a>
                                        <a href="{{ route('appointment.delete', $appointment->id) }}" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Approved Patient List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Patent Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointmentsApproved as $appointment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $appointment->user->name }}</td>
                                    <td>{{ $appointment->user->email }}</td>
                                    <td>{{ $appointment->user->phone }}</td>
                                    <td>{{ $appointment->user->address }}</td>
                                    <td>
                                        @if ($appointment->status == 1)
                                        <span class="badge text-bg-success">Approved</span>
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
