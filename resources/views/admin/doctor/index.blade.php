@extends('admin.master')
@section('title', 'Add New Doctor')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Doctor List</h3>
                    </div>
                    <div class="card-body text-justify" >
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Availability </th>
                                    <th>Time </th>
                                    <th>Degree</th>
                                    <th>Hospital Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th style="width: 13%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>{{ $doctor->phone }}</td>
                                        <td>
                                            <ul>
                                                @foreach (json_decode($doctor->weekly_availability) as $days)
                                                <li>{{ $days }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>{{ $doctor->time }}</td>
                                        <td>{{ $doctor->degree }}</td>
                                        <td>{{ $doctor->hospital_name }}</td>
                                        <td>
                                            <img src="{{ asset($doctor->image) }}" height="60" width="80" alt="">
                                        </td>
                                        <td>
                                            <span class="badge text-bg-{{ $doctor->status == 1 ? 'primary' : 'secondary' }}">{{ $doctor->status == 1 ? 'Active' : 'Deactivated' }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('doctors.status', $doctor->id) }}" class="btn btn-{{ $doctor->status == 1 ? 'warning' : 'success' }}" title="{{ $doctor->status == 1 ? 'Deactive' : 'Active' }}" ><i class="fa-solid fa-thumbs-{{ $doctor->status == 1 ? 'down' : 'up' }}"></i></i></a>
                                            <a class="btn btn-primary" title="Edit" href="{{ route('doctors.edit', $doctor->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form onsubmit="return confirm('Are you sure want to delete?')" action="{{ route('doctors.destroy', $doctor->id) }}"  style="display: inline-block" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            </form>
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
