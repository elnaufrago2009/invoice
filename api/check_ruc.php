<?php

  require_once("../vendor/autoload.php");
  require_once("../config/conn.php");
  $cliente = new \Sunat\Sunat();
  $ruc = $_GET['ruc'];
  $datos = $cliente->search($ruc);

  // si existe el ruc
  if ($datos['success'] == 'true'){
    $ruc_count = $conn->query("select count(*) counte from users where ruc='$ruc'")->fetch_array(MYSQLI_ASSOC);
    // si es nuevo ruc en la bd
    if ($ruc_count['counte'] == 0){
      echo json_encode($datos['success']);
    }else{
      echo 'false';
    }
  }else{
    echo 'false';
  }


?>