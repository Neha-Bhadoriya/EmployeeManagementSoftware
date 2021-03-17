<?php
include "session.php";
include 'dbcon.php';
include "bootstrap_link.php";
include "navbar_link.php";

?>
<body style="background-color: #0e4642;">

     <form method="POST" action="insert_leave.php">
     <input type="hidden" name="assign_by" value="<?php echo $_SESSION['emp_id']?>">

    <div class="container-fluid" style="position:relative;top:100px;">
        <center><i><h4 class="text-white" style="font-family: arabic;">Assign Leave To Employees...<i class='fa fa-smile-o fa-white' aria-hidden='true'></i></h4></i></center>
        <center><a class="btn btn-info" href="all_leave.php">All Leave</a></center>
        
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4" style="border:1px solid white;height:280px;padding: 20px;margin:30px;">

     <?php
    include "dbcon.php";
    $d = "select * from reg where role='Employee'";

    $q=mysqli_query($con,$d);
    while ($r= mysqli_fetch_array($q)) { 

     ?>
      <div class="form-check ">
        <label class="form-check-label text-white ">
          <input class="form-check-input" name="emp[]" type="checkbox" value="<?php echo $r['emp_id'];?>">
          <?php echo $r['name'];?>
        </label>
      </div>
    <?php
     }
    ?>

        </div><!--end col md 4-->
        <div class="col-md-4" style="margin-top: 20px;margin-left: 20px;">
           <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Valid From</i></label>
             <input type="date" name="valid_form" class="form-control" >
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Valid To</i></label>
             <input type="date" name="valid_to" class="form-control" >
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Earning Leave</i></label>
             <input type="text" name="e_leave" class="form-control" placeholder="Number of Leaves" >
            </div>
            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Medical Leave</i></label>
             <input type="text" name="m_leave" class="form-control" placeholder="Number of Leaves" >
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Casual Leave</i></label>
             <input type="text" name="c_leave" class="form-control" placeholder="Number of Leaves" >
            </div>

            <button type="submit" name="submit" style="margin-bottom:20px;margin-left:10px;" class="btn btn-primary">Submit Leave</button>
        </div><!--end col md 4-->
        <div class="col-md-2"></div>
      </form><!--end form-->
      </div><!--end row-->



    </div>

  </form>

