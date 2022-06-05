<?php
include 'include/config.php';

$cement_id = $_POST['cement_postid'];
$cement_registered = $_POST['cement_registered'];
$cement_used = $_POST['cement_used'];

$sql = "INSERT INTO cement_stock(amount_registered, amount_used) VALUES('".$cement_registered."','".$cement_used."')";

var_dump($conn->query($sql));
if($conn->query($sql) != true)
{
    var_dump("could not save!");
}

$cement_available_sql = "SELECT (amount_registered - amount_used) AS amount_available FROM cement_stock ORDER BY id DESC LIMIT 1;";
$cement_result = $conn->query($cement_available_sql);
$cement_data = mysqli_fetch_array($cement_result);

$update_sql = "UPDATE cement_stock  
SET amount_registered = '".$cement_registered."', amount_used ='".$cement_used."' WHERE id = '".$id."'";

$conn->query($update_sql);
?>