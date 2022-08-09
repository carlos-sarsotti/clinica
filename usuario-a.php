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
//include("header-page.php");

//if ( $perfilusuario == 1 OR $perfilusuario == 2 ){$iduser = $idgestor ;};
$ingresar=$_POST['ingresar'];
$iduser=$_POST['iduser1'];
if ( $ingresar == 1 AND $iduser > 0 ){

if ( $perfil2 <> "" ){$perfil1 = $perfil2 ;};	
$zona = $_POST['zona'];
$oficina =$_POST['oficina'];
$pass =$_POST['pass'];
$estado =$_POST['estado'];
$perfil =$_POST['perfil'];
$perfil1 =$_POST['perfil1'];
$editorial =$_POST['editorial'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['tel'];
$celular = $_POST['celular'];
include("conexion-cupea.php");
$query4 =  "UPDATE users SET zona = '$zona',  oficina = '$oficina',  pass = '$pass',  estado = '$estado', perfil = '$perfil', perfil1 = '$perfil1', email = '$email' , nombre = '$nombre', apellido = '$apellido', tel = '$telefono', celular = '$celular' WHERE id = '".$iduser."' LIMIT 1";
$result4 = mysqli_query($bd, $query4);

//echo $query4;

echo "<script>window.open('usuario-b.php','_top');</script>";

;};

## NUEVO AUTOR

if ( $ingresar == 1 AND $iduser == 0 ){

if ( $perfil2 <> "" ){$perfil1 = $perfil2 ;};	
	
$tmpf = str_replace ('/', "@", $fechan);
$tmpf =  split ("@", $tmpf, 3);
$diad = $tmpf[0];
$mesd = $tmpf[1];
$anod = $tmpf[2];
$fechan = $anod."-".$mesd."-".$diad;

$tmpf = str_replace ('/', "@", $fechaf);
$tmpf =  split ("@", $tmpf, 3);
$diab = $tmpf[0];
$mesb = $tmpf[1];
$anob = $tmpf[2];
$fechaf = $anob."-".$mesb."-".$diab;

include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( email = '".$email."' ) AND ( pass = '$pass' ) LIMIT 1 ";
$result = mysqli_query($bd, $query);
$esta = mysql_num_rows($result);

if ( $esta == 0 ){
	
$idmd5 = md5($idgestor);	
	
include("conexion-cupea.php");
$query44 = "INSERT INTO users ( zona, oficina,  email, pass, sello, editorial, nombre, apellido, dni, pais, prov, ciudad, direccion, cp, tel, celular, perfil, tipo, estado, perfil1  ) VALUES ( '$zona', '$oficina', '$email', '$pass', '', '$editorial', '$nombre', '$apellido', '', '', '', '', '', '', '$telefono', '$celular', '$perfil', '1', '1'  , '$perfil1' ); ";
$result44 = mysqli_query($bd, $query44);

$gestor1 = 0;
include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( email = '".$email."' ) AND ( pass = '$pass' ) ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($bd, $query);
while($row = mysqli_fetch_assoc($result))
{$gestor1 = $row["id"];}	

$idmd5 = md5($gestor1);	

include("conexion-cupea.php");
$query4 =  "UPDATE users SET idmd5 = '$idmd5' WHERE ( id = '$gestor1' ) LIMIT 1";
$result4 = mysqli_query($bd, $query4);

;};

//echo $query44;

echo "<script>window.open('usuario-b.php','_top');</script>";

;};

$iduser=$_GET['iduser'];
$vertipo1 = "block" ;$vertipo2 = "none" ;$vertipo3 = "none" ;

if ( $iduser > 0 ){
include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( id = '".$iduser."' ) LIMIT 1 ";
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
$oficina = $row["oficina"];
$zona = $row["zona"];
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
								<form name=frm class="form-horizontal row-border" id="validate-1" action="usuario-a.php" method="POST" enctype='multipart/form-data' >
									<input type="hidden" name="ingresar" value="1"> 
									<input type="hidden" name="iduser1" id="iduser1" value="<?php echo $iduser;?>"> 
									<input type="hidden" name="perfil1" id="perfil1" value="0"> 
									
									
									
									<div class="form-group">
										<label class="col-md-3 control-label">Username <span class="required">*</span></label>
										<div class="col-md-9">
											<input type="text" name="email" value="<?php echo $email;?>"  class="form-control">
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-md-3 control-label">Password <span class="required">*</span></label>
										<div class="col-md-9">
											<input type="password" name="pass" value="<?php echo $pass;?>" class="form-control required">
										</div>
									</div>
									
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
										<label class="col-md-3 control-label">Perfil <span class="required">*</span></label>
										<div class="col-md-9">
											<select name="perfil" class="col-md-12 select2 full-width-fix required" onchange="estipo();">
											<option></option>
															<?php
															include("conexion-cupea.php");
															$query =  "SELECT * FROM perfiles ORDER BY Nombre " ;
															$result = mysqli_query($bd, $query) ;
															while($row = mysqli_fetch_assoc($result))
															{
															$sel = "";
															if ( $row["perfilId"] == $perfil ){$sel = " SELECTED";};
															echo "<option value='".$row["perfilId"]."' ".$sel.">".$row["Nombre"]."</option>";
															}
															?>

											</select>
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-md-3 control-label">Oficina <span class="required">*</span></label>
										<div class="col-md-9">
											<select name="oficina" class="col-md-12 select2 full-width-fix required" >
											<option></option>
															<?php
															include("conexion-cupea.php");
															$query =  "SELECT * FROM oficinas  ORDER BY oficina " ;
															$result = mysqli_query($bd, $query) ;
															while($row = mysqli_fetch_assoc($result))
															{
															$sel = "";
															if ( $row["ofic"] == $oficina ){$sel = " SELECTED";};
															echo "<option value='".$row["ofic"]."' ".$sel.">".$row["oficina"]." (".$row["ofic"].")</option>";
															}
															?>

											</select>
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-md-3 control-label">Zona <span class="required">*</span></label>
										<div class="col-md-9">
											<select name="zona" class="col-md-12 select2 full-width-fix required" >
											<option></option>
															<?php
															include("conexion-cupea.php");
															$query =  "SELECT * FROM zona  ORDER BY id " ;
															$result = mysqli_query($bd, $query) ;
															while($row = mysqli_fetch_assoc($result))
															{
															$sel = "";
															if ( $row["id"] == $zona ){$sel = " SELECTED";};
															echo "<option value='".$row["id"]."' ".$sel.">".$row["id"]." (".$row["nombre"].")</option>";
															}
															?>

											</select>
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
									
											
									
									<div class="form-group">
										<label class="col-md-3 control-label">Estado </label>
										<div class="col-md-9">
											<select name="estado" class="col-md-12 select2 full-width-fix required">
											
											<?php 
											if ( $estado == 2 ){$sel1 = " SELECTED";};
											if ( $estado == 1 ){$sel2 = " SELECTED";};
											if ( $estado == 0 ){$sel3 = " SELECTED";};
											
											echo "<option value='0' ".$sel3.">Pendiente</option>";
											echo "<option value='2' ".$sel1.">Inactivo</option>";
											echo "<option value='1' ".$sel2.">Activo</option>";
											
											?>

											</select>
										</div>
									</div>
													
													
									<div class="form-actions">
										<input type="submit" value="Ingresar datos" class="btn btn-primary pull-right">
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