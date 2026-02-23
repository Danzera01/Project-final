<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "doe_sorrisos";

$conn = new mysqli($host, $user, $password, $database);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
