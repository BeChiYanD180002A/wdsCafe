     <!-- ***** Menu ***** -->
    <section class="section" id="menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-heading">
                                <h2>Our Menu</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item-carousel">
                    <div class="col-lg-2"style="margin-left: auto; margin-right: auto; width:200; height:200;">
                        <div class="owl-menu-item owl-carousel">

                        @foreach($data as $data)

                        <form action="{{url('/addcart',$data->id)}}" method="post">

                            @csrf

                            <div class="item">
                            
                <div style="background-image: url('/foodimage/{{$data->image}}');  margin-left: auto; margin-right: auto;" class='card'>
        
                            <div class="price" style="color:red"><h6>{{$data->price}}</h6></div>
                                    <div class='info'>
                                    <h1 class='title' style="color:#F7B169">{{$data->title}}</h1>
                                    </div>
                                
                                <input type="number" name="quantity" min="1" value="1" style="width: 80px;">
                                <button class="btn btn-primary" type="submit">Add Cart</button>
                                                            
                            </div>

                            </form>

                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            &nbsp;