<?php
   session_start(); 
   include('match.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Oregano' rel='stylesheet'>
    
    <title>Login</title>
    
    <style>
    body {
        background-image: url(images/index5.jpg);
        background-size: cover;
        font-family: 'Oregano';font-size: 22px;
    }
    h1 {
        background-color: rgb(95, 99, 99);
        border-radius: 20px;
        padding: 2px 2px 10px 2px;
        font-family: 'Akronim';font-size: 22px;
    }
    ::placeholder{
        font-style: italic;
    }
    input{
        border-style: solid;
    }
    button {
        background-color: #4CAF50;
        border-radius: 10px;
        border: none;
        color: rgb(255, 255, 255);
        padding: 2px 15px 5px 15px; 
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
    }
    .jumbotron {
        background: rgb(230, 223, 223); 
        background: rgba(255, 255, 255, 0.5);  
        padding-top: 24px;
        padding-bottom: 28px;
        font-size: 17px;
        cursor: pointer;
        width: 650px;
    }
    .fa {
        padding: 10px;
        font-size: 10px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
    }

    .fa-google {
        background: #dd4b39;
        color: white;
    }
    </style>

    <body>
        <form action="#" method="POST">
            <center> 
            <div class="container">
                <div class="jumbotron">
    <h1 style="color: rgb(235, 235, 222);">LOGIN</h1>
    <strong>Email id: </strong><input type="email" name="e_mail" placeholder="Enter email-id" required><br><br>
    <strong>Password: </strong><input type="password" name="password" placeholder="Enter password" required><br><br>

    <button type="submit" name="submitbtn">submit</button><br>
    
    <!--php link-->
    <?php echo $error; ?>
    
    <br><br>Don't have an account?<br>
    <a href="register.html"><input type="button" value="Create now"></a><br><hr>
    Login with<br>
    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
    <a href="https://twitter.com/login?lang=en" class="fa fa-twitter"></a>
    <a href="https://www.google.com/intl/en-GB/gmail/about/" class="fa fa-google"></a>
    </center>
    </form>
    </div>
    </head>     
    </body>
</html>
