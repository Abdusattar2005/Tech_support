@extends('layouts.admin_main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавление видео
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

                    <form action="{{route('admin.video.store')}}" method="POST" class="w-25" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" name="title" placeholder="Название видео"
                                   value="{{old('title')}}"
                            >
                            @error('title')
                            <div class="text-danger">{{$message}}</div>

                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Добавим </label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_video">
                                </div>
                            </div>

                        </div>
                        @error('preview_video')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group w-50">
                            <label>Выберите категорию</label>
                            <select name="category-id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id == old('$category_id')? 'selected' : ''}}
                                    >{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category-id')
                            <div class="text-danger">{{$message}}</div>

                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Дабавить">

                        </div>
                    </form>
                </div>

            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
