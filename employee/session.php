<?php 
session_start();
if(empty($_SESSION['emp_id']))
{
header("location:../index.php");
}
?>