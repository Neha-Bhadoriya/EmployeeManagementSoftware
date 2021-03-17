<?php
include "session.php";
include "dbcon.php";
 $n=$_POST['name'];
 $e=$_POST['email'];
 $p=$_POST['password'];
 $d=$_POST['department'];
 $r=$_POST['role'];

$filename=$_FILES['image'] ['name'];
$tempname=$_FILES['image'] ['tmp_name'];
$file="upload/".$filename;
move_uploaded_file($tempname,$file);

// echo "<img src='$file' height='100' width='100' />";

$q="INSERT INTO reg(name,email,password,department,role,image) 
VALUES('$n','$e','$p','$d','$r','$file')";
mysqli_query($con,$q);
header('location:registration.php')



?>