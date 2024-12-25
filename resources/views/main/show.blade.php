@extends('layouts.video')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$video->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">• {{$data->translatedFormat('F')}} • {{$data->day}} • {{$data->year}} • {{$data->format('H:i')}} •  {{ $video->comments->count() }} Коментарии</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <div class="w-25" >
                    <video class="center" width="970px" height="640px" controls>
                        <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                    </video>
                    <p class="mt-2">Просмотров: {{$video->views}}</p>
                </div>
            </section>
            <section>
                <div class="d-flex justify-content-between">
                    @auth()
                    <p class="blog-post-category">{{$video->category->name}}</p>
                        <div class="d-flex justify-content-between">
                            <form action="{{route('video.like.store', $video->id)}}" method="post">
                                @csrf
                                <button type="submit" class="border-0 bg-transparent">
                                    <span>{{$video->liked_users_count}}</span>
                                    <i class="fa{{auth()->user()->LikedVideos->contains($video->id) ? 's' : 'r'}} fa-thumbs-up" style="color: blue;"></i>
                                </button>
                            </form>
                            <form action="{{route('video.dislike.store', $video->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="dislike" value="1">
                                <button type="submit" class="border-0 bg-transparent">
                                    <span>{{$video->disliked_users_count}}</span>
                                    <i class="fa{{auth()->user()->DislikedVideos->contains($video->id) ? 's' : 'r'}} fa-thumbs-down" style="color: black;"></i>
                                </button>
                            </form>
                @auth()
                        <form action="{{route('video.like.store', $video->id)}}" method="post">
                            @csrf
                            <button type="submit" class="border-0 bg-transparent">
                                <span>{{$video->liked_users_count}}</span>
                                <i class="fa{{auth()->user()->LikedVideos->contains($video->id) ? 's' : 'r'}} fa-heart" style="color: red;"></i>
                            </button>
                        </form>
                    @endauth
                    @guest()
                        <div>
                            <span>{{$video->liked_users_count}}</span>
                            <i class="far fa-heart"></i>
                        </div>
                    @endguest
                        </div>
                    @endauth
                </div>
            </section>
            <section class="comment-list mb-5">
                <h2 class="section-title mb-5" data-aos="fade-up"> Коментарии ({{ $video->comments->count() }})</h2>

            @foreach($video->comments as $comment)
                <div class="comment-text mb-3">
                      <span class="username">
                          <div>
                              {{$comment->user->name}}
                          </div>
                        <span class="text-muted float-right">{{$comment->dateAsCarbon->diffForHumans()}}</span>
                      </span>

                    <div class="d-flex justify-content-between">
                        {{$comment->message}}
                        <form action="{{route('video.comment.store', $video->id)}}" method="post">
                            @csrf
                            <button type="submit" class="border-0 bg-transparent">
                                @auth()
                                    <span>{{$video->liked_users_count}}</span>
                                    <i class="fa{{auth()->user()->LikedVideos->contains($video->id) ? 's' : 'r'}} fa-heart" style="color: red;"></i>
                                @endauth
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </section>
            @if($relatedVideos->count() > 0)
                <section class="related-posts">
                    <h2 class="section-title mb-4" data-aos="fade-up">Окшош видеолор</h2>
                    <div class="row">
                        @foreach($relatedVideos as $relatedVideo)
                            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                <video class="center" width="270px" height="240px" controls>
                                    <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                                </video>
                                <div class="d-flex justify-content-between">
                                    <p class="mt-2">Просмотров: {{$video->views}}</p>
                                    <div class="d-flex justify-content-between">
                                    @auth()
                                        <form action="{{route('video.like.store', $video->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="border-0 bg-transparent">
                                                <span>{{$video->liked_users_count}}</span>
                                                <i class="fa{{auth()->user()->LikedVideos->contains($video->id) ? 's' : 'r'}} fa-thumbs-up" style="color: blue;"></i>
                                            </button>
                                        </form>
                                        <form action="{{route('video.dislike.store', $video->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="dislike" value="1">
                                            <button type="submit" class="border-0 bg-transparent">
                                                <span>{{$video->disliked_users_count}}</span>
                                                <i class="fa{{auth()->user()->DislikedVideos->contains($video->id) ? 's' : 'r'}} fa-thumbs-down" style="color: black;"></i>
                                            </button>
                                        </form>
                                        <form action="{{route('video.like.store', $video->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="border-0 bg-transparent">
                                                <span>{{$video->liked_users_count}}</span>
                                                <i class="fa{{auth()->user()->LikedVideos->contains($video->id) ? 's' : 'r'}} fa-heart" style="color: red;"></i>
                                            </button>
                                        </form>
                                    @endauth
                                    @guest()
                                        <div>
                                            <span>{{$video->liked_users_count}}</span>
                                            <i class="far fa-heart"></i>
                                        </div>
                                    @endguest
                                    </div>
                                </div>
                                <p class="post-category">{{$relatedVideo->category->name}}</p>
                                <a href="{{route('main.show', $relatedVideo->id)}}"><h5
                                        class="post-title">{{$video->title}}</h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
            @auth()
            <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Отправить коментарии</h2>
                        <form action="{{route('video.comment.store', $video->id )}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="message" id="comment" class="form-control" placeholder="Напишите коментари" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Дабавить коментарии" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
            </section>
            @endauth
        </div>
    </main>

@endsection
