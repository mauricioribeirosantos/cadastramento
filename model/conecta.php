<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$database = "formularios";

$db = mysqli_connect($serverName, $userName, $password, $database);

if($db->connect_error) {
echo "Erro: " . $db->connect_error;
}