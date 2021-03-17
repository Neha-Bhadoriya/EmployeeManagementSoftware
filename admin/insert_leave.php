<?php
include "session.php";
include 'dbcon.php';
include "bootstrap_link.php";
include "navbar_link.php";;

  if(isset($_POST['submit'])){

  echo $vf =$_POST['valid_form'];
  echo $vt =$_POST['valid_to'];
  echo $el =$_POST['e_leave'];
  echo $ml =$_POST['m_leave'];
  echo $cl =$_POST['c_leave'];
  echo $assign_by=$_POST['assign_by'];
    $emp_list=$_POST['emp'];
   print_r($emp_list);

    foreach ($emp_list as $e) {
   	
    	$query="INSERT INTO assign_leave(valid_form,valid_to,e_leave,m_leave,c_leave,assign_by,assign_to)VALUES('$vf','$vt','$el','$ml','$cl','$assign_by','$e')";
    	$done=mysqli_query($con,$query);
    }

    if($done) {
    	$_SESSION['task']="your data submitted";
    	header('location:leave.php');
    }
 
  
  }

?>