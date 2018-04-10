<?php
$un=$_POST["username1"];
$ps=$_POST["password1" ];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO login1(username,password) VALUES ('$un', '$ps')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>