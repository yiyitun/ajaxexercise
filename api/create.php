<?php

require 'db_config.php';

 $post = $_POST;

  $sql = "INSERT INTO tbajax (name,email) 

 VALUES ('".$post['title']."','".$post['description']."')";

 $result = $mysqli->query($sql);

 $sql = "SELECT * FROM tbajax Order by id LIMIT 1"; 

$result = $mysqli->query($sql);

$data = $result->fetch_assoc();

echo json_encode($data);


?>