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
                        <li class="nav-item"><a class="nav-link" href="{{ url('/menu') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/reservation') }}">Table Reservation</a></li>
                        &nbsp;
                        <li class="scroll-to-section"  style="background-color: #F9A43F;">
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

        <div  id="top" style="overflow-x: hidden;">

        <table align="center" bgcolor="grey">          

            <tr>
                <th style="padding: 30px;">Food Name</th>
                <th style="padding: 30px;">Price</th>
                <th style="padding: 30px;">Quantity</th>
                <th style="padding: 30px;">Action</th>
                
            </tr>

    <form action="{{url('orderconfirm')}}" method="POST" >

    @csrf

    @foreach($data as $data)

            <tr align="center">

                <td>
                
                <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                    {{$data->title}}
                </td>

                <td>

                    <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                    {{$data->price}}

                </td>

                <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                
                <td>{{$data->quantity}}</td>
           
            </tr>

    @endforeach

            @foreach($data2 as $data2)

                <tr style="position: relative; top: -80px; left:360px;">

                <td>
                    <a class="btn btn-warning" href="{{url('/remove',$data2->id)}}" >Remove</a>
                </td>

                </tr>

            @endforeach

    </table>

    <div align="center" style="padding: 10px;">
        
    <button class="btn btn-primary" type="button" id="order">Order Now</button>

    </div>

    <div id="appear" align="center" style="padding: 10px; display: none;">

        <div style="padding: 10px;">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div style="padding: 10px;">
            <label>Phone</label>
            <input type="number" name="phone" placeholder="Phone Number">
        </div>
        
        <div style="padding: 10px;">
            <label>Address</label>
            <input type="text" name="address" placeholder="Address">
        </div>

        <div style="padding: 10px;">
        
            <input class="btn btn-success" type="submit" value="Order Confirm">

            <button id="close" type="button" class="btn btn-danger">Close</button>
        </div>
        
    </div>

    </form>

<!-- Footer-->
  &nbsp;
    <footer class="py-5 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; WDS Cafe 2022</p></div>
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
    </body>
</html>
