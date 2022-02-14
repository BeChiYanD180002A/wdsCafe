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
    @include("layout")

    <div  id="top" style="overflow-x: hidden;">

        <table align="center" bgcolor="grey">   	

            <tr>
                <th style="padding: 50px;">Food Name</th>
                <th style="padding: 50px;">Price</th>
                <th style="padding: 50px;">Quantity</th>
                <th style="padding: 50px;">Action</th>
                
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
                <td>
                <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                {{$data->quantity}}</td>
            
            </tr>

    @endforeach

            @foreach($data2 as $data2)


                <tr style="position: relative; top: -50px; left:472px;" align="center">

                <td>
                    <a class="btn btn-warning" href="{{url('/remove',$data2->id)}}" >Delete</a>
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

    </div>

        <script type="text/javascript">
            
            $("#order").click(

                function()
                {
                    $("#appear").show();

                }
                );

            $("#close").click(

                function()
                {
                    $("#appear").hide();

                }
                );

        </script>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    &nbsp;

    @include("footer")

  </body>
</html>