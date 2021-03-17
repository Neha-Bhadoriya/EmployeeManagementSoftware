<?php

include 'dbcon.php';
include "session.php";
include "bootstrap_link.php";
include "navbar_link.php";
?>
<body style="background-color: #00162e;">
	
  
    <table class="table table-bordered" style="position:relative;top:130px;" width="100%">
      <br><br>
      <center><i><h4 style="color:white;position: relative;top:110px;font-family: arabic;">Your Leave...<i class='fa fa-smile-o fa-white' aria-hidden='true'></i></h4></i></center>

  
    <tr class="text-white">
      <th>sr No.</th>
      <th>Name</th>
      <th>Leave From</th>
      <th>Leave To</th>
      <th>Earning Leave</th>
      <th>Medical Leave</th>
      <th>Casual Leave</th>
      <th>Status</th>
      <th>Admin-Comment</th>
    </tr>
  

  <?php
  //$s=$_SESSION[id];
  include "dbcon.php";
  $i=1;
  $q = "SELECT * from apply_leave L1 join reg R1 on L1.apply_by=R1.emp_id ";

  $f=mysqli_query($con,$q);
  while ($r= mysqli_fetch_array($f)) { 

  ?>
    <tr class="text-white">
      <td><?php echo $i++;?></td>
      <td><?php echo $r['name'];?></td>
      <td><?php echo $r['l_form'];?></td>
      <td><?php echo $r['l_to'];?></td>
      <td><?php echo $r['e_leave'];?></td>
      <td><?php echo $r['m_leave'];?></td>
      <td><?php echo $r['c_leave'];?></td>
      <td><?php echo $r['status'];?></td>
      <td>
        <textarea name="comment"><?php echo $r['comment'];?></textarea>
      </td>
      
    </tr>
    

    <?php
    }
    ?>


</table>

    
