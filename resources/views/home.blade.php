<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
        <header class="fixed-top" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f0f0f0;">
                <div class="container-fluid">
                    <a class="navbar-brand font" href="#">AtmaTech</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto d-lg-flex flex-lg-row flex column align-items-center">
                            <li class="nav-item">
                                <a class="nav-link fw-bold border-bottom border-dark font" href="{{ url('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font" href="{{url('profile')}}">Profile</a>
                            </li>
                            <li class="nav-item dropdown" aria-labelledby="iconDropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i id="iconDropdown" class="bi bi-brightness-high-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" data-icon="bi bi-brightness-high-fill"><i class="bi bi-brightness-high-fill"></i></a></li>
                                    <li><a class="dropdown-item" href="#" data-icon="bi bi-moon-fill"><i class="bi bi-moon-fill"></i></a></li>
                                    <li><a class="dropdown-item" href="#" data-icon="bi bi-gear-fill"><i class="bi bi-gear-fill"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div id="carouselIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{asset('images/test.jpg')}}" class="d-block w-100" alt="test">
                </div>
                <div class="carousel-item">
                <img src="{{asset('images/test2.jpg')}}" class="d-block w-100" alt="test 2">
                </div>
                <div class="carousel-item">
                <img src="{{asset('images/test3.jpg')}}" class="d-block w-100" alt="test 3">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

            <div class="card w-25 mx-auto">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <a href="https://www.instagram.com/petrus_juan/"><i class="bi bi-instagram icon"></i></a>
                        <a href="https://www.youtube.com/@petrusjuan2924/videos"><i class="bi bi-youtube icon"></i></a>
                        <a href="https://github.com/Anjuu2"><i class="bi bi-github icon"></i></a>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="script.js"></script>
</html>