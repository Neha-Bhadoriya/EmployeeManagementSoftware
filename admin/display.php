<?php
include "session.php";
include "dbcon.php";
include "navbar_link.php";
include "bootstrap_link.php";

?>
<body style="background-color: #0e4642;">
	
<table class="table table-bordered" style="position: relative;
    top: 150px;">
    <center><i><h1 class="text-white" style="position: relative;top: 110px">All Employees Profile</h1></i></center>
	<tr class="text-white">
		<th>S.no</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Department</th>
		<th>Role</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
	<?php
	include "dbcon.php";

if(isset($_POST['imageupdate']))
{
	 $id=$_POST['emp_id'];       
	 $filename=$_FILES['image'] ['name'];
     $tempname=$_FILES['image'] ['tmp_name'];
     $file="upload/".$filename;
     move_uploaded_file($tempname,$file);
     $data="UPDATE reg set image='$file' where emp_id=$id";
     mysqli_query($con,$data);

// //if($fire)echo "we got the data.";
     
}



?>
	<?php
	include "dbcon.php";
	$i=1;
	$d="select * from reg where role='Employee' order by emp_id desc";
	$q=mysqli_query($con,$d);
	while($result=mysqli_fetch_array($q)){
		?>
		<tr class="text-white">
			<td><?php echo $i++;?></td>
			<td><?php echo $result['name'];?></td>
			<td><?php echo $result['email'];?></td>
			<td><?php echo $result['password'];?></td>
			<td><?php echo $result['department'];?></td>
			<td><?php echo $result['role'];?></td>
			<td><img src="<?php echo $result['image'];?>" width="200px" height="80px">

    <form method="post" action="" enctype="multipart/form-data">
	<input type="hidden" name="emp_id" value="<?php echo $result['emp_id']?>">
	<input type="file" name="image"><br>
	<input type="submit" name="imageupdate" value="image update">
	


</form>


			</td>
			<td>
                <a href="view.php?emp_id=<?php echo $result['emp_id'];?>">View</a>
				<a href="edit.php?emp_id=<?php echo $result['emp_id'];?>">Edit</a>
				<a href="delete.php?emp_id=<?php echo $result['emp_id'];?>">Delete</a>
			</td>
		
		<?php
	}
	?>
</table>
</body>
</html>