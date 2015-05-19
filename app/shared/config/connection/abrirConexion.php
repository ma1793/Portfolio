<?php

        $servername = "localhost";
        $username = "ma1793";
        $password = "sistema";
        $dbname = "portafolio_db";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }