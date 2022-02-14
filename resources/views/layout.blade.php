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
                                    <div class="hidden top-0 right-0 px-6 py-4 sm:block float-right">
                                        @auth
                                            <x-app-layout>

                                            </x-app-layout>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" >Log in</a>
                                            &nbsp;
                                            &nbsp;

                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" >Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                </div>
            </div>
        </nav>
