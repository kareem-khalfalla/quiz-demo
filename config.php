<?php

const STORAGE_PATH = __DIR__ . DIRECTORY_SEPARATOR . 'storage';

$server = "mysql";
$user = "root";
$pass = "secret";
$database = "my_dbname";

$con = mysqli_connect($server, $user, $pass, $database);

if (!$con) {
    die("erreur:" . mysqli_connect_error());
}
