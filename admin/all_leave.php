<?php
include "session.php";
include "dbcon.php";
include "navbar_link.php";
include "bootstrap_link.php";
?>


<body style="background-color: #0e4642;">

     <table class=" table table-bordered" 
    style="position:relative;top:120px;" width="100%">
       
      <center><i><h4 style="color:white;position: relative;top:110px;font-family: arabic;">Leave Details...<i class='fa fa-smile-o fa-white' aria-hidden='true'></i></h4></i></center>

      <center><a class="btn btn-info" style="color:white;position: relative;top:120px;" href="all_apply_leave.php">Mention Employee Leave Approved/Reject</a></center><br>

    <tr class="text-white">
      <th>sr No.</th>
      <th>Valid From</th>
      <th>Valid To</th>
      <th>Earning Leave</th>
      <th>Medical Leave</th>
      <th>Casual Leave</th>
      <th>Assign By</th>
      <th>Assign To</th>
      
      
    </tr>
  
  <?php
 
  include "dbcon.php";
  $i=1;
  $q = "SELECT * from assign_leave L1 join reg R1 on L1.assign_to=R1.emp_id";

  $f=mysqli_query($con,$q);
  while ($r= mysqli_fetch_array($f)) { 

  ?>
    <tr class="text-white">
      <td><?php echo $i++;?></td>
     
      <td><?php echo $r['valid_form'];?></td>
      <td><?php echo $r['valid_to'];?></td>
      <td><?php echo $r['e_leave'];?></td>
      <td><?php echo $r['m_leave'];?></td>
      <td><?php echo $r['c_leave'];?></td>
      <td><?php echo $r['assign_by'];?></td>
       <td><?php echo $r['name'];?></td>
     

    <?php
    }
    ?>


</table>
