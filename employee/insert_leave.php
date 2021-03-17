<?php
 
include 'dbcon.php';
include "session.php";
include "bootstrap_link.php";
include "dbcon.php";

  if(isset($_POST['apply_leave']))
  {

  echo $lf =$_POST['l_form'];
  echo $lt =$_POST['l_to'];
  echo $el =$_POST['e_leave'];
  echo $ml =$_POST['m_leave'];
  echo $cl =$_POST['c_leave'];
  echo $apply_by=$_POST['emp_id'];
  echo $status="pending";
    
    //foreach ($emp_list as $e) 
   	
    	$query="INSERT INTO apply_leave(l_form,l_to,e_leave,m_leave,c_leave,apply_by,status)VALUES('$lf','$lt','$el','$ml','$cl','$apply_by','$status')";
    	$done=mysqli_query($con,$query);
      	
 header('location:leave.php');
 }   
 
?>