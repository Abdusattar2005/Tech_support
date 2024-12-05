@extends('layouts.video')
@section('content')

<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Video</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($videos as $video)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <div class="w-25">
                            <video width="240px" height="300px" controls>
                                <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                                Ваш браузер не поддерживает воспроизведение видео.
                            </video>
                        </div>
                    </div>
                    <p class="blog-post-category">Blog post</p>
                    <a href="{{route('main.show', $video->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$video->title}}</h6>
                    </a>
                </div>
                    @endforeach
            </div>
        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach( $randomVideos as $video)
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <video width="240px" height="300px" controls>
                                    <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                                    Ваш браузер не поддерживает воспроизведение видео.
                                </video>                            </div>
                            <p class="blog-post-category">Videos</p>
                            <a href="{{route('main.show', $video->id)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$video->title}}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Лутшие видео</h5>
                    <ul class="post-list">
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <video width="140px" height="200px" controls>
                                    <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                                    Ваш браузер не поддерживает воспроизведение видео.
                                </video>
                                <div class="media-body">
                                    <h6 class="post-title">{{$video->title}}</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget-title">Categories</h5>
                    <img src={{asset("assets/images/blog_widget_categories.jpg")}} alt="categories" class="w-100">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
