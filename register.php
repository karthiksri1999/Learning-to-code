<?php

 $UserID = $_POST['user_id'];
 $Name = $_POST['name'];
 $Email = $_POST['e_mail'];
 $Password = $_POST['password'];
 $Mobile = $_POST['Mobile'];
 $Gender = $_POST['Gender'];
 $target_dir = "uploads/";
 $target_file = $target_dir . basename($_FILES["FileUpload"]["name"]);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$imageName = $_FILES["FileUpload"]["name"];
if (move_uploaded_file($_FILES["FileUpload"]["tmp_name"], $target_file)) {

    $sql = "INSERT INTO register (user_id, name, e_mail, password, Mobile, Gender, image) VALUES ('$UserID', '$Name', '$Email', '$Password', '$Mobile', '$Gender', '$imageName')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    echo "Please Choose a Profile Picture";
}

?>

