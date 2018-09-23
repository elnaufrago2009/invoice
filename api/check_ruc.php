<?php

  require_once("../vendor/autoload.php");
  require_once("../config/conn.php");
  $cliente = new \Sunat\Sunat();

  // datos post
  $post = json_decode(file_get_contents('php://input'), true);
  $nombre = $post['nombre'];
  $email = $post['email'];
  $password = $post['contra1'];
  $ruc = $post['ruc'];


  // reniec consult ruc
  $datos = $cliente->search($ruc);

  // si existe el ruc
  if ($datos['success'] == 'true'){
    $ruc_count = $conn->query("select count(*) counte from users where ruc='$ruc'")->fetch_array(MYSQLI_ASSOC);
    // si es nuevo ruc en la bd
    if ($ruc_count['counte'] == 0){
      $user_inser = "insert into users (nombre,email,password,ruc) values ('$nombre','$email','$password','$ruc')";
      $conn->query($user_inser);
      echo json_encode($datos);
    }else{
      echo 'false';
    }
  }else{
    echo 'false';
  }


?>