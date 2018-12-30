<?php

include_once 'mysql_connection.php';


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $id = $_POST['id'];
   
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }

    $sql = "UPDATE users SET name='$name', surname='$surname', email='$email' WHERE ID='$id'";

    $result = mysqli_query($conn, $sql);
    
    if($result === TRUE){
        echo '<h3>Successfully updated</h3>';
    } else {
        echo 'Failed to update';
    }


