<?php

include "session.php";
include 'dbcon.php';
include "bootstrap_link.php";
include "navbar_link.php";

?>
<body style="background-color: #00162e;">

     <table class=" table table-bordered" 
    style="position:relative;top:200px;" width="100%">
       <i><h1 style="position: relative;text-align: center;color: white;
    top: 170px;">Leave that are recommanded to employees</h1></i>
     
    <tr class="text-white">

      <th>S.No.</th>
      <th>Name</th>
      <th>Valid From</th>
      <th>Valid To</th>
      <th>Earning Leave</th>
      <th>Medical Leave</th>
      <th>Casual Leave</th>
      <th>Assign By</th>
      <th>Created_at</th>
      
    </tr>

  
  <?php

  include "dbcon.php";
  $i=1;
  $emp_id=$_SESSION['emp_id'];

 $q = "SELECT * FROM assign_leave as L1 join reg as  R1 on L1.assign_to=R1.emp_id ";

  $f=mysqli_query($con,$q);
  while ($r= mysqli_fetch_array($f)) { 

  ?>
    <tr class="text-white">
      <td><?php echo $i++;?></td>
      <td><?php echo $r['name'];?></td>
      <td><?php echo $r['valid_form'];?></td>
      <td><?php echo $r['valid_to'];?></td>
      <td><?php echo $r['e_leave'];?></td>
      <td><?php echo $r['m_leave'];?></td>
      <td><?php echo $r['c_leave'];?></td>
      <td><?php echo $r['assign_by'];?></td>
      <td><?php echo $r['created_at'];?></td>
   

    <?php
    }
    ?>



</tr>
</table>

  <div class="container" style="position:relative;top:170px;">
  <div class="row">
  <div class="col-md-4"></div>  
  <div class="col-md-4" style="margin-top: 20px;margin-left: 20px;">
    <br>
<a href="your_leave.php"><button class="btn btn-success btn-lg">Your Leave</button>
</a>

  <form method="POST" action="insert_leave.php">
    <br>
<div class="text-white">
 <h1 >apply your leave</h1>
 <br>
  <div class="form-group">
  <input type="hidden" name="emp_id" value="<?php echo $_SESSION['emp_id']; ?>">
  <label ><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Leave From</i></label>

  <input type="date" name="l_form" class="form-control" >
  </div>

  <div class="form-group">
  <label ><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Leave To</i></label>
  <input type="date" name="l_to" class="form-control" >
  </div>

  <div class="form-group">
  <label ><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Earning Leave</i></label>
  <input type="text" name="e_leave" class="form-control" placeholder="Number of Leaves" >
  </div>
    
  <div class="form-group">
  <label ><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Medical Leave</i></label>
  <input type="text" name="m_leave" class="form-control" placeholder="Number of Leaves" >
  </div>

  <div class="form-group">
  <label ><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Casual Leave</i></label>
  <input type="text" name="c_leave" class="form-control" placeholder="Number of Leaves" >
  </div>

  <button type="submit" name="apply_leave" style="margin-left:10px;margin-bottom: 20px;" class="btn btn-primary">Apply Leave</button>
        
  </div><!--end col md 4-->
  </form><!--end form-->
  </div><!--end row-->
  </div><!--end container-->
  


    
