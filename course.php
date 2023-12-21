<?php 
require("admin_dbcon.php");
session_start();
if(!isset($_SESSION['user_name'])){
	
} 
if(isset($_POST['submit'])){
$course=$_POST['course'];



$insert = mysqli_query($admin_dbcon, "INSERT INTO `course`(`course`) VALUES ('$course')");

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
		
	
							
							
							
							
							
							

    <form method="POST">
<input type="text" placeholder="course" name="course">
<input type="submit" name="submit" >
    </form>

	
	
	
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
