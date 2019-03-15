<?php
$servername = "localhost";
$username = "root";
$password = "password@123";
$dbname = "emp";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    echo $e;
}
?>