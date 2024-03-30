@extends('admin.master')
@section('title', 'Blog post create')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add New Blog</h3>
                    </div>
                    <div class="card-body text-justify" style="padding: 100px 200px">
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="name">Blog Title<span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="title" id="title" class="form-control">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="name">Blog Description<span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="image">Image <span class="text-danger"> *</span></label>
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
                                        <input type="submit" value="Create" id="time" class="btn btn-success form-control">
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
