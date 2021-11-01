<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minecraft";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$db = mysqli_connect($servername, $username, $password, $dbname);


//check connection
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}
if ($db == false){
    die("Error: connection error. " . mysqli_connect_error());
}




?>