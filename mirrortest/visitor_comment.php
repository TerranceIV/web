<!DOCTYPE html>
<html>
<head>
  <link href='/css/style_index.css' type="text/css" rel="stylesheet">
</head>
<body>
  <?php
  include('config.php');

  $email=$_POST['email'];
  $comment=$_POST['comment'];
  $table_name="feedback";
  // Insert data into mysql
  $sql= "INSERT INTO $table_name(email,comment)VALUES('$email','$comment')";
  $result= mysql_query($sql);

  if($result){
  ?>
    <script>
      alert('Thanks for give us great feedback , we will improve it soon!');
    </script>
  <?php

  include('index.php');
  }
  else {
  echo "registration failled";
  }


  // close connection
  mysql_close();
  ?>
</body>

</html>
