@extends('admin.master')
@section('title', 'Add New Doctor')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Doctor</h3>
                    </div>
                    <div class="card-body text-justify" style="padding: 100px 200px">
                        <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="name">Doctor Name <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="name" id="name" class="form-control">
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
                                        <input type="email" name="email" id="name" class="form-control">
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
                                        <input type="text" name="phone" id="phone" class="form-control">
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
                                        <input type="text" name="degree" id="degree" class="form-control">
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
                                        <input type="text" name="hospital_name" id="hospital_name" class="form-control">
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
                                            <option selected disabled>Select Days</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
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
                                        <input type="time" name="time" id="time" class="form-control">
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
