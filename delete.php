<?php
    include_once "connection.php";
    include_once "header.php";
    $id = $_GET['id'];
    $delete = "DELETE FROM tbl_users WHERE id=$id";
    $retrieve = mysqli_query($connect,$delete);
    if($retrieve) {
        header("Location:index.php");
    }else {
        echo "Connot delete";
    }
?>
