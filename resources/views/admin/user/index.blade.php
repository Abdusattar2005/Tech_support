@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Пользователи
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i>Главная</a></li>
            <li class="active">Ползователи</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-lg-2 mb-3">
                <a href="{{route('admin.user.create')}}" class="btn btn-primary btn-block margin-bottom">Добавит</a>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 ">


                    <div class="box">

                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th colspan="3" class="text-center">Дуйствия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td class="text-center"><a href="{{route('admin.user.show', $user->id)}}"><i class="fa fa-eye"></i></a></td>
                                        <td class="text-center"><a href="{{route('admin.user.edit', $user->id)}}" class="text-success"><i class="fa fa-pencil"></i></a></td>
                                        <td class="text-center">

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
        <!-- /.row -->



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
