<?php

require("conn.php");

function getMessages(){
    if (isset($_COOKIE['message'])){
        echo ('<script>alert("' . $_COOKIE["message"] . '");</script>');
    }   
}

function getSkills(){
    global $conn;
    $query = "SELECT * FROM skills";
    $sql = mysqli_query($conn, $query);

    if($sql){
       foreach ($sql as $row) {
        echo "<h1>" . $row['name'] ."</h1> <p>". $row['description'] ."</p><br>";
       }
    } else {
        //Failure
    }
}

function getProjects(){
    global $conn;
    $query = "SELECT * FROM projects";
    $sql = mysqli_query($conn, $query);

    if($sql){
       foreach ($sql as $row) {
        echo '<div class="card">
        <img src="assets/images/' . $row["image-link"] .'" alt="Avatar" style="width:100%">
        <div class="container">
            <h4><b>' . $row["name"] .'</b></h4>
            <p>' . substr($row["description"], 0, 220) . "..." .'</p>
        </div>
    </div>';
       }
    } else {
        //Failure
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    $sql = mysqli_query($conn, $query);

    if ($sql){
        setcookie('message', "Your message was sent successfully.", time() + 3);
        header ('location: index.php');
    } else {
        echo "Message not sent. Details: " . mysqli_error($conn); 
    }
}

?>