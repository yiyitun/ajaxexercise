<?php


 require 'db_config.php';


 $id  = $_POST["id"];


 $sql = "DELETE FROM tbajax WHERE id = '".$id."'";


 $result = $mysqli->query($sql);


 echo json_encode([$id]);


?>