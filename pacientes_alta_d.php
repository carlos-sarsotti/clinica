<?php
session_start();
$b1 = $_SESSION['b1'];
$b2 = $_SESSION['b2'];
$perfilusuario2 = $_SESSION['perfilusuario2'];
$nombreusuario = $_SESSION['nombreusuario'];
$idgestor = $_SESSION['idgestor'];
if (!isset($ingresar)) { $ingresar = "" ; } ;
if (!isset($dni1)) { $dni1 = "" ; } ;
if (!isset($genero1)) { $genero1 = "" ; } ;
if (!isset($apellido1)) { $apellido1 = "" ; } ;
if (!isset($nombre1)) { $nombre1 = "" ; } ;
if (!isset($correo1)) { $correo1 = "" ; } ;
if (!isset($telef1)) { $telef1 = "" ; } ;
if (!isset($fechan)) { $fechan = "" ; } ;
if (!isset($obrasoc)) { $obrasoc = "" ; } ;
if (!isset($id_turnos1)) { $id_turnos1 = "" ; } ;
if (!isset($id_turnos)) { $id_turnos = "" ; } ;
?>

<!DOCTYPE html>
<html lang="es">
<head>
			<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link href="assets/img/barcode.gif" rel="shortcut icon" type="image/png" />
<link href="assets/img/barcode.gif" rel="icon" type="image/png" />

	<title>:: CLINICA :</title>

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
	<script type="text/javascript" src="plugins/bootstrap-multiselect/bootstrap-multiselect.min.js"></script>
	
	<!-- Pickers -->
	<script type="text/javascript" src="plugins/pickadate/picker.js"></script>
	<script type="text/javascript" src="plugins/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="plugins/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

	<!-- DataTables -->
	<script type="text/javascript" src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="plugins/datatables/DT_bootstrap.js"></script>
	<script type="text/javascript" src="plugins/datatables/responsive/datatables.responsive.js"></script> <!-- optional -->

	<!-- App -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/plugins.form-components.js"></script>
   	 <script type="text/javascript" src="assets/js/jquery.tokeninput.js"></script>
	<link rel="stylesheet" href="plugins/datepicker/datepicker3.css"> 
	<script src="plugins/datepicker/bootstrap-datepicker.js"></script>


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
		<script type="text/javascript" src="assets/js/demo/ui_general.js"></script>

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


if ( $ingresar == 2){
$id_turnos = $_POST['id_turno'];
$dni=$_POST['dni'];
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$genero=$_POST['genero'];
$telef=$_POST['telef'];
$correo=$_POST['correo'];
$fechat=$_POST['fechat'];
$hora=$_POST['hora'];
$fechan=$_POST['fechan'];
$obrasoc=$_POST['obrasoc'];
$fechahoy = date("Y-m-d");

$tmpf = str_replace('-', "@", $fechan);
$tmpf =  split("@",$tmpf,3);
$diad = $tmpf[0];
$mesd = $tmpf[1];
$anod = $tmpf[2];
$fechan1 = $anod."-".$mesd."-".$diad;

include("conexion-cupea.php");
$query =  "insert into agenda_pacientes (dni,apellido,nombre,sexo,telef,correo,fecha,fecha_alta,estado,fecha_nac,obra_social)values('$dni','$apellido','$nombre','$genero','$telef','$correo','$hora','$fechahoy','0','$fechan1','$obrasoc')";
$result = mysqli_query($bd,$query) ;
//echo $query
?>
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">
		Alta Realizada Con Exito		
		</p>
	</div>
</div>
<?php
;};
?>
				<!--=== Responsive DataTable ===-->
				<div class="row" >
				<div class="col-md-12">
					<div class="widget box">
					<form name=frm method="GET" action="turnos_alta.php">						
					<input type="hidden" name="ingresar">
					<div class="widget-content no-padding">
						<table class="table" width="50%" align="center">
						<thead>
						<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<!--						<th><input class="form-control input-width-medium" type="text" placeholder="APELLIDO" name="apellido1" value="<?php echo $apellido1;?>" style="display: block; margin-top: 6px;">
	  				    <span class="help-block">parte del apellido</span></th>
						<th><input class="form-control input-width-medium" type="text" placeholder="NOMBRE" name="nombre1" value="<?php echo $nombre1;?>" style="display: block; margin-top: 6px;">
	  				    <span class="help-block">parte del nombre</span></th>-->
						<th><input class="form-control input-width-medium" type="text" placeholder="DNI" name="dni1" value="<?php echo $dni1;?>" style="display: block; margin-top: 6px;">
					    <span class="help-block">Nro documento</span></th>
						<th><select name="genero1" placeholder="Genero" class="select2 full-width-fix required" onfocus='selecciona_value(this)' style="display: block; margin-top: 6px;">
							<option value=""></option>
							<option value="1" <?php if($genero1 == '1'){ echo "selected";}; ?> > Masculino </option>
							<option value="2" <?php if($genero1 == '2'){ echo "selected";}; ?> > Femenino </option>
							</select>
					    <span class="help-block">Genero</span></th>
						<th><button class="btn btn-success" onclick="entra();">Buscar</button>
					    <span class="help-block">&nbsp;</span></th>
						<th><input class="btn btn-warning" onclick="limpia();" value="Limpiar">
						<span class="help-block">&nbsp;</span></th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						</tr>
						</thead>
						</table>
