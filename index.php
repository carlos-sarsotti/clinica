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

?>				<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">

									</thead>
									<tbody>
					<div class="widget box">
					<div class="widget-header">
						<img src="fondo1.png" class="img-thumbnail"/>
					</div>
				</div>								
									
									
<?php
if ( $ingresar == "" ){$qestado1 = " AND ( estado <> '7' ) ";};
if ( $perfilusuario2 == 3 ){$qestado1 = " AND ( estado = '1' ) ";};
if ( $perfilusuario2 == 4 ){$qestado1 = " AND ( coas = '4' OR coas = '12' OR coas = '13' ) AND ( estado = '1' OR estado = '2' OR estado = '3' OR estado = '4' OR estado = '12' OR estado = '13' ) ";};
if ( $perfilusuario2 == 5 ){$qestado1 = " AND ( estado = '4' OR estado = '9' OR estado = '13' OR estado = '14' ) ";};
if ( $perfilusuario2 == 6 ){$qestado1 = " AND ( coas = '2' OR coas = '3' ) AND ( estado = '1' OR estado = '2' OR estado = '3' OR estado = '4' OR estado = '12' OR estado = '13' ) ";};


								
?>	


									<?php
include("conexion-cupea.php");
$query =  "SELECT * FROM acciones WHERE ( resp = '$idgestor'  ) ORDER BY id DESC LIMIT 15";
//echo $query;
$result = mysqli_query($bd,$query);
while($row = mysqli_fetch_assoc($result))
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
$result1 = mysqli_query($bd,$query);
while($row = mysqli_fetch_assoc($result1))
{$gestorx = $row["apellido"].", ".$row["nombre"];}



?>

<?php

									
}										
?>	
					
					
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
