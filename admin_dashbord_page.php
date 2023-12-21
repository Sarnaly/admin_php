<?php
require_once 'admin_dbcon.php';
if(!isset($_SESSION['User_name'])){
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<div class="dasboard">
    <h1><i class="fa-solid fa-gauge"></i>Dashboard <small>Statistics Overview</small></h1>
    <div class="p-2" style="background:#f5f5f5;"><a href="admin_dashboard.php?page=admin_dashboard"><i class="fa-solid fa-gauge"></i>Dashboard</a></div>
</div>    
<?php 
$count = mysqli_query($admin_dbcon , "SELECT * FROM `student_admission`");
$count_rows = mysqli_num_rows($count);

?>
<div class="boxes">
    <div class="boxes_row">
        <div class="boxes_col">
            <div class="frist_div">
            <div class="icon">
            <i class="fa-solid fa-users"></i>
            </div>
            <div class="text">
                    <p class="number"><?php echo $count_rows;?></p> 
                   <p class="details">All Student</p>
            </div>
            </div>
            <div class="second_div">
                <div class="text_2">
                   <p>view all students</p>
                </div>
                <div class="icon_2">
                <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>


        <div class="boxes_col">
            <div class="frist_div">
            <div class="icon">
            <i class="fa-solid fa-users"></i>
            </div>
            <div class="text">
                    <p class="number">0</p> 
                   <p class="details">All Student</p>
            </div>
            </div>
            <div class="second_div">
                <div class="text_2">
                   <p>view all students</p>
                </div>
                <div class="icon_2">
                <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>


        <div class="boxes_col">
            <div class="frist_div">
            <div class="icon">
            <i class="fa-solid fa-users"></i>
            </div>
            <div class="text">
                    <p class="number">0</p> 
                   <p class="details">All Student</p>
            </div>
            </div>
            <div class="second_div">
                <div class="text_2">
                   <p>view all students</p>
                </div>
                <div class="icon_2">
                <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>


        <div class="boxes_col">
            <div class="frist_div">
            <div class="icon">
            <i class="fa-solid fa-users"></i>
            </div>
            <div class="text">
                    <p class="number">0</p> 
                   <p class="details">All Student</p>
            </div>
            </div>
            <div class="second_div">
                <div class="text_2">
                   <p>view all students</p>
                </div>
                <div class="icon_2">
                <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- table start -->
<div  id="table-container" style="margin:50px 0px; margin-top:30px;">
	  <table class="table table-striped">
		<thead style="background:#13A89E; color:white;  ">
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
		<tbody style="line-height: 50px;">
		<?php
		 while($data=mysqli_fetch_assoc($count)){
		 ?>
			<tr>
				<td class="td"><?php echo $data['id'];?></td>
				<td class="td"><?php echo $data['name'];?></td>
				<td class="td"><?php echo $data['father name'];?></td>
				<td class="td"><?php echo $data['phone number'];?></td>
                <td class="td"><?php echo $data['course'];?></td>
                <td class="td"><?php echo $data['session'];?></td>
                <td class="td"><?php echo $data['register time'];?></td>
                <td class="td"><img height="80px" width="80px" src=" images/avator.png" alt="" style="margin-bottom:10px; background:white;"></td>
                <td class="td"><ul><li style="border: none; padding: 0px 17px; background: #13A89E;color: white;font-size: 20px;"><div id="action" onclick="submenutwo()"><span>action</span> <div class="icon"><i style="text-align: right;" class="fa-solid fa-caret-down"></i></div></div>
                    <ul id="ul" style="display: none;">
                        <li style="border-bottom: 1px solid black;border-top: 1px solid black;background: #13A89E;text-align: center;"><a href="student_data_view.php?u_id=<?=base64_encode($data['id'])?>" style="text-decoration: none;color: white;">View</a></li>
                        <li style="border-bottom: 1px solid black;background: #13A89E;text-align: center;"><a href="student_data_delete.php?id=<?php echo $data['id']; ?>"  style="text-decoration: none;color: white;">Remove</a></li>
                    </ul>
                </li></ul>
                </td>
                <script>
                    function submenutwo() {
  var y = document.getElementById('ul');
  if (y.style.display === 'none') {
    y.style.display = 'block';
  } else {
    y.style.display = 'none';
  }
}
                </script>
                <style>
                    #action{
                        display: flex;
                        justify-content: space-between;
                        line-height: 45px;
                        text-decoration: none;
                        color: white;
                    }
                    #ul{
                        width: 147px;
                        margin-left: -47px;
                        padding-top: 10px;
                        margin-top: -5px;
                        position: absolute;
                        margin-right:0px;
                    }
                </style>
			</tr>
			<?php }?>
		</thead>
	  </table>
   </div>
<!-- table end -->

<script src="js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
		$('.table').DataTable();
  });
  </script>
</body>
</html>