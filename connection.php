
<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
$mysqli_host = 'localhost'; 
  
// user name is root 
$mysqli_user = 'root'; 
  
// function to connect with database having  
// argument host and user name 
if (!@mysqli_connect ($mysqli_host, $mysqli_user)) 
{ 
    die('Cannot connect to database'); 
} 
else
{ 
    // database name is reg_login

    if (@mysqli_select_db('reg_login')) 
    { 
        echo "Connection Success"; 
    } 
    else
    { 
        die('Cannot connect to database'); 
    } 
} 
?> 
