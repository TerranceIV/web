<?php
include('config.php');
// Get values from form
$table_name1="mirror_record";
$table_name2="door_record";
$table_name3="window_record";
$table_name4="frame_record";

session_start();
if(isset($_SESSION["mID"]))
{
  $mitem_id=$_SESSION["mID"];
}
else{
  $_SESSION["mID"]=0;
}
if(isset($_SESSION["dID"]))
{
  $ditem_id=$_SESSION["dID"];
}
else{
  $_SESSION["dID"]=0;
}
if(isset($_SESSION["wID"]))
{
  $witem_id=$_SESSION["wID"];
}
else{
  $_SESSION["wID"]=0;
}
if(isset($_SESSION["fID"]))
{
  $fitem_id=$_SESSION["fID"];
}
else{
  $_SESSION["fID"]=0;
}

$delete1="DELETE FROM $table_name1 where mirrorID='$mitem_id'";
$result1= mysql_query($delete1);
$delete2="DELETE FROM $table_name2 WHERE doorID='$ditem_id'";
$result2= mysql_query($delete2);
$delete3="DELETE FROM $table_name3 WHERE windowID='$witem_id'";
$result3= mysql_query($delete3);
$delete4="DELETE FROM $table_name4 where frameID='$fitem_id'";
$result4= mysql_query($delete4);
if($result1&&$result2&&$result3&&$result4){
?>
<script type="text/javascript">
  alert("Delete cart successfully!");
  window.location.href = "cust_index.php";
</script>
<?php
}
else {
echo "Delete cart failled";
}
?>
