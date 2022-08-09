<?php
require("Sajax.php");

include("funcionx.php");

echo "<script type='text/javascript' src=funcionx.js></script>";

error_reporting(0);
$motivo=$_GET['motivo'];



?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html;" />
	<meta name="author" content="sistemasbellmann@gmail.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Login | Clinica</title>
<link href="assets/img/barcode.gif" rel="shortcut icon" type="image/png" />
<link href="assets/img/barcode.gif" rel="icon" type="image/png" />
	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Theme -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

	<!-- Login -->
	<link href="assets/css/login.css" rel="stylesheet" type="text/css" />

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

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Beautiful Checkboxes -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>

	<!-- Slim Progress Bars -->
	<script type="text/javascript" src="plugins/nprogress/nprogress.js"></script>

	<!-- App -->
	<script type="text/javascript" src="assets/js/login.js"></script>
	<script>
	$(document).ready(function(){
		"use strict";

		Login.init(); // Init login JavaScript
	});
	</script>
</head>


<?php


function olvidopass($msg)
{

$titulom = "Recordatorio de Contraseña";

include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE email = '$msg' LIMIT 1" ;
$result = mysql_query ( $query) ;
$esta = mysql_num_rows($result);
while($row = mysql_fetch_array($result))
{
$pass = $row["pass"];
$nombre = $row["apellido"].", ".$row["nombre"];
}

if ( $esta == 1 ){
$texto = "

<html>

<body>

<font face=verdana size=2>Mensaje recibido desde la <b>Camara Argentina del Libro</b><br><br>

<font face=verdana size=2>Hola ".$nombre."<br>";

include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE email = '$msg'  " ;
$result = mysql_query ( $query) ;
while($row = mysql_fetch_array($result))
{
$pass = $row["pass"];
}
$texto = $texto."</body>
</html>";	

$tmp = "<i class='icon-ok success-icon'></i><span>Hemos enviado a su email la Contrase&ntilde;a.</span>";

require_once 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = "mail.ver.org.ar";
$mail->Port = 25;
$mail->SMTPAuth = false;
$mail->setFrom('ver@ff.org.ar', 'Registro ISBN');
$mail->addAddress($msg, '');
$mail->Subject = $titulom;
$mail->msgHTML($texto);
if (!$mail->send()) {
//    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
//    echo "Message sent!";
}

$accion = "Olvido contrasenia";
$textoaccion = $msg;
include("conexion-cupea.php");
$query44 = "INSERT INTO acciones ( libro, editorial, accion, texto, fecha, gestor ) VALUES ( '' , '', '$accion', '$textoaccion' , '".date("c")."', '$idgestor' ); ";
$result44 = mysql_query ( $query44);

;};

if ( $esta == 0 ){
	
$tmp = "<i class='icon-ok danger-icon'></i><span>No esta registrado</span>";

;};

return $tmp;

}

?>

<script>
function volver()
{
window.open('login.php','_top');
}
</script>

<body class="login">
	<!-- Logo -->
	<div class="logo">
		<img src="assets/img/logo.png" alt="logo" />
		<strong>GESTION CLINICA</strong>
	</div>
	<!-- /Logo -->

	<!-- Login Box -->
	<div class="box">
		<div class="content">
			<!-- Login Formular -->
			<form class="form-vertical login-form" action="configura.php" method="POST" name=frm>
			
				<input type="hidden" name=mostrador value="<?php echo $mostrador;?>">

				<!-- Title -->
				<h3 class="form-title">Ingresar a su cuenta<?php if ( $mostrador == 1 ){?><br><b><font color="#ff0000">MOSTRADOR</font><?php ;};?></b></h3>

				<!-- Error Message -->
				<div class="alert fade in alert-danger" style="display: none;">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Ingrese el usuario y la contraseña.
				</div>

<?php if ( $motivo == 1){	?><div class="alert fade in alert-danger" style="display: block;"><i class="icon-remove close" data-dismiss="alert"></i>Su email no esta registrado, debe crear una cuenta.</div><?php ;}; ?>
<?php if ( $motivo == 2){	?><div class="alert fade in alert-danger" style="display: block;"><i class="icon-remove close" data-dismiss="alert"></i>Su contraseña es erronea</div><?php ;}; ?>
				
				<div class="form-group">
					<div class="input-icon">
						<i class="icon-envelope"></i>
						<input type="text" name="b1" class="form-control" placeholder="Usuario" data-rule-required="true"  />
					</div>
				</div>
				<div class="form-group">
					<!--<label for="password">Password:</label>-->
					<div class="input-icon">
						<i class="icon-lock"></i>
						<input type="password" name="b2" class="form-control" placeholder="Contraseña" data-rule-required="true" data-msg-required="Por favor ingrese su Contraseña." />
					</div>
				</div>
				<!-- /Input Fields -->

				<!-- Form Actions -->
				<div class="form-actions">
<!--					<label class="checkbox pull-left"><input type="checkbox" class="uniform" name="remember"> Remember me</label>-->
					<button type="submit" class="submit btn btn-primary pull-right" >
					
					Ingresar 
					
					<i class="icon-angle-right"></i>
					
					</button>
				</div>
				
				<input type="hidden" name=pp value="1">
				
				<script>
				function entra()
				{
				
				document.frm.submit();	
					
				}
				</script>
				
			</form>
			
		</div> <!-- /.content -->

		<!-- Forgot Password Form -->
		<div class="inner-box">
			<div class="content">
				<!-- Close Button -->
				<i class="icon-remove close hide-default"></i>

				<!-- Link as Toggle Button -->
				<a href="#" class="forgot-password-link">Olvidó su Contraseña?</a>

				<!-- Forgot Password Formular -->
				
<?php
//$hidepass = " hide-default" ;
if ( $motivo == 2 ){$hidepass = " " ;};
?>
				
				<form class="form-vertical forgot-password-form hide-default" name="frmolvido" action="login.php" method="get">
				<input type="hidden" name="olvido" value="1">
				
					<!-- Input Fields -->
					<div class="form-group">
						<!--<label for="email">Email:</label>-->
						<div class="input-icon">
							<i class="icon-envelope"></i>
							<input type="text" name="emailolvido" class="form-control" placeholder="Ingrese su dirección de email" data-rule-required="true" data-rule-email="true" data-msg-required="Ingrese su dirección de email." />
						</div>
					</div>
					<!-- /Input Fields -->

					<div id=olvidodiv style="display: block;">
					<button type="submit" class="submit btn btn-success btn-block">Enviar</button>
					
					<br>
					<!--<br>
					<button type="button" class="btn btn-default btn-block" onclick="verdemo();">Ver demostración</button>
					-->
					</div>
					
					<div id=olvidodiv1 style="display: none;"><img border=0 src=assets/img/ajax-loading-input.gif> enviando...aguarde</div>
					
				</form>
				<!-- /Forgot Password Formular -->

				<!-- Shows up if reset-button was clicked -->
			
			<div class="forgot-password-done hide-default">
			
			<div id=verolvidopass></div>
			
			</div>
			
			
			</div> <!-- /.content -->
		</div>
		
		<script>
		
		function verdemo()
		{
		window.open("https://vimeo.com/album/3480486/video/133463373","_blank");
		}
		<?php
		if ( $motivo == 2 ){echo "document.frmolvido.emailolvido.focus(); " ;};
		?>
				function olvidopassx()
				{
				var e = document.getElementById("olvidodiv");   e.style.display = 'none';
				var e = document.getElementById("olvidodiv1");   e.style.display = 'block';
				ids = document.frmolvido.emailolvido.value;
				olvidopass(ids);
				}
				</script>
		
		<!-- /Forgot Password Form -->
	</div>
	<!-- /Login Box -->

	<!-- Footer -->
	<!--<div class="footer">
		<a href="#" class="sign-up">No tengo creada ninguna cuenta? <strong>Crear nueva cuenta</strong></a>
	</div>-->
	
	<br>
	<br>
	<!-- Single-Sign-On (SSO) -->
	<!--<div class="single-sign-on">
		<span>o con..</span>

		<button class="btn btn-facebook btn-block">
			<i class="icon-facebook"></i> Ingresar con Facebook
		</button>

		<button class="btn btn-twitter btn-block">
			<i class="icon-twitter"></i> Ingresar con Twitter
		</button>

		<!--<button class="btn btn-google-plus btn-block">
			<i class="icon-google-plus"></i> Sign in with Google
		</button>
	</div>-->
	
	<!-- /Single-Sign-On (SSO) -->

	
	<!-- /Footer -->
	<!-- Footer -->
	<!-- /Footer 
	


		<div class="panel-footer">Desarrollado por <a href="mailto:sistemasbellmann@gmail.com">SistemasBellmann</a></div>-->


</body>
</html>