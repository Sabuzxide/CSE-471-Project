@extends('admin.master')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-7 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Change Admin Password</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.change-password') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="current_password">Current Password <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" name="current_password" id="current_password" class="form-control">
                                        @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="new_password">New Password <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" name="new_password" id="new_password" class="form-control">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="confirm_password">Confirm Password <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                                        @error('confirm_password')
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
                                        <input type="submit" class="btn btn-primary" value="Update" class="form-control">
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
