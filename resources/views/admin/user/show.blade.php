@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>{{$user->name}}</h1>
        <a href="{{route('admin.user.edit', $user->id)}}" class="text-success"><i class="fa fa-pencil"></i></a>
{{--        <form action="{{route('admin.user.delete', $user->id)}}" method="POST">--}}
            @csrf
            @method('DELETE')
            {{--<i class="fas fa-trash"></i>--}}
            <button type="submit" class="border-0 bg-transparent">
                <i class="fa fa-trash text-danger" role="button"></i>
            </button>

        </form>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
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
                                        <td>{{$user->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$user->name}}</td>
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
