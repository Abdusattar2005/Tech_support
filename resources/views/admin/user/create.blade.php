@extends('layouts.admin_main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавление user
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
                <li class="active"><a href="{{route('admin.user.index')}}"><i class="fa fa-users"></i>Ползователи</a></li>  </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

            <div class="row">

                <div class="col-lg-5">

                    <form action="{{route('admin.user.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" name="name" placeholder="Название user">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Название E-mail</label>
                            <input type="text" class="form-control" name="email" placeholder="E-maile">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Парол</label>
                            <input type="text" class="form-control" name="password" placeholder="пароль">
                            @error('password')
                            <div class="text-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <label>Выберите role</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id=>$role)
                                    <option value="{{$id}}"
                                        {{$id == old('$role_id')? 'selected' : ''}}
                                    >{{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Дабавить">
                    </form>
                </div>

            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
