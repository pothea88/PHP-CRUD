<?php
    $connect = mysqli_connect("localhost","root","","prepare_final");
    if (mysqli_connect_errno()!=0) {
        die("You are fail!!");
    }else {
        echo ("you are successfully!!");
    }
?>