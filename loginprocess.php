<?php

 $Email = $_POST['e_mail'];
 $Password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname="reg_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register2(e_mail, password) VALUES ('$Email', '$Password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
