<?php 

//Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "my-portfolio";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if($conn){
    //Database connection succesful
} else {
    echo "Connection failed" . mysqli_connect_error();
}

?>