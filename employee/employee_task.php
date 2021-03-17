<?php

include "dbcon.php";
include "session.php";
include "bootstrap_link.php";
include "navbar_link.php";
?>

<body style="background-color: #00162e;">
	
<i class="lead text-white text-center" 
style=" font-size: 43px;position: relative;top: 150px;left: 140px">"......YOUR ALL TASK SHOW BELOW........"</i>

<br><br><br><br><br><br><br><br><br>
<table class="table table-bordered" style="position: relative;
    top: -42px;">
	<tr class="text-white">
		<th>S.no</th>
		<th>Employee Name</th>
		<th>Task</th>
		<th>Assign_by</th>
		<th>created_at</th>
		<th>Action</th>
	</tr>
	
	<?php
	include "dbcon.php";
	$i=1;
	//$emp_id=$_SESSION['emp_id'];
	$d="SELECT * from task as t1 join reg as  r1 on t1.emp_id=r1.emp_id where r1.emp_id='".$_SESSION['emp_id']."'";
	$q=mysqli_query($con,$d);
	while($result=mysqli_fetch_array($q))
	{
		?>
		<tr class="text-white">
			<td><?php echo $i++;?></td>
			<td><?php echo $result['name'];?></td>
			<td><?php echo substr($result['task'],0,50);?>.....
			</td>
			<td><?php echo $result['assign_by'];?></td>
			<td><?php echo $result['created_at'];?></td>
			
<td>
                <a href="view_task.php?t_id=<?php echo $result['t_id'];?>">View</a>
				
			</td>




	<?php
	}
	?>
</tr>
</table>
</body>
</html>
