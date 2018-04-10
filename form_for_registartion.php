<?php
$a=$_POST["firstname"];
$b=$_POST["lastname" ];
$c=$_POST["email"];
$d=$_POST["addr" ];
$e=$_POST["username"];
$f=$_POST["area" ];
$g=$_POST["password" ];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO reg(firstname,lastname,email,address,username,area,passsword) VALUES ('$a', '$b','$c', '$d','$e', '$f','$g')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>