<?php

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $database = "xemp_company";

    $conn = new mysqli($servername, $username, $password,$database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

?>