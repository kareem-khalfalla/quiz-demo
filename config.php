<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "registerdb";

$con = mysqli_connect($server, $user, $pass, $database);

if (!$con) {
    die("erreur:".mysqli_connect_error());
}
