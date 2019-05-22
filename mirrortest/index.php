
<!DOCTYPE html>
<html>
<head>
  <title>Masai Mirror Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='//fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
  <link href='css/style_index.css' type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body  data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="100">
  <div style="display:none;">
    <audio controls autoplay loop>
    <source src="img/opening.mp3" type="audio/ogg">
    </audio>
  </div>

<div class="container-fluid">
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:rgba(121, 239, 255, 0.63);">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
	  <a href="#Home" ><img src="img/mm.png" style="width:50px;height:50px;float:left;"></a>
      <a class="navbar-brand" href="#Home" style="font-family:'Alegreya SC'"><span style="color:black">Mirror Masai</span></a>

    </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" >
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Home" >Login/Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#business">Business</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#feedback">Feedback</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
  <div id="Home" class="container-fluid">
    <br/><br/><br/><br/><br/><br/>
    <h1 style="text-align:center;"><span>MIRROR MASAI COMPANY</span></h1><br /><br/>
    <h2 style="text-align:center;"><span>Provide Customers The Best Services</span></h2>
    <br/><br/><br/>
    <!-- This part for login modal-->
    <div class="row" style="text-align:center;">
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" style="background-color:rgb(0, 198, 91);font-size:20px;width:70%;">
          Login</button>
      </div>

    <!-- Modal -->
    <?php include('login.php'); ?>
    <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Login</strong></h4>
          </div>
          <div class="modal-body">
            <form method="post" action="user_login.php" style="text-align:left">
              <div class="form-group">
                <label for="Username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
              </div>
              <p style="text-align:center"><button type="submit" name="submit" class="btn btn-default">Login</button></p>

            </form>
          </div>

        </div>

      </div>
    </div>

    <?php include('register.php'); ?>

    <!-- This is register modal -->
      <div class="col-md-3">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" style="background-color:rgb(252, 206, 8);font-size:20px;width:70%;">
          Sign up</button>
      </div>
      <div class="col-md-3"></div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Sign Up Registration Form</strong></h4>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="text-align:left">
              <div class="form-group">
                <label for="Username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                <span class="error"><?php echo $username_Err;?></span>
              </div>
              <div class="form-group">
                <label for="First name">First name:</label>
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
          </div>

        </div>

      </div>
  <?php
    if(preg_match("/^[a-zA-Z ]*$/",$username) && preg_match("/^[a-zA-Z ]*$/",$first_name)
    && preg_match("/^[a-zA-Z ]*$/",$last_name) && preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/",$password) &&
    filter_var($email, FILTER_VALIDATE_EMAIL) && ($_POST["password_2"] == $_POST["password"]) && (!empty($_POST["address"]))
    && (!empty($_POST["phone_no"])))
    {
      include('insert_user.php');

  ?>
     <script>
       alert('Registration Successfully!');
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
    <br/><br/>
    <p style="text-align:center;font-family:Arial;font-size:10px;">
      <button type="button" class="btn btn-info btn-lg" style="background-color:rgb(244, 104, 2);width:20%;">
      <a href="#about" class="page-scroll btn btn-xl" style="color:white">TELL ME MORE</a></button></p>
    <br/><br/>

  </div>

  <div id="about" class="container-fluid">
    <section id="about">
      <div>
        <br/><br/><br/>
        <h1 style="text-align:center">-About Us-</h1>
        <br/>
        <div class="row">
          <div class="col-md-2" id="about2"></div>
          <div class="col-md-8">
            <p><span style="font-size:20px;"><strong>Perniagaan Cermin Masai</strong></span> had its humble beginning since 1988 by the founder, Mr. Ong Siang Tian.
              Since then, the company has come a long way to what it is today.The company has entered the construction business
               as a aluminium & glazing works specialist since 1997. The company's core business is involving in the design and
               installation of aluminium & glazing works in various type of construction fields, such as housing project, high rise
                building, hospital, school and others.Perniagaan Cermin Masai has become justly trusted in the construction
                sectors for its experience, expertise and installation techniques. The founder of the company has 22 years of
                experience in aluminium & glazing works. Besides, engineers and highly skilled workers are incorporated in the
                company in order to provide professional advices and to ensure the quality of works.All the products & services
                offered by the company are designed and installed to Architecture specifications. The company is supported by
                efficient professionals who help the company in order to meet the quality requirements such as technical queries
                and information.</p>
                <br /><br /><br />
          </div>
          <div class="col-md-2" id="about2"></div>
        </div>

      </div>
    </section>
  </div>

  <div id="business" class="container-fluid">
    <section id="business">
      <div>
        <br/>
        <div class="rows">
          <h1 style="text-align:center;">-Business-</h1><br/>
          <div class="col-md-12">
            <div class="col-md-3" style="text-align:center">
              <p>Mirrors and Doors Retailer</p><br/>
              <img src="img/busi1.jpg" style="width:200px;height:200px;"><br/><br/>
              <img src="img/busi2.jpg" style="width:200px;height:200px;"><br /><br/><br/><br/>
            </div>
            <div class="col-md-3" style="text-align:center">
              <p>Mirror/Aluminium Glazing Works</p><br/>
              <img src="img/mg1.jpg" style="width:200px;height:200px;"><br/><br/>
              <img src="img/mg2.jpg" style="width:200px;height:200px;"><br /><br/><br/><br/>
            </div>
            <div class="col-md-6" style="text-align:center">
              <p>Mirror installation</p><br/>
              <video width="480" height="320" controls>
              <source src="img/installation.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div id="contact" class="container-fluid">
    <section id="contact">
      <div>
        <br/>
        <h1 style="text-align:center">-Contact Us-</h1>
        <br/>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4">
                <h3 style="text-align:left"><i class="material-icons">&#xe567;</i>Address</h3>
                <p> No. 19, Jalan Cempaka Masai,
                <br>81750 Masai,
                <br>Johor,
                <br>Malaysia.
                <br/><br/><br/><br/><img src="img/address1.png" id="address1"/>
            </div>

            <div class="col-md-4">
                <h3><i class="material-icons">&#xe551;</i>Call Us</h3>
                <p>If you need any assistance,</p>
                <p>Call <strong>+607-251 5642</strong> to contact us!</p>
                <p>Or find us at:</p>
                <a href="#contact" class="fa fa-facebook"></a>
                <a href="#contact" class="fa fa-twitter"></a>
                <a href="#contact" class="fa fa-instagram"></a>
                <br/><br/><img src="img/address2.png" id="address1"/>
            </div>
          </div>
        </div>
        <br/><br/><br/><br/><br/><br/>
      </div>
    </section>
  </div>

  <div id="feedback" class="container-fluid">
    <section id="feedback">
      <div>
        <br/>
        <div class="rows">
          <div class="col-md-6">
            <h1 style="text-align:center;">-Feedback-</h1><br/><br/>
            <p>Feel free to leave your comments  or questions to us!</p><br/>
            <p>Your comments will help us improve our service to you!</p><br/>
            <form method="post" action="visitor_comment.php">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"><br/>
                  <label for="feedback">Comments:</label><br/>
                  <textarea class="form-control" rows="4" col="50" name="comment" placeholder="Comment here..."></textarea>
                <button type="submit1" class="btn btn-default">Send</button>
              </div>
            </form>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </section>
  </div>

<footer>
  <div class="container-fluid" id="footer">
    <p>Copyright &copy Mirror Masai Company 2017.</p>
  </div>
</footer>
</div>

</body>
</html>
