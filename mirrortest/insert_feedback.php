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
    alert('Thanks for giving us the great feedbacks , we will improve it soon!');
  </script>
<?php

include('cust_index.php');
}
else {
echo "registration failled";
}


// close connection
mysql_close();
?>