<script>
function entra()
{
document.frm.ingresar.value='1';	
document.frm.submit();
}

function limpia(){
window.open('turnos_alta.php' ,'_top')
}
$(function(){           
        if (!Modernizr.inputtypes.date) {
            $('input[type=date]').datepicker({
                  dateFormat : 'yyyy-mm-dd'
                }
             );
        }
 });
</script>
					</div>					
				</div>					
				</form>
				
<?php
include("conexion-cupea.php");
$alta=0;	
$query =  "select * FROM agenda_pacientes WHERE dni='$dni1' and sexo='$genero1'";
$result = mysqli_query($bd, $query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$id_paciente=$row['id_paciente'];
    $alta=1;
	$dni2=$row['dni'];
	$sexo2=$row['sexo'];
	$apellido2=$row['apellido'];
	$nombre2=$row['nombre'];
	$dni2=$row['dni'];
	$genero2=$row['sexo'];
	$telef2=$row['telef'];
	$correo2=$row['correo'];
	$obra_social2=$row['obra_social'];
	$fecha_nac2=$row['fecha_nac'];
	}
?>

				<!--=== Page Content ===-->
				<!--<div class="row">
					<div class="col-md-12">
						<p class="alert alert-info">
						
						</p>
					</div>
				</div>-->

				<!--=== Responsive DataTable ===-->
				<div class="row" >
				<div class="col-md-12">
					<div class="widget box">

					<div class="widget-content no-padding">

<script type="text/javascript">

function entra1(dato)
{
var confirmar = confirm('Desea Continuar?: ');		
 if(confirmar==true)
	{
	var id_paciente = dato;
	 window.open('pacientes_informes.php?id_paciente='+id_paciente,'_top');
	}
}
				
</script>
					</div>					
				</div>					
					   <div class="col-md-2">
                       </div>
					   <div class="col-md-8">
						<h2><i class="icon-male"></i> PACIENTE </h2>
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-male"></i>Alta Registro Paciente</h4>
								<!--<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>-->
							</div>
