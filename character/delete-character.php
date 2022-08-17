<?php 
    session_start();
    $name = $_GET["name"];

    include_once "../database.php";

    $sql = "delete from characters where name='$name'";

    if (mysqli_query($connection, $sql)) {
        mysqli_close($connection);
        header("Location: ../main/mainPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        mysqli_close($connection);
    }
?>