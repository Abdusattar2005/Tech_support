@extends('layouts.admin_main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Категории
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
                <li class="active"><a href="{{route('admin.user.index')}}"><i class="fa fa-users"></i>Ползователи</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

            <div class="row">
                <div class="col-lg-2 mb-3">
                    <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-block margin-bottom">Добавит</a>

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
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td class="text-center"><a href="{{route('admin.category.show', $category->id)}}"><i class="fa fa-eye"></i></a></td>
                                        <td class="text-center"><a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="fa fa-pencil"></i></a></td>
                                        <td class="text-center">
                                            <form action="{{route('admin.category.delete', $category->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                {{--<i class="fas fa-trash"></i>--}}
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
            <!-- /.row -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
