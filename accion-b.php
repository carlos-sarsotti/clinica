<?php
//include("conexion.php");

require("Sajax.php");

include("funcionx.php");

echo "<script type='text/javascript' src=funcionx.js></script>";


error_reporting(0);

?>

<!DOCTYPE html>
<html lang="es">
<head>
			
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>:: SIGEX ::</title>

<link href="assets/img/barcode.gif" rel="shortcut icon" type="image/png" />
<link href="assets/img/barcode.gif" rel="icon" type="image/png" />

	<!--=== CSS ===-->
    <link rel="stylesheet" href="assets/css/token-input.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/token-input-facebook.css" type="text/css" />
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
<!--	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>-->
	<link href='assets/js/goo1.css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>

	<!-- Forms -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="plugins/fileinput/fileinput.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="plugins/validation/additional-methods.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="plugins/noty/themes/default.js"></script>

	<!-- App -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/plugins.form-components.js"></script>
   	 <script type="text/javascript" src="assets/js/jquery.tokeninput.js"></script>

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	<!-- Demo JS -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/demo/form_validation.js"></script>

<?php

?>
</head>

<body>

	
<?
include("menu.php");
?>


	<div id="container">
	<?php
//include("menu-derecho.php");
?>

		<div id="content">
			<div class="container">
<?php
include("header-menu.php");
//include("header-page.php");

//echo $ingresar." - ".$idmd5;



?>

			
<!--=== Accordion ===-->
				<div class="row">
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header">
								<h4><i class="icon-inbox"></i> Eventos</h4>
								<div class="toolbar">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content">
								<div class="panel-group" id="accordion">
								<?php
if ( $perfilusuario2 == 1 ){$qnoaccion = " AND ( accion <> 'Datos Verificados' ) AND ( accion <> 'Cataloga' ) AND ( accion <> 'Asigna CDD' ) AND ( accion <> 'Asigna ISBN' ) ";};

include("conexion-cupea.php");
//$query =  "SELECT * FROM acciones WHERE tramite = '$idtramite' ".$qnoaccion;
$result = mysqli_query($bd,$query);
//echo $query;
while($row = mysqli_fetch_assoc($result))
{
$id = $row["id"];
$accion = $row["accion"];
$texto = $row["texto"];
$fec1 = $row["fecha"];
$fecha = $fec1[8].$fec1[9]."/".$fec1[5].$fec1[6]."/".$fec1[2].$fec1[3]." ".$fec1[11].$fec1[12].":".$fec1[14].$fec1[15];
$usuario = $row["gestor"];

$usuariox = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM users WHERE ( id = '".$usuario."' ) LIMIT 1";
$result1 = mysqli_query($bd, $query1);
while($row = mysqli_fetch_assoc($result1))
{$usuariox = $row["apellido"].", ".$row["nombre"];}
?>
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<? echo $id;?>"><? echo $accion;?> ( <? echo $fecha;?> ) => <? echo $usuariox;?></a></h3>
</div>
<div id="collapse<? echo $id;?>" class="panel-collapse collapse in">
<div class="panel-body">
<?php echo $texto;?>
</div>
</div>
</div>

<?php
;};
?>
									
									
				
	<br>							
	<br>							
	<input type="button" onclick="volverx();" value="Volver" class="btn btn-warning pull-center">

	<script>
	function volverx()
	{
	 window.history.back();
	}
	</script>
	
							</div>
							
							
							
						</div>
						<!-- /Validation Example 1 -->
						
						
					</div>

				<div class="col-md-6">
		
				</div>

					
				</div>

				<div class="row">
					
				
				
				
				
				
				</div>
				<!-- /Page Content -->
				
				
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>