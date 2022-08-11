<?php 
    session_start();
    $username = $_GET["username"];

    include_once "../database.php";

    $sql = "delete from characters where user like '$username'";

    if (mysqli_query($connection, $sql)) {
        // header("Location: list-users.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    $sql = "delete from users where username like '$username'";
    if (mysqli_query($connection, $sql)) {
        mysqli_close($connection);
        // header("Location: list-users.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        mysqli_close($connection);
    }
?>