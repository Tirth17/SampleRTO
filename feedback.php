<?php
$a=$_POST["firstname"];
$b=$_POST["lastname" ];
$c=$_POST["complaint"];
$d=$_POST["feedback" ];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO feedback(firstname,lastname,complaint,feedback) VALUES ('$a', '$b','$c', '$d')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>