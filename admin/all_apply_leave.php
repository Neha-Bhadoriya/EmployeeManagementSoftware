<?php
include "session.php";
include "dbcon.php";
include "navbar_link.php";
include "bootstrap_link.php";
?>

    <body style="background-color: #0e4642;">

     <table class=" table table-bordered" 
    style="position:relative;top:200px;" width="100%">
       
      <center><i><h4 style="color:white;position: relative;top:110px;font-family: arabic;">Approve / Reject Leave.....<i class='fa fa-smile-o fa-white' aria-hidden='true'></i></h4></i></center>
  
    <tr class="text-white">
      <th>sr No.</th>
      <th>leave From</th>
      <th>leave To</th>
      <th>Earning Leave</th>
      <th>Medical Leave</th>
      <th>Casual Leave</th>
      <th>Apply by</th>
      <th>status</th>
      <th>comment</th>
      <th></th>
    </tr>
  
  <?php
  
  include "dbcon.php";
  $i=1;
  $q = "SELECT * from apply_leave L1 join reg R1 on L1.apply_by=R1.emp_id";

  $f=mysqli_query($con,$q);
  while ($r= mysqli_fetch_array($f)) { 

  ?>
    <tr class="text-white">
      <td><?php echo $i++;?></td>
      <td><?php echo $r['l_form'];?></td>
      <td><?php echo $r['l_to'];?></td>
      <td><?php echo $r['e_leave'];?></td>
      <td><?php echo $r['m_leave'];?></td>
      <td><?php echo $r['c_leave'];?></td>
      <td><?php echo $r['name'];?></td>

      <td class="text-white" style="font-size: 20px;font-weight: 20px;"><?php echo $r['status'];?></td>

      <td>

    <form method="POST" action="approved_reject_leave.php">
    <input type="hidden" name="a_id" value="<?php echo $r['a_id']; ?>">
    <textarea name="comment"></textarea>
        
      </td>

      <td>
        <button class="btn btn-primary" stype="submit" name="approved">  Approved</button>
        <button class="btn btn-danger" stype="submit" name="rejected">  Rejected</button>

    </form>
      </td>
      </tr>

    <?php
    }
    ?>

  
</table>
