@extends('layouts.admin_main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pедактирование видео
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
                <li class="active">Ползователи</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                <div class="col-lg-5">
                    Добавление посты
                    <form action="{{route('admin.video.update', $video->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" name="title" placeholder="Название категории"
                                   value="{{$video->title}}">

                            @error('title')
                            <div class="text-danger">Это поля необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Добавим 1</label>
                            <div class="w-25">
                                <img src="{{'storage/' . $video->preview_video}}" alt="preview_video" class="w-25">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_video">
                                    <label class="custom-file-label">Выберите</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        @error('preview_video')
                        <div class="text-danger">Это поля необходимо для заполнения</div>
                        @enderror

                        <div class="form-group">
                            <label>Выберите категорию</label>
                            <select name="category-id" class="form-control" disabled="">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id == $video->category_id ? 'selected' : ''}}
                                    >{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Обнавить">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
