@extends('layouts.admin_main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>{{$post->title}}</h1>
        <a href="{{route('admin2.post.edit', $post->id)}}" class="text-success"><i class="fa fa-pencil"></i></a>

        <form action="{{route('admin2.post.delete', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="border-0 bg-transparent">
                <i class="fa fa-trash text-danger" role="button"></i>
            </button>

        </form>
        <ol class="breadcrumb">
            <li><a href="{{route('admin2.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
            <li class="active">Ползователи</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-lg-6 ">


                    <div class="box">

                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">

                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$post->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$post->title}}</td>
                                    </tr>
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
