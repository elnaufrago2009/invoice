<?php
  // conexion
  $conn = new mysqli('localhost', 'root', '', 'invoice');

  // error de conexion
  if ($conn->connect_errno) {
    echo "No se pudo conectar a la Base de Datos";
    exit;
  }
?>