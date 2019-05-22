<!DOCTYPE html>
<html>
<head>
	<title>Mirror Masai</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<script type="text/javascript" src="js/validate.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- jQuery library -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/addtocart.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
	<link href='//fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family:'Alegreya SC';">
	<div class="container">
		<?php include('nav_bar.php');?>
  <br/><br/>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-9" id="content" style="border-right:2px solid rgba(101, 246, 233, 0.54);">
      <div class="container-fluid">
        <ul class="nav nav-pills">
    			<li class="active" id="cate"><a data-toggle="pill" href="#mirror">Mirror</a></li>
    			<li id="cate"><a data-toggle="pill" href="#door">Door</a></li>
    			<li id="cate"><a data-toggle="pill" href="#window">Window</a></li>
    			<li id="cate"><a data-toggle="pill" href="#frame">Frame</a></li>
        </ul>

        <div class="tab-content" style="font-size:18px;">

          <?php
					include('product_mirror.php');
					include('product_door.php');
					include('product_window.php');
					include('product_frame.php');
					?>
        </div>
      </div>
		</div>
		<?php include('sidebar.php'); ?>
	</div>
	<br/>
  </div>
	<footer>
	<p>Copyright &copy Mirror Masai Company 2017.</p>
	</footer>
</div>

</body>
</html>
