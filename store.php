<?php 

include_once 'mysql_connection.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
   
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }

    $sql = "INSERT INTO users (name, surname, email) VALUES ('$name', '$surname', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?message=success");
    } else {
        header("Location: index.php?message=error");
    }



