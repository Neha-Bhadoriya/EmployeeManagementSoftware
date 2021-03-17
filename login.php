<?php 
session_start();
include "navbar.php";
include "dbcon.php";
include "bootstrap_link.php";

?>
<body style="background-image: url(img/26.jpg);">
	<br>
<i><h1 class="text-center display-4 text-white " 
style="background-color: #1b5a09;">EMPLOYEE MANAGEMENT SOFTWARE</h1></i>
<form action="" method="post">

<i><marquee class="lead text-white text-center  " 
style="background-color: #d7d7d7; font-size: 43px;position: relative;top: -10px;">".........FILL YOUR <b class="text-danger">LOGIN DETAILS</b> TO SEE YOUR FULL ACTIVITIES........."</i></marquee>
	<div class="container" >
		<div class="col-md-8" >

			<div class="card shadow" style="position: relative;
    top: -16px;height: 208px;">
			<div class="card-body" style="background-color: #c8bfb3;">
	<div class="form-group ">
		
		
		
	<input type="text" name="email" class="form-control" placeholder="Enter Email" >
</div>
	<div class="form-group">
	<input type="text" name="password" class="form-control" placeholder="Enter Password" >
</div>
	
	<input type="submit" class="btn btn-block btn-success" name="login" value="Login" >

</form>


</body>
</html>



<?php

include ('dbcon.php');
if (isset($_POST['login']))
{
	 $e=$_POST['email'];
	 $p=$_POST['password'];


$query="SELECT * FROM reg WHERE email='$e' && password='$p'";
$data=mysqli_query($con,$query);

$total=mysqli_num_rows($data);//in the form of 1 and 0
//echo $total;
$check=mysqli_fetch_array($data);
// echo $check['role'];

if($total==1)
{
$role=$check['role'];
if($role=='Admin')
{
	$_SESSION['emp_id']=$check['emp_id'];
	$_SESSION['emp_id']=$e;
	header('location:admin/admindashboard.php');
}
elseif($role=='Employee')
{
	$_SESSION['emp_id']=$check['emp_id'];
	$_SESSION['emp_id']=$e;
	header('location:employee/employeedashboard.php');
}

else
{
    echo "login failed";
}
}
}
?>










