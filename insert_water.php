<?php
include 'include/config.php';

$water_registered = $_POST['water_registered'];
$water_used = $_POST['water_used'];

$sql = "INSERT INTO water_stock(amount_registered, amount_used) VALUES('".$water_registered."','".$water_used."')";

var_dump($conn->query($sql));
if($conn->query($sql) != true)
{
    var_dump("could not save!");
}
?>