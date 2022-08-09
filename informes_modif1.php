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
$control=0;
$id_informe=$_GET['id_informe'];
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
$id_informe=$_POST['id_informe1'];
$dni2=$_POST['dni1'];
$genero2=$_POST['genero1'];
$apellido2=$_POST['apellido1'];
$nombre2=$_POST['nombre1'];

$fechahoy = date("Y-m-d");
$control=1;
$tmpf = str_replace('-', "@", $fechan);
$tmpf =  split("@",$tmpf,3);
$diad = $tmpf[0];
$mesd = $tmpf[1];
$anod = $tmpf[2];
$fechan1 = $anod."-".$mesd."-".$diad;
if($CqOk==1)
{	
include("conexion-cupea.php");
$query =  "update informes_pacientes set peso='$peso',talla='$talla',talla_sentado='$tallasen',biocromial='$biocrom',torax_transverso='$toraxtransv',torax_ant_post='$toraxantpost',bi_iliocrestideo='$biiliocres',humeral_biepicondilar='$humerobie',femoral_biepicondilar='$femoralbie',cabeza='$cabeza',brazo_relajado='$brazorela',brazo_flex_tens='$brazoflex',antebrazo_max='$antebrazomax',torax_meso_est='$toraxmeso',cintura='$circcin',cadera='$circcad',muslo_max='$muslomax',muslo_med='$muslomed',pantorrilla_max='$pantomax',triceps='$triceps',subescapular='$subesca',supraespinal='$supraes',abdominal='$abdominal',muslo_medial2='$muslomed2',pantorrilla_max2='$pantomax2',actividad_fis='$actfis',medicacion='$medicacion',observaciones='$obs',tipo_act_fis='$tipoactfis' WHERE id_informe='$id_informe'";
$result = mysqli_query($bd, $query) ;
//echo $query;
?>
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">
		Modificacion de Informe Realizada Con Exito		
		</p>
	</div>
</div>
<?php
};
;};


include("conexion-cupea.php");
$query =  "select * FROM informes_pacientes WHERE id_informe='$id_informe'";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$id_paciente = $row['id_paciente'];
	$peso = $row['peso'];
	$talla = $row['talla'];
	$tallasen = $row['talla_sentado'];
	$biocrom = $row['biocromial'];
	$toraxtransv = $row['torax_transverso'];
	$toraxantpost = $row['torax_ant_post'];
	$biiliocres = $row['bi_iliocrestideo'];
	$humerobie = $row['humeral_biepicondilar'];
	$femoralbie = $row['femoral_biepicondilar'];
	$cabeza = $row['cabeza'];
	$brazorela = $row['brazo_relajado'];
	$brazoflex = $row['brazo_flex_tens'];
	$antebrazomax = $row['antebrazo_max'];
	$toraxmeso = $row['torax_meso_est'];
	$circcin = $row['cintura'];
	$circcad = $row['cadera'];
	$muslomax = $row['muslo_max'];
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
	$grosorpiel=$row['grosor_piel'];
	$constpiel=$row['constante_piel'];
	$obs = $row['observaciones'];
	$fecha_inf = $row['fecha_inf'];
    $tipoactfis=$row['tipo_act_fis'];
	}
$query =  "select * FROM agenda_pacientes WHERE id_paciente='$id_paciente'";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$genero2=$row['sexo'];	
	$id_paciente=$row['id_paciente'];
	$dni2=$row['dni'];
	$apellido2=$row['apellido'];
	$nombre2=$row['nombre'];
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

function entra1(dato1,dato2)
{
var genero1 = dato1;
var dni1 = dato2;
window.open('informes_modif.php?ingresar=1&dni1='+dni1+'&genero1='+genero1,'_top');
}
				
</script>
				   <div class="col-md-2">
                   </div>
				   <div class="col-md-8">

						<h2><i class="icon-male"></i> PACIENTE </h2>
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-male"></i>Modificar Informe Del Paciente:<font color="red"><?php echo " ".$apellido2." ".$nombre2."  DNI:  ".$dni2; ?></font></h4>
								<!--<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>-->
							</div>
				<form name=frm method="POST" action="informes_modif1.php">							
                 	    <input type="hidden" name="ingresar" value="2">	
						<input type="hidden" name="CQ" value="<?=$CqNum?>" />						
					    <input type="hidden" name="id_informe1" value="<?php echo $id_informe;?>">							
					    <input type="hidden" name="genero1" id="genero1" value="<?php echo $genero2;?>">							
					    <input type="hidden" name="dni1" id="dni1" value="<?php echo $dni2;?>">							
					    <input type="hidden" name="fecha_naci" value="<?php echo $fecha_nac2;?>">							
					    <input type="hidden" name="sexog" value="<?php echo $sexo2;?>">							
               	  	    <input type="hidden" name="id_paciente" value="<?php echo $id_paciente;?>">												
					    <input type="hidden" name="apellido1" value="<?php echo $apellido2;?>">							
               	  	    <input type="hidden" name="nombre1" value="<?php echo $nombre2;?>">												

						<table class="table" width="100%" align="center">
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
                        <?php if($control==1){;?>
						 <th  class="col-md-2"></th><th class="col-md-4"><button class='btn btn-success' onclick="entra1($('#genero1').val(),$('#dni1').val());return false;">Volver</button></th>
                        <?php ;};?>
                        <?php if($control==0){;?>
						 <th  class="col-md-2"></th><th class="col-md-4"><input type='submit' class='btn btn-primary' value="Guardar Informe"></th>
                        <?php ;};?>

						</table>
				</form>

				</div>

					   <div class="col-md-2">
                       </div>

					</div>   
				</div>
				<!-- /Responsive DataTable -->
				<!-- /Page Content -->

			<!-- /.container -->
	</div>
</div>

</body>
</html>