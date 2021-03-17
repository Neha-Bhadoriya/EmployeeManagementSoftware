<?php 
include "session.php";
include "navbar_link.php";
include "dbcon.php";
include "bootstrap_link.php";

?>
<body style="background-image: url(../img/28.jpg);">
<br><br><br><br><br>
	<div class="container" >
		<div class="col-md-8" >
 <div class="card shadow" style="position: relative;
    top: -16px;">
	<div class="card-body" style="background-color: #c8bfb3;">
	<div class="form-group ">
	<input type="text" name="name" class="form-control" placeholder="Enter Your Name" >
</div>
	
<div class="form-group ">
<input type="text" name="email" class="form-control" placeholder="Enter Your Email" >
</div>
<div class="form-group">
<input type="text" name="password" class="form-control" placeholder="Enter Your Password" >
</div>
<div class="form-group">
   <input type="file" name="image" class="form-control" placeholder="Enter Your Password" >
	</div>
	<div class="form-group">
	<select name="department" class="form-control">
		<option>--Select Department--</option>
		<option>CS</option>
		<option>ME</option>
		<option>EC</option>
		<option>CE</option>
		<option>IT</option>
	</select>
</div>
<div class="form-group">
	<select name="role" class="form-control">
		<option>---Select Role---</option>
		<option>Admin</option>
		<option>Employee</option>
		
	</select>
</div>
	
	<input type="submit" class="btn btn-block btn-success" name="submit" value="Register" >

</form>


</body>
</html>



