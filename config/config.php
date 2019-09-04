<?php
session_start();
/* DATABASE CONFIGURATION */


$url = getenv("CLEARDB_DATABASE_URL");

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

// $conn = new mysqli($server, $username, $password, $db);

define('DB_SERVER', $server);
define('DB_USERNAME', $username);
define('DB_PASSWORD', $password);
define('DB_DATABASE', $db);
define("BASE_URL", "http://https://polar-river-28964.herokuapp.com/");

function getDB(){
    $dbhost=DB_SERVER;
    $dbuser=DB_USERNAME;
    $dbpass=DB_PASSWORD;
    $dbname=DB_DATABASE;
try {
    $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
    $dbConnection->exec("set names utf8");
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConnection;
}catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
}