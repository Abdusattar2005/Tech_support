@extends('layouts.admin_main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{$video->title}}</h1>
            <a href="{{route('admin.video.edit', $video->id)}}" class="text-success"><i class="fa fa-pencil"></i></a>

            <form action="{{route('admin.video.delete', $video->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="border-0 bg-transparent">
                    <i class="fa fa-trash text-danger" role="button"></i>
                </button>
            </form>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
                <li class="active">Ползователи</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$video->id}}</td>
                                </tr>
                                <tr>
                                    <td>Название</td>
                                    <td>{{$video->title}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-25">
                        <video class="w-25" width="240px" height="300px" controls>
                            <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                            Ваш браузер не поддерживает воспроизведение видео.
                        </video>
                        <p class="mt-2">Просмотров: {{$video->views}}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
