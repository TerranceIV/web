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

	<style>
	table{
		border: 1px solid black;
	}

	</style>
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

					<li class="onthatpage"><a href="view_orders.php">View Orders</a></li>
					<li><a href="view_cust_details.php">View Customer Details</a></li>
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
		<h1><span style="font-size:40px;">Customer Order List</span></h1>
		<div class="rows">
			<div class="col-md-12" style="background-color:rgba(127, 237, 244, 0.41)">
				<table style="font-size:20px;text-align:left;" width=100%; >
					<tr height=70px;>
						<td>
							<span><center>
								Order ID
							</center> </span>
						</td>
						<td>
							<span> Customer Name</span>
						</td>
						<td>
							<span> Item Name</span>
						</td>
						<td>
							<span> Item Quantity</span>
						</td>

					</tr>

					<?php
					include('config.php');
						$sql="SELECT * FROM cart";
						$query=mysql_query($sql) or die(mysql_error());
						while($row=mysql_fetch_assoc($query)){

						$sql1="SELECT item_name FROM product where item_id='$row[item_id]'";
						$query1=mysql_query($sql1) or die(mysql_error());
						$row1=mysql_fetch_assoc($query1);
						$sql2="SELECT * FROM cust_order where orderID='$row[orderID]'";
						$query2=mysql_query($sql2) or die(mysql_error());
						$row2=mysql_fetch_assoc($query2);

					 ?>
					<tr>
						<td>
							<span><center>
								<?php echo $row['orderID'];?>
							</center> </span>
						</td>
						<td>
							<span> <?php echo $row2['cust_name'];?></span>
						</td>
						<td>
							<span> <?php echo $row1['item_name'];?></span>
						</td>
						<td>
							<span>  <?php echo $row['cart_qty'];?></span>
						</td>
					</tr>
					<?php
				} //end while loop
					?>
				</table>
				<!--display customer orders from database-->

			</div>


		</div>
	</div>
	<br/><br/><br/><br/><br/><br/>
	<footer>
	<p>Copyright &copy Mirror Masai Company 2017.</p>
	</footer>

	</div>
