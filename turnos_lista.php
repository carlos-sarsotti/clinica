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
$fechadesde=$_GET['fechadesde'];
$fechahasta=$_GET['fechahasta'];
$ingresar=$_GET['ingresar'];

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
					<form name=frm method="GET" action="turnos_lista.php">						
					<input type="hidden" name="ingresar" value="1">
					<div class="widget-content no-padding">
					<span class="black"><h4>Turno Listar</h4></span>
						<table class="table" width="50%" align="center">
						<thead>
						<tr>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<!--						<th><input class="form-control input-width-medium" type="text" placeholder="APELLIDO" name="apellido1" value="<?php echo $apellido1;?>" style="display: block; margin-top: 6px;">
	  				    <span class="help-block">parte del apellido</span></th>
						<th><input class="form-control input-width-medium" type="text" placeholder="NOMBRE" name="nombre1" value="<?php echo $nombre1;?>" style="display: block; margin-top: 6px;">
	  				    <span class="help-block">parte del nombre</span></th>-->
						<th><input class="form-control datepicker input-width-medium" placeholder="Fecha Turno" name="fechadesde"  id='fechadesde' value="<?php echo $fechadesde;?>" style="display: block; margin-top: 6px;">
					    <span class="help-block">Fecha Desde</span></th>
						<th><input class="form-control datepicker input-width-medium" placeholder="Fecha Turno" name="fechahasta"  id='fechahasta' value="<?php echo $fechahasta;?>" style="display: block; margin-top: 6px;">
					    <span class="help-block">Fecha Hasta</span></th>
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
document.frm.submit();
}

function limpia(){
window.open('turnos_lista.php' ,'_top')
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
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					   <div class="col-md-2">
                       </div>
					   <div class="col-md-8">
						<h2><i class="icon-male"></i> PACIENTE </h2>
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-male"></i>Lista de Turno por Fecha</h4>
								<!--<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>-->
							</div>
						
					<div class="widget-content no-padding">
						<table class="table" width="50%" align="center">
						 <th>Apellido:</th>
						 <th>Nombre:</th>
						 <th>D.N.I.:</th>
						 <th>Genero:</th>
						 <th>Telefono:</th>
						 <th>Correo Electronico:</th>
						 <th>Fecha Turno:</th>
						 <th></th>
						</tr>
						<?php

						
					    if ( $fechadesde <> "" AND $fechahasta <> ""){
							$tmpf = str_replace ('-', "@", $fechadesde);
							$tmpf =  explode ("@", $tmpf);
							$diad = $tmpf[0];
							$mesd = $tmpf[1];
							$anod = $tmpf[2];
							$fechad = $anod."-".$mesd."-".$diad." 00:00:00";

							$tmpf1 = str_replace ('-', "@", $fechahasta);
							$tmpf1 =  explode ("@", $tmpf1);
							$diad1 = $tmpf1[0];
							$mesd1 = $tmpf1[1];
							$anod1 = $tmpf1[2];
							$fechah = $anod1."-".$mesd1."-".$diad1." 23:59:00";

							include("conexion-cupea.php");	
							$query =  "select * FROM turnos_pacientes WHERE fecha >= '$fechad' and fecha <= '$fechah'order by fecha";
                            $contar=0;
							//echo $query;
							$result = mysqli_query($bd, $query) ;
							while($row = mysqli_fetch_assoc($result))
								{
								$contar=$contar+1;	
								$id_turnos=$row['id_turnos'];
								$apellido=$row['apellido'];
								$nombre=$row['nombre'];
								$dni=$row['dni'];
								$sexo=$row['sexo'];
								$telef=$row['telef'];
								$correo=$row['correo'];
								$fecha=$row['fecha'];
								$estado=$row['estado'];
								echo "<input type='hidden' name='id_turno' id='id_turno".$contar."' value='$id_turnos'>";
								echo "<td>".$apellido."</td> \n";
								echo "<td>".$nombre."</td> \n";
								echo "<td>".$dni."</td> \n";
								echo "<td>".$sexo."</td> \n";
								echo "<td>".$telef."</td> \n";
								echo "<td>".$correo."</td> \n";
								echo "<td>".$fecha."</td> \n";
								if ($estado==0){
									echo "<td><span target=_blank style='color: #008000'>Activo</span></td> \n";
									}
								if ($estado==1){
									echo "<td><span target=_blank style='color: #ff0015'>Eliminado</span></td> \n";
									};
								echo "</tr>\n";						    								
								};
						 };
						 ?> 
						</table>


				

</div>

</div>

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