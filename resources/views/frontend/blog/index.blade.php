@extends('frontend.master')
@section('content')
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset($blog->image) }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="{{ route('blog-details', $blog->id) }}">{{ $blog->title }}</a></h5>
                            <ul>
                                <li>{{ $blog->created_at->format('M, d Y h:i A') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-12 text-center">
                    <div class="load__more">
{{--                        <a href="#" class="primary-btn">Load More</a>--}}
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
