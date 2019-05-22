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
	<!-- jQuery library -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
	<link href='//fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family:'Alegreya SC';">
	<div class="container">
		<div class="row">
			<div class="col-md-10" >
				<img src="img/mm.png" width="70px" height="70px" style="float:left;"><h1>Mirror Masai</h1><br />
			</div>
		</div>
	<nav class="nav navbar-default" id="myDIV">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="admin_index.php" class="navbar-brand" style="font-size:18px;">Update Promotion</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
        </div>
        <div class="collapse navbar-collapse" id="collapse-menu" style="font-size:18px;">
        <ul class="nav navbar-nav">

					<li><a href="view_orders.php">View Orders</a></li>
					<li class="onthatpage"><a href="view_cust_details.php">View Customer Details</a></li>
					<li><a href="view_feedback.php">View Feedbacks</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" onclick="logout()"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
				<script>
				function logout()
				{
					alert('Admin logged out.');
				}
				</script>
        </ul>

      </div>
      </div>
  </nav>
	<div class="container-fluid" style="text-align:center;margin-top:10px;">
		<h1><span style="font-size:40px;">Customer Details</span></h1>
		<div class="rows">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="text-align:left;margin-top:10px;font-size:20px;">
				<!--display customer orders from database-->
				<?php
				include('config.php');

				// Get values from form
				$table_name="customers";
				$select="SELECT * FROM $table_name";
				$list=mysql_query($select);
				$num=0;
				$status=1;

				while($rows=mysql_fetch_array($list))
				{
					if($status!=1){
						echo $num.") <p> <font color=blue>".$rows["first_name"]." ".$rows["last_name"]."</font> </p> ".$rows["email"]."<br/> ".$rows["phone_no"]."<br/> ".$rows["address"]."<br/><br/>";
					}
					$status++;
					$num++;
				}
				?>
			</div>
			<div class="col-md-2"></div>

		</div>
	</div>
	<footer>
	<p>Copyright &copy Mirror Masai Company 2017.</p>
	</footer>

	</div>
