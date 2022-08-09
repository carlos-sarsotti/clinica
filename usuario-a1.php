<?php
//include("configura.php");
session_start();
$b1 = $_SESSION['b1'];
$b2 = $_SESSION['b2'];
$perfilusuario2 = $_SESSION['perfilusuario2'];
$nombreusuario = $_SESSION['nombreusuario'];
$idgestor = $_SESSION['idgestor'];
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

	<script type="text/javascript" src="plugins/bootstrap-inputmask/jquery.inputmask.min.js"></script>
	
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
</head>

<body>

	
<?php
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
include("header-page.php");

//if ( $perfilusuario == 1 OR $perfilusuario == 2 ){$iduser = $idgestor ;};

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$iduser=$_POST['iduser'];
$ingresar=$_POST['ingresar'];
if ( $ingresar == 1 AND $iduser > 0 ){

include("conexion-cupea.php");
$query4 =  "UPDATE users SET nombre = '$nombre', apellido = '$apellido', tel = '$telefono', celular = '$celular' WHERE id = '".$iduser."' LIMIT 1";
$result4 = mysqli_query($bd, $query4);

//echo $query4;

echo "<script>window.open('usuario-b.php','_top');</script>";

;};


$vertipo1 = "block" ;$vertipo2 = "none" ;$vertipo3 = "none" ;

if ( $idgestor > 0 ){
include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( id = '".$idgestor."' ) LIMIT 1 ";
//echo $query;
$result = mysqli_query($bd, $query);
while($row = mysqli_fetch_assoc($result))
{
$nombre = $row["nombre"];
$apellido = $row["apellido"];
$dni = $row["dni"];
$email = $row["email"];
$pass = $row["pass"];
$sexo = $row["sexo"];
$telefono = $row["tel"];
$direccion = $row["direccion"];
$cp = $row["cp"];
$ciudad = $row["ciudad"];
$provincia = $row["prov"];
$pais = $row["pais"];
$telefono = $row["tel"];
$celular = $row["celular"];
$perfil = $row["perfil"];
$perfil1 = $row["perfil1"];
$estado = $row["estado"];
$token = $row["idmd5"];

if ( $perfil == 1 ){$vertipo1 = "block" ;$vertipo2 = "none" ;$vertipo3 = "none" ;};
if ( $perfil == 2 ){$vertipo2 = "block" ;$vertipo1 = "none";$vertipo3 = "none" ;};
if ( $perfil == 3 ){$vertipo3 = "block" ;$vertipo1 = "none";$vertipo2 = "none" ;};

}



;};

?>

				<!--=== Page Content ===-->
				<div class="row">
					<!--=== Validation Example 1 ===-->
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-male"></i> DATOS DE USUARIO  <?php echo $perfil1;?></h4>
							</div>
							<div class="widget-content">
								<form name=frm class="form-horizontal row-border" id="validate-1" action="usuario-a1.php" method="POST" enctype='multipart/form-data' >
									<input type="hidden" name="ingresar" value="1"> 
									<input type="hidden" name="iduser" value="<?php echo $idgestor;?>"> 
									
									
									
								
									
									<div class="form-group">
										<label class="col-md-3 control-label">Nombre <span class="required">*</span></label>
										<div class="col-md-9">
											<input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control required">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Apellido <span class="required">*</span></label>
										<div class="col-md-9">
											<input type="text" name="apellido" value="<?php echo $apellido;?>" class="form-control required">
										</div>
									</div>
									
									
									
									<div class="form-group">
										<label class="col-md-3 control-label">Telefono </label>
										<div class="col-md-9">
											<input type="text" name="telefono" value="<?php echo $telefono;?>" class="form-control">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Celular </label>
										<div class="col-md-9">
											<input type="text" name="celular" value="<?php echo $celular;?>" class="form-control">
										</div>
									</div>
									
													
													
									<div class="form-actions">
										<input type="submit" value="Guardar datos" class="btn btn-primary pull-right">
									</div>
								</form>
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