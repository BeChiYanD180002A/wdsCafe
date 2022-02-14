<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

  	<base href="/public">
   
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")

  	<div style="position: relative; top: 60px; right: -150px">
  		
  		<form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

  			@csrf

  			<div>
  				<label>Title</label>
  				<input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
  			</div>

  			<div>
  				<label>Price</label>
  				<input style="color:blue;" type="num" name="price" value="{{$data->price}}" required>
  			</div>

  			<div>
  				<label>old Image</label>
  				<img height="200" width="200" src="/foodimage/{{$data->image}}">
  			</div>


  			<div>
  				<label>New Image</label>
  				<input type="file" name="image"  >
  			</div>

  			<div>
  				
  				<input style="color: white" type="submit" value="Save" >

  			</div>

  		</form>

      <div>

  
  </div>

   @include("admin.adminscript")

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

  </body>
</html>