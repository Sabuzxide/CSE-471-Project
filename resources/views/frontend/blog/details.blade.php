@extends('frontend.master')
@section('content')
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6 m-auto">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img style="height: 400px" src="{{ asset($blog->image) }}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">{{ $blog->title }}</a></h5>
                                <ul>
                                    <li>{{ $blog->created_at->format('M, d Y h:i A') }}</li>
                                </ul>
                                <p class="mt-5">
                                    {{ $blog->description }}
                                </p>

                                <a href="{{ url()->previous() }}">Back Page</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
