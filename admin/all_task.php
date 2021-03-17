<?php
include "session.php";
include "dbcon.php";
include "navbar_link.php";
include "bootstrap_link.php";

?>
<body style="background-color: #0e4642;">
	
<table class="table table-bordered" style="position: relative;
    top: 133px;">
    <center><i><h1 class="text-white" style="position: relative;top: 110px">All Task Of Employees</h1></i></center>
	<tr class="text-white">
		<th>S.no</th>
		<!-- <th>Employee Name</th> -->
		<th>Task</th>
		<th>Assign_by</th>
		<th>created_at</th>
		<th>Action</th>
	</tr>
	
	<?php
	include "dbcon.php";
	$i=1;
	$d="SELECT * from task";
	$q=mysqli_query($con,$d);
	while($result=mysqli_fetch_array($q)){
		?>
		<tr class="text-white">
			<td><?php echo $i++;?></td>
			
			<td><?php echo substr($result['task'],0,50);?>.....</td>
			<td><?php echo $result['assign_by'];?></td>
			<td><?php echo $result['created_at'];?>
			
<td>
                <a href="view_message.php?emp_id=<?php echo $result['t_id'];?>">View</a>
				<a href="edit.php?emp_id=<?php echo $result['emp_id'];?>">Edit</a>
				<a href="delete.php?emp_id=<?php echo $result['emp_id'];?>">Delete</a>
			</td>




		<?php
	}
	?>
</table>
</body>
</html>