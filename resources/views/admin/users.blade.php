<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   
  <!--<title>Admin Information</title>-->
   @include("admin.admincss")
   
  </head>
  <body>
    
    <div class="container-scroller">
     
  	@include("admin.navbar")

  	<div style="position: relative; top: 50px; right: -150px " >
  		<table bgcolor="#393837" border="5px" >
  			
  			<tr>
  				<th style="padding: 80px">User Name</th>
  				<th style="padding: 80px">Email</th>
  				<th style="padding: 80px">Action</th>
  			</tr>

  			@foreach($data as $data)
  			<tr align="center">
  				<td>{{$data->name}}</td>
  				<td>{{$data->email}}</td>

  				@if($data->usertype=="0")
  				<td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
  				@else
  				<td><a >Not Allowed!</a></td>

  				@endif

			</tr>

  			@endforeach

  		</table>

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
