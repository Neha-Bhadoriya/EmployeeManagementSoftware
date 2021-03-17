
<?php
  include "session.php";
  include "bootstrap_link.php";
  include "navbar_link.php";
?>
 
<body style="background-color: #041215;background-image: 
url(../img/q.jpg); background-repeat: no-repeat;">
  
  <div class="container-fluid" style="position:relative;top:150px;">
  <center><b><i><h3 class="text-white " style="width: 70%;">
    ......Assign Task To Employees......
  </h3></b></i>

  <a href="all_task.php"><input type="submit" name="submit" class="btn btn-warning "  
      value="All Task"></a></center>

      <form method="post" action="insert_task.php">
       <input type="hidden" name="assign_by" value="<?php echo $_SESSION['emp_id']?>">
    
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 " style="border:1px solid grey;height:260px;padding: 20px;margin-top:25px;margin:left:10px;margin-right: 5px;">

        
     <?php
    include "dbcon.php";
    $d = "select * from reg where role='Employee' order by emp_id desc";

    $q=mysqli_query($con,$d);
    while ($r= mysqli_fetch_array($q)) { 

     ?>
      <div class="form-check">
        <label class="form-check-label text-white">
          <input class="form-check-input" type="checkbox" name="emp[]" value="<?php echo $r['emp_id'];?>"><?php echo $r['name'];?>
        </label>
      </div>
    <?php
     }
    ?>

        </div><!--end col md 4-->
        <div class="col-md-4" style="margin-top: 10px;">
           <div class="form-group">
             <label class=""><h3><b style="color: white">
              Assign Task below the box<i class='fa fa-smile-o fa-white text-white' aria-hidden='true'></i></b></h3></label>
             
             <textarea class="form-control" rows="8" name="message" style="color: white;background-color:transparent;"></textarea>
            </div>

            <button type="submit" name="submit_task" style="margin-left:10px;" class="btn btn-success btn-block">Submit Task</button>
        </div><!--end col md 4-->
        <div class="col-md-2"></div>
      </div><!--end row-->


    </div>

    </form>
