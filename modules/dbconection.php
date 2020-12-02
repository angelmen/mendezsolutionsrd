<?php
$servername = "localhost";
$username = "mendezsolutions";
$password = "Cr30Qu33st03sS3gur0";
$dbname = "proyectofinal";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  global $conn;
} catch(PDOException $e) {
}
?>