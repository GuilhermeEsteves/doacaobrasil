<?php
    
    // Create connection
    // $conn = new mysqli($servername, $username, $password); 

    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // } 
    
    //echo "Connected successfully";

    function selectQuery($transa){
        $servername = "localhost";
        $username = "root";
        $password = "rexona";
        $conn = new mysqli($servername, $username, $password); 
        return $conn->query($transa);
    }
?>