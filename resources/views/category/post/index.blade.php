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
                    <p class="mt-2">Просмотров: {{$video->views}}</p>
                    <div class="d-flex justify-content-between">
                        <p class="blog-post-category">{{$video->category->name}}</p>
                        <div class="d-flex justify-content-between">
                            <form action="{{route('video.like.store', $video->id)}}" method="post">
                                @csrf
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fa{{auth()->user()->LikedVideos->contains($video->id) ? 's' : 'r'}} fa-thumbs-up" style="color: blue;"></i>
                                </button>
                            </form>
                            <form action="{{route('video.dislike.store', $video->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="dislike" value="1">
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fa{{auth()->user()->DislikedVideos->contains($video->id) ? 's' : 'r'}} fa-thumbs-down" style="color: black;"></i>
                                </button>
                            </form>
                            <form action="{{route('video.like.store', $video->id)}}" method="post">
                                @csrf
                                <button type="submit" class="border-0 bg-transparent">
                                    @auth()
                                        <i class="fa{{auth()->user()->LikedVideos->contains($video->id) ? 's' : 'r'}} fa-heart" style="color: red;"></i>
                                    @endauth
                                </button>
                            </form>
                        </div>
                    </div>
                    <a href="{{route('main.show', $video->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$video->title}}</h6>
                    </a>
                </div>
                    @endforeach
            </div>
            <div class="row">
                <div class="mx-auto" style="margin-top: -80px;">
                    {{$videos->links()}}
                </div>
            </div>
        </section>

    </div>
</main>
@endsection
