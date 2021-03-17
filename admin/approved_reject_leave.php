<!--update(approved) status--->
 <?php
  include "dbcon.php";
  if(isset($_POST['approved']))
  {
     $s= "Approved";
     $c=$_POST['comment'];
     $id=$_POST['a_id'];
     $q="update apply_leave set status='$s',comment='$c' where a_id=$id";
    $f=mysqli_query($con,$q);
    if($f){
    	header('location:all_apply_leave.php');
    }
  }
?>
<!--update(approved) status--->
 <?php
  include "dbcon.php";
  if(isset($_POST['rejected'])){
    $s= "Rejected";
    $c=$_POST['comment'];
    $id=$_POST['a_id'];
    $q="update apply_leave set status='$s',comment='$c' where a_id=$id";
    $f=mysqli_query($con,$q);
    if($f){
    	header('location:all_apply_leave.php');
    }
  }
?>