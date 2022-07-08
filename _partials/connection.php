<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "MoviePlayer";
    $conn = new mysqli($servername, $username, $password, $database);
    if($conn->connect_error){
        die ("error:" . $conn->connect_error);
    }

?>