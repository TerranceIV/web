<!DOCTYPE html>
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
	<div class="row">

			<div class="col-md-12">
        <?php
        include('config.php');
        $cartID=$_GET['cartID'];

				$table_name="cart";
        $table_name1="product";

        $select1="SELECT * FROM $table_name where cartID='$cartID'";
        $list1=mysql_query($select1);

        ?>
        <h2 style="color:#23934c;">Billing Information</h2>
        <table id="usertable">
          <tr style="text-align:center;">
            <td >
              <span style="font-size:30px;"> ITEM </span>
            </td>
            <td>
              <span style="font-size:30px;">Quantity</span>
            </td>
            <td colspan="2">
              <span style="font-size:30px;">Action</span>
            </td>

          </tr>

          <?php
            $rows1=mysql_fetch_array($list1);
            $item_id=$rows1['item_id'];
            $select2="SELECT * FROM $table_name1 where item_id='$item_id'";
            $list2=mysql_query($select2);
            $rows2=mysql_fetch_array($list2);

           ?> <!--------uodate delete haven done-->
          <tr>
            <form method="post"  action="summary1.php?orderID=<?php echo $rows1['orderID']; ?>">
              <input type="hidden" name="update" value="true" />
              <input type="hidden" name="cartID" value="<?php echo $rows1['cartID']; ?> "  >
              <input type="hidden" name="orderID" value="<?php echo $rows1['orderID']; ?> "  >
              <td><p style="font-size:18px;"><?php echo $rows2['item_name']; ?></p></td>
              <td><input type="number" style="font-size:18px;" name="qty" value="<?php echo $rows2['cart_qty']?>"</td>
              <td><input type="submit" name="submit" value="Confirm"></td>
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
