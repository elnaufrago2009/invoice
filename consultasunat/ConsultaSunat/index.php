<?php
require_once "curl.php";
require_once "sunat.php";
$cliente = new Sunat();

if (isset($_POST['consultar'])) {
    $ruc    = $_POST['ruc'];
    $sunat  = json_encode($cliente->BuscaDatosSunat($ruc), JSON_PRETTY_PRINT);
    $objeto = json_decode($sunat);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consultar RUC - SUNAT</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.panel{
			margin-top: 50px;
			border-radius: 0;
		}
		.panel .panel-heading{border-radius: 0;}
		.btn.btn-flat {
		    -webkit-border-radius: 0;
		    -moz-border-radius: 0;
		    border-radius: 0;
		    -webkit-box-shadow: none;
		    -moz-box-shadow: none;
		    box-shadow: none;
		    border-width: 1px;
		}
		.form-control {
		    font-size: 12px;
		    height: 100%;
		    border-radius: 0;
		    box-shadow: none;
		    width: 100%;
		    height: 32px;
		    padding: 6px 12px;
		}
		.btn {
		    cursor: pointer;
		    vertical-align: middle;
		    margin: 0;
		    position: relative;
		    display: inline-block;
		    color: #fff;
		    -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
		    -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
		    box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
		    -webkit-transition: all .15s ease;
		    -moz-transition: all .15s ease;
		    -o-transition: all .15s ease;
		    transition: all .15s ease;
		    -webkit-border-radius: 2px;
		    -webkit-background-clip: padding-box;
		    -moz-border-radius: 2px;
		    -moz-background-clip: padding;
		    border-radius: 2px;
		    background-clip: padding-box;
		    font-size: 13px
		}

		.btn:hover,
		.btn:focus {
		    color: #fff;
		    border-radius: 0;
		}
		.panel-danger {border-color: #ac4448;}
		.panel-danger > .panel-heading{
			background-color: #ac4448 !important;
			color: #fff;
			border-color: #ac4448;
		}
		.panel-red{border-color: #f34235}
		.panel-red > .panel-heading{
			background-color: #f34235 !important;
			color: #fff;
			border-color: #f34235;
		}
		.panel-orange{border-color: #fe5621}
		.panel-orange > .panel-heading{
			background-color: #fe5621 !important;
			color: #fff;
			border-color: #fe5621;
		}
		.panel-orange{border-color: #fe5621}
		.panel-orange > .panel-heading{
			background-color: #fe5621 !important;
			color: #fff;
			border-color: #fe5621;
		}
		.panel-pink{border-color: #e81d62}
		.panel-pink > .panel-heading{
			background-color: #e81d62 !important;
			color: #fff;
			border-color: #e81d62;
		}
		.panel-morado{border-color: #6639b6}
		.panel-morado > .panel-heading{
			background-color: #6639b6 !important;
			color: #fff;
			border-color: #6639b6;
		}
		.panel-teal{border-color: #009587}
		.panel-teal > .panel-heading{
			background-color: #009587 !important;
			color: #fff;
			border-color: #009587;
		}
		.panel-blue{border-color: #3e50b4}
		.panel-blue > .panel-heading{
			background-color: #3e50b4 !important;
			color: #fff;
			border-color: #3e50b4;
		}
		.panel-light-blue{border-color: #02a8f3}
		.panel-light-blue > .panel-heading{
			background-color: #02a8f3 !important;
			color: #fff;
			border-color: #02a8f3;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<div class="panel panel-blue">
					<div class="panel-heading">
						CONSULTA POR N° DE RUC SIN CAPTCHA DESDE PHP - SUNAT
					</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="post">
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">N° RUC</label>
								<div class="col-lg-9">
									<div class="input-group">
										<input type="text" name="ruc" id="ruc" placeholder="20484736531" required class="form-control" autocomplete="off">
										<span class="input-group-btn">
											<button class="btn btn-info btn-flat" name="consultar" type="submit" id="buscar">
												<span class="glyphicon glyphicon-search"></span>Buscar
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">NÚMERO DE RUC</label>
								<div class="col-lg-9">
									<input type="text" readonly class="form-control" placeholder="RUC" value="<?php echo isset($objeto) ? $objeto->{'RUC'} : ''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">RAZÓN SOCIAL</label>
								<div class="col-lg-9">
									<input type="text" readonly class="form-control" placeholder="RAZÓN SOCIAL" value="<?php echo isset($objeto) ? $objeto->{'RazonSocial'} : ''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">TIPO CONTRIBUYENTE</label>
								<div class="col-lg-9">
									<input type="text" readonly class="form-control" placeholder="TIPO CONTRIBUYENTE" value="<?php echo isset($objeto) ? $objeto->{'Tipo'} : ''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">FECHA DE INSCRIPCIÓN</label>
								<div class="col-lg-9">
									<input type="text" readonly class="form-control" placeholder="FECHA DE INSCRIPCIÓN" value="<?php echo isset($objeto) ? $objeto->{'Inscripcion'} : ''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">DIRECCIÓN</label>
								<div class="col-lg-9">
									<input type="text" readonly class="form-control" placeholder="DIRECCIÓN" value="<?php echo isset($objeto) ? $objeto->{'Direccion'} : ''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">ESTADO</label>
								<div class="col-lg-9">
									<input type="text" readonly class="form-control" placeholder="ESTADO" value="<?php echo isset($objeto) ? $objeto->{'Estado'} : ''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">EMISOR ELECTRÓNICO DESDE</label>
								<div class="col-lg-9">
									<input type="text" readonly class="form-control" placeholder="EMISOR ELECTRÓNICO DESDE" value="<?php echo isset($objeto) ? $objeto->{'EmisionElectronica'} : ''; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-lg-3 control-label">PROFESIÓN U OFICIO</label>
								<div class="col-lg-9">
									<input type="text" readonly class="form-control" placeholder="EMISOR ELECTRÓNICO DESDE" value="<?php echo isset($objeto->{'Oficio'}) ? $objeto->{'Oficio'} : ''; ?>">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>