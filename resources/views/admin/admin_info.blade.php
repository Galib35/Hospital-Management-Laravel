

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
  font-size: 35px;
  font-weight: 600;
 
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


  </style>

	<title>Admin Panel</title>
</head>
<body>


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

            

            <h2 class="centered-heading" >ADMIN INFO</h2>

  
    
      <div class="table_container">
        
        <table class="table">
          <thead>
            <tr style="background-color: #d5a3a3; text-align:center">
              <th>ID</th>
              <th>Username</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @php
            $col = 1;
        @endphp
        
        @foreach ($admins as $admin)
            @php
                $col = $col + 1;
            @endphp
        
            @if ($col % 2 == 1)
                <tr style="background-color: #d1d9fa; text-align: center;">
                    <td>{{ $admin->id }}</td>
                    <td >{{ $admin->username }}</td>
                    <td >
                      <a href="{{ route('admin.info.delete', ['id' => $admin->id]) }}">
                          <button id="{{ $admin->id }}" class="btn btn-remove" name="remove">Remove</button>
                      </a>
                  </td>
                  
                </tr>
            @else
                <tr style="background-color: #e6effd; text-align: center;">
                    <td >{{ $admin->id }}</td>
                    <td >{{ $admin->username }}</td>
                    <td>
                      <a href="{{ route('admin.info.delete', ['id' => $admin->id]) }}">
                          <button id="{{ $admin->id }}" class="btn btn-remove" name="remove">Remove</button>
                      </a>
                  </td>
                  
                </tr>
            @endif
        @endforeach
        
         
            <!-- <tr>
              <td>1</td>
              <td>Admin1</td>
              <td>
                <button class="btn btn-remove">Remove</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Admin2</td>
              <td>
                <button class="btn btn-remove">Remove</button>
              </td>
            </tr> -->
          </tbody>
        </table>
      </div>
    
 

  <div class="separator">

  </div>

  
{{--   
  <h2 class="centered-heading">Add Admin</h2>

  
<div class="form-container">  
  <form action="{{ route('admin.info') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
      @csrf
      <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" class="form-control">
      </div>
      <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" class="form-control">
      </div>
      <div class="form-group">
          <label for="profile-picture">Profile Picture:</label>
          <input type="file" id="profile-picture" name="profile_picture" class="form-control">
      </div>
      <button type="submit" id="submit" class="btn btn-submit" name="add">Submit</button>
  </form>
</div>
 --}}


	
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="{{asset('js/admin_script.js')}}"></script>
</body>
</html>