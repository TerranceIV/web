<?php
// define variables and set to empty values
$username_Err = $first_name_Err = $last_name_Err = $password_Err = $password_2_Err = $email_Err = $phone_no_Err  = $address_Err="";
$username = $first_name = $last_name = $password = $password_2 = $email = $phone_no  = $address="";



if (isset($_POST['register']))
{
  //validate first_name
  if (empty($_POST["first_name"]))
  {
    $first_name_Err = "* First name is required";
  }
  else
  {
    $first_name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$first_name))
    {
      $first_name_Err = "* Only letters and white space allowed";
    }
  }

  //validate last_name
  if (empty($_POST["last_name"]))
  {
    $last_name_Err = "* Last name is required";
  }
  else
  {
    $last_name = test_input($_POST["last_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$last_name))
    {
      $last_name_Err = "* Only letters and white space allowed";
    }
  }

  //validate password
  if (empty($_POST["password"]))
  {
    $password_Err = "* Password is required";
  }
  else
  {
    $password = test_input($_POST["password"]);
    if (!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/",$password))
    {
      $password_Err = "* Invalid Password format<br/>
      Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
    }
  }

  //validate password_2
  if (empty($_POST["password_2"]))
  {
    $password_2_Err = "* Please re-enter the password";
  }
  else
  {
    if ($_POST["password_2"] != $_POST["password"])
    $password_2_Err = "* Password not same!";
  }

  //validate email
  if (empty($_POST["email"]))
  {
    $email_Err = "*Email is required";
  }
  else
  {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $email_Err = "* Invalid email format";
    }
  }

  //validate phone_no
  if (empty($_POST["phone_no"]))
  {
    $phone_no_Err = "* Phone number is required";
  }
  else
  {
    $phone_no = test_input($_POST["phone_no"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$phone_no))
    {
      $phone_no_Err = "* Only number allowed";
    }
  }
  //validate address
  if (empty($_POST["address"]))
  {
    $address_Err = "* Address is required";
  }
  else
  {
    $address =test_input($_POST["address"]);

  }
}
//function to test input format
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
