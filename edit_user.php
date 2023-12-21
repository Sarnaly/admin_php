<?php
require("admin_dbcon.php");
$user_id=base64_decode($_GET['u_edit_id']);
$select_data=mysqli_query($admin_dbcon,"SELECT * FROM `student_adminssion` WHERE `id`='$user_id'");
$rows=mysqli_fetch_assoc($select_data);


if(isset($_POST['update'])){
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $status=$_POST['status'];

    $update_query=mysqli_query($admin_dbcon,"UPDATE `student_adminssion` SET `email`='$email',`mobile`='$mobile',`status`='$status' WHERE `id`='$user_id'");
    if($update_query){
        echo '
        <script>
        alert("Successfully Updated data");
        window.location.href="admin_dashbord.php?page=user_list";
        </script>
        ';
        $email=false;
        $mobile=false;
        $status=false;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Edit Data</title>
</head>
<body>
    <form method="post">
    <div class="container">
        <div class="row">
            <h1>User Edit form</h1>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 mb-2">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
            <input name="mobile" type="text" class="form-control" placeholder="Mobile" aria-label="Mobile" aria-describedby="basic-addon1" value="<?=$rows['mobile']?>">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
            <input name="email" type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="<?=$rows['email']?>">
            </div>
            <div class="input-group mb-3">
            
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt"></i></span>
            <input name="status" type="text" class="form-control" placeholder="Status" aria-label="status" aria-describedby="basic-addon1" value="<?=$rows['status']?>">
            </div>
            <input type="submit" class="btn btn-danger" name="update" value="Update">
            </div>
            
        </div>
    </div>



    </form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>