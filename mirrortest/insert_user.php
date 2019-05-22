<?php
include('config.php');
// Get values from form
$username=$_POST['username'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$password=$_POST['password'];
$password_2=$_POST['password_2'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$address=$_POST['address'];


// Insert data into mysql
$sql= "INSERT INTO $table_name(username,first_name,last_name,password,email,phone_no,address)
        VALUES('$username', '$first_name', '$last_name', '$password', '$email', '$phone_no', '$address')";
$result= mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){

}

else {
echo "registration failled";
}


// close connection
mysql_close();
?>
