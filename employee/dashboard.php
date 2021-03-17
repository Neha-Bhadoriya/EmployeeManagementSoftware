<?php
include "dbcon.php";
include "session.php";
include "bootstrap_link.php";
include "navbar_link.php";
?>
<body style="background-color: #00162e;">
	<br>
<table class="table table-bordered" style="position: relative;
    top: 160px;">
<i><h1 style="position: relative;text-align: center;color: white;
    top: 150px;">Employees Information</h1></i>

	<tr class="text-white">
    
		<th>S.no</th>
		<th>Name</th>
		<th>Department</th>
		<th>Role</th>
		
    </tr>
		
	
	
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
			<td><?php echo $result['department'];?></td>
			<td><?php echo $result['role'];?></td>
   <?php
	}
	?>

</table>

