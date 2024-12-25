@extends('layouts.video')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Статистика</h1>
            <section class="featured-posts-section">
                <table class="table caption-top">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Категории</th>
                        <th scope="col">Названия видео</th>
                    </tr>
                    </thead>
                    @foreach($videos as $index => $video)
                        <tbody>
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>
                                <a href="{{ route('category.main.index', $video->category->id) }}">{{ $video->category->name }}</a>
                            </td>
                            <td><a href="{{ route('static.show', $video->id) }}">{{ $video->title }}</a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </section>
            <h1 class="edica-page-title" data-aos="fade-up"></h1>
        </div>
    </main>

@endsection
