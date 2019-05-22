<?php include 'cms.php';

$obj = new cms();

//Setup our connection vars
$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->db = 'mirrortest';

//Connect To Our DB
$obj->connect_db();
?>

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

	<style>
	table,tr,td{
		padding:7px;
	}
	</style>
</head>

<body style="font-family:'Alegreya SC';">
	<div class="container">
		<?php include('nav_bar.php');?>
  <br/><br/>
	<div class="row">

			<div class="col-md-12">
				<h2 style="color:#23934c;">Billing Information</h2>
        <table id="usertable" width=80%; border="2px solid blue;">
					<tr style="text-align:center;">
						<td >
							<span style="font-size:30px;"> Item Name  </span>
						</td>
						<td>
							<span style="font-size:30px;">Quantity</span>
						</td>
						<td>
							<span style="font-size:30px;">Price per unit(RM)</span>
						</td>
						<td>
							<span style="font-size:30px;">Total price(RM) </span>
						</td>

					</tr>
        <?php
					$username=$_SESSION['username'];
					$obj->invoice($username,$_POST);
					?>
			</table>
			 <hr/>

			</div>


	</div>

	<footer>
	<p>
	Copyright&copy Sky-Bookstore Bhd.Snd 2017
	</p>
	</footer>
</div>

</body>
</html>
