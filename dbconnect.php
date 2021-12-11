<?php

$conn = mysqli_connect("localhost", "root", "", "artville");

//check connection
if($conn->connect_error){
    echo "Unsuccessful connection";
    die("Connection failed: " . $conn->connect_error);
    
}
?>