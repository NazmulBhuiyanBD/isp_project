<?php
    require_once "conn.php";
    $id = $_GET["id"];
    $query = "DELETE FROM user WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: admindesh1.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>