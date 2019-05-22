<?php
if(isset($_POST["upload"])){

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
include('config.php');
$table_name="photo";
$image=$_FILES["image"]["name"];
$text=$_POST["description"];


// Check file size
  if ($_FILES["image"]["size"] > 100000000) {
    echo "Sorry, your file is too large.";

  }
// Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" )
  {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  }
  else
  {
    $sql="INSERT INTO $table_name(image,text) VALUES ('$image','$text')";
    $result= mysql_query($sql);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
    {
    ?><script>
    		alert("File uploaded!");
    </script>
    <?php
    }else{
    	echo "Sorry, there was an error uploading your file.";
    }
  }
}

?>
