@extends('personal.layouts.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
           Главная
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i>Главная</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red-gradient">
                    <div class="inner">
                        <h3>{{$data['likesCount']}}</h3>

                        <p>Понравившиеся видео</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-heart" ></i>
                    </div>
                    <a href="{{route('personal.liked.index')}}" class="small-box-footer">Подробнее<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua-gradient">
                    <div class="inner">
                        <h3>{{$data['dislikesCount']}}</h3>
                        <p>Не понравившиеся видео</p>
                    </div>
                    <div class="icon ">
                        <i class="fa fa-thumbs-down "></i>
                    </div>
                    <a href="{{route('personal.dislike.index')}}" class="small-box-footer">Подробнее<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow-gradient">
                    <div class="inner">
                        <h3>{{$data['commentsCount']}}</h3>
                        <p>Коментарии</p>
                    </div>
                    <div class="icon">
                        <i class=" fa fa-comment "></i>
                    </div>
                    <a href="{{route('personal.comment.index')}}" class="small-box-footer">Подробнее<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
       </section>
</div>
@endsection
