<?php
include 'include/config.php';

$cement_registered = $_POST['cement_registered'];
$cement_used = $_POST['cement_used'];

$sql = "INSERT INTO cement_stock(amount_registered, amount_used) VALUES('".$cement_registered."','".$cement_used."')";

var_dump($conn->query($sql));
if($conn->query($sql) != true)
{
    var_dump("could not save!");
}
?>