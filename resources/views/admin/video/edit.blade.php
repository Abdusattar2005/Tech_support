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
                <li><a href="{{route('admin2.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
                <li class="active">Ползователи</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

            <div class="row">

                <div class="col-lg-5">
                    Добавление посты
                    <form action="{{route('admin2.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" name="title" placeholder="Название категории"
                                   value="{{$post->title}}">

                            @error('title')
                            <div class="text-danger">Это поля необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                        <textarea id="summernote" name="content">
                            {{$post->content}}
                        </textarea>
                            @error('content')
                            <div class="text-danger">Это поля необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Добавим 1</label>
                            <div class="w-25">
                                <img src="{{asset('storage/' . $post->preview_image)}}" alt="preview_image" class="w-25">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Выберите</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        @error('preview_image')
                        <div class="text-danger">Это поля необходимо для заполнения</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputFile">Добавим 2</label>
                            <div class="w-25">
                                <img src="{{asset('storage/' .  $post->main_image)}}" alt="main_image" class="w-25">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label">Выберите</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        @error('main_image')
                        <div class="text-danger">Это поля необходимо для заполнения</div>
                        @enderror
                        <div class="form-group">
                            <label>Выберите категорию</label>
                            <select name="category-id" class="form-control" disabled="">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id == $post->category_id ? 'selected' : ''}}
                                    >{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @php
                            $postTags = [];
                            if(count($post->tags->pluck('id')))
                            {
                               $postTags = $post->tags->pluck('id')->toArray();
                            }

                        @endphp
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Теги1</label>
                                <select class="form-control select2" name="tad_id[]" style="width: 100%;">
                                    @foreach($tags as $tag)

                                        <option {{in_array($tag->id, $postTags) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Теги3</label>--}}
{{--                                <select class="form-control select2" style="width: 100%;">--}}
{{--                                    @foreach($tags as $tag)--}}

{{--                                        <option {{is_array($post->tags->pluck('id')->toArry()) &&  in_array($tag->id, $post->tags->pluck('id')->toArry()) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
