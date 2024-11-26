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
    <script src={{asset("assets/vendors/jquery/jquery.min.js")}}></script>
    <script src={{asset("assets/js/loader.js")}}></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1 class="edica-page-title" data-aos="fade-up"><i class="fa fa-video"></i></h1>

            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.main.index')}}"><i class="fa fa-home"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.user.index')}}"><i class="fa fa-users"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="blog.html">Blog Archive</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Post</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <a class="dropdown-item" href="404.html">404</a>
                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download</a>
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