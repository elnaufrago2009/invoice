<?php
require_once "curl.php";
require_once "sunat.php";
$cliente = new Sunat();

if (isset($_POST['consultar'])) {
    $ruc    = $_POST['ruc'];
    $sunat  = json_encode($cliente->BuscaDatosSunat($ruc), JSON_PRETTY_PRINT);
    $objeto = json_decode($sunat);
    print($objeto);
}

?>
<form class="form-horizontal" role="form" method="post" action="index2.php">
	<input type="text" name="ruc" id="ruc" placeholder="20484736531">
	<button name="consultar" type="submit">Buscar</button>
</form>