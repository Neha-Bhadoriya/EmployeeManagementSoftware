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
// if($fire)echo "ok";
$user = mysqli_fetch_assoc($fire);
// echo $user['name'];

}
?>
<?php
  
  if(isset($_POST['update'])){

      echo $n = $_POST['name'];
      echo $e = $_POST['email'];
      echo $p = $_POST['password'];
	  echo $d = $_POST['department'];
	  echo $r = $_POST['role'];

       $query ="UPDATE reg SET name = '$n',email = '$e',password='$p',department='$d',role='$r' where emp_id=$id";
       $fire = mysqli_query($con, $query);

      // //if($fire)echo "data updated successfully.";
      if($fire) header("Location:view.php");

  } 



?>

<body style="background-image: url(../img/255.jpeg);">
<br><br><br><br><br><br>
	
	<div class="container" >
		<div class="col-md-8" >
 <div class="card shadow" style="position: relative;
    top: -16px;">
	<div class="card-body" style="background-color: #c8bfb3;">
	<div class="form-group ">

	<input type="text" name="name" value="<?php echo $user['name']?>"  class="form-control" placeholder="Enter Your Name" >
</div>
	
<div class="form-group ">
<input type="text" name="email" value="<?php echo $user['email']?>" class="form-control" placeholder="Enter Your Email" >
</div>
<div class="form-group">
<input type="text" name="password" value="<?php echo $user['password']?>" class="form-control" placeholder="Enter Your Password" >
</div>

	<div class="form-group">
	<select name="department" value="<?php echo $user['department']?>" class="form-control">
		<option>--Select Department--</option>
			<option value="CS"
            <?php
           if($user["department"]=='CS')
            {
	       echo "selected";
             }
            ?>
           >CS</option>

           <option value="ME"
            <?php
           if($user["department"]=='ME')
            {
	       echo "selected";
             }
            ?>
           >ME</option>


           <option value="EC"
            <?php
           if($user["department"]=='EC')
            {
	       echo "selected";
             }
            ?>
           >EC</option>

           <option value="CE"
            <?php
           if($user["department"]=='CE')
            {
	       echo "selected";
             }
            ?>
           >CE</option>

           <option value="IT"
            <?php
           if($user["department"]=='IT')
            {
	       echo "selected";
             }
            ?>
           >IT</option>
		</select>
		
		
		


	
</div>
<div class="form-group">
	<select name="role" value="<?php echo $user['role']?>" class="form-control">
		<option>---Select Role---</option>
		<option value="Admin"
            <?php
           if($user["role"]=='Admin')
            {
	       echo "selected";
             }
            ?>
           >Admin</option>

           <option value="Employee"
            <?php
           if($user["role"]=='Employee')
            {
	       echo "selected";
             }
            ?>
           >Employee</option>
		</select>
		
		
	
</div>
	
	<input type="submit" class="btn btn-block btn-danger" name="update" value="Update Registeration" >

</form>


</body>
</html>

