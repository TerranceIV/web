<?php
//-------------------------insert mirror data
include('config.php');

//used to retrieve back the orderID generated when save to cart is pressed
$username=$_SESSION["username"];
$sql1="SELECT * FROM cust_order WHERE (cust_name='$username' AND status='no-checkout')";
$res1=mysql_query($sql1) or die(mysql_error());
$row_order=mysql_fetch_assoc($res1);
$order_id=$row_order['orderID'];

//used to fetch the item price
$i=0;
$sql2="SELECT * FROM product";
$res2=mysql_query($sql2) or die(mysql_error());
while($row_item=mysql_fetch_array($res2)){
  $price[$i]=$row_item['item_price'];
  $i++;
}

//delete the previous record with same orderID in cart
$order_id = mysql_real_escape_string($order_id);
$delete_update_cart= "DELETE FROM cart WHERE orderID='$order_id'";
$res3 = mysql_query($delete_update_cart) or die(mysql_error());

// Get values from form

$mqty = array($_POST["mqty1"], $_POST["mqty2"], $_POST["mqty3"],$_POST["mqty4"],$_POST["mqty5"],$_POST["mqty6"]);
$arrlength = count($mqty);
$mtotal_q1=$mqty[0]*5;
$mtotal_q2=$mqty[1]*7;
$mtotal_q3=$mqty[2]*8;
$mtotal_q4=$mqty[3]*12;
$mtotal_q5=$mqty[4]*9;
$mtotal_q6=$mqty[5]*10;
$item_id=0;
$table_name1="cart";
for($x = 0; $x < $arrlength; $x++) {
  // Insert data into mysql
  ++$item_id;
  if($mqty[$x]!=""):
  $sql1= "INSERT INTO cart VALUES('', '$item_id', '$mqty[$x]','$price[$x]', '$order_id')";
  $res1=mysql_query($sql1) or die(mysql_error());
  endif;
}

//add item to cart for door category
$dqty = array($_POST["dqty1"], $_POST["dqty2"], $_POST["dqty3"],$_POST["dqty4"],$_POST["dqty5"],$_POST["dqty6"]);
$arrlength = count($dqty);
$dtotal_q1=$dqty[0]*1250;
$dtotal_q2=$dqty[1]*699;
$dtotal_q3=$dqty[2]*699;
$dtotal_q4=$dqty[3]*840;
$dtotal_q5=$dqty[4]*699;
$dtotal_q6=$dqty[5]*699;
$item_id=6;
$i=6;
$table_name1="cart";
for($x = 0; $x < $arrlength; $x++) {
  // Insert data into mysql
  ++$item_id;
  if($dqty[$x]!=""):
  $sql1= "INSERT INTO cart VALUES('', '$item_id', '$dqty[$x]','$price[$i]', '$order_id')";
  $res1=mysql_query($sql1) or die(mysql_error());
  $i++;
endif;
}

//add item to cart for window category
$wqty = array($_POST["wqty1"], $_POST["wqty2"], $_POST["wqty3"],$_POST["wqty4"],$_POST["wqty5"],$_POST["wqty6"]);
$arrlength = count($wqty);
$wtotal_q1=$wqty[0]*450;
$wtotal_q2=$wqty[1]*700;
$wtotal_q3=$wqty[2]*520;
$wtotal_q4=$wqty[3]*480;
$wtotal_q5=$wqty[4]*540;
$wtotal_q6=$wqty[5]*520;
$item_id=12;
$i=12;
$table_name1="cart";
for($x = 0; $x < $arrlength; $x++) {
  // Insert data into mysql
  ++$item_id;
  if($wqty[$x]!=""):
  $sql1= "INSERT INTO cart VALUES('', '$item_id', '$wqty[$x]','$price[$i]', '$order_id')";
  $res1=mysql_query($sql1) or die(mysql_error());
  $i++;
endif;
}

//add item to cart for frame category
$fqty = array($_POST["fqty1"], $_POST["fqty2"], $_POST["fqty3"],$_POST["fqty4"],$_POST["fqty5"],$_POST["fqty6"]);
$arrlength = count($fqty);
$ftotal_q1=$fqty[0]*450;
$ftotal_q2=$fqty[1]*700;
$ftotal_q3=$fqty[2]*520;
$ftotal_q4=$fqty[3]*480;
$ftotal_q5=$fqty[4]*540;
$ftotal_q6=$fqty[5]*520;
$item_id=18;
$i=18;
$table_name1="cart";
for($x = 0; $x < $arrlength; $x++) {
  // Insert data into mysql
  ++$item_id;
  if($fqty[$x]!=""):
  $sql1= "INSERT INTO cart VALUES('', '$item_id', '$fqty[$x]','$price[$i]', '$order_id')";
  $res1=mysql_query($sql1) or die(mysql_error());
  $i++;
endif;
}

//calculate the cart total and uodate the order total
$total_order=0;
$order_id = mysql_real_escape_string($order_id);
$sql="SELECT cart_qty,cart_price FROM cart WHERE orderID='$order_id'";
$total_query=mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_assoc($total_query)){
  $total_order+= ($row['cart_qty']*$row['cart_price']) ;
}

$update_total="UPDATE cust_order SET ord_item_total='$total_order' WHERE orderID='$order_id'";
$result1=mysql_query($update_total) or die(mysql_error());

if($res1){
  echo '<script> alert("Save to cart succesfully!")</script>';
}
?>
