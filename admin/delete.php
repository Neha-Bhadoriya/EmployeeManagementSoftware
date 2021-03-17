<?php
include "session.php";
include('dbcon.php');
$id=$_GET['emp_id'];
$q="DELETE FROM reg WHERE emp_id=$id";
mysqli_query($con,$q);
header('location:view.php');
?>