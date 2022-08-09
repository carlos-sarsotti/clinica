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

<body>

<?php
include("menu.php");
include("prueba_r.php");
$archivo=$_POST['archivo'];
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

?>


				<!--=== Page Content ===-->
				<!--<div class="row">
					<div class="col-md-12">
						<p class="alert alert-info">
						
						</p>
					</div>
				</div>-->

				<!--=== Responsive DataTable ===-->
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-dollar"></i> Convertir tabla como archivos csv</h4>
								<!--<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>-->
							</div>
	<form name=frm method="POST" action="genera_salida_archivos.php">						
	   <input type="hidden" name="ingresar" value="">
        	<div class="widget-content no-padding">

				<table class="table" width="50%" align="center" border="1">
                <tr>
				<th  class="col-md-2">ARCHIVO A DESCARGAR</th>
				<th class="col-md-4"><select name="archivo" class="select2 full-width-fix required" onfocus='selecciona_value(this)' style="display: block; margin-top: 6px;" required>
						<option value=""></option>
						<option value="1" <?php if($archivo == '1'){ echo "selected";}; ?> > Turnos </option>
						<option value="2" <?php if($archivo == '2'){ echo "selected";}; ?> > Agenda </option>
						<option value="3" <?php if($archivo == '3'){ echo "selected";}; ?> > Informes </option>
				</select>
				</th>
				<th class="col-md-4">
				<button class="btn btn-success" onclick="entra();">Generar</button><span class="help-block">&nbsp;</span>
				</th>
				</tr>
				</table>
                </form> 
                <br>
				<br>
	
	<br>


<script>
function entra()
{
document.frm.ingresar.value = '1';
document.frm.submit();
}
</script>
<?php


if ( $archivo<>0)
{
$archi="";	
if ( $archivo==1)
{
$archi="turnos_pacientes";	
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=turnos_pacientes.csv');
 
 // create a file pointer connected to the output stream
$result1 = mysqli_query($bd, $query1) ;
$archivo1 = "turnos_pacientes.csv";
$output = fopen( "tmpfiles/".$archivo1 , "w" ); 
 // output the column headings
fputcsv($output, array('id_turnos;dni;apellido;nombre;sexo;telef;correo;fecha;fecha_alta;fecha_baja;estado'));

include("conexion-cupea.php");
$query ="SELECT * FROM turnos_pacientes";
$rows = mysqli_query($bd, $query) ;
 // loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row,$delimiter = ";"); 
}
if ( $archivo==2)
{
$archi="agenda_pacientes";	
	
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=agenda_pacientes.csv');
 
 // create a file pointer connected to the output stream
$result1 = mysqli_query($bd, $query1) ;
$archivo1 = "agenda_pacientes.csv";
$output = fopen( "tmpfiles/".$archivo1 , "w" ); 
 // output the column headings
fputcsv($output, array('id_pacientes;dni;apellido;nombre;sexo;telef;correo;fecha;fecha_alta;estado;fecha_nac;obra_social'));

include("conexion-cupea.php");
$query ="SELECT * FROM agenda_pacientes";
$rows = mysqli_query($bd, $query) ;
 // loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row,$delimiter = ";"); 
}
if ( $archivo==3)
{
$archi="informes_pacientes";	
	
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=informes_pacientes.csv');
 
 // create a file pointer connected to the output stream
$result1 = mysqli_query($bd, $query1) ;
$archivo1 = "informes_pacientes.csv";
$output = fopen( "tmpfiles/".$archivo1 , "w" ); 
 // output the column headings
fputcsv($output, array('id_informe;id_paciente;peso;talla;talla_sentado;biocromial;torax_transverso;torax_ant_post;bi_iliocrestideo;humeral_biepicondilar;femoral_biepicondilar;cabeza;brazo_relajado;brazo_flex_tens;antebrazo_max;torax_meso_est;cintura;cadera;muslo_max;muslo_med;pantorrilla_max;triceps;subescapular;supraespinal;abdominal;muslo_medial2;pantorrilla_max2;actividad_fis;medicacion;grosor_piel;constante_piel;fecha_inf;observaciones;tipo_act_fis'));

include("conexion-cupea.php");
$query ="SELECT * FROM informes_pacientes";
$rows = mysqli_query($bd, $query) ;
 // loop over the rows, outputting them
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row, $delimiter = ";"); 
}

?>
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">
		Archivo <?php echo $archi;?>.csv Generado Con Exito (ver carpeta tmpfiles)		
		</p>
	</div>
</div>

</div>

		</div>
					</div>
				</div>
				<!-- /Responsive DataTable -->
				<!-- /Page Content -->
				
<br>

<?php
;};
?>

				
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>
