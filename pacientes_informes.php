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
$peso = $_POST['peso'];
$talla = $_POST['talla'];
$tallasen = $_POST['tallasen'];
$biocrom = $_POST['biocrom'];
$toraxtransv = $_POST['toraxtransv'];
$toraxantpost = $_POST['toraxantpost'];
$biiliocres = $_POST['biiliocres'];
$humerobie = $_POST['humerobie'];
$femoralbie = $_POST['femoralbie'];
$cabeza = $_POST['cabeza'];
$brazorela = $_POST['brazorela'];
$brazoflex = $_POST['brazoflex'];
$antebrazomax = $_POST['antebrazomax'];
$toraxmeso = $_POST['toraxmeso'];
$circcin = $_POST['circcin'];
$circcad = $_POST['circcad'];
$muslomax = $_POST['muslomax'];
$muslomed = $_POST['muslomed'];
$pantomax = $_POST['pantomax'];
$triceps = $_POST['triceps'];
$subesca = $_POST['subesca'];
$supraes = $_POST['supraes'];
$abdominal = $_POST['abdominal'];
$muslomed2 = $_POST['muslomed2'];
$pantomax2 = $_POST['pantomax2'];
$actfis = $_POST['actfis'];
$medicacion = $_POST['medicacion'];
$obs = $_POST['obs'];
$tipoactfis = $_POST['tipoactfis'];




$fechan = $_POST['fechan'];

$sexog = $_POST['sexog'];
include("conexion-cupea.php");
$query1 ="select*from piel_pacientes where id_piel='$sexog'";
$result1 = mysqli_query($bd, $query1) ;
while($row = mysqli_fetch_assoc($result1))
	{
	$grosorpiel=$row['grosor_piel'];
	$constpiel=$row['constante'];
	$consta_menor=$row['consta_menor'];
	}

$interval = date_diff($datetime1, $datetime2);

	
$fechanaci = $_POST['fechanaci'];
$id_paciente = $_POST['id_paciente'];

$fechahoy = date("Y-m-d");

function dateDifference($start_date, $end_date)
{
    // calulating the difference in timestamps 
    $diff = strtotime($start_date) - strtotime($end_date);
     
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds
    return ceil(abs($diff / 86400));
}
 
// start date 
$start_date = $fechanaci;
 
// end date 
$end_date = $fechahoy;
 
// call dateDifference() function to find the number of days between two dates
$dateDiff = dateDifference($start_date, $end_date);
$difer=floor($dateDiff/365); 
if($difer>=12)
{
$constpiel=$consta_menor;
$grosorpiel=1;	
}

$tmpf = str_replace('-', "@", $fechan);
$tmpf =  explode("@",$tmpf);
$diad = $tmpf[0];
$mesd = $tmpf[1];
$anod = $tmpf[2];
$fechan1 = $anod."-".$mesd."-".$diad;
if($CqOk==1)
{	
include("conexion-cupea.php");
$query ="insert into informes_pacientes(id_paciente,peso,talla,talla_sentado,biocromial,torax_transverso,torax_ant_post,bi_iliocrestideo,humeral_biepicondilar,femoral_biepicondilar,cabeza,brazo_relajado,brazo_flex_tens,antebrazo_max,torax_meso_est,cintura,cadera,muslo_max,muslo_med,pantorrilla_max,triceps,subescapular,supraespinal,abdominal,muslo_medial2,pantorrilla_max2,actividad_fis,medicacion,grosor_piel,constante_piel,fecha_inf,observaciones,tipo_act_fis) values('$id_paciente','$peso','$talla','$tallasen','$biocrom','$toraxtransv','$toraxantpost','$biiliocres','$humerobie','$femoralbie','$cabeza','$brazorela','$brazoflex','$antebrazomax','$toraxmeso','$circcin','$circcad','$muslomax','$muslomed','$pantomax','$triceps','$subesca','$supraes','$abdominal','$muslomed2','$pantomax2','$actfis','$medicacion','$grosorpiel','$constpiel','$fechahoy','$obs','$tipoactfis')";
$result = mysqli_query($bd, $query) ;
//echo $query;
$ingresar=10;
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

$query =  "select * FROM informes_pacientes WHERE id_paciente='$id_paciente' order by id_informe DESC limit 1";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$id_paciente = $row['id_paciente'];
	$peso = $row['peso'];
	$brazorela = $row['brazo_relajado'];
	$circcin = $row['cintura'];
	$circcad = $row['cadera'];
	$muslomed = $row['muslo_med'];
	$pantomax = $row['pantorrilla_max'];
	$triceps = $row['triceps'];
	$subesca = $row['subescapular'];
	$supraes = $row['supraespinal'];
	$abdominal = $row['abdominal'];
	$muslomed2 = $row['muslo_medial2'];
	$pantomax2 = $row['pantorrilla_max2'];
	$actfis = $row['actividad_fis'];
	$medicacion = $row['medicacion'];
	$obs = $row['observaciones'];
	$fecha_inf = $row['fecha_inf'];
    $tipoactfis=$row['tipo_act_fis'];
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
					
function entra3(dato)
{
var confirmar = confirm('Esta seguro que desea Generar el Informe?: ');		
 if(confirmar==true)
	{
    var id_informe = dato;
	
    window.open('informes_imprimir.php?id_informe='+id_informe,'_top');
	}
}

				
</script>
					</div>					
				</div>					
				<?php if($ingresar<>10){;?>		
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
					    <input type="hidden" name="grosorpiel1" value="<?php echo $grosorpiel;?>">							
					    <input type="hidden" name="constpiel1" value="<?php echo $constpiel;?>">							
					    <input type="hidden" name="consta_menor1" value="<?php echo $consta_menor;?>">							
					    <input type="hidden" name="id_paciente" value="<?php echo $id_paciente;?>">							
					    <input type="hidden" name="fecha_naci" value="<?php echo $fecha_nac2;?>">							
					    <input type="hidden" name="sexog" value="<?php echo $sexo2;?>">							
						<div class="widget-content no-padding">
						<table class="table" width="50%" align="center">
						 <th colspan=2 ><font color="blue" >DATOS BASICOS</font></th></tr>
						 <th  class="col-md-2">PESO BRUTO (kg):</th> <th class="col-md-4"><input type="number" name="peso"  value="<?php echo $peso;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th></tr>
						 <th  class="col-md-2">TALLA CORPORAL (cm):</th> <th class="col-md-4"><input type="number" name="talla"  value="<?php echo $talla;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;"  required></th></tr>
						 <th  class="col-md-2">TALLA SENTADO (cm):</th> <th class="col-md-4"><input type="number" name="tallasen"  value="<?php echo $tallasen;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;"  required></th></tr>
						 <th colspan=2><font color="blue">DIAMETROS (cm)</font></th></tr>
						 <th  class="col-md-2">BIOCROMIAL:</th> <th class="col-md-4"><input type="number" name="biocrom"  value="<?php echo $biocrom;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' required ></th><tr>
						 <th  class="col-md-2">TORAX TRANSVERSO:</th> <th class="col-md-4"><input type="number" name="toraxtransv"  value="<?php echo $toraxtransv;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">TORAX ANTERO-POSTERIOR:</th> <th class="col-md-4"><input type="number" name="toraxantpost"  value="<?php echo $toraxantpost;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">BI-ILIOCRESTIDEO:</th> <th class="col-md-4"><input type="number" name="biiliocres"  value="<?php echo $biiliocres;?>" class="form-control required"  onfocus='selecciona_value(this)'step="any" style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">HUMERO(biepicondilar):</th> <th class="col-md-4"><input type="number" name="humerobie"  value="<?php echo $humerobie;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' required ></th><tr>
						 <th  class="col-md-2">FEMORAL(biepicondilar):</th> <th class="col-md-4"><input type="number" name="femoralbie"  value="<?php echo $femoralbie;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' required ></th><tr>
						 <th colspan=2><font color="blue">PERIMETROS (cm)</font></th></tr>
						 <th  class="col-md-2">CABEZA:</th> <th class="col-md-4"><input type="number" name="cabeza"  value="<?php echo $cabeza;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' required ></th><tr>
						 <th  class="col-md-2">BRAZO RELAJADO:</th> <th class="col-md-4"><input type="number" name="brazorela"  value="<?php echo $brazorela;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' required ></th><tr>
						 <th  class="col-md-2">BRAZO FLEXIONADO EN TENSION:</th> <th class="col-md-4"><input type="number" name="brazoflex"  value="<?php echo $brazoflex;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' required ></th><tr>
						 <th  class="col-md-2">ANTEBRAZO MAXIMO:</th> <th class="col-md-4"><input type="number" name="antebrazomax"  value="<?php echo $antebrazomax;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' required ></th><tr>
						 <th  class="col-md-2">TORAX MESOESTERNAL:</th> <th class="col-md-4"><input type="number" name="toraxmeso"  value="<?php echo $toraxmeso;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">CINTURA MINIMA:</th> <th class="col-md-4"><input type="number" name="circcin"  value="<?php echo $circcin;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">CADERA MAXIMA:</th> <th class="col-md-4"><input type="number" name="circcad"  value="<?php echo $circcad;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">MUSLO MAXIMO:</th> <th class="col-md-4"><input type="number" name="muslomax"  value="<?php echo $muslomax;?>" class="form-control required" step="any"   onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">MUSLO MEDIAL:</th> <th class="col-md-4"><input type="number" name="muslomed"  value="<?php echo $muslomed;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">PANTORRILA MAXIMA:</th> <th class="col-md-4"><input type="number" name="pantomax"  value="<?php echo $pantomax;?>" class="form-control required" step="any"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th colspan=2><font color="blue">PLIEGUES CUTANEOS (mm)</font></th></tr>
						 <th  class="col-md-2">TRICEPS:</th> <th class="col-md-4"><input type="number" name="triceps"  value="<?php echo $triceps;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">SUBESCAPULAR:</th> <th class="col-md-4"><input type="number" name="subesca"  value="<?php echo $subesca;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">SUPRAESPINAL:</th> <th class="col-md-4"><input type="number" name="supraes"  value="<?php echo $supraes;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">ABDOMINAL:</th> <th class="col-md-4"><input type="number" name="abdominal"  value="<?php echo $abdominal;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">MUSLO MEDIAL:</th> <th class="col-md-4"><input type="number" name="muslomed2"  value="<?php echo $muslomed2;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">PANTORRILA MAXIMA:</th> <th class="col-md-4"><input type="number" name="pantomax2"  value="<?php echo $pantomax2;?>" class="form-control required"  onfocus='selecciona_value(this)' step="any" style="text-transform: uppercase;" required></th><tr>
						 <th colspan=2><font color="blue">OTROS CONCEPTOS:</font></th></tr>
						 <th  class="col-md-2">TIPO DE ACT. FISICA</th> <th class="col-md-4"><select name="tipoactfis" class="select2 full-width-fix required" onfocus='selecciona_value(this)' style="display: block; margin-top: 6px;" required>
											<option value=""></option>
											<option value="1" <?php if($tipoactfis == '1'){ echo "selected";}; ?> > Recreativo </option>
											<option value="2" <?php if($tipoactfis == '2'){ echo "selected";}; ?> > Deportivo </option>
							</select></th></tr>
						 <th  class="col-md-2">ACTIVIDAD FISICA:</th> <th class="col-md-4"><select name="actfis" class="col-md-12 select2 full-width-fix required"  onfocus='selecciona_value(this)' >


															<?php
															include("conexion-cupea.php");
															$query =  "SELECT * FROM  act_fis_pacientes ORDER BY id_acti " ;
															$result = mysqli_query($bd, $query) ;
															while($row = mysqli_fetch_assoc($result))
															{
															$sel = "";
															if ( $row["id_acti"] == $actfis ){$sel = " SELECTED";};
															echo "<option value='".$row["id_acti"]."' ".$sel.">".$row["categoria"]."</option>";
															}
															?>

											</select></th><tr>						 
						 <th  class="col-md-2">MEDICACION:</th> <th class="col-md-4"><input type="text" name="medicacion"  value="<?php echo $medicacion;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2">OBSERVACIONES:</th> <th class="col-md-4"><input type="text" name="obs"  value="<?php echo $obs;?>" class="form-control required"  onfocus='selecciona_value(this)' style="text-transform: uppercase;" required></th><tr>
						 <th  class="col-md-2"></th><th class="col-md-4"><input type='submit' class='btn btn-primary' value="Guardar Informe"></th></tr>
						</table>
				</form>

</div>

</div>

						</div>
					</div>
				</div>
<?php ;};?>						

				<div class="row" >
				<div class="col-md-12">
					   <div class="col-md-2">
                       </div>
					   <div class="col-md-8">
 
						<div class="widget box">
							<div class="widget-header">
						<h4 style="color:green"><i class="icon-male"></i>Informe Anteriores Del Paciente:<font color="red"><?php echo " ".$apellido2." ".$nombre2."  DNI:  ".$dni2; ?></font></h4>
								<!--<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>-->
							</div>

				<div class="widget-content"   align="center">


			
	
						<table class="table" width="50%" >
						 <th  >Nro. Informe</th>
						 <th  >Fecha</th>
						 <th style="text-align:center;" >Informes Realizados</th>
						 </tr>
<?php             
                    $contar=0; 
					$query =  "select * FROM informes_pacientes WHERE id_paciente='$id_paciente' order by fecha_inf";
					$result = mysqli_query($bd, $query) ;
					//echo $query;
					while($row = mysqli_fetch_assoc($result))
						{
						$contar=$contar+1;	
						$id_paciente = $row['id_paciente'];
						$id_informe = $row['id_informe'];
						$fecha_inf=$row['fecha_inf'];
						$tmpf1 = str_replace('-', "@", $fecha_inf);
						$tmpf1 =  explode("@",$tmpf1);
						$anod = $tmpf1[0];
						$mesd = $tmpf1[1];
						$diad = $tmpf1[2];
						$fecha_inf1 = $diad."-".$mesd."-".$anod;						
						echo "<td  class='col-md-2'>".$contar."</td>";
						echo "<td  class='col-md-2'>".$fecha_inf1."</td>";
						echo "<input type='hidden' name='id_informe' id='id_informe".$contar."' value='$id_informe'>";
						?>
						<td align="center"><button class='btn btn-info' onclick="entra3($('#id_informe<?php echo $contar;?>').val());return false;">Imprimir Informe<?php echo "-".$contar;?></button></td>
						<?php
						echo "</tr>";
						}
?>

						</table>
				</div>
 				</div>	
 				</div>	

 				</div>	
				</div>
				</div>
				<!-- /Responsive DataTable -->
				<!-- /Page Content -->

			<!-- /.container -->

	</div>

</body>
</html>