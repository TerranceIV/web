<!DOCTYPE html>
<html>
<head>
  <link href='/css/style_index.css' type="text/css" rel="stylesheet">
</head>
<body>
  <?php
  include('config.php');
  // Get values from form
  if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
  }

  $select="SELECT * FROM customers";
  $list=mysql_query($select);

  while( $rows=mysql_fetch_array($list))
  {
    if($rows['id']==1 && $rows['username']==$username && $rows['password']==$password)
    {
      session_start();
      $_SESSION["id"]=$rows['id'];
      ?>
      <script>
       alert('Admin logged in.');
      </script>
      <?php
      include('admin_index.php');
      return true;
    }

    else if($rows['username']==$username && $rows['password']==$password){
      session_start();
      $_SESSION["id"]=$rows['id'];
      ?>
      <script>
       alert('Login Successful! Enjoy Shopping!');
      </script>
      <?php
      include('cust_index.php');
      return true;
      }
    }

    ?>
      <script>
       alert('Login failed! Username or password wrong!');
      </script>
      <?php
      include('index.php');
      return false;
      mysql_close();
  ?>
</body>

</html>
