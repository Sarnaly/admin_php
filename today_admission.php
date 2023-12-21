<?php
	include 'admin_dbcon.php';
	if(isset($_POST['register'])){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];
		$c_password=$_POST['c_password'];
        $input_error=array();
        if(empty($username)){
            $input_error['username']="Username is required";
        }
        if(empty($email)){
            $input_error['email']="Email is required";
        }
        if(empty($mobile)){
            $input_error['mobile']="Mobile is required";
        }
        if(empty($password)){
            $input_error['password']="Password is required";
        }
        if(empty($c_password)){
            $input_error['c_password']="Confirm Password is required";
        }
        if(count($input_error)==0){
            if(strlen($username)>=5){
                if(strlen($password)>=8 && strlen($c_password)>=8){
                        if($password==$c_password){
                                $user_check=mysqli_query($admin_dbcon,"SELECT * FROM `student_info` WHERE `username`='$username'");
                                if(mysqli_num_rows($user_check)==0){
                                    $email_check=mysqli_query($admin_dbcon,"SELECT * FROM `student_info` WHERE `email`='$email'");     
                                        if(mysqli_num_rows($email_check)==0){
											
                                                
                                                date_default_timezone_set("Asia/Dhaka");
                                                $reg_time=date('m-d-Y,h:i:s a');
												$insert_query=mysqli_query($admin_dbcon,"INSERT INTO `student_info`(`username`, `email`, `mobile`, `password`, `reg_time`, `status`) VALUES ('$username','$email','$mobile','$password','$reg_time','Inactive')");
												if($insert_query){
													echo '<script>
														alert("Successfully registered");
														window.location.href="reg.php";
													</script>
													';
													$username=false;
													$email=false;
													$mobile=false;
													$password=false;
												}
										 
                                                

                                        }else{
                                            $input_error['email_unique']="This email is already exit";
                                        }
                                }else{
                                    $input_error['username_unique']="This username is already exit";
                                }

                        }else{
                            $input_error['dont_match']="Confirm password do not match";
                        }



                }else{
                    $input_error['password_length']="Password field must be 8 character";
                }



            }else{
                $input_error['strlen']="Username must be 5 character";
            }


        }
      



		
	}



?>



<!DOCTYPE html>
<html lang="en">






<?php 
require("admin_dbcon.php");
Session_start();
if(!isset($_SESSION['user_name'])){
	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin_dashbord_style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.DataTable.min.css" media="all" />
    <title>Admin Dashboard</title>
</head>

<body>
       <div class="d-flex" id="wrapper"style="background:#f7eeee;">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper" >
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
              <img src="fcti-soft-brand-icon.png" alt="" style="width:120px;" >
            </div>
           
            <div class="list-group list-group-flush my-3">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <a href="admin_dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="color:crimson;"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                
						 <li class="nav-item dropdown" style="font-size:18px; text-align:center;">
						  <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-plus me-2"></i>Admission
                            </a>
							 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="nav-link" href="admission_form.php">Admission</a></li>
								<li><a class="nav-link" href="">Admission list</a></li>
                            </ul>
							
							</li>
							
							
							
						<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-chalkboard-teacher me-2"></i>Teachers</a>
                
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-users me-2"></i>Student</a>
               
                        <a href="today_admission.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-user me-2"></i>Student Account</a>
              
                       

					   <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fab fa-youtube me-2"></i>Playlist</a>
              
                        
						<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-user-plus me-2"></i>Visitor</a>
               
						
						
						
						<li class="nav-item dropdown" style="font-size:18px; margin-left:25px;">
						  <a class="nav-link dropdown-toggle second-text fw-bold" href="course.php" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="fas fa-plus me-2"></i>Course
                            </a>
							 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="nav-link" href="course.php">Course</a></li>
								<li><a class="nav-link" href="">Course list</a></li>
                            </ul>
							
							</li>
						
						
						<li class="nav-item dropdown" style="font-size:18px; margin-left:25px;">
						  <a class="nav-link dropdown-toggle second-text fw-bold" href="course.php" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-cog me-2"></i>Setting
                            </a>
							 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="nav-link" href="">Edit Profile</a></li>
								<li><a class="nav-link" href="">Password change</a></li>
								
                            </ul>
							
							</li>
						
						<a href="user_list.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-money-check-alt me-2"></i>User list</a>
			   
                        <a href="login.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                        <i class="fas fa-power-off me-2"></i>Logout</a>
					
                       
                           
                       
                    </ul>
						
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-5 me-3" id="menu-toggle" style="color:crimson;"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" style="color:crimson;" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2" style="color:crimson;"></i>Sarnaly
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="login.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>





	<h1 class="" style="color:crimson;  text-align:center;"><i class="fas fa-tachometer-alt"></i>Dashboard <small>Statistcss Overiew</small></h1>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
						<div class="row">
  <div class="col-sm-3">
    <div class="card"style="background:crimson; margin-bottom:8px;">
      <div class="card-body">
        <i class="fas fa-users" style="font-size:30px; color:#fff"></i>
	   <h1 class=""style="color:#fff;">499</h1>
        <p class="card-text"style="color:#fff;">All Students</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card"style="background:crimson;margin-bottom:8px;">
      <div class="card-body">
		 <i class="fas fa-users" style="font-size:30px; color:#fff"></i>
		<h1 class=""style="color:#fff;">493</h1>
        <p class="card-text"style="color:#fff;">Offline Students</p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card"style="background:crimson;margin-bottom:8px;">
      <div class="card-body">
         <i class="fas fa-users" style="font-size:30px; color:#fff"></i>
		<h1 class=""style="color:#fff;">6</h1>
        <p class="card-text"style="color:#fff;">Online Student</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card"style="background:crimson;margin-bottom:8px;">
      <div class="card-body">
        <i class="fas fa-users" style="font-size:30px; color:#fff"></i>
		<h1 class=""style="color:#fff;">499</h1>
        <p class="card-text"style="color:#fff;">Total Account</p>
        
      </div>
    </div>
  </div>
  
</div>
   </div>
	</div>
	
	
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	
	
  
   <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>


	<script type="text/javascript" src="js/jquery-3.7.1.js"></script>
	<script type="text/javascript" src="js/jquery.DataTable.min.js"></script>
  




<script type="text/javascript">

$(document).ready( function () {
    $('#myTable').DataTable();
} );


</script>
</body>
</html>