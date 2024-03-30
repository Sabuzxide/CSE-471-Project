@extends('admin.master')
@section('title', 'All blog post')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Blog Post List</h3>
                    </div>
                    <div class="card-body text-justify" >
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th style="width: 13%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->description }}</td>
                                        <td>
                                            <img src="{{ asset($blog->image) }}" height="60" width="80" alt="">
                                        </td>
                                        <td>
                                            <span class="badge text-bg-{{ $blog->status == 1 ? 'primary' : 'secondary' }}">{{ $blog->status == 1 ? 'Active' : 'Deactivated' }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('blogs.status', $blog->id) }}" class="btn btn-{{ $blog->status == 1 ? 'warning' : 'success' }}" title="{{ $blog->status == 1 ? 'Deactive' : 'Active' }}" ><i class="fa-solid fa-thumbs-{{ $blog->status == 1 ? 'down' : 'up' }}"></i></i></a>
                                            <a class="btn btn-primary" title="Edit" href="{{ route('blogs.edit', $blog->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form onsubmit="return confirm('Are you sure want to delete?')" action="{{ route('blogs.destroy', $blog->id) }}"  style="display: inline-block" method="post">
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
