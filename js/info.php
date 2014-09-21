
<?php
include("block/bd.php");
$id = $_POST['id'];
$table = $_POST['table'];
$query = mysql_query("SELECT * FROM $table  WHERE id='$id'");
$row = mysql_fetch_array($query);
echo json_encode($row);

?>