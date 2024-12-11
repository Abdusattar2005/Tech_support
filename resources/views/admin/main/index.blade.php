@extends('layouts.admin_main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Главная
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
                <li class="active"><a href="{{route('admin.user.index')}}"><i class="fa fa-users"></i>Ползователи</a></li>
            </ol>
        </section>
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{$data['usersCount']}}</h3>

                            <p>Пользователи</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{route('admin.user.index')}}" class="small-box-footer">Подробнее<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$data['categoriesCount']}}</h3>

                            <p>Категории</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-th"></i>
                        </div>
                        <a href="{{route('admin.category.index')}}" class="small-box-footer">Подробнее<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{$data['videosCount']}}</h3>
                            <p>Видео</p>
                        </div>
                        <div class="icon">
                            <i class=" fa fa-video-camera"></i>
                        </div>
                        <a href="{{route('admin.video.index')}}" class="small-box-footer">Подробнее<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->



        </section>
    </div>
@endsection
