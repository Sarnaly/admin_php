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
                        <a href="admin_dashbord.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="color:crimson;"><i
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
								<li><a class="nav-link" href="change_password.php">Password change</a></li>
								
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

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">499</h3>
                                <p class="" style="font-size:17px;">All Student</p>
                            </div>
                            <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3" style="color:crimson; background:#f7eeee;"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">493</h3>
                                <p class="">Offline Student</p>
                            </div>
                            <i
                                class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"style="color:crimson; background:#f7eeee;"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">6</h3>
                                <p class="">Online Student</p>
                            </div>
                            <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3" style="color:crimson; background:#f7eeee;"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">499</h3>
                                <p class="">Total Account</p>
                            </div>
                            <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"style="color:crimson; background:#f7eeee;"></i>
                        </div>
                    </div>
                </div>

<?php 
require("admin_dbcon.php");



?>

<div class="dasboard">
   
	<div class="row my-5">
                    <h3 class="fs-4 mb-3">Dashboard <small>Statistics Overview</small></h3>
                    <div class="col">
                        
    <div class="p-2" style="background:#f5f5f5;"><a href="admin_dashbord.php?page=user_list">User List</a></div>
</div>
<div class="user_list">
<table id="myTable" class="table bg-white rounded shadow-sm  table-hover">
    <thead>
        <tr>
           <th class="th">ID</th>
				<th class="th">Name</th>
				<th class="th">Father Name</th>
				<th class="th">Phone Number</th>
				<th class="th">Course</th>
				<th class="th">Session</th>
                <th class="th">Registration Time</th>
                <th class="th">Photo</th>
                <th class="th">Action</th>
        </tr>
    </thead>
    <tbody>
      
    <?php
      $select=mysqli_query($admin_dbcon, "SELECT * FROM `student_admission`");
      while($rows=mysqli_fetch_assoc($select)){
    ?>
            <tr>
                <td><?php echo $rows['id'] ?></td>
                <td><?=$rows['name']?></td>
                <td><?=$rows['father name']?></td>
                <td><?=$rows['phone number']?></td>
                <td><?=$rows['course']?></td>
                <td><?=$rows['session']?></td>
                <td><?=$rows['register time']?></td>
                <td class="td"><img height="80px" width="80px" src=" img/j.webp" alt="" style="margin-bottom:10px; background:white;"></td>
                
             
                
               
                <td>
		
			<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" style="color:#076539" href="profile_view.php?u_id=<?=base64_encode($rows['id'])?>">View</a></li>
    <li><a class="dropdown-item" style="color:blue" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$rows['id'];?>">Edit</a></li>
   <li><a class="dropdown-item" style="color:red" onclick="return confirm('Are you sure delete this data!')" target="_blank"href="delete.php?&u_del_id=<?=base64_encode($rows['id'])?>">Delete</a></li>
   
   
	
	
  </ul>
</div>
				
             
                
				
				
				 <!-- edit section start -->
<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$rows['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User update form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
	  <form action="update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="row">
        <div class="col">
            <div class="input-group mb-2">
                <input type="hidden" class="form-control" name="u_id" id="u_id" value="<?=$rows['id']?>">
                <input type="text" placeholder="name" class="form-control" name="name" id="name" value="<?=$rows['name']?>">
            </div>
            <div class="input-group mb-2">
                <input type="text" placeholder="father name" class="form-control" name="father name" id="father name" value="<?=$rows['father name']?>">
            </div>
			
            <div class="input-group mb-2">
                <input type="text" placeholder="phone number" class="form-control" name="phone number" id="phone number" value="<?=$rows['phone number']?>">
            </div>
			
			 <div class="input-group mb-2">
                <input type="text" placeholder="course" class="form-control" name="course" id="course" value="<?=$rows['course']?>">
            </div>
			 <div class="input-group mb-2">
                <input type="text" placeholder="session" class="form-control" name="session" id="session" value="<?=$rows['session']?>">
            </div>
			 
			 <div class="input-group mb-2">
                <input type="text" placeholder="register time" class="form-control" name="register time" id="register time" value="<?=$rows['register time']?>">
            </div>
			 
        </div>
      </div>
      </div>
	  
	  
	  
				
	  
	  
	  
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" name="update" class="btn btn-primary" value="Update">
      </div>
	  </form>
    </div>
  </div>
</div>

            <!-- edit section end -->
				
				
				
				
				
				
</td>
                
           
				
		   </tr>
    <?php
      }
    ?>
    </tbody>
</table>
</div>
           

			
            </div>
        </div>

    </div>
	</div>






<!-- /#page-content-wrapper -->

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
















 