


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



	<!-- Your custom CSS and other scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Your custom CSS and other scripts -->

    <script src = 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
        </script>
	


    <style>
    /* Custom CSS */
    body {
      font-family: Arial, sans-serif;
    }

    #content {
      padding: 20px;
    }

    .admin-info {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .table-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
   
    table {
       width: 80%;
      border-collapse: collapse;
      

        margin: 0 auto;
     
    }

    table th,
    table td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    .btn-remove {
      padding: 5px 10px;
      font-size: 14px;
      background-color: #dc3545;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .btn-remove:hover {
      background-color: #c82333;
    }

    .admin-info-right{
      background-color: #f8f9fa;
      padding: 10px;
      border-radius: 5px;
    }

    .form-group {
     
      margin-bottom: 20px;
      
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="password"],
    .form-group input[type="file"] {
      width: 80%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .btn-submit {
      padding: 10px 20px;
      font-size: 14px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
      text-align: center;
    }

    .btn-submit:hover {
      background-color: #0069d9;
    }

    .centered-heading {
  text-align: center;
  margin: 20px;
  font-weight: 600;
  font-size: 35px;
}

.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 40vh;
}

form {
  width: 66.67%; /* 2/3 of the container width */
}

.separator{
    margin-top: 60px;

}

.action-btn {
    padding: 4px 8px; /* Adjust the padding values as needed */
    margin-right: 10px; /* Adjust the margin-right value to create the desired gap */
}



  </style>

	<title>Job Request Panel</title>
</head>
<body>


<!-- Move the updateStatus function outside the PHP code -->
{{-- <script type="text/javascript">

  function updateStatus(id,status){
    
    $(document).ready(function(){

 //     var csrfToken = $('meta[name="csrf-token"]').attr('content');

    //  alert(id);
 //     document.getElementById(id).style.display="none";


      if(confirm("Are you sure to do this")){

                        $.ajax({

                  url: '/admin_dashboard/job_request/'+id+'/'+status,
                  type:'DELETE',
                  // headers: {
                  //                 'X-CSRF-TOKEN': csrfToken
                  //             },
                  // data:{
                  //   id:id,
                  //   status:status
                  // },

                  success:function(response){

                  if(response){
                    alert("Successfully "+ status);
                    document.getElementById(id).style.display="none";
                  }

                  else{
                    alert("Successfully "+ status);
                    document.getElementById(id).style.display="none";
                  }
                  }
                  });
                        }

     
    }
  )};
</script>

 --}}



<script type="text/javascript">
  function updateStatus(id, status) {
      if (confirm("Are you sure you want to do this?")) {
          $.ajax({
              url: '/update_status/' + id + '/' + status,
              type: 'POST',
              dataType: 'json',
              data: {
                  _token: '{{ csrf_token() }}'
              },
              success: function(response) {
                  if (response.success) {
                      alert("Successfully updated status to " + status);
                      $('#' + id).remove();
                  } else {
                      alert("Failed to update status");
                  }
              },
              error: function(xhr, status, error) {
                  console.log(error);
                  alert("An error occurred while updating the status");
              }
          });
      }
  }
</script>




	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminPanel</span>
		</a>

        <div class="brand">

        <i class="fas fa-user"></i>
            

               
            <!-- //    $admin_name=$_SESSION['admin']; -->

            <!-- //     echo ' -->
            <!-- //         <span class="text">'.$admin_name.'</span> -->
                <!-- // ' -->
    

        </div>

        
        <ul class="side-menu top">
          <li class="active">
            <a href="{{route('admin.dashboard.count')}}">
              <i class='bx bxs-dashboard' ></i>
              <span class="text">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.dashboard.doctor')}}">
              <i class='bx bxs-shopping-bag-alt' ></i>
              <span class="text">Doctor</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.previous_patient.info')}}">
              <i class='bx bxs-doughnut-chart' ></i>
              <span class="text">Patient</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.appointment_list.info')}}">
              <i class='bx bxs-message-dots' ></i>
              <span class="text">Appoinment</span>
            </a>
          </li>
          
        </ul>
		<ul class="side-menu">
			{{-- <li>
				<a href="admin_profile.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Admin Profile</span>
				</a>
			</li> --}}
			<li>
				<a href="{{route('admin.logout')}}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		{{-- <nav>
           

			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
        <img src="{{asset('admin_img/galib_fb.jpg')}}" alt="">;
			</a>
		</nav> --}}
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="admin_dashboard_design.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>



            <!-- Admin Info from here -->

<!-- ...your HTML code... -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
function updateStatus(id, status) {
    // AJAX request
    $.ajax({
        url: 'update_status.php',
        method: 'POST',
        data: { id: id, status: status },
        success: function(response) {
            if (response.status === 'success') {
                // Wait for 500 milliseconds before removing the row
                setTimeout(function() {
                    var row = $('#row-' + id);
                    row.remove();
                    alert('Status updated successfully');
                }, 500);
            } else {
                alert('Failed to update status');
            }
        },
        error: function() {
            alert('Error occurred while updating status');
        }
    });
}
</script> -->

<!-- ...rest of your HTML code... -->



            

            <h2 class="centered-heading" >JOB REQUEST INFO</h2>

           
    
      <div class="table_container">
        
        <table class="table">
          <thead>
            <tr style="background-color: #d5a3a3; text-align:center">
              <th>ID</th>
              <th>Username</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Coutry</th>
              <th>Date</th>
              <th>Action</th>
              
            </tr>
          </thead>
          <tbody>

             {{-- Define the button colors based on the action status --}}

             @php
               
               $approveColor =  'green';
               $rejectColor = 'red' ;
               $col=1;
             @endphp
            

            @foreach($doctors as $doctor)

            @php
              $col=$col+1;
            @endphp

@if ($col % 2 == 1)
            <tr id="{{$doctor->id}}" style="background-color: #88b0c8; text-align: center;">
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->username }}</td>
                <td>{{ $doctor->number }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->gender }}</td>
                <td>{{ $doctor->country }}</td>
                <td>{{ $doctor->date }}</td>
                <td>
                    <button class="action-btn" style="background-color: {{ $approveColor }}" onclick="updateStatus({{ $doctor->id }}, 'Approve')">Approve</button>
                    <button class="action-btn" style="background-color: {{ $rejectColor }}" onclick="updateStatus({{ $doctor->id }}, 'Reject')">Reject</button>
                </td>
            </tr>


            @else

            <tr id="{{$doctor->id}}" style="background-color:  #e6effd; text-align: center;">
              <td>{{ $doctor->id }}</td>
              <td>{{ $doctor->username }}</td>
              <td>{{ $doctor->number }}</td>
              <td>{{ $doctor->email }}</td>
              <td>{{ $doctor->gender }}</td>
              <td>{{ $doctor->country }}</td>
              <td>{{ $doctor->date }}</td>
              <td>
                  <button class="action-btn" style="background-color: {{ $approveColor }}" onclick="updateStatus({{ $doctor->id }}, 'Approve')">Approve</button>
                  <button class="action-btn" style="background-color: {{ $rejectColor }}" onclick="updateStatus({{ $doctor->id }}, 'Reject')">Reject</button>
              </td>
          </tr>


            @endif

            @endforeach
          
           
          </tbody>
        </table>
      </div>


   
 

  <div class="separator">

  </div>

  
  



	
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="{{asset('js/admin_script.js')}}"></script>
 

</body>
</html>