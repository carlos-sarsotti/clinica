<?php

session_start();
$b1 = $_SESSION['b1'];
$b2 = $_SESSION['b2'];
$perfilusuario2 = $_SESSION['perfilusuario2'];
$nombreusuario = $_SESSION['nombreusuario'];
$idgestor = $_SESSION['idgestor'];
if (!isset($ingresar)) { $ingresar = "" ; } ;
if (!isset($canttramites)) { $canttramites = "" ; } ;
if (!isset($canttramitespend)) { $canttramitespend = "" ; } ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta>
		<meta name="author" content="sistemasbellmann@gmail.com">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
<link href="assets/img/barcode.gif" rel="shortcut icon" type="image/png" />
<link href="assets/img/barcode.gif" rel="icon" type="image/png" />

	<title>:: SIGEX ::</title>

	<!--=== CSS ===-->

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
	<!--[if lt IE 9]>
		<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.tooltip.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.resize.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.time.min.js"></script>
	<script type="text/javascript" src="plugins/flot/jquery.flot.growraf.min.js"></script>
	<script type="text/javascript" src="plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

	<script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>

	<script type="text/javascript" src="plugins/fullcalendar/fullcalendar.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="plugins/noty/themes/default.js"></script>

	<!-- Forms -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="plugins/select2/select2.min.js"></script>

	<!-- App -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/plugins.form-components.js"></script>

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
	<script type="text/javascript" src="assets/js/demo/pages_calendar.js"></script>
<!--	<script type="text/javascript" src="assets/js/demo/charts/chart_filled_blue.js"></script>-->
<!--	<script type="text/javascript" src="assets/js/demo/charts/chart_simple.js"></script>-->

<script>


"use strict";

$(document).ready(function(){

	// Sample Data

<?php	

//if ( $perfilusuario == 1 ){

for ( $x = 1; $x <= 12; $x++ )
{

$fechad = date("Y")."-".$x."-01 00:00";
$fechah = date("Y")."-".$x."-31 23:59";

include("conexion-cupea.php");
$query =  "SELECT * FROM informes_pacientes WHERE fecha_inf >= '$fechad' AND fechai <= '$fechah' ORDER BY id ";
//echo $query."<br>";
$result = mysqli_query($bd,$query);
$total[$x] = mysqli_fetch_assoc($result);

if ( $total[$x] == "" ){$total[$x] = 0 ;};

}

//;};

echo "var d1 = [[1262304000000, ".$total[1]."], [1264982400000, ".$total[2]."], [1267401600000, ".$total[3]."], [1270080000000, ".$total[4]."], [1272672000000, ".$total[5]."], [1275350400000, ".$total[6]."], [1277942400000, ".$total[7]."], [1280620800000, ".$total[8]."], [1283299200000, ".$total[9]."], [1285891200000, ".$total[10]."], [1288569600000, ".$total[11]."], [1291161600000, ".$total[12]."]]; \n";


?>
	var data1 = [	{ label: "Expedientes registrados", data: d1, color: App.getLayoutColorCode('blue') }];

	$.plot("#chart_filled_blue", data1, $.extend(true, {}, Plugins.getFlotDefaults(), {
		xaxis: {
			min: (new Date(2009, 12, 1)).getTime(),
			max: (new Date(2010, 11, 2)).getTime(),
			mode: "time",
			tickSize: [1, "month"],
			monthNames: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
			tickLength: 0
		},
		series: {
			lines: {
				fill: true,
				lineWidth: 1.5
			},
			points: {
				show: true,
				radius: 2.5,
				lineWidth: 1.1
			},
			grow: { active: true, growings:[ { stepMode: "maximum" } ] }
		},
		grid: {
			hoverable: true,
			clickable: true
		},
		tooltip: true,
		tooltipOpts: {
			content: '%s: %y'
		}
	}));


});

</script>


</head>

<body>
<?php
include("menu.php");
?>

	<div id="container">
<?php
include("menu-derecho.php");
?>
		<div id="content">
			<div class="container">
				

		
<?php
include("header-menu.php");
//include("header-page.php");
?>

				<!--=== Page Content ===-->
<?php
//if ( $perfilusuario == 2 ){
#include("statboxes.php");
//;};
?>

				<!--=== Blue Chart ===-->
				<div class="row">
				
<?php
//if ( $perfilusuario == 2 ){

?>				
				
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
<!--								<h4><i class="icon-dollar"></i> Cuenta Corriente</h4>-->
								<h4><i class="icon-envelope-alt"></i> Expedientes</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content">
								<div id="chart_filled_blue" class="chart"></div>
							</div>
							<div class="divider"></div>
							<div class="widget-content">

<?php


include("conexion-cupea.php");
$query =  "SELECT * FROM informes_pacientes WHERE ( fecha_inf >= '".date("Y")."-".date("m")."-01' ) ";
$result = mysqli_query($bd, $query);
$canttramitesmes = mysqli_fetch_assoc($result);
echo $query;

$fechad = "01/".date("m")."/".date("Y");
?>
							<ul class="stats"> <!-- .no-dividers -->
									<li>
										<strong><a href="expediente-b.php"><?php echo $canttramites;?></a></strong>
										<small>Total Expedientes</small>
									</li>
									<li class="light hidden-xs">
										<strong><a href="expediente-b.php?verpend=1"><?php echo $canttramitespend;?></a></strong>
										<small>Expedientes pendientes</small>
									</li>
									<li>
										<strong><a href="expediente-b.php?fechad=<?php echo $fechad;?>"><?php echo $canttramitesmes;?></a></strong>
										<small>Expedientes del mes</small>
									</li><!--
									<li class="light hidden-xs">
										<strong>105</strong>
										<small>Last 24 Hours</small>
									</li>-->
								</ul>
							</div>
						</div>
					</div> <!-- /.col-md-12 -->
					
					
					
<?php
//;}; 
?>					
					
					
								
<?php
//if ( $perfilusuario == 2 ){
?>				
				
					
					
					
					
						<!--=== Static Table ===-->
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-envelope-alt"></i> Expedientes Pendientes</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content no-padding">
								<table class="table table-striped table-checkable table-hover">
									<thead>
<tr>
<th>Expediente</th>
<th>Estado</th>
<th>Tipo</th>
<th>Documento</th>
<th>Nombre</th>
<th>Fecha inicio</th>
<th>Ver</th>
</tr>
									</thead>
									<tbody>
<?php
if ( $ingresar == "" ){$qestado1 = " AND ( estado <> '7' ) ";};
if ( $perfilusuario2 == 3 ){$qestado1 = " AND ( estado = '1' ) ";};
if ( $perfilusuario2 == 4 ){$qestado1 = " AND ( coas = '4' OR coas = '12' OR coas = '13' ) AND ( estado = '1' OR estado = '2' OR estado = '3' OR estado = '4' OR estado = '12' OR estado = '13' ) ";};
if ( $perfilusuario2 == 5 ){$qestado1 = " AND ( estado = '4' OR estado = '9' OR estado = '13' OR estado = '14' ) ";};
if ( $perfilusuario2 == 6 ){$qestado1 = " AND ( coas = '2' OR coas = '3' ) AND ( estado = '1' OR estado = '2' OR estado = '3' OR estado = '4' OR estado = '12' OR estado = '13' ) ";};


include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE nudo <> '99999999'  $qestado1 ORDER BY id DESC LIMIT 15";
$result = mysqli_query($bd, $query);
//echo $query;
while($row = mysql_fetch_array($result))
{
$i = $i  + 1 ;

$zona = $row["zona"];
$expediente = $row["expe"];

$nombre = $row["nyap"];
$dni = $row["nudo"];
$tipo1 = $row["tipo"];
$tipo = $row["coas"];
$tipox = $row["asunto"];

$dia = $row["dd"];
$mes = $row["mm"];
$ano = $row["aaaa"];

$mesx = "";
if ( $mes == "01" ){$mesx = "Enero";};
if ( $mes == "02" ){$mesx = "Febrero";};
if ( $mes == "03" ){$mesx = "Marzo";};
if ( $mes == "04" ){$mesx = "Abril";};
if ( $mes == "05" ){$mesx = "Mayo";};
if ( $mes == "06" ){$mesx = "Junio";};
if ( $mes == "07" ){$mesx = "Julio";};
if ( $mes == "08" ){$mesx = "Agosto";};
if ( $mes == "09" ){$mesx = "Septiembre";};
if ( $mes == "10" ){$mesx = "Octubre";};
if ( $mes == "11" ){$mesx = "Noviembre";};
if ( $mes == "12" ){$mesx = "Diciembre";};	

$clase = $row["clas"];
$puesto = $row["empl"];
$sistema = $row["repa"];
$sobre = $row["sobr"];
$categoria = $row["cate"];
$porc = $row["porc"];
$decreto = $row["decr"];
$sueldo = number_format($row["suel"],2,",",".");

$saldo = $row["sald"];

$mesi = $row["imm"];

if ( $row["iaa"] > 89 ){$anoi = $row["iaa"] + 1900 ;};
if ( $row["iaa"] < 89 ){$anoi = $row["iaa"] + 2000 ;};

$mesix = "";
if ( $mesi == "01" ){$mesix = "Enero";};
if ( $mesi == "02" ){$mesix = "Febrero";};
if ( $mesi == "03" ){$mesix = "Marzo";};
if ( $mesi == "04" ){$mesix = "Abril";};
if ( $mesi == "05" ){$mesix = "Mayo";};
if ( $mesi == "06" ){$mesix = "Junio";};
if ( $mesi == "07" ){$mesix = "Julio";};
if ( $mesi == "08" ){$mesix = "Agosto";};
if ( $mesi == "09" ){$mesix = "Septiembre";};
if ( $mesi == "10" ){$mesix = "Octubre";};
if ( $mesi == "11" ){$mesix = "Noviembre";};
if ( $mesi == "12" ){$mesix = "Diciembre";};	

$reso= number_format($row["resol"],0,",",".");
$carpeta=substr($reso,0,3);
$dia_reso = $row["ddre"];
$mes_reso = $row["mmre"];
$ano_reso = $row["aare"];

$mes_resox = "";
if ( $mes_reso == "01" ){$mes_resox = "Enero";};
if ( $mes_reso == "02" ){$mes_resox = "Febrero";};
if ( $mes_reso == "03" ){$mes_resox = "Marzo";};
if ( $mes_reso == "04" ){$mes_resox = "Abril";};
if ( $mes_reso == "05" ){$mes_resox = "Mayo";};
if ( $mes_reso == "06" ){$mes_resox = "Junio";};
if ( $mes_reso == "07" ){$mes_resox = "Julio";};
if ( $mes_reso == "08" ){$mes_resox = "Agosto";};
if ( $mes_reso == "09" ){$mes_resox = "Septiembre";};
if ( $mes_reso == "10" ){$mes_resox = "Octubre";};
if ( $mes_reso == "11" ){$mes_resox = "Noviembre";};
if ( $mes_reso == "12" ){$mes_resox = "Diciembre";};	

$mes_fallecio = $row["famm"];
$ano_fallecio = $row["faaa"];
$mes_falleciox = "";
if ( $mes_fallecio == "01" ){$mes_falleciox = "Enero";};
if ( $mes_fallecio == "02" ){$mes_falleciox = "Febrero";};
if ( $mes_fallecio == "03" ){$mes_falleciox = "Marzo";};
if ( $mes_fallecio == "04" ){$mes_falleciox = "Abril";};
if ( $mes_fallecio == "05" ){$mes_falleciox = "Mayo";};
if ( $mes_fallecio == "06" ){$mes_falleciox = "Junio";};
if ( $mes_fallecio == "07" ){$mes_falleciox = "Julio";};
if ( $mes_fallecio == "08" ){$mes_falleciox = "Agosto";};
if ( $mes_fallecio == "09" ){$mes_falleciox = "Septiembre";};
if ( $mes_fallecio == "10" ){$mes_falleciox = "Octubre";};
if ( $mes_fallecio == "11" ){$mes_falleciox = "Noviembre";};
if ( $mes_fallecio == "12" ){$mes_falleciox = "Diciembre";};	


$docum = $row["mardoc"];

$denegado = $row["deneg"];

$jubi = $row["jubi"];

$estado = $row["estado"];

$jubix = "";
if ( $jubi == 0 ){$jubix = "NO";};
if ( $jubi == 1 ){$jubix = "Jub.Prov.";};
if ( $jubi == 2 ){$jubix = "Jub.ANSES";};
if ( $jubi == 3 ){$jubix = "Otra jub.";};

include("conexion-cupea.php");
$query1 =  "SELECT * FROM estados WHERE ( id = '$estado' ) LIMIT 1 " ;
$result1 = mysqli_query($bd,$query1);
while($row = mysql_fetch_array($result1))
{$estadox = $row["nombre"];}


$estado_label = "";
//if ( $estado == 1 ){$estado_label = "<span class='label label-turquesa'>";}; // Pendiente de Verificacion Datos
//if ( $estado == 34 ){$estado_label = "<span class='label label-violeta'>";}; // Pendiente Asignacion PREFIJO
//
//if ( $estado == 1 ){$estado_label = "<span class='label label-default'>";}; // Pendiente de verificacion de datos
//if ( $estado == 35 ){$estado_label = "<span class='label label-salmon'>";}; // Pendiente MODIFICACION de datos
//if ( $estado == 15 ){$estado_label = "<span class='label label-warning'>";}; // Pendiente de Asignacion de ISBN
//if ( $estado == 30 ){$estado_label = "<span class='label label-info'>";}; // Pendiente de Catalogación
//
//if ( $estado == 7 ){$estado_label = "<span class='label label-success'>";}; // Finalizado
//if ( $estado == 33 ){$estado_label = "<span class='label label-danger'>";}; // Anulado

if ( $estado == 1 ){$estado_label = "<span class='label label-default'>";}; // PENDIENTE VERIFICACION DATOS
if ( $estado == 2 ){$estado_label = "<span class='label label-violeta'>";}; // PENDIENTE IMPUTACIÓN

if ( $estado == 3 ){$estado_label = "<span class='label label-turquesa'>";}; // PENDIENTE LIQUIDACIÓN - ANTICIPO
if ( $estado == 4 ){$estado_label = "<span class='label label-info'>";}; // PENDIENTE RESOLUCIÓN - ANTICIPO

if ( $estado == 5 ){$estado_label = "<span class='label label-info'>";}; // PENDIENTE AUDITORÍA
if ( $estado == 6 ){$estado_label = "<span class='label label-danger'>";}; // ANULADO

if ( $estado == 7 ){$estado_label = "<span class='label label-success'>";}; // Finalizado

if ( $estado == 8 ){$estado_label = "<span class='label label-info'>";}; // PENDIENTE ARCHIVO

if ( $estado == 9 ){$estado_label = "<span class='label label-default'>";}; // PENDIENTE V. RESOLUCIÓN - ANTICIPO

if ( $estado == 10 ){$estado_label = "<span class='label label-violeta'>";}; // PENDIENTE HAB. PAGO - ANTICIPO

if ( $estado == 11 ){$estado_label = "<span class='label label-salmon'>";}; // PENDIENTE TRANSFERENCIA - ANTICIPO

if ( $estado == 12 ){$estado_label = "<span class='label label-turquesa'>";}; // PENDIENTE LIQUIDACIÓN - SALDO

if ( $estado == 13 ){$estado_label = "<span class='label label-info'>";}; // PENDIENTE RESOLUCIÓN - SALDO

if ( $estado == 14 ){$estado_label = "<span class='label label-default'>";}; // PENDIENTE V. RESOLUCIÓN - SALDO

if ( $estado == 15 ){$estado_label = "<span class='label label-violeta'>";}; // PENDIENTE HAB. PAGO - SALDO

if ( $estado == 16 ){$estado_label = "<span class='label label-salmon'>";}; // PENDIENTE TRANSFERENCIA - SALDO




echo "<tr>";
echo "<td><a href=expediente-detalle1.php?zona=".$zona."&expediente=".$expediente." target=_blank>".$leido_tramitex.$zona."-".$expediente."</a></td> \n";
echo "<td>".$estado_label.$estadox."</span></td> \n";
echo "<td>".$tipox." (".$tipo.")</td> \n";
echo "<td><a href=afiliado-detalle1.php?dni=".$dni." target=_blank>".$dni."</a></td> \n";
echo "<td><a href=afiliado-detalle1.php?dni=".$dni." target=_blank>".corta_texto($nombre, 45, "...")."</td> \n";
echo "<td>".$dia." ".$mesx." ".$ano."</td> \n";
?>
<td class="align-center">
<span class="btn-group"><a href=expediente-detalle.php?<?php echo "zona=".$zona."&expediente=".$expediente;?> class="btn btn-xs bs-tooltip" title="Ver expediente" target="_blank"><i class="icon-search"></i></a></span>
</td>
<?php
echo "</tr>";
									
}										
?>	
									</tbody>
								</table>
								<div class="row">
									<div class="table-footer">
										<div class="col-md-12">
											
										</div>
									</div> <!-- /.table-footer -->
								</div> <!-- /.row -->
							</div> <!-- /.widget-content -->
						</div> <!-- /.widget -->
					</div> <!-- /.col-md-6 -->
					
					
					
					
						<!--=== Static Table ===-->
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-inbox"></i> Mensajes recibidos</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content no-padding">
								<table class="table table-striped table-checkable table-hover">
									<thead>
										<tr>
											
											<th>Tr&aacute;mite</th>
											<th>T&iacute;tulo</th>
											<th>Usuario</th>
											<th>Texto</th>
											<th>Fecha</th>
											<th>Ver</th>
										</tr>
									</thead>
									<tbody>
									<?php
include("conexion-cupea.php");
$query =  "SELECT * FROM acciones WHERE ( resp = '$idgestor'  ) ORDER BY id DESC LIMIT 15";
//echo $query;
$result = mysqli_query($bd, $query);
while($row = mysql_fetch_array($result))
{
$id = $row["id"];
$idlibro = $row["libro"];
$editorial = $row["editorial"]; 
$accion = $row["accion"]; 
$texto = $row["texto"]; 
$fec1 = $row["fecha"];
$fecha = $fec1[8].$fec1[9]."/".$fec1[5].$fec1[6]."/".$fec1[2].$fec1[3]." ".$fec1[11].$fec1[12].$fec1[13].$fec1[14].$fec1[15];
$leido = $row["leido"]; 
$gestor = $row["gestor"]; 
$resp = $row["resp"]; 
$idtramite = $row["tramite"]; 

$gestorx = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM users WHERE ( id = '".$gestor."' ) LIMIT 1";
$result1 = mysqli_query($bd,$query1);
while($row = mysql_fetch_array($result1))
{$gestorx = $row["apellido"].", ".$row["nombre"];}

//$editorialx = "";
//include("conexion-cupea.php");
//$query1 =  "SELECT * FROM editoriales WHERE ( Codigo = '".$editorial."' ) LIMIT 1";
//$result1 = mysql_query ( $query1);
//while($row = mysql_fetch_array($result1))
//{$editorialx = $row["Nombre"];}
//
//$titulo = "";
//include("conexion-cupea.php");
//$query1 =  "SELECT * FROM libros WHERE ( Codigo = '".$idlibro."' ) LIMIT 1";
//$result1 = mysql_query ( $query1);
//while($row = mysql_fetch_array($result1))
//{$titulo = $row["Titulo"];}

$titulo = str_replace ('á', "&aacute;", $titulo);
$titulo = str_replace ('é', "&eacute;", $titulo);
$titulo = str_replace ('í', "&iacute;", $titulo);
$titulo = str_replace ('ó', "&oacute;", $titulo);
$titulo = str_replace ('ú', "&uacute;", $titulo);

$neg = "";
if ( $leido == 1 ){$neg = "<b>";};

echo "<tr>";
echo "<td>".$neg.$idtramite."</td>";
echo "<td><a href=libro-detalle.php?idlibro=".$idlibro." title='$titulo' target=_blank>".$neg.corta_texto($titulo, 30, "...")."</td> \n";
echo "<td>".$neg.$gestorx."</td>";
echo "<td>".$neg.corta_texto($texto, 30, "...")."</td>";
echo "<td>".$neg.$fecha."</td>";
?>
<td class="align-center">
<span class="btn-group"><a href="msg-b.php?idtramite=<?php echo $idtramite;?>&idmsg=<?php echo $id;?>" class="btn btn-xs bs-tooltip" title="Ver mensaje" target="_blank"><i class="icon-search"></i></a></span>
</td>
<?php
echo "</tr>";
									
}										
?>	
									</tbody>
								</table>
								<div class="row">
									<div class="table-footer">
										<div class="col-md-12">
											
										</div>
									</div> <!-- /.table-footer -->
								</div> <!-- /.row -->
							</div> <!-- /.widget-content -->
						</div> <!-- /.widget -->
					</div> <!-- /.col-md-6 -->
					
							
					
<?php
//;}; 
?>					
					
					
					
					
					
				</div> <!-- /.row -->
				<!-- /Blue Chart -->

	

				
			
				
				
				
				<!-- /Page Content -->
			</div>
			<!-- /.container -->
  
		</div>
		

	</div>

		

	
</body>
</html>