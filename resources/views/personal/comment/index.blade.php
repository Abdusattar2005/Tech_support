@extends('personal.layouts.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
           Коментарии
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i>Главная</a></li>
            <li class="active">Коментарии</li>
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
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th colspan="2" class="text-center">Дуйствия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{$comment->id}}</td>
                                    <td>{{$comment->message}}</td>
                                    <td class="text-center"><a href="{{route('personal.comment.edit', $comment->id)}}" class="text-success"><i class="fa fa-pencil"></i></a></td>
                                    <td class="text-center">
                                        <form action="{{route('personal.comment.delete', $comment->id)}}" >
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
