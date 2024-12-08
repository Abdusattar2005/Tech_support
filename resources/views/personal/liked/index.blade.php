@extends('personal.layouts.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Понравившиеся видео
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i>Главная</a></li>
            <li class="active">Понравившиеся посты</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="box">

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th></th>
                                <th colspan="2" class="text-center">Дуйствия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td>{{$video->id}}</td>
                                    <td>{{$video->title}}</td>
                                    <td><i class="fa fa-heart" style="color: red;"></i></td>
                                    <td class="text-center"><a href="{{route('admin.video.show', $video->id)}}"><i class="fa fa-eye"></i></a></td>
                                    <td class="text-center">
                                        <form action="{{route('personal.liked.delete', $video->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fa fa-trash text-danger" role="button"></i>
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </section>
</div>
@endsection