<?php if($alta==0){;?>
                 <form name=frm1  action="pacientes_alta.php" method="POST" >						
					<input type="hidden" name="ingresar" value="2">							
					<input type="hidden" name="id_turno" value="<?php echo $id_turnos;?>">							
							<div class="widget-content no-padding">
						<table class="table" width="50%" align="center">
						 <th  class="col-md-3">Apellido:</th> <th class="col-md-5"><input type="text" name="apellido"  value="<?php echo $apellido1;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-3">Nombre:</th> <th class="col-md-5"><input type="text" name="nombre"  value="<?php echo $nombre1;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;"  required></th><tr>
						 <th  class="col-md-3">D.N.I.:</th> <th class="col-md-5"><input type="text" name="dni"  value="<?php echo $dni1;?>" class="form-control required"  onfocus='selecciona_value(this)' required ></th><tr>
						 <th  class="col-md-3">Genero:</th> <th class="col-md-5"><select name="genero" class="select2 full-width-fix required" onfocus='selecciona_value(this)' style="display: block; margin-top: 6px;" required>
											<option value=""></option>
											<option value="1" <?php if($genero1 == '1'){ echo "selected";}; ?> > Masculino </option>
											<option value="2" <?php if($genero1 == '2'){ echo "selected";}; ?> > Femenino </option>
							</select></th></tr>
						 <th  class="col-md-3">Telefono:</th> <th class="col-md-5"><input type="tel" name="telef"  value="<?php echo $telef1;?>" class="form-control required"  onfocus='selecciona_value(this)' placeholder="(Código de área) Número" required></th><tr>
						 <th  class="col-md-3">Correo Electronico:</th> <th class="col-md-5"><input type='email' name="correo" id="correo" value="<?php echo $correo1;?>" class="form-control required"  onfocus='selecciona_value(this)' onchange='Javascript:checkEmail();'  required/></th><tr>
						 <th  class="col-md-3">Fecha Nacimiento:</th><th class="col-md-5"><input class="form-control datepicker input-width-medium" placeholder="Fecha Nac" name="fechan"  id='fechan' value="<?php echo $fechan;?>" required" ></th><tr>
						 <th  class="col-md-3">Obra Social:</th> <th class="col-md-5"><input type="text" name="obrasoc"  value="<?php echo $obrasoc;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-3"></th><th class="col-md-5"><input type="submit" class="btn btn-success" value="Grabar"></th><tr>			 
						</table>
				</form>
<?php ;};?>
<?php if($alta==1){;?>
                 	<input type="hidden" name="ingresar" value="2">							
					<input type="hidden" name="id_paciente" id="id_paciente" value="<?php echo $id_paciente;?>">							
							<div class="widget-content no-padding">
						<table class="table" width="50%" align="center">
						 <th  class="col-md-3">Apellido:</th> <th class="col-md-5"><?php echo $apellido2;?></th><tr>
						 <th  class="col-md-3">Nombre:</th> <th class="col-md-5"><?php echo $nombre2;?></th><tr>
						 <th  class="col-md-3">D.N.I.:</th> <th class="col-md-5"><?php echo $dni2;?></th><tr>
						 <th  class="col-md-3">Genero:</th> <th class="col-md-5"><select name="genero" class="select2 full-width-fix required" onfocus='selecciona_value(this)' style="display: block; margin-top: 6px;" required>
											<option value=""></option>
											<option value="1" <?php if($genero2 == '1'){ echo "selected";}; ?> > Masculino </option>
											<option value="2" <?php if($genero2 == '2'){ echo "selected";}; ?> > Femenino </option>
							</select></th></tr>
						 <th  class="col-md-3">Telefono:</th> <th class="col-md-5"><?php echo $telef2;?></th><tr>
						 <th  class="col-md-3">Correo Electronico:</th> <th class="col-md-5"><?php echo $correo2;?></th><tr>
						 <th  class="col-md-3">Fecha Nacimiento:</th> <th class="col-md-5"><?php echo $fecha_nac2;?></th><tr>
						 <th  class="col-md-3">Obra Social:</th> <th class="col-md-5"><?php echo $obra_social;?></th><tr>
						 <th  class="col-md-3"></th><th class="col-md-5"><button class='btn btn-success' onclick="entra1($('#id_paciente').val());return false;">Continuar</button></td>
						</table>

<?php ;};?>

</div>

</div>

<script type="text/javascript">

function checkEmail() {

    var email = document.getElementById('correo');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Debe escribir un mail Valido');
    email.focus;
    return false;
 }
}

function consulta(){
     var id1 = $("#fechat").val();
	 var dia = id1.substr(0, 2);
	 var mes = id1.substr(3, 2);
	 var ano = id1.substr(6, 4);
	 var id = ano+'-'+mes+'-'+dia
     $("#hora").html("");
     var marca = 0;
     $.get("http://localhost/htdocs/caja/hora.php",{param_id:id})
     .done(function(data)
      {
      $("#hora").html(data); 
      })
	};

</script>

						</div>
					</div>
				</div>
					   <div class="col-md-2">
                       </div>
				</div>
				<!-- /Responsive DataTable -->
				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>