<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videos</title>
    <link rel="stylesheet" href={{asset("assets/vendors/flag-icon-css/css/flag-icon.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendors/font-awesome/css/all.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendors/aos/aos.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/style.css")}}>

{{--    Font Awesome китепканасы--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script src={{asset("assets/vendors/jquery/jquery.min.js")}}></script>
    <script src={{asset("assets/js/loader.js")}}></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1 class="edica-page-title" data-aos="fade-up"></h1>

            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-home"></i></a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="{{route('admin.main.index')}}">1 Выйти на админ</a>
                            <a class="dropdown-item" href="{{route('personal.main.index')}}">2 Выйти на адми 2</a>
                            <a class="dropdown-item" href="{{route('main.video')}}">3 Выйти на видео</a>
                            <a class="dropdown-item" href="{{route('main.index')}}">4 Выйти на Едика</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.user.index')}}"><i class="fa fa-users"></i></a>
                    </li>

                    <li class="nav-item">
                        @auth()
                            <a class="nav-link" href="{{route('personal.main.index')}}">Личный кабинет</a>

                        @endauth
                        @guest()
                            <a class="nav-link" href="{{route('personal.main.index')}}">Войти</a>
                        @endguest
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.index')}}">Категории</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
@yield('content')
<script src={{asset("assets/vendors/popper.js/popper.min.js")}}></script>
<script src={{asset("assets/vendors/bootstrap/dist/js/bootstrap.min.js")}}></script>
<script src={{asset("assets/vendors/aos/aos.js")}}></script>
<script src={{asset("assets/js/main.js")}}></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
