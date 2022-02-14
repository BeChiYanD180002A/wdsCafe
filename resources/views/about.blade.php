<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>~Welcome to WDS Cafe~</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/home') }}">WDS Cafe</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/reservation') }}">Table Reservation</a></li>
                        &nbsp;
                        <li class="scroll-to-section"  style="background-color: #F9A43F">
                            @auth

                            <a href="{{url('/showcart',Auth::user()->id)}}">
                            
                                Cart{{$count}}

                            </a>

                                @endauth

                                @guest

                                Cart[0]

                                @endguest

                            </a>
                        </li> 
                        
                    </ul>
                        
                                @if (Route::has('login'))
                                    <div class="hidden top-0 right-0 px-6 py-4 sm:block" text-align="right">
                                        @auth
                                            <x-app-layout>

                                            </x-app-layout>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" text-align="right">Log in</a>
                                            &nbsp;
                                            &nbsp;

                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" text-align="right">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                </div>
            </div>
        </nav>

    <!-- About-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                        <h1>About Us</h1>
                            &nbsp;
                            <h2>We Leave A Delicious Memory For You</h2>
                            &nbsp;
                        </div>
                        <p>WDS Cafe is the best choose for you.Eating is one of life’s pleasures and pride, so is cooking and serving good food to others. We specialize in the preparation of quality food and serve them to satisfy the customer’s demands. Our motto is “Customers are our assets and satisfied customers are our source of wealth”. 
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/Burger.jpg" alt="" width="150" height="150">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/restaurant.jpg" alt="" width="150" height="150">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/food.jfif" alt="" width="150" height="150">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <p>Hope to see you~</p>
                            <a rel="nofollow" href="http://youtube.com">
                            <img src="assets/images/video-bg.jpg" alt="" width="500" height="500">
                            </a>
                            <p>Click on this picture to follow our Youtube channel~</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    &nbsp;
    &nbsp;
    <!-- Footer-->
    <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; WDS Cafe 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>