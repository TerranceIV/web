<?php
//content management system for php back-end connection
class cms{
  var $host;
  var $username;
  var $password;
  var $db;

  // ------------------  connect to db  --------------------------//
  function connect_db(){
    $con = mysql_connect($this->host, $this->username, $this->password) or die(mysql_error());
    mysql_select_db($this->db, $con) or die(mysql_error());
  }
  function update_profile($update_info){
    $id=$update_info['id'];
    $first_name=$update_info['first_name'];
    $last_name=$update_info['last_name'];
    $password=$update_info['password'];
    $email=$update_info['email'];
    $phone_no=$update_info['phone_no'];
    $address=$update_info['address'];

    $update="UPDATE customers SET first_name='$first_name' ,last_name='$last_name'
    ,password='$password' ,email='$email' ,phone_no='$phone_no' ,address='$address' where id='$id'";
    $result=mysql_query($update) or die(mysql_error());
  }

  function summary_list($order_id,$username){
    echo "<h3 style='font-size:25px;color:rgb(30, 31, 186);'>" ."Customer Name : " .$username."</h3>";
    echo "<h3 style='font-size:25px;color:rgb(30, 31, 186);'>" . "Order Date : ".date("Y/m/d")."</h3>";
    $select1="SELECT * FROM cart where orderID='$order_id'";
    $list1=mysql_query($select1);
    while($rows1=mysql_fetch_array($list1)){
      $item_id=$rows1['item_id'];
      $select2="SELECT * FROM product where item_id='$item_id'";
      $list2=mysql_query($select2);
      $rows2=mysql_fetch_array($list2);


    ?> <!--------update delete haven done-->
    <tr>
        <input type="hidden" name="cartID" value="<?php echo $rows1['cartID']; ?> "  >
        <input type="hidden" name="orderID" value="<?php echo $rows1['orderID']; ?> "  >
        <td><pre style="font-size:18px;color:rgb(30, 31, 186);background-color:rgba(125, 232, 226, 0.14)"><?php echo $rows2['item_name']?></p></td>
        <td><p style="font-size:18px;text-align:center;"><?php echo $rows1['cart_qty']; ?></p></td>
        <td><p style="font-size:18px;text-align:center;"><?php echo $rows1['cart_price']; ?></p></td>
        <td><p style="font-size:18px;text-align:center;"><?php echo ($rows1['cart_qty']*$rows1['cart_price']); ?></p></td>
        <td>
          <a href="update.php?cartID=<?php echo $rows1['cartID']?>"><button type="submit" class="update" name="Update" style="width:82%;">UPDATE</button></a>
        </td>
        <td>
          <a href="?delete=<?php echo $rows1['cartID']?>&&orderID=<?php echo $rows1['orderID']?>"><button type="submit" class="del" name="Delete" style="width:82%;">DELETE</button></a>
        </td>

    </tr>
    <?php
      }
    } //function summary end here

    function update_qty($p){

      $cartID= mysql_real_escape_string( $p['cartID']);
      $qty=$p['qty'];
      $update="UPDATE cart SET cart_qty='$qty' WHERE cartID='$cartID'";
      $result=mysql_query($update) or die(mysql_error());

      //calculate the cart total and uodate the order total
      $total_order=0;
      $order_id=$_POST['orderID'];
      $order_id = mysql_real_escape_string($order_id);
      $sql="SELECT cart_qty,cart_price FROM cart WHERE orderID='$order_id'";
      $total_query=mysql_query($sql) or die(mysql_error());
      while($row = mysql_fetch_assoc($total_query)){
        $total_order+= ($row['cart_qty']*$row['cart_price']) ;
      }

      $update_total="UPDATE cust_order SET ord_item_total='$total_order' WHERE orderID='$order_id'";
      $result1=mysql_query($update_total) or die(mysql_error());

      if($result1){
        echo '<script> alert("update item succesfully!")</script>';
      }
    }

    function delete_content($id){
      $id = mysql_real_escape_string($id);
      $delete_cart= "DELETE FROM cart WHERE cartID='" .$id. "'";
      $result2 = mysql_query($delete_cart) or die(mysql_error());

      if($result2){
        echo '<script> alert("Delete item succesfully!")</script>';
      }
    }

    function invoice($username,$p){
      $sql1="SELECT * FROM cust_order WHERE (cust_name='$username' AND status='no-checkout')";
      $res1=mysql_query($sql1) or die(mysql_error());
      $row1=mysql_fetch_assoc($res1);
      $order_id=$row1['orderID'];
      echo "<h3 style='font-size:25px;color:rgb(30, 31, 186);'>" ."Customer Name : " .$username."</h3>";
      echo "<h3 style='font-size:25px;color:rgb(30, 31, 186);'>" . "Order Date : ".date("Y/m/d")."</h3>";
      $select1="SELECT * FROM cart where orderID='$order_id'";
      $list1=mysql_query($select1);
      while($rows1=mysql_fetch_array($list1)){
        $item_id=$rows1['item_id'];
        $select2="SELECT * FROM product where item_id='$item_id'";
        $list2=mysql_query($select2);
        $rows2=mysql_fetch_array($list2);
      ?>

      <tr>

          <input type="hidden" name="cartID" value="<?php echo $rows1['cartID']; ?> "  >
          <input type="hidden" name="orderID" value="<?php echo $rows1['orderID']; ?> "  >
          <td><p style="font-size:18px;;color:rgb(30, 31, 186);"><?php echo $rows2['item_name']?></p></td>
          <td><p style="font-size:18px;text-align:center;"><?php echo $rows1['cart_qty']; ?></p></td>
          <td><p style="font-size:18px;text-align:center;"><?php echo $rows1['cart_price']; ?></p></td>
          <td><p style="font-size:18px;text-align:center;"><?php echo ($rows1['cart_qty']*$rows1['cart_price']); ?></p></td>

      </tr>
      <?php
        }
      ?>
        <table width=80%;>

            <tr>
              <td>
                <pre style="font-size:18px">Payment method :</pre>
              </td>
              <td><pre style="background-color:rgb(184, 195, 237); font-size:18px;margin-left:20px;margin-right:20px;"><?php echo $p['paymentmethod']; ?></pre></td>
              <td>
                 <p>

                 </p>
              </td>
              <td>
                <pre style="font-size:18px;margin-left:30px;">Total Payment :</pre>
              </td>
              <td><pre style="background-color:rgb(184, 195, 237); font-size:18px;margin-left:50px;margin-right:40px;"><?php echo "RM".$row1['ord_item_total']; ?></pre></td>
            </tr>
  					<tr>
              <td>
                <pre style="font-size:18px">Delivery method :</pre>
              </td>
              <td><pre style="background-color:rgb(184, 195, 237); font-size:18px;margin-left:20px;margin-right:20px;"><?php echo $p['deliverymethod']; ?></pre></td>
            </tr>


  					<tr>
  							<td>
  								<button class="update" onclick="window.print();"/>Print</button>
  							</td>
  							<td colspan="4" style="text-align:center">
  								<form method="post" action="cust_index.php?orderID=<?php echo $order_id; ?>">
  									<input type="submit" name="pay"  value="Pay" onclick="end()"/>
  								</form>
  							</td>


  							<script>
  								function end(){
  									alert('Thank you for your purchase! Redirect back to home page.');
  								}

  							</script>


  						</tr>
    		</table>
        <?php
    } //<!-- function invoice end -->


}  // <!-- cms ending -->


?>   <!-- END FILE -->
