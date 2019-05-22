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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
	<link href='//fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

input[type=email].form-control,input[type=tel].form-control,input[type=password].form-control,input[type=text].form-control{
    width: 100%;
    border: 0;;
    border-radius: 15px;
    font-size: 14px;
    background-color: white;
    padding: 10px 20px 10px 10px;
		margin:9px;
    background-color: white;

}

</style>
</head>

<body style="font-family:'Alegreya SC';">
  <?php include('update_check.php'); ?>
	<div class="container">
		<?php include('nav_bar.php');?>
	<div class="container-fluid" style="text-align:center;margin-top:10px;">
		<h1><span style="font-size:40px;">Make Miracle, Make Difference, Make Masterpiece</span></h1>
	</div>
	<br/>
	<div class="container-fluid">

    <div class="rows">
      <div class="container-fluid" style="background-color:rgba(59, 153, 222, 0.32);  font-family: arial;">
      <div class="col-md-3">

      </div>
			<div class="col-md-6" style="text-align:left;margin-top:10px;font-size:20px;">
				<!--display customer orders from database-->
        <h2 style="color:#23934c;">Customer Information</h2>
        <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="text-align:left">

          <div class="form-group">
            <label for="First name">First name:</label>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
            <span class="error"><?php echo $first_name_Err;?></span>
          </div>
          <div class="form-group">
            <label for="Last name">Last name:</label>
            <input type="text" class="form-control" id="last_name" placeholder="Enter last_name" name="last_name" >
            <span class="error"><?php echo $last_name_Err;?></span>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" >
            <span class="error"><?php echo $password_Err;?></span>
          </div>
          <div class="form-group">
            <label for="password2">Re-enter password:</label>
            <input type="password" class="form-control" id="password_2" placeholder="Re-enter password" name="password_2" >
            <span class="error"><?php echo $password_2_Err;?></span>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            <span class="error"><?php echo $email_Err;?></span>
          </div>
          <div class="form-group">
            <label for="phone_no">Phone No.:</label>
            <input type="tel" class="form-control" id="phone_no" placeholder="Enter phone number" name="phone_no">
            <span class="error"><?php echo $phone_no_Err;?></span>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address">
            <span class="error"><?php echo $address_Err;?></span>
          </div>
          <p style="text-align:center"><button type="submit" class="btn btn-default" name="register">Register</button></p>

        </form>

        <?php
        if(  isset($_POST["password"])&& ($_POST["password_2"] == $_POST["password"]))

            {
                $obj->update_profile($_POST);
        ?>
            <script>
              alert('Update succesfully!');
            </script>
            <?php
              }
              else
              {
                if(isset($_POST['register']))
                {

            ?>
                <script>
                  alert('Registration failed! Please fill in the form correctly!');
                </script>
              <?php
                }
              }
              ?>
			</div>

      <div class="col-md-3">

      </div>
      </div>
		</div>
	</div>

	<br/>

	<footer>
	<p>Copyright &copy Mirror Masai Company 2017.</p>
	</footer>
</div>

</body>
</html>
