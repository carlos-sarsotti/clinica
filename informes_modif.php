<?php
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

<body >

<?php
include("menu.php");
include("prueba_r.php");
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

$dni1=$_GET['dni1'];
$genero1=$_GET['genero1'];
$ingresar=$_GET['ingresar'];

if ( $ingresar == 1 AND $dni1 <> "" And $genero1 <> ""){
include("conexion-cupea.php");
$query =  "select * FROM agenda_pacientes WHERE dni = '$dni1' and sexo= '$genero1' limit 1";
$alta=0;
$result = mysqli_query($bd, $query) ;
while($row = mysqli_fetch_assoc($result))
	{
	$id_paciente=$row['id_paciente'];	
	$apellido=$row['apellido'];
	$nombre=$row['nombre'];
	$dni=$row['dni'];
	$sexo=$row['sexo'];
	$telef=$row['telef'];
	$correo=$row['correo'];
	$fechan=$row['fechan'];
	$obrasoc=$row['obrasoc'];
    $alta=1;
	}
;};


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
					<form name=frm method="GET" action="informes_modif.php">						
					<input type="hidden" name="ingresar">
					<div class="widget-content no-padding">
					<span class="black"><h4>Busqueda de Informes para Modificar</h4></span>
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

function entra1(dato)
{
var confirmar = confirm('Desea ir al Informe?: ');		
 if(confirmar==true)
	{
	var id_paciente = dato;
	 window.open('pacientes_informes.php?id_paciente='+id_paciente,'_top');
	}
}
function entra2(dato)
{
var confirmar = confirm('Desea ir al Informe?: ');		
 if(confirmar==true)
	{
	var id_paciente = dato;
	 window.open('pacientes_informes.php?id_paciente='+id_paciente,'_top');
	}
}

function limpia(){
window.open('informes_modif.php' ,'_top')
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
		</div>
	</div>					
<?php	


?>				
					
					
					
					
					
					
					
					
					
					
					
<?php if($ingresar==1){;
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
	$apellido2=$row['apellido'];
	$nombre2=$row['nombre'];
	}
	if($alta==1)
	{		
					?>
			<div class="widget box">
			<div class="widget-header">
						<h4><i class="icon-male"></i>Informe Del Paciente:<font color="red"><?php echo " ".$apellido2." ".$nombre2."  DNI:  ".$dni2; ?></font></h4>
						</div>
						<div class="widget-content no-padding">
						<table class="table" width="100%" align="center">
			 
<?php
					$contar=0;
					$query =  "select * FROM informes_pacientes WHERE id_paciente='$id_paciente' order by id_informe";
					$result = mysqli_query($bd, $query) ;
					//echo $query;
					while($row = mysqli_fetch_assoc($result))
						{
						$contar=$contar+1;	
						$id_paciente = $row['id_paciente'];
						$id_informe = $row['id_informe'];
						$fecha_inf = $row['fecha_inf'];
						$recredepor=$row['tipo_act_fis'];
						echo "<input type='hidden' name='id_informe' id='id_informe".$contar."' value='$id_informe'>";
						$tmpf = str_replace('-', "@", $fecha_inf);
						$tmpf =  explode("@",$tmpf);
						$anod = $tmpf[0];
						$mesd = $tmpf[1];
						$diad = $tmpf[2];
						$fechan1 = $diad."-".$mesd."-".$anod;
						?>
					     <th  class="col-md-2">NRO. INFORME:</th>
						 <td  class='col-md-2'><?php echo $id_informe; ?></td>
                		 <th  class="col-md-2">FECHA INFORME:</th>
						 <td  class='col-md-2'><?php echo $fechan1; ?></td>
						<td><button class='btn btn-success' onclick="entra1($('#id_informe<?php echo $contar;?>').val());return false;">Modificar</button></td>
						<?php
						echo "</tr>";
						}
						?>

						</table>
				
			</div>
		</div>   					

<script>					
					
function entra1(dato)
{
var confirmar = confirm('Esta seguro que desea Modificar el Informe?: ');		
 if(confirmar==true)
	{
    var id_informe = dato;
    window.open('informes_modif1.php?id_informe='+id_informe,'_top');
	}
}


function checkEmail() {

    var email = document.getElementById('correo');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Debe escribir un mail Valido');
    email.focus;
    return false;
 }
}
</script>					
					
					
						 <?php ;};
						 if($alta==0)
						 {;
						 ?>
					   <div class="col-md-3">
                       </div>
					   <div class="col-md-6" align="center">
						<h2><i class="icon-male"></i>INFORME DE PACIENTE </h2>
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-male"></i> Informe del Paciente Inexistentes</h4>
								<!--<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>-->
							</div>
						 
							<div class="widget-content no-padding">
						<table class="table" width="50%" align="center">
						 <th  class="col-md-3"></th><th class="col-md-5"><button class='btn btn-success' onclick="limpia();return false;">Volver</button></td>
						</table>
				 <?php ;};?> 
				</div>
					   <div class="col-md-2">
                       </div>
				</div>

				 <?php ;};?> 
				<!-- /Responsive DataTable -->
				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>