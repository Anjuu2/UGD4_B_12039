<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>

    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                                <a class="nav-link font" href="{{ url('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold border-bottom border-dark font" href="{{url('profile')}}">Profile</a>
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
            <h2 class="text-center font">My Profile</h2>
        </header>
        <main class="d-flex justify-content-center align-items-center pt-3" style="min-height: 100vh;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-3 mb-4">
                        <div class="card" style="height: 500px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="{{asset('images/profile3.jpg')}}" alt="Circle Image" class="rounded-circle circle-border" width="250" height="250">
                                <h4 class="card-title mt-2 font">{{$nama3}}</h4>
                                <p class="card-text font">{{$quote3}}</p>
                                <a href="{{ url('home')}}" class="btn btn-danger mt-auto align-self-end">Back To Homepage ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mb-4">
                        <div class="card" style="height: 500px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="{{asset('images/profile1.jpg')}}" alt="Circle Image" class="rounded-circle circle-border" width="250" height="250">
                                <h4 class="card-title mt-2 font">{{$nama1}}</h4>
                                <p class="card-text font">{{$quote1}}</p>
                                <a href="{{ url('home')}}" class="btn btn-danger mt-auto align-self-end">Back To Homepage ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mb-4">
                        <div class="card" style="height: 500px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="{{asset('images/profile2.jpg')}}" alt="Circle Image" class="rounded-circle circle-border" width="250" height="250">
                                <h4 class="card-title mt-2 font">{{$nama2}}</h4>
                                <p class="card-text font">{{$quote2}}</p>
                                <a href="{{ url('home')}}" class="btn btn-danger mt-auto align-self-end">Back To Homepage ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>