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
$id_paciente = $_GET['id_paciente'];

$ingresar=$_POST['ingresar'];

if ( $ingresar == 2){
$id_paciente = $_POST['id_paciente'];
$peso=$_POST['peso'];
$actfis=$_POST['actfis'];
$talla=$_POST['talla'];
$medicacion=$_POST['medicacion'];
$grasacor=$_POST['grasacor'];
$circto=$_POST['circto'];
$grasavi=$_POST['grasavi'];
$circcin=$_POST['circcin'];
$masamagra=$_POST['masamagra'];
$circabd=$_POST['ciscabd'];
$ciclom=$_POST['ciclom'];
$circcad=$_POST['circcad'];
$habitoev=$_POST['habitoev'];
$obs=$_POST['obs'];

$fechahoy = date("Y-m-d");

$tmpf = str_replace('-', "@", $fechan);
$tmpf =  split("@",$tmpf,3);
$diad = $tmpf[0];
$mesd = $tmpf[1];
$anod = $tmpf[2];
$fechan1 = $anod."-".$mesd."-".$diad;
if($CqOk==1)
{	
include("conexion-cupea.php");
$query =  "insert into informes_pacientes (id_paciente,peso,talla,grasa_corp,grasa_visc,masa_magra,ciclo_mens,habito_evac,actividad_fis,medicacion,circ_torax,circ_cintura,circ_abdomen,circ_cadera,fecha_inf,observaciones)values('$id_paciente','$peso','$talla','$grasacor','$grasavi','$masamagra','$ciclom','$habitoev','$actfis','$medicacion','$circto','$circcin','$circabd','$circcad','$fechahoy','$obs')";
$result = mysqli_query($bd, $query) ;
//echo $query;
?>
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">
		Alta de Informe Realizada Con Exito		
		</p>
	</div>
</div>
<?php
};
;};


include("conexion-cupea.php");

$query =  "select * FROM agenda_pacientes WHERE id_paciente='$id_paciente'";
$result = mysqli_query($bd,$query) ;
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

					<div class="widget-content no-padding">

<script type="text/javascript">

function entra1(dato)
{
var confirmar = confirm('Desea Continuar?: ');		
 if(confirmar==true)
	{
		alert(dato);
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
								<h4><i class="icon-male"></i>Generar Informe Del Paciente:<font color="red"><?php echo " ".$apellido2." ".$nombre2."  DNI:  ".$dni2; ?></font></h4>
								<!--<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>-->
							</div>
				<form name=frm method="POST" action="pacientes_informes.php">							
                 	    <input type="hidden" name="ingresar" value="2">	
						<input type="hidden" name="CQ" value="<?=$CqNum?>" />						
					    <input type="hidden" name="id_paciente" value="<?php echo $id_paciente;?>">							
						<div class="widget-content no-padding">
						<table class="table" width="50%" align="center">
						 <th  class="col-md-2">PESO:</th> <th class="col-md-4"><input type="text" name="peso"  value="<?php echo $peso;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th>
						 <th  class="col-md-2">ACTIVIDAD FISICA:</th> <th class="col-md-4"><input type="text" name="actfis"  value="<?php echo $actfis;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">TALLA:</th> <th class="col-md-4"><input type="text" name="talla"  value="<?php echo $talla;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;"  required></th>
						 <th  class="col-md-2">MEDICACION:</th> <th class="col-md-4"><input type="text" name="medicacion"  value="<?php echo $medicacion;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">% GRASA CORPORAL TOTAL:</th> <th class="col-md-4"><input type="text" name="grasacor"  value="<?php echo $grasacor;?>" class="form-control required"  onfocus='selecciona_value(this)' required ></th>
						 <th  class="col-md-2">CIRC. TORAX:</th> <th class="col-md-4"><input type="text" name="circto"  value="<?php echo $circto;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">% GRASA VISCERAL:</th> <th class="col-md-4"><input type="text" name="grasavi"  value="<?php echo $grasavi;?>" class="form-control required"  onfocus='selecciona_value(this)' required ></th>
						 <th  class="col-md-2">CIRC. CINTURA:</th> <th class="col-md-4"><input type="text" name="circcin"  value="<?php echo $circcin;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">% MASA MAGRA:</th> <th class="col-md-4"><input type="text" name="masamagra"  value="<?php echo $masamagra;?>" class="form-control required"  onfocus='selecciona_value(this)' required ></th>
						 <th  class="col-md-2">CIRC. ABDOMEN:</th> <th class="col-md-4"><input type="text" name="circabd"  value="<?php echo $circabd;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">CICLO MENSTRUAL:</th> <th class="col-md-4"><input type="text" name="ciclom"  value="<?php echo $ciclom;?>" class="form-control required"  onfocus='selecciona_value(this)' required ></th>
						 <th  class="col-md-2">CIRC. CADERA:</th> <th class="col-md-4"><input type="text" name="circcad"  value="<?php echo $circcad;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">HABITO EVACUATORIO:</th> <th class="col-md-4"><input type="text" name="habitoev"  value="<?php echo $habitoev;?>" class="form-control required"  onfocus='selecciona_value(this)' required ></th>
						 <th  class="col-md-2">OBSERVACIONES:</th> <th class="col-md-4"><input type="text" name="obs"  value="<?php echo $obs;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2"></th><th class="col-md-4"></th><th class="col-md-2"><input type='submit' class='btn btn-success' value="Guardar Informe"></th><th></th>
						</table>
				</form>

</div>

</div>

						</div>
					</div>
				</div>
					   <div class="col-md-2">
                       </div>
										<div class="widget box">
			<div class="widget-header">
						<h4><i class="icon-male"></i>Informe Anteriores Del Paciente:<font color="red"><?php echo " ".$apellido2." ".$nombre2."  DNI:  ".$dni2; ?></font></h4>
						</div>
						<div class="widget-content no-padding">
						<table class="table" width="100%" align="center">
						 <th  >PESO</th>
						 <th  >TALLA</th>
						 <th  >%GRASA CORP. TOTAL</th>
						 <th  >%GRASA VISCERAL</th>
						 <th  >%MASA MAGRA</th>
						 <th  >CICLO MENSTRUAL</th>
						 <th  >HABITO EVACUA.</th>
						 <th  >ACT.FISICA</th>
						 <th  >MEDICACION</th>
						 <th  >CIRC. TORAX</th>
						 <th  >CIRC. CINTURA</th>
						 <th  >CIRC. ABDOMEN</th>
						 <th  >CIRC. CADERA</th>
						 <th  >OBS.</th>
						 <th  >INFORME</th>
						 </tr>
<?php
					$query =  "select * FROM informes_pacientes WHERE id_paciente='$id_paciente' order by id_informes";
					$result = mysqli_query($bd, $query) ;
					//echo $query;
					while($row = mysqli_fetch_assoc($result))
						{
						$id_paciente = $row['id_paciente'];
						$id_informe = $row['id_informe'];
						$peso=$row['peso'];
						$talla=$row['talla'];
						$grasacor=$row['grasa_corp'];
						$grasavi=$row['grasa_visc'];
						$masamagra=$row['masa_magra'];
						$ciclom=$row['ciclo_mens'];
						$habitoev=$row['habito_evac'];
						$actfis=$row['actividad_fis'];
						$medicacion=$row['medicacion'];
						$circto=$row['circ_torax'];
						$circcin=$row['circ_cintura'];
						$circabd=$row['cisc_cadera'];
						$circcad=$row['circcad'];
						$obs=$row['observaciones'];

						echo "<td  class='col-md-2'>".$peso."</td>";
						echo "<td  class='col-md-2'>".$talla."</td>";
						echo "<td  class='col-md-2'>".$grasacor."</td>";
						echo "<td  class='col-md-2'>".$grasavi."</td>";
						echo "<td  class='col-md-2'>".$masamagra."</td>";
						echo "<td  class='col-md-2'>".$ciclom."</td>";
						echo "<td  class='col-md-2'>".$habitoev."</td>";
						echo "<td  class='col-md-2'>".$actfis."</td>";
						echo "<td  class='col-md-2'>".$medicacion."</td>";
						echo "<td  class='col-md-2'>".$circto."</td>";
						echo "<td  class='col-md-2'>".$circcin."</td>";
						echo "<td  class='col-md-2'>".$circabd."</td>";
						echo "<td  class='col-md-2'>".$circcad."</td>";
						echo "<td  class='col-md-2'>".$obs."</td>";
						echo "</tr>";
						}
?>

						</table>
				
			</div>
		</div>   
				</div>
				<!-- /Responsive DataTable -->
				<!-- /Page Content -->

			<!-- /.container -->

	</div>

</body>
</html>