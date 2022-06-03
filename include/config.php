<?php
$conn = new mysqli("localhost", "root", "P@ssW0rd", "constructionms");

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
