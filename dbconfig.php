<?php
    $conn = mysqli_connect("localhost","root","","insert");


    if($conn->connect_error){
        echo $conn->connect_error;
    }
