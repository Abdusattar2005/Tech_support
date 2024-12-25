@extends('layouts.video')
@section('content')
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{$video->title}}</h1>
        <p>Название категории:  {{ $video->category->name }}</p>
    </div>
    <section class="featured-posts-section">
        <div style="width: 50%; margin: 0 auto;">
            <canvas id="viewsChart"></canvas>
        </div>
    </section>
    <script>
        const ctx = document.getElementById('viewsChart').getContext('2d');
        const months = @json($months);
        const data = @json($data);
        const labels = data.map(category_id => category_id.views_date);
        const views = data.map(category_id => category_id.views);

        new Chart(ctx, {
            type: 'line', // Тип графика
            data: {
                labels: labels,
                datasets: [{
                    label: 'Просмотры видео',
                    data: views,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: '2024-Айлар',
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Просмотры',
                        },
                        beginAtZero: true,
                    }
                }
            }
        });
    </script>




    <div class="content-wrapper">
        <section class="content-header">
            <div class="row mt-4">
                <div style="width: 60%; margin: 0 auto;">
                    <canvas id="videoViewsChart"></canvas>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('videoViewsChart').getContext('2d');
            const months = @json($months);
            const data = @json($data);
            const labels = data.map(item => item.views_date);
            const views = data.map(item => item.views);
            const chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Просмотры',
                        data: views,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            enabled: true,
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: '2024-Айлар'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Просмотрлардын саны'
                            },
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="row mt-4">
                <div style="width: 60%; margin: 0 auto;">
                    <canvas id="videoStatsChart"></canvas>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('videoStatsChart').getContext('2d');
            const months = @json($months);
            const data = @json($likesCount);
            const labels = data.map(aaa => aaa.likes_date);

            const like = [{{ $video->liked_users_count }}];
            const dislike = [{{ $video->disliked_users_count }}];
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Лайктар',
                            data: like,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            fill: true,
                            tension: 0.4
                        },
                        {
                            label: 'Дизлайктар',
                            data: dislike,
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            fill: true,
                            tension: 0.4
                        }
                    ]
                },
                options: {

                    scales: {
                        x: {
                            title: {
                                display: true,
                                text:'2024-Айлар'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Саны'
                            },
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
    <div>
        <h1 class="edica-page-title" data-aos="fade-up"></h1>
    </div>
@endsection
