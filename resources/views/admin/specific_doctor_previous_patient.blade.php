

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



    <!-- Other meta tags and stylesheets -->
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
  padding-right: 20px;
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

	<title>Doctor Panel</title>
</head>
<body>


<!-- Move the updateStatus function outside the PHP code -->




	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">DoctorPanel</span>
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
				<a href="{{route('doctor.dashboard')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{route('doctor.dashboard')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Doctor</span>
				</a>
			</li>
			<li>
				<a href="{{route('doctor.previous_patient')}}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Patient</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="{{route('doctor.logout')}}" class="logout">
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
							<a href="doctor_dashboard_design.php">Dashboard</a>
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



<h2 class="centered-heading" >Dr.<span>{{session('doctor')}}</span>'s : Previous Patient Info</h2>
           

           
    
      <div class="table_container">
        
        <table class="table">
          <thead>
            <tr style="background-color: #a691ad; text-align:center">
              <th>ID</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Specialist</th>
              <th>Date</th>
              
              
              
            </tr>
          </thead>
          <tbody>

            @php
            $col = 1;
        @endphp

            @foreach ($previous_patients as $record)

            @php
            $col = $col + 1;
        @endphp

    @if ($col % 2 == 1)    
          <tr id="{{$record->id}}" style="background-color: #e4d0e8; text-align: center;">
            <td>{{ $record->id }}</td>
            <td>{{ $record->patient_name }}</td>
            <td>{{ $record->number }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->gender }}</td>
            <td>{{ $record->specialist }}</td>
            <td>{{ $record->date }}</td>

          </tr>
    @else

    <tr id="{{$record->id}}" style="background-color: #e6effd; text-align: center;">
      <td>{{ $record->id }}</td>
      <td>{{ $record->patient_name }}</td>
      <td>{{ $record->number }}</td>
      <td>{{ $record->email }}</td>
      <td>{{ $record->gender }}</td>
      <td>{{ $record->specialist }}</td>
      <td>{{ $record->date }}</td>

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
	

	<script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>