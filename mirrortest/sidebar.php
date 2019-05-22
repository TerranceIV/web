<div class="col-md-3" id="content" style="text-align:center">
  <div class="container-fluid">
    <p style="font-size:20px;">Shopping cart<i style="font-size:24px" class="fa">&#xf217;</i></p>
    <button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
    style="background-color:rgba(32, 250, 250, 0.63);color:black;font-size:18px;width:70%;">
      View Cart </button>

      <br/><br/><br/>

      <?php

    	if(isset($_POST['save']))
    	{
        $save=$_POST['save'];
        $status="no-checkout";
        $username=$rows['username'];

        $sql1="SELECT * FROM cust_order WHERE (cust_name='$username' AND status='no-checkout') order by orderID desc ";
        $res1=mysql_query($sql1) or die(mysql_error());
        $row1=mysql_fetch_assoc($res1);
        $checkstatus=$row1['status'];
        if($checkstatus=="checkout"||$checkstatus==""){
          $sql = "INSERT INTO cust_order VALUES ('', '','$status','$username')";
          $res = mysql_query($sql) or die(mysql_error());
        }
        $sql_id="SELECT orderID from cust_order ORDER BY orderID desc ";
        $res2=mysql_query($sql_id) or die(mysql_error());
        $row2=mysql_fetch_assoc($res2);
    		include('insert_data_category.php');
    	}
    	 ?>


  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width:70%;font-size:18px;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><strong>Cart Items</strong></h2>
        </div>
        <div class="modal-body">
          <table style="width:100%;text-align:left;">
            <tr >
              <td>
                <p id="mirrorheader" ></p>
                <p id="mirror1"></p>
                <p id="mirror2"></p>
                <p id="mirror3"></p>
                <p id="mirror4"></p>
                <p id="mirror5"></p>
                <p id="mirror6"></p>
              </td>

              <td>
                <p id="doorheader" ></p>
                <p id="door1"></p>
                <p id="door2"></p>
                <p id="door3"></p>
                <p id="door4"></p>
                <p id="door5"></p>
                <p id="door6"></p>
              </td>
              </tr>

              <tr >

              <td>
                <p id="windowheader" ></p>
                <p id="window1"></p>
                <p id="window2"></p>
                <p id="window3"></p>
                <p id="window4"></p>
                <p id="window5"></p>
                <p id="window6"></p>
              </td>

              <td>
                <p id="frameheader" ></p>
                <p id="frame1"></p>
                <p id="frame2"></p>
                <p id="frame3"></p>
                <p id="frame4"></p>
                <p id="frame5"></p>
                <p id="frame6"></p>
              </td>

            </tr>
          </table>
            <hr/>
            <p style="text-align:center"><button type="submit" name="save" class="btn btn-default">Save To Cart</button></p>
            </form> <!-- closed form for save to cart-->

        </div>

      </div>

    </div>
  </div>
  <form method="post" action="summary1.php?orderID=<?php echo $row2['orderID']?>">
    <button type="submit" class="btn btn-info btn-lg"
      style="background-color:rgba(0, 255, 3, 0.74);color:black;font-size:18px;width:62%">Check Out</button>
      <br/><br/><br/>
  </form>
</div>
