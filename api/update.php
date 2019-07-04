<?php


  require 'db_config.php';


  $id  = $_POST["id"];
  $post = $_POST;


  $sql = "UPDATE tbajax SET name = '".$post['title']."'
    ,email = '".$post['description']."' 
    WHERE id = '".$id."'";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM tbajax WHERE id = '".$id."'"; 


  $result = $mysqli->query($sql);


  $data = $result->fetch_assoc();


  echo json_encode($data);


?>