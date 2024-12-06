@extends('personal.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
            <div class="col-lg-5">
                Добавление категории
                <form action="{{route('personal.comment.update', $comment->id)}}" method="POST" class="w-50">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Название</label>
                        <textarea class="form-control" name="message" cols="30" rows="10">{{$comment->message}}</textarea>
                        @error('message')
                        <div class="text-danger">Это поля необходимо для заполнения</div>

                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Обнавить">
                </form>
            </div>

        </div>
        <!-- /.row -->



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
