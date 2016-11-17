<?php
    
    // $servername = "mysql796.umbler.com:41890";
    // $username = "doacaobrasil";
    // $password = "transa123";
    // $db = "doacaobrasil";
    // //Create connection
    // $conn = new mysqli($servername, $username, $password,$db); 

    // //Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // } 
    
    // echo "Connected successfully";

    function selectQuery($query){
        $servername = "mysql796.umbler.com:41890";
        $username = "doacaobrasil";
        $password = "transa123";
        $db = "doacaobrasil";
        $conn = new mysqli($servername, $username, $password,$db); 
        return $conn->query($query);
    }
?>