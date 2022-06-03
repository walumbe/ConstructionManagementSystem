<?php
include 'include/config.php';

$brick_registered = $_POST['brick_registered'];
$brick_used = $_POST['brick_used'];

$sql = "INSERT INTO brick_stock(amount_registered, amount_used) VALUES('".$brick_registered."','".$brick_used."')";

var_dump($conn->query($sql));
if($conn->query($sql) != true)
{
    var_dump("could not save!");
}
?>