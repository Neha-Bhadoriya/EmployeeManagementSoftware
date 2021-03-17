<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
   	.a{
		background-color: #21617d8c;
		   /* height: 131px;*/
	  }

	  .navbar-nav .nav-item .nav-link
	 
	 {
	 padding: 15px;
    color: #fff;
    letter-spacing: 1px;
    font-weight: 600;
    font-size: 25px;
	 }

	 

.mob-logo{
	 	display: none;
	 }
	 @media(max-width: 700px)
	 {
	 	.mob-logo{
	 		display: block;

	 	}
	 	.web-logo{
	 		display: none;

	 	}
	 	.a{
		background-color:#21617d8c;
	       }
	 }



   </style>
</head>
<body>
	<div style="background-color: black">
<img src="img/20.jpg" style="width: 100%;height: 700px;opacity: 0.7" >

</div>

	<nav class="navbar navbar-expand-md navbar-dark a fixed-top">
		<div class="container">
			<a href="" class="navbar-brand">
			  <img class="web-logo" src="img/logo4.png" 
			  style="width: 37%;height: 144px;" >
			  <img class="mob-logo" src="img/logo4.png" width="65px">
			</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#a">

            <span class="navbar-toggler-icon"></span>
   
 </button>
		
		</div><!-- <end container> -->

			<div class="collapse navbar-collapse" id="a">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="#" class="nav-link">HOME</a>
			</li>
			<li class="nav-item">
				<a href="login.php" class="nav-link">LOGIN</a>
			</li>
			
		</ul>	
	 </div><!-- <end navbar> -->