@extends('frontend.master')
@section('content')
    <div class="container">
        <h3 class="text-center">Doctor List</h3>
        <div class="row mt-5">
            @foreach ($doctors as $doctor)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset($doctor->image) }}" class="image-fluid" alt="">
                        <h4 class="card-title">{{ $doctor->name }}</h4>
                        <p><span class="fw-bold">Degree:</span> {{ $doctor->degree }}</p>
                        <p><span class="fw-bold">Hospital Name:</span> {{ $doctor->hospital_name }}</p>
                        <p><span class="fw-bold">Time: </span>{{ $doctor->time }}</p>
                        <p>Weekly Availability:</p>
                        <p>
                            <ul>
                                @foreach (json_decode($doctor->weekly_availability) as $day)
                                <span class="ms-3">{{ $day }},</span>
                                @endforeach
                            </ul>
                        </p>
                        <form action="{{ route('make.appointment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                            <button type="submit" class="btn btn-success">Make Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
