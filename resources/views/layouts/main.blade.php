<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Главная</title>
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/all.min.css">
    <link href="assets/vendors/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header edica-landing-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg" alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.main.index')}}"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.user.index')}}"><i class="fa fa-user"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-video"></i></a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="{{route('main.video')}}"><i class="fa fa-video">  </i>    Личные видео</a>
                            <a class="dropdown-item" href="blog-single.html"><i class="fa fa-video">  </i>    Видеолор</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        @auth()
                            <a class="nav-link" href="{{route('personal.main.index')}}">Личный кабинет</a>

                        @endauth
                        @guest()
                            <a class="nav-link" href="{{route('personal.main.index')}}">Войти</a>
                        @endguest
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
        <div class="edica-landing-header-content">
            <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="0" class="active">.01</li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="1">.02</li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="2">.03</li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1 >Get Started Power social proof for your brands.</h1>
                                <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement.</p>
                                <div class="carousel-content-btns">
                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>
                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i>  Google Play</a>
                                </div>
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="assets/images/Slider_1.png" alt="carousel-img" class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1>Get Started Power social proof for your brands.</h1>
                                <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement.</p>
                                <div class="carousel-content-btns">
                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>
                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google Play</a>
                                </div>
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="assets/images/Slider_1.png" alt="carousel-img" class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1>Get Started Power social proof for your brands.</h1>
                                <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement.</p>
                                <div class="carousel-content-btns">
                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>
                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google Play</a>
                                </div>
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="assets/images/Slider_1.png" alt="carousel-img" class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<script src="assets/vendors/popper.js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendors/aos/aos.js"></script>
<script src="assets/js/main.js"></script>
<script>
    AOS.init({
        duration: 2000
    });
</script>
</body>
</html>
