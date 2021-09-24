<?php
    $e_mail = "";
    $Password = "";
    $error = "";

    if(isset($_POST['submitbtn'])){

        $e_mail = $_POST['e_mail'];
        $Password = $_POST['password']; 

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "reg_login";

        $conn = new mysqli($servername, $username, $password, $dbname) or die("Unable to connect");

        $result= mysqli_query($conn,"SELECT * FROM register where e_mail ='$e_mail'and password = '$Password'") or die("failed to query database".mysqli_error());

        $row = mysqli_fetch_array($result);
        if ($result->num_rows==1) {

            if ($row['e_mail'] == $e_mail && $row['password'] == $Password){
                $_SESSION["userid"] = $row['e_mail'];
                header("Location: index.php");
            } else {
                $error =  "Failed to Login!";
            }

        } else {
            $error =  "Login Credentials do not match";
        
        }
       
    }

?>
 