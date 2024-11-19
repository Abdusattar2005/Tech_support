@extends('layouts.admin_main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pедактирование user
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
                <li class="active">Ползователи</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

            <div class="row">

                <div class="col-lg-5">

                    <form action="{{route('admin.user.update', $user->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" name="name" placeholder="Название тега"
                                   value="{{$user->name}}">

                            @error('name')
                            <div class="text-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Название E-mail</label>
                            <input type="text" value="{{$user->email}}" class="form-control" name="email"
                                   placeholder="E-maile">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
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
