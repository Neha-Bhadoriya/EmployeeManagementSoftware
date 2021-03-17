<?php
  include "session.php";
  include "dbcon.php";

if(isset($_POST['submit_task']))
{
	echo $m=$_POST['message'];
	$emp_list=$_POST['emp'];
	echo $assign_by=$_POST['assign_by'];
	print_r($emp_list);
	foreach ($emp_list as $e) 
	{
	
	$q="INSERT INTO task(task,assign_by,emp_id)VALUES('$m','$assign_by','$e')";
	$done=mysqli_query($con,$q);
	header('location:task.php');	
	
	}
}


?>