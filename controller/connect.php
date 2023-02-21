<?php
    $connect = new mysqli("localhost","root","","snn");

    if($connect->connect_error) {
        echo ("Connection Failed: " . $connect->connect_error ."<br>");
        var_dump($connect);
    }
?>