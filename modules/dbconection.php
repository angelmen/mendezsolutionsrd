<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  global $conn;
} catch(PDOException $e) {
}
?>