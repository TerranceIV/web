<head>
<style>
.navbar-login
{
    width: 245px;
    padding: 10px;
    padding-bottom: 0px;
}
.navbar-login-session
{
    padding: 10px;
    padding-top: 0px;
}
.icon-size
{
    font-size: 60px;
}
</style>
</head>

<!--navigation bar template-->
<div class="row">
  <div class="col-md-10" >
    <img src="img/mm.png" width="70px" height="70px" style="float:left;"><h1>Mirror Masai</h1><br />
  </div>
</div>
<nav class="nav navbar-default" id="myDIV">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="cust_index.php" class="navbar-brand" id="navigation" style="font-size:22px;">Home</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
    </div>
    <div class="collapse navbar-collapse" id="collapse-menu">
    <ul class="nav navbar-nav">

      <li><a href="about.php">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="feedback.php">Feedback</a></li>
      <li><a href="product.php">Products</a></li>
    </ul>

    <?php
    include('config.php');
    // Get values from form
    if(!isset($_POST['submit']))
    {
      session_start();
    }
    if(isset($_POST['update']))
    {
      session_start();
    }
    $id=$_SESSION["id"];
    // Insert data into mysql
    $select="SELECT * FROM $table_name where id='$id'";
    $list=mysql_query($select);
    $rows=mysql_fetch_array($list);
    $_SESSION["username"]=$rows['username'];
    ?>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-user-circle" aria-hidden="true" style="padding:0;margin:0"></i>
                    <?php echo $rows['username'];?>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="navbar-login">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <span class="glyphicon glyphicon-user icon-size"></span>
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <p class="text-left"><strong><?php echo $rows['first_name']." ".$rows['last_name'];?></strong></p>

                                    <p class="text-left">
                                        <button class="btn btn-primary btn-block btn-sm"  data-toggle="modal" data-target="#myprofile" style="color:black;">Profile</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-login-session"></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-out pull-right"></span> Sign Out </a></li>
                </ul>
                <?php
                include('config.php');

                $_SESSION['id']=mysql_real_escape_string($_SESSION['id']);
                $select="SELECT * FROM $table_name WHERE id= ' " . $_SESSION['id'] . " '";
                $list=mysql_query($select);
                $rows=mysql_fetch_array($list);
                ?>
                <div class="modal fade" id="myprofile" role="dialog">
                  <div class="modal-dialog" style="width:45%;font-size:18px;">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title"><strong>User Information</strong></h2>
                      </div>
                      <div class="modal-body">
                        <table >
                          <tr>
                            <td><pre style="font-size:18px;">First Name   :</pre></td>
                            <td style="padding-left:20px;"><pre style="background-color:rgb(184, 195, 237); font-size:18px;"><?php echo $rows['first_name']; ?></pre></td>
                          </tr>
                          <tr>
                            <td><pre style="font-size:18px">Last Name    :</pre></td>
                            <td style="padding-left:20px;"><pre style="background-color:rgb(184, 195, 237);font-size:18px;"><?php echo $rows['last_name']; ?></pre></td>
                          </tr>
                          <tr>
                            <td><pre style="font-size:18px">Email Address:</pre></td>
                            <td style="padding-left:20px;"><pre style="background-color:rgb(184, 195, 237);font-size:18px;"><?php echo $rows['email']; ?></pre></td>
                            </td>
                          </tr>
                          <tr>
                            <td><pre style="font-size:18px">Phone No.:</pre></td>
                            <td style="padding-left:20px;"><pre style="background-color:rgb(184, 195, 237);font-size:18px;"><?php echo $rows['phone_no']; ?></pre></td>
                            </td>
                          </tr>
                          <tr>
                            <td><pre style="font-size:18px">Address     :</pre></td>
                            <td style="padding-left:20px;"><pre style="background-color:rgb(184, 195, 237);font-size:18px;"><?php echo $rows['address']; ?></pre></td>
                          </tr>
                          <tr>
                            <td>
                            </td>
                            <td>
                              <form method="post" action="update_profile.php">
                                <span style="padding-left:20px;">
                                  <input type="submit" name="update_profile" value="Update Profile" style="width:200px;" />
                                </span>
                              </form>
                            </td>

                          </tr>
                        </table>

                      </div>

                    </div>

                  </div>
                </div>
          </li>
      </ul>
  </div>
  </div>
</nav>
