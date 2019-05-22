<?php
	include('config.php');
	if(isset($_GET['orderID']))
	{
		$orderID=$_GET['orderID'];
		$status="checkout";
		$sql1="UPDATE cust_order SET status='$status' where orderID='$orderID'";
		$res2=mysql_query($sql1) or die(mysql_error());
	}
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
	<link href='//fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family:'Alegreya SC';">
	<div class="container">
		<?php include('nav_bar.php');?>
	<div class="container-fluid" style="text-align:center;margin-top:10px;">
		<h1><span style="font-size:40px;">Make Miracle, Make Difference, Make Masterpiece</span></h1>
	</div>
	<br/>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-9" style="margin-left:0%">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;height:80%">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		      <div class="item active">
		        <img src="img/carousel1.jpg" alt="windows" style="width:100%;height:100%">
		      </div>

		      <div class="item">
		        <img src="img/carousel2.jpg" alt="aluminium doors" style="width:100%;">
		      </div>

		      <div class="item">
		        <img src="img/carousel3.jpg" alt="glazings" style="width:100%;">
		      </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
		<div col-md-3>

		<h3 style="text-align:center;">Promotion event </h3>
		<?php
		if(isset($_POST['upload']))
		{
			include('upload_promo.php');

		}

		$table_name="photo";
		$view="SELECT * FROM $table_name order by photoID desc limit 1";
		$result_img= mysql_query($view);
		$rows=mysql_fetch_array($result_img);
		?>
		<br/>

		<?php
		echo "<img src='img/".$rows['image']."' width=285px; ><br/><br/>";
		echo $rows['text'];
		 ?>
	 </div> <!--div picture promotion-->
		</div>
	</div>

	<br/>

	<footer>
	<p>Copyright &copy Mirror Masai Company 2017.</p>
	</footer>
</div>

</body>
</html>
