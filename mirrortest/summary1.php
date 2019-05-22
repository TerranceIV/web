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
</head>

<body style="font-family:'Alegreya SC';">
	<div class="container">
		<?php include('nav_bar.php');?>
  	<br/><br/>
		<div class="row" style="background-color:rgba(204, 182, 204, 0.34)">

			<div class="col-md-12">
        <?php
        include('config.php');
				$username=$_SESSION['username'];
				$sql1="SELECT * FROM cust_order WHERE (cust_name='$username' AND status='no-checkout')";
				$res1=mysql_query($sql1) or die(mysql_error());
				$row1=mysql_fetch_assoc($res1);
				$order_id=$row1['orderID'];

				$table_name="cart";
        $table_name1="product";

        ?>
        <h2 style="color:#2533aa;">Billing Information</h2>
				<hr/>

        <table id="usertable" width=80%; border="1px solid black">
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
            <td colspan="2">
              <span style="font-size:30px;">Action</span>
            </td>

          </tr>
					<?php
						if(isset($_POST['update'])):
						$obj->update_qty($_POST);
						endif;
						if(isset($_GET['delete'])):
						$obj->delete_content($_GET['delete']);
						endif;
						if(!isset($_POST['refresh'])){
							$obj->summary_list($order_id,$username);
						}
					?>
          <tr style="text-align:center;">
            <td>
              <pre style="font-size:18px">Payment method :</pre>
            </td>
            <td>
							<form method="post" action="invoice.php" >
							<input type="radio" name="paymentmethod" value="Paypal"/><img src="img/paypal.png" width="70%" height="50%" style="padding-left:20px;" />
            </td>
						<td>
							<input type="radio" name="paymentmethod"  value="Cash"/><img src="img/cash.jpg" width="70%" height="50%" style="padding-left:20px;" />
            </td>
          </tr>
					<tr style="text-align:center;">
            <td>
              <pre style="font-size:18px">Delivery method :</pre>
            </td>
            <td>
							<input type="radio" name="deliverymethod" value="FedEx"/> <span style="padding-left:20px;" >FedEx</span>
            </td>
						<td>
							<input type="radio" name="deliverymethod" value="Skynet"/> <span style="padding-left:20px;" >Skynet</span>
            </td>
          </tr>
					<tr>
						<td><input type="submit" name="submit1" value="Proceed" ></td>
						</form>
					</tr>

  		</table>
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
