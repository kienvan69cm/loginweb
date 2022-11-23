<?php

    $connect = new mysqli ('localhost:3306', 'root', '', 'login');

    if(!$connect){
        die(mysqli_error($connect));
    }
?>
