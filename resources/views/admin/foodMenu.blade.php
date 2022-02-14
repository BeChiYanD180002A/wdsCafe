<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")


  	<div style="position: relative; top: 60px; right: -150px">
  		
  		<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

  			@csrf

  			
  			<div>
  				<label>Title</label>
  				<input style="color:blue;" type="text" name="title" placeholder="Write a title" required>
  			</div>

  			<div>
  				<label>Price</label>
  				<input style="color:blue;" type="num" name="price" placeholder="price" required>
  			</div>

  			<div>
  				<label>Image</label>
  				<input type="file" name="image"  required>
  			</div>
        &nbsp;
  			<div>
  				<input bgcolor="white" type="submit" value="Save" >
  			</div>


  		</form>     
      &nbsp;
      <div>
        
        <table bgcolor="#393837">
          <tr>
            <th style="padding: 30px">Food Name</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Image</th>
            <th style="padding: 30px">Action</th>
          <th style="padding: 30px">Action2</th>
            
          </tr>
          
          @foreach($data as $data)

          <tr align="center">
            
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>

            <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>

            <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
          @endforeach

        </table>

      </div>

  	</div>

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

</html>