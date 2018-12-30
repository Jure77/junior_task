<?php 


include_once 'mysql_connection.php';

  $id =  $_GET['id'];

  $sql = "SELECT * FROM users WHERE id=$id";

  $query = mysqli_query($conn, $sql);
  $data = mysqli_fetch_row($query);

  header('Content-Type: application/json');
  echo json_encode($data);

?>