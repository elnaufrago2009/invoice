<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.css" >
  <link rel="stylesheet" href="/assets/css/style.css">

  <link rel="stylesheet" href="/vendor/components/font-awesome/css/fontawesome-all.css">

  <script src="/assets/js/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <title>Lineysoft.com</title>
</head>
<body class="bg-light" style="min-height: 50rem; padding-top: 4.5rem;">

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info p-2">
  <a class="navbar-brand" href="/"><i class="fa fa-file-alt"></i> Factura Electronica</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comprobantes</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <h6 class="dropdown-header">Documentos electrónicos</h6>
          <a class="dropdown-item" href="#">Mostrar Todo</a>
          <a class="dropdown-item" href="#">Crear Factura</a>
          <a class="dropdown-item" href="#">Crear Boleta</a>
          <a class="dropdown-item" href="#">Crear Nota Credito</a>
          <a class="dropdown-item" href="#">Crear Nota Debito</a>
          <a class="dropdown-item" href="#">Crear Baja</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogo</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <h6 class="dropdown-header">Productos y Servicios</h6>
          <a class="dropdown-item" href="#">Mostrar Todo</a>
          <a class="dropdown-item" href="#">Crear Nuevo</a>
          <h6 class="dropdown-header">Categorias</h6>
          <a class="dropdown-item" href="#">Mostrar Todo</a>
          <a class="dropdown-item" href="#">Crear Nuevo</a>
          <h6 class="dropdown-header">Herramientas</h6>
          <a class="dropdown-item" href="#">Subir Catalogo Excel</a>
          <a class="dropdown-item" href="#">Unidades de Medida</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entidades</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <h6 class="dropdown-header">Clientes y Proveedores</h6>
          <a class="dropdown-item" href="#">Mostrar Todos</a>
          <a class="dropdown-item" href="#">Crear Nuevo</a>
          <a class="dropdown-item" href="#">Subir Entidad Excel</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compras</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <h6 class="dropdown-header">Compras</h6>
          <a class="dropdown-item" href="#">Mostrar Todos</a>
          <a class="dropdown-item" href="#">Nueva Compra</a>
          <a class="dropdown-item" href="#">Comprobantes Recibidos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resumenes</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <h6 class="dropdown-header">Resumenes diarios de Boletas</h6>
          <a class="dropdown-item" href="#">Resumen Diario de Boletas</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="/register" class="nav-link"><i class="fa fa-sign-in-alt"></i> Registro</a>
      </li>
    </ul>
  </div>
</nav>