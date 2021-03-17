<?php
include "session.php";
include 'dbcon.php';
include "bootstrap_link.php";
include "navbar_link.php";

if (isset($_GET['emp_id']))
{
$m_id =$_GET['emp_id'];
$query ="select * from task where t_id=$m_id";
$fire =mysqli_query($con,$query);

$u = mysqli_fetch_assoc($fire);
}
?>



    <body style="background-color: #00162e;">
   <div class="container" style="position:relative;top:110px;">
   	  <center><i><h4 class="text-white" style="font-family: arabic;">Employee Task Details...<i class='fa fa-smile-o fa-white' aria-hidden='true'></i></h4></i></center>
   	  <div class="row">
   	  	<div class="col-md-1"></div><!--end-->
   	  	<div class="col-md-10 shadow-lg" style="border:1px solid white;padding: 20px;margin:20px;border-radius: 30px;height: 140px">
   	  	  <p class="text-white"><?php echo $u['task']; ?></p>

   	  	</div><!--end col-md-10-->
   	  	<div class="col-md-1"></div><!--end-->
   	  </div><!--end row-->

   	  <div class="row" style="margin-top:20px;">
   	  	<div class="col-md-1"></div><!--end-->
   	  	<div class="col-md-10 shadow-lg" style="border:1px solid white;padding: 20px;margin:20px;border-radius: 30px;">
            <i><h6 class="text-white" style="font-family: arabic;">Reply....</h6></i>
          <form method="POST" action="">
            <input type="hidden" name="m_id" value="<?php echo $m_id; ?>"><!--input hidden-->
            <input type="hidden" name="emp_id" 
            value="<?php echo $_SESSION['emp_id']; ?>"><!--input hidden-->
   	  		<textarea class="form-control" name="reply" rows="2" placeholder="Reply your task..." style="height: 140px"></textarea>
   	  	    <center><button type="submit" name="submit" style="margin-top:20px;" class="btn btn-primary">Submit Task
            </button></center>
          </form>

   	  	</div><!--end col-md-10-->
      <?php
    include "dbcon.php";
    if(isset($_POST['submit'])){
       $mid=$_POST['m_id'];
       $eid=$_POST['emp_id'];
       $reply=$_POST['reply'];

       $q="INSERT INTO task_reply(reply,m_id,reply_by)values('$reply','$mid','$eid')";
       $f=mysqli_query($con,$q);

    }

     ?>
   	  	<div class="col-md-1"></div><!--end-->
   	  </div><!--end row-->

      <div class="row">
        <div class="col-md-1"></div><!--end-->
        <div class="col-md-10 shadow-lg" style="border:1px solid white;padding: 20px;margin:20px;border-radius: 30px;">
          <b><i><p class="text-white" style="font-family: arabic;">Chat Section.....</p></i></b>
      <?php
       include "dbcon.php";
       $q = "SELECT * from task_reply JOIN reg ON reg.emp_id=task_reply.reply_by where m_id=$m_id";

       $f=mysqli_query($con,$q);
       while ($r= mysqli_fetch_array($f)) { 

      ?>
          <p  style="background-color:black;border:1px solid red; color:white; border-radius: 20px;padding: 10px;">
            <?php echo $r['name'];?> --><?php echo $r['reply'];?></p>

      <?php
        }
      ?>

        </div><!--end col-md-10-->
        <div class="col-md-1"></div><!--end-->
      </div><!--end row-->

   </div><!--end conatiner-fluid-->

   
    
</body>
</html>
