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

  	<div style="position: relative; top: 70px; right: -150;">

  		<table bgcolor="#393837" border="1px">
  			
  			<tr>
  				<th style="padding: 30px;">Name</th>
  				<th style="padding: 30px;">email</th>
  				<th style="padding: 30px;">phone</th>
  				<th style="padding: 30px;">date</th>
  				<th style="padding: 30px;">time</th>
  				<th style="padding: 30px;">Message</th>				

  			</tr>

  			@foreach($data as $data)

  			<tr align="center">

  				<td>{{$data->name}}</td>
  				<td>{{$data->email}}</td>
  				<td>{{$data->phone}}</td>
  				<td>{{$data->date}}</td>
  				<td>{{$data->time}}</td>
  				<td>{{$data->message}}</td>
  				
  			</tr>

  			@endforeach

  		</table>

  	</div>
  
  </div>

   @include("admin.adminscript")

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