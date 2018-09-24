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
  $sunat_ruc = $datos['result']['RUC'];
  $sunat_razon_social = $datos['result']['RazonSocial'];
  $sunat_razon_comercial = $datos['result']['NombreComercial'];
  $sunat_direccion = $datos['result']['Direccion'];

  // si existe el ruc
  if ($datos['success'] == 'true'){
    $ruc_count = $conn->query("select count(*) counte from users where ruc='$ruc'")->fetch_array(MYSQLI_ASSOC);
    // si es nuevo ruc en la bd
    if ($ruc_count['counte'] == 0){

      // crear emisor
      $inser_emisor = "insert into emisores (ruc,razon_social,razon_comercial) values ('$sunat_ruc','$sunat_razon_social','$sunat_razon_comercial')";
      $conn->query($inser_emisor);

      // crear local
      $emisor_id = $conn->insert_id;
      $crear_local = "insert into locales (codigo,descripcion,direccion,emisor_id) values ('001','$sunat_razon_social','$sunat_direccion','$emisor_id')";
      $conn->query($crear_local);
      //echo $conn->insert_id;


      //$user_inser = "insert into users (nombre,email,password,ruc) values ('$nombre','$email','$password','$ruc')";
      //$conn->query($user_inser);

      echo json_encode($datos);
    }else{
      echo 'false';
    }
  }else{
    echo 'false';
  }


?>