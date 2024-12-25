@extends('layouts.video')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категориялар</h1>
            <section class="featured-posts-section">
                <table border="4" cellpadding="8" cellspacing="0" width="500px">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Названия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $index => $category)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <a href="{{ route('category.main.index', $category->id) }}">{{ $category->name }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
            <h1 class="edica-page-title" data-aos="fade-up"></h1>
        </div>
    </main>

@endsection
