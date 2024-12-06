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

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>10</h3>

                        <p>Понравившиеся посты</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <a href="#" class="small-box-footer">Подробнее<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>10</h3>
{{--                        <sup style="font-size: 20px">%</sup>--}}
                        <p>Коментарии</p>
                    </div>
                    <div class="icon">
                        <i class=" fa fa-comment "></i>
                    </div>
                    <a href="#" class="small-box-footer">Подробнее<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
       </section>
</div>
@endsection
