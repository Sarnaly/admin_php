<?php 
require("admin_dbcon.php");
session_start();
if(!isset($_SESSION['user_name'])){
	
}

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $f_name = $_POST["father_name"];
  $m_name = $_POST["mother_name"];
  $d_o_b = $_POST["date_of_birth"];
  $religion = $_POST["religion"];
  $gender = $_POST["gender"];
  $job_title = $_POST["job_title"];
  $blood_group = $_POST["blood_group"];
  $nid_bc = $_POST["nid_bc"];
  $coursetype = $_POST["coursetype"];
  $phone_number = $_POST["phone_number"];
  $guardian_number = $_POST["guardian_number"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $session = $_POST["session"];
  $course = $_POST["course_type"];
  $register_type = $_POST["register_type"];
  $total_fee = $_POST["total_fee"];
  date_default_timezone_set("Asia/Dhaka");
  $register_time = date("Y-m-d h:i:sa");

  $input_error = array();

  if(empty($name)){
    $input_error["name"] = " * student name is required";
  }
  if(empty($f_name)){
    $input_error["father_name"] = " * father name is required";
  }
  if(empty($m_name)){
    $input_error["mother_name"] = " * mother name is required";
  }
  if(empty($d_o_b)){
    $input_error["date_of_birth"] = " * date of birth  is required";
  }
  if(empty($religion)){
    $input_error["religion"] = " * religion is required";
  }
  if(empty($gender)){
    $input_error["gender"] = " * gender is required";
  }
  if(empty($job_title)){
    $input_error["job_title"] = " * Job title is required";
  }
  if(empty($blood_group)){
    $input_error["blood_group"] = " * blood group is required";
  }
  if(empty($coursetype)){
    $input_error["coursetype"] = " * course type  is required";
  }
  if(empty($nid_bc)){
    $input_error["nid_bc"] = " * Nid / Birth Certificate  is required";
  }
  if(empty($phone_number)){
    $input_error["phone_number"] = " * phone number  is required";
  }
  if(empty($guardian_number)){
    $input_error["guardian_number"] = " * guardian number  is required";
  }
  if(empty($email)){
    $input_error["email"] = " * email  is required";
  }
  if(empty($address)){
    $input_error["address"] = " * address  is required";
  }
  if(empty($session)){
    $input_error["session"] = " * session  is required";
  }
  if(empty($course)){
    $input_error["course_type"] = " * course ype  is required";
  }
  if(empty($register_type)){
    $input_error["register_type"] = " * register type  is required";
  }
  if(empty($total_fee)){
    $input_error["total_fee"] = " * total fee  is required";
  }

  if(count($input_error) == 0){
    $submit = mysqli_query($admin_dbcon , "INSERT INTO `student_admission`( `name`, `father name`, `mother name`, `date of birth`, `religion`, `gender`, `job title`, `blood group`, `nid/bc`, `coursetype`, `phone number`, `guardian number`, `email`, `address`, `session`, `course`, `register type`, `total fee`, `register time`, `status`) VALUES ('$name','$f_name','$m_name','$d_o_b','$religion','$gender','$job_title','$blood_group','$coursetype','$nid_bc','$phone_number','$guardian_number','$email','$address','$session','$course','$register_type','$total_fee','$register_time','Active')");
    if($submit){
      echo '
      <script>alert("Student Admission Successful");</script>
      ';
    }
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="admission_form_style.css"
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin_dashbord_style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.DataTable.min.css" media="all" />
    
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



</head>
<body>

<div class="dasboard">
<h1><i class="fa-solid fa-user-plus"></i>Admission <small>Statistics Overview</small></h1>

</div>

<div class="admission_form">
  <form action="" method="post">
    <!-- personal information  start -->
    <div class="personal_information common">
     <h3 class="title">Personal Information</h3>
       <div class="personal_information_row common_row">
       <div class="personal_information_col common_col">
        <div class="input_group">
         <label for="">Student Name <span>*</span></label>
         <input type="text" name="name" id="name">
         <span style="color: red; font-size:18px"><?php if(isset($input_error["name"])){
          echo $input_error["name"];
         }?></span>
        </div>
              <div class="input_group">
                <label for="">Father Name <span>*</span></label>
                <input type="text" name="father_name" id="father_name">
                <span style="color: red; font-size:18px"><?php if(isset($input_error["father_name"])){
          echo $input_error["father_name"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Mother Name <span>*</span></label>
                <input type="text" name="mother_name" id="mother_name">
                <span style="color: red; font-size:18px"><?php if(isset($input_error["mother_name"])){
          echo $input_error["mother_name"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Date Of Birth <span>*</span></label>
                <input type="date" name="date_of_birth" id="date_of_birth">
                <span style="color: red; font-size:18px"><?php if(isset($input_error["date_of_birth"])){
          echo $input_error["date_of_birth"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Religion <span>*</span></label>
                <select name="religion" id="religion">
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddh">Buddh</option>
                    <option value="Christian">Christian</option>
                </select>
                <span style="color: red; font-size:18px"><?php if(isset($input_error["religion"])){
          echo $input_error["religion"];
         }?></span>
              </div>
             </div>


             <div class="personal_information_col common_col">
             <div class="input_group">
                <label for="">Gender <span>*</span></label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <span style="color: red; font-size:18px"><?php if(isset($input_error["gender"])){
          echo $input_error["gender"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Job Title <span>*</span></label>
                <select name="job_title" id="job_title">
                    <option value="Student">Student</option>
                    <option value="Government Empolye">Government Empolye</option>
                    <option value="Private Empolye">Private Empolye</option>
                    <option value="Other">Other</option>
                </select>
                <span style="color: red; font-size:18px"><?php if(isset($input_error["job_title"])){
          echo $input_error["job_title"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Blood Group <span>*</span></label>
                <select name="blood_group" id="blood_group">
                    <option value="error">Select Blood Group</option>
                    <option value="Unknown">Unknown</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="B-">A+</option>
                    <option value="B-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                <span style="color: red; font-size:18px"><?php if(isset($input_error["blood_group"])){
          echo $input_error["blood_group"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Nid / Birth Certificate <span>*</span></label>
                <input type="text" name="nid_bc" id="nid_bc">
                <span style="color: red; font-size:18px"><?php  if(isset($input_error["nid_bc"])){
         echo $input_error["nid_bc"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Course Type <span>*</span></label>
                <select name="coursetype" id="coursetype">
                    <option value="Offline">Offline</option>
                    <option value="Online">Online</option>
                </select>
                <span style="color: red; font-size:18px"><?php if(isset($input_error["coursetype"])){
          echo $input_error["coursetype"];
         }?></span>
              </div>
             </div>
            </div>
        </div>
     <!-- personal information  end -->
     <!-- contact information start -->
     <div class="personal_information common">
            <h3 class="title">Contact Information</h3>
            <div class="personal_information_row common_row">
             <div class="personal_information_col common_col">
              <div class="input_group">
                <label for="">Phone Number <span>*</span></label>
                <input type="text" name="phone_number" id="phone_number">
                <span style="color: red; font-size:18px"><?php if(isset($input_error["phone_number"])){
          echo $input_error["phone_number"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Guardian Number <span>*</span></label>
                <input type="text" name="guardian_number" id="guardian_number">
                <span style="color: red; font-size:18px"><?php if(isset($input_error["guardian_number"])){
          echo $input_error["guardian_number"];
         }?></span>
              </div>
             </div>



            <div class="personal_information_col common_col">
              <div class="input_group">
                <label for="">Email <span>*</span></label>
                <input type="email" name="email" id="email">
                <span style="color: red; font-size:18px"><?php if(isset($input_error["email"])){
          echo $input_error["email"];
         }?></span>
              </div>
              <div class="input_group">
                <label for="">Address <span>*</span></label>
                <input type="text" name="address" id="address">
                <span style="color: red; font-size:18px"><?php if(isset($input_error["address"])){
          echo $input_error["address"];
         }?></span>
              </div>
             </div>
             </div>

            </div>
                 <!-- contact information end -->
                 <!-- course  information start -->
          <div class="personal_information common">
            <h3 class="title">Contact Information</h3>
            <div class="personal_information_row common_row">
             <div class="personal_information_col common_col">
             <div class="input_group">
                <label for="">Session <span>*</span></label>
                <select name="session" id="session">
                    <option value="January - March">January - March</option>
                    <option value="January - June">January - June</option>
                    <option value="June - Septembar">June - Septembar</option>
                    <option value="June - December">June - December</option>
                </select>
                <span style="color: red; font-size:18px"><?php if(isset($input_error["session"])){
          echo $input_error["session"];
        }?></span>
              </div>
              <div class="input_group">
                <label for="">Course <span>*</span></label>
                <select name="course_type" id="course_type">
                    <?php
						$course_data_select = mysqli_query($admin_dbcon, "SELECT * FROM `course`");
						while($course_fetch = mysqli_fetch_assoc($course_data_select )){
							
						?>
						<option value="<?=$course_fetch['course']?>"><?=$course_fetch['course']?></option>
						<?php
						}
						?>
						
						
                </select>
                <span style="color: red; font-size:18px"><?php  if(isset($input_error["course_type"])){
         echo $input_error["course_type"];
         }?></span>
              </div>
             </div>



            <div class="personal_information_col common_col">
            <div class="input_group">
                <label for="">Register Type <span>*</span></label>
                <select name="register_type" id="register_type">
                    <option value="Government">Government</option>
                    <option value="NO Register">NO Register</option>
                </select>
                <span style="color: red; font-size:18px"><?php if(isset($input_error["register_type"])){
          echo $input_error["register_type"];
        }?></span>
              </div>
              <div class="input_group">
                <label for="">Total Fee <span>*</span></label>
                <input type="text" name="total_fee" id="total_fee">
                <span style="color: red; font-size:18px"><?php if(isset($input_error["total_fee"])){
          echo $input_error["total_fee"];
         }?></span>
              </div>
             </div>
             </div>

            </div>

     <!-- course information end -->
        <div class="submit_btn" id="submit_btn">
		<button type="submit" value="Submit" name="submit" id="submit" class="btn btn-success">Submit</button>
          
        </div>
    </form>
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