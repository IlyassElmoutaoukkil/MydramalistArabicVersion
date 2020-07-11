<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dramalist";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$connp = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
$connp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>