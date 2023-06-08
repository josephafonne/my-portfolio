<?php

require("conn.php");

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

?>