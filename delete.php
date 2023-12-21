<?php
require("admin_dbcon.php");
session_start();
if(!isset($_SESSION['user_login'])){
    header("location:login.php");
}

$u_id=base64_decode($_GET['u_del_id']);
$delete_query=mysqli_query($admin_dbcon,"DELETE FROM `student_info` WHERE `id` ='$u_id'");
if($delete_query){
    echo'
     <script>
		alert("Successfully Deleted");
		window.location.href="admin_dashbord.php?page=user_list";
    </script>
    '
	;
}

?>

