@extends('admin.master')
@section('title', 'Edit Doctor Information')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Doctor Info</h3>
                    </div>
                    <div class="card-body text-justify" style="padding: 100px 200px">
                        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="name">Doctor Name <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="name" value="{{ $doctor->name }}" id="name" class="form-control">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="email">Doctor Email<span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" value="{{ $doctor->email }}" id="name" class="form-control">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="phone">Phone Number<span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="phone" value="{{ $doctor->phone }}" id="phone" class="form-control">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="degree">Doctor Degree <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="degree" value="{{ $doctor->degree }}" id="degree" class="form-control">
                                        @error('degree')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="hospital_name">Hospital Name <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="hospital_name" value="{{ $doctor->hospital_name }}" id="hospital_name" class="form-control">
                                        @error('hospital_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="weekly_availability">Weekly Availability<span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select class="form-select" name="weekly_availability[]" id="weekly_availability" multiple aria-label="multiple select example">
                                            @php
                                                $days = json_decode($doctor->weekly_availability);
                                            @endphp
                                            <option selected disabled>Select Days</option>
                                                <option {{ in_array('Saturday', $days) ? 'selected' : '' }} value="Saturday">Saturday</option>
                                                <option {{ in_array('Sunday', $days) ? 'selected' : '' }} value="Sunday">Sunday</option>
                                                <option {{ in_array('Monday', $days) ? 'selected' : '' }} value="Monday">Monday</option>
                                                <option {{ in_array('Tuesday', $days) ? 'selected' : '' }} value="Tuesday">Tuesday</option>
                                                <option {{ in_array('Wednesday', $days) ? 'selected' : '' }} value="Wednesday">Wednesday</option>
                                                <option {{ in_array('Thursday', $days) ? 'selected' : '' }} value="Thursday">Thursday</option>
                                                <option {{ in_array('Friday', $days) ? 'selected' : '' }} value="Friday">Friday</option>
                                          </select>
                                        @error('weekly_availability')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="hospital_name">Time <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="time" name="time" value="{{ $doctor->time }}" id="time" class="form-control">
                                        @error('time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="image">Doctor Image <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="file" name="image" id="image" class="form-control">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="submit" value="Submit" id="time" class="btn btn-success form-control">
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
