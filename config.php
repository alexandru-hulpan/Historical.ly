<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "htmlusers";

$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
    die("Conexiune esuata: " .mysqli_connect_error());
}
?>