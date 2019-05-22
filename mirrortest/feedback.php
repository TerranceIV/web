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
	<link href='//fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="font-family:'Alegreya SC';">
	<div class="container">
		<?php include('nav_bar.php');?>
	<div class="container-fluid" style="text-align:center;margin-top:10px;">
		<h2><span>~Feedback~</span></h2><br />
	</div>
	<br/>
  <div class="container-fluid">
  <div class="rows">
    <div class="col-md-12" style="font-size:20px;" >
      <p>Feel free to leave your comments  or questions to us!</p><br/>
      <p>Your comments will help us improve our service to you!</p><br/>
      <form method="post" action="customer_comment.php">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"><br/>
            <label for="feedback">Comments:</label><br/>
            <textarea class="form-control" rows="4" col="50" name="comment" placeholder="Comment here..."></textarea>
          <button type="submit" class="btn btn-default">Send</button>
        </div>
      </form>
    </div>
  </div>
  </div>

	<footer>
	<p>Copyright &copy Mirror Masai Company 2017.</p>
	</footer>
</div>

</body>
</html>
