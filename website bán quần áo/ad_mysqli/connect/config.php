<?php
$servername = "localhost";
$username = "root";
$password = " ";

// Create connection
$mysqli = new mysqli("localhost","root","","limerence");

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

?>