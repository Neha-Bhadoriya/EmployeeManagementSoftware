<?php
include "session.php";
include "dbcon.php";
include "navbar_link.php";
include "bootstrap_link.php";

if (isset($_GET['emp_id']))
{
$id =$_GET['emp_id'];
$query ="select * From reg where emp_id=$id";
$fire =mysqli_query($con,$query);

// //if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
// echo $user['username'];

}
?>

<body style="background-color: #efebe6;">
	<br><br><br><br><br>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-5">
	<div class="card shadow">
		
		<div class="card-body" style="background-color: #c7e4fe;">
	<i><h2>Name-><?php echo $user['name'] ?></h2>
	<h2>Email-><?php echo $user['email'] ?></h2>
	<h2>password-><?php echo $user['password'] ?></h2>
	<h2>Department-><?php echo $user['department'] ?></h2>
	<h2>Role-><?php echo $user['role'] ?></h2>
	<h2>Image-><img src="<?php echo $user['image'];?>" width="200px" height="100px">
	</h2></i>

</div><!-- <6> -->
</div><!-- <card shadow> -->
</div><!-- <card body> -->

<div class="col-md-6">
	<img src="../img/14.gif" style="width: 100%">
</div><!-- <6> -->

</div><!-- <row> -->
</div><!-- <conatiner> -->


</body>
</html>