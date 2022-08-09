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
<style>
.verticalText {
text-align:left;	
-webkit-transform: rotate(-90deg);
-moz-transform: rotate(-90deg);
}
</style>

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
    $recredepor=$row['tipo_act_fis'];
	}
	
$tmpf = str_replace('-', "@", $fecha_inf);
$tmpf = explode("@",$tmpf);
$anod = $tmpf[0];
$mesd = $tmpf[1];
$diad = $tmpf[2];
$fecha_inf1 = $diad."-".$mesd."-".$anod;
	
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
    $fechan2=$row['fecha_nac'];
	}


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
$start_date = $fechan2;
 
// end date 
$end_date = $fechahoy;
 
// call dateDifference() function to find the number of days between two dates
$dateDiff = dateDifference($start_date, $end_date);
$edad=floor($dateDiff/365); 


		
//area superficial=$constpiel*peso*talla
$area_sup= ($constpiel*pow($peso,0.425)*pow($talla,0.725))/10000;
$area_sup1= number_format($area_sup,3,".",",");
//echo $area_sup1."<br>";
//Masa de la Piel (Kg):
$masapiel=  ($area_sup*$grosorpiel*1.05);
$masapiel1=  number_format($masapiel,4,".",",");
//echo $masapiel1."<br>";


//totalpliegues
$totalpliegues=	$triceps+$subesca+$supraes+$abdominal+$muslomed2+$pantomax2;
$szadiposa=($totalpliegues*(170.18/$talla)-116.41)/34.79;
$szadiposa1=  number_format($szadiposa,2,".",",");
//echo $triceps."/".$subesca."/".$supraes."/".$abdominal."/".$muslomed2."/".$pantomax2."<br>";
//echo $szadiposa1."<br>";
//masa adiposa

$masaadiposa=(($szadiposa*5.85)+25.6)/pow((170.18/$talla),3);
$masaadiposa1=  number_format($masaadiposa,4,".",",");
//echo $masaadiposa1."<br>";

//per. Brazo corregido
$brazocorreg= $brazorela-($triceps*3.141/10);
$brazocorreg1=  number_format($brazocorreg,3,".",",");
//echo $brazocorreg1."<br>";
//per. Antebrazo
$antebrazocorreg=$antebrazomax;
$antebrazocorreg1=  number_format($antebrazocorreg,3,".",",");
//echo $antebrazocorreg1."<br>";
//per. Muslo corregido
$muslocorreg=$muslomax-($muslomed2*3.141/10);
$muslocorreg1=  number_format($muslocorreg,3,".",",");
//echo $muslocorreg1."<br>";
//per. Pantorrilla corregido
$pantocorreg=$pantomax-($pantomax2*3.141/10);
$pantocorreg1=  number_format($pantocorreg,3,".",",");
//echo $pantocorreg1."<br>";
//per. Tórax corregido
//echo $toraxmeso."/".$subesca."<br>";
$toraxcorreg=$toraxmeso-($subesca*3.141/10);
$toraxcorreg1=  number_format($toraxcorreg,3,".",",");
//echo $toraxcorreg1."<br>";
//Suma perímetros corregidos:
$pericorreg=$brazocorreg+$antebrazocorreg+$muslocorreg+$pantocorreg+$toraxcorreg;
$pericorreg1=  number_format($pericorreg,3,".",",");
//echo $pericorreg1."<br>";
//Score Z muscular:
$szmuscular=(($pericorreg*(170.18/$talla)-207.21)/13.74);
$szmuscular1=  number_format($szmuscular,2,".",",");
//echo $szmuscular1."<br>";
//Masa Muscular (Kg):
$masamuscular=(($szmuscular*5.4)+24.5)/pow((170.18/$talla),3);
$masamuscular1=  number_format($masamuscular,4,".",",");
//echo $masamuscular1."<br>";
//per. Cintura corregido
$cinturacorreg=$circcin-($abdominal*0.3141);
$cinturacorreg1=  number_format($cinturacorreg,4,".",",");
//echo $cinturacorreg1."<br>";
//Suma de tórax
$toraxtotal=$toraxtransv+$toraxantpost+$cinturacorreg;
$toraxtotal1=  number_format($toraxtotal,4,".",",");
//echo $toraxtotal1."<br>";
//Score Z residual:
$szresidual=(($toraxtotal*(89.92/$tallasen)-109.35)/7.08);
$szresidual1=  number_format($szresidual,2,".",","); 
//echo $szresidual1."<br>";
//Masa Residual (Kg):
$masaresidual=(($szresidual*1.24)+6.1)/pow((89.92/$tallasen),3);
$masaresidual1=  number_format($masaresidual,4,".",",");
//echo $masaresidual1."<br>";
//Score Z cabeza:
$szcabeza =($cabeza-56)/1.44;
$szcabeza1=  number_format($szcabeza,2,".",","); 
//echo $szcabeza1."<br>";
//Masa ósea Cabeza (Kg):
$masaosea=($szcabeza*0.18)+1.2;
$masaosea1=  number_format($masaosea,4,".",",");
//echo $masaosea1."<br>";
//Suma de Diámetros:
$diametrototal =$biocrom +$biiliocres+($humerobie*2)+($femoralbie*2);
$diametrototal1=  number_format($diametrototal,4,".",",");
//echo $diametrototal1."<br>";
//Score Z ósea cuerpo:
$szcuerpo =(($diametrototal*(170.18/$talla))-98.88)/5.33;
$szcuerpo1=  number_format($szcuerpo,2,".",","); 
//echo $szcuerpo1."<br>";

$sztotal2= $szadiposa+$szmuscular+$szresidual+$szcuerpo;
$sztotal3=  number_format($sztotal2,2,".",",");

//Masa Ósea Cuerpo (Kg):
$masacuerpo=(($szcuerpo*1.34)+6.7)/pow((170.18/$talla),3);
$masacuerpo1=  number_format($masacuerpo,4,".",",");



//echo $masacuerpo1."<br>";
//Masa Ósea Total (Kg):
$masatotal= $masaosea + $masacuerpo;
$masatotal1=  number_format($masatotal,4,".",",");
//echo $masatotal1."<br>";
//Peso Estructurado (Kg):
$pesoestruc= $masapiel+$masaadiposa+$masamuscular+$masaresidual+$masaosea + $masacuerpo;
$pesoestruc1=  number_format($pesoestruc,4,".",",");
//echo $pesoestruc1."<br>";
//Diferencia P.E. - Peso Bruto:
$diferpeypb= $pesoestruc-$peso;
$diferpeypb1=  number_format($diferpeypb,4,".",",");
//echo $diferpeypb1."<br>";
//% de diferencia:
$diferporc= $diferpeypb/$peso*100;
$diferporc1=  number_format($diferporc,2,".",",");
//echo $diferporc1."%<br>";
//porcentajes masa piel y peso estruc
$masapielypeso= $masapiel/$pesoestruc*100;
$masapielypeso1=  number_format($masapielypeso,2,".",",");

//porcentajes masa de adiposa y peso estruc
$masaadipypeso= $masaadiposa/$pesoestruc*100;
$masaadipypeso1=  number_format($masaadipypeso,2,".",",");

//porcentajes masa muscular y peso estruc
$masamuscypeso= $masamuscular/$pesoestruc*100;
$masamuscypeso1=  number_format($masamuscypeso,2,".",",");

//porcentajes masa residual y peso estruc
$masaresiypeso= $masaresidual/$pesoestruc*100;
$masaresiypeso1=  number_format($masaresiypeso,2,".",",");

//porcentajes masa oseacabeza y peso estruc
$masaoseaypeso= $masaosea/$pesoestruc*100;
$masaoseaypeso1=  number_format($masaoseaypeso,2,".",",");
//echo $masaoseaypeso1."%<br>";
//porcentajes masa osea cuerpo y peso estruc
$masacuerypeso= $masacuerpo/$pesoestruc*100;
$masacuerypeso1=  number_format($masacuerypeso,2,".",",");
//echo $masacuerypeso1."%<br>";
//porcentajes masa osea cuerpo total y peso estruc
$masacuertypeso= $masatotal/$pesoestruc*100;
$masacuertypeso1=  number_format($masacuertypeso,2,".",",");

//porcentajes total 
$porcetotal= $masapielypeso+$masaadipypeso+$masamuscypeso+$masaresiypeso+$masaoseaypeso+$masacuerypeso;
$porcetotal1=  number_format($porcetotal,2,".",",");
//echo $porcetotal1."%<br>";

//ajustes
$masapielajuste= $masapielypeso*$diferpeypb/100;
$masapielajuste1=  number_format($masapielajuste,3,".",",");
//echo $masapielajuste1."%<br>";
//porcentajes masa de adiposa y peso estruc
$masaadipajuste= $masaadipypeso*$diferpeypb/100;
$masaadipajuste1=  number_format($masaadipajuste,3,".",",");
//echo $masaadipajuste1."%<br>";
//porcentajes masa muscular y peso estruc
$masamuscajuste= $masamuscypeso*$diferpeypb/100;
$masamuscajuste1=  number_format($masamuscajuste,3,".",",");
//echo $masamuscajuste1."%<br>";
//porcentajes masa residual y peso estruc
$masaresiajuste= $masaresiypeso*$diferpeypb/100;
$masaresiajuste1=  number_format($masaresiajuste,3,".",",");
//echo $masaresiajuste1."%<br>";
//porcentajes masa oseacabeza y peso estruc
$masaoseaajuste= $masaoseaypeso*$diferpeypb/100;
$masaoseaajuste1=  number_format($masaoseaajuste,3,".",",");
//echo $masaoseaajuste1."%<br>";
//porcentajes masa osea cuerpo y peso estruc
$masacuerajuste= $masacuerypeso*$diferpeypb/100;
$masacuerajuste1=  number_format($masacuerajuste,3,".",",");
//echo $masacuerajuste1."%<br>";
//porcentajes masa osea cuerpo total y peso estruc
$masacuertajuste= $masacuertypeso*$diferpeypb/100;
$masacuertajuste1=  number_format($masacuertajuste,3,".",",");
//echo $masacuertajuste1."%<br>";
//porcentajes total 
$ajustetotal= $masapielajuste+$masaadipajuste+$masamuscajuste+$masaresiajuste+$masaoseaajuste+$masacuerajuste;
$ajustetotal1=  number_format($ajustetotal,3,".",",");
//echo $ajustetotal1."%<br>";

//kg
$masapielkg= $masapiel-$masapielajuste;
$masapielkg1=  number_format($masapielkg,3,".",",");
//echo $masapielkg1."<br>";
//porcentajes masa de adiposa y peso estruc
$masaadipkg= $masaadiposa-$masaadipajuste;
$masaadipkg1=  number_format($masaadipkg,3,".",",");
//echo $masaadipkg1."<br>";
//porcentajes masa muscular y peso estruc
$masamusckg= $masamuscular-$masamuscajuste;
$masamusckg1=  number_format($masamusckg,3,".",",");
//echo $masamusckg1."<br>";
//porcentajes masa residual y peso estruc
$masaresikg= $masaresidual-$masaresiajuste;
$masaresikg1=  number_format($masaresikg,3,".",",");
//echo $masaresikg1."<br>";
//porcentajes masa seacabeza y peso estruc
$masaoseakg= $masaosea-$masaoseaajuste;
$masaoseakg1=  number_format($masaoseakg,3,".",",");
//echo $masaoseakg1."<br>";
//porcentajes masa osea cuerpo y peso estruc
$masacuerkg= $masacuerpo-$masacuerajuste;
$masacuerkg1=  number_format($masacuerkg,3,".",",");
//echo $masacuerkg1."<br>";
//porcentajes masa osea cuerpo total y peso estruc
$masacuertkg= $masatotal-$masacuertajuste;
$masacuertkg1=  number_format($masacuertkg,3,".",",");
//echo $masacuertkg1."<br>";
//porcentajes total 
$kgtotal= $masapielkg+$masaadipkg+$masamusckg+$masaresikg+$masaoseakg+$masacuerkg;
$kgtotal1=  number_format($kgtotal,3,".",",");
//echo $kgtotal1."<br>";
//ajuste pe y pesob
$ajustedifcuer= $ajustetotal-$diferpeypb;
$ajustedifcuer1=  number_format($ajustedifcuer,3,".",",");
//echo $ajustedifcuer1."<br>";
//kg pe y pesob
$kgdifer= $kgtotal-$peso;
$kgdifer1=  number_format($kgdifer,3,".",",");
//echo $kgdifer1."<br>";

//Masa ósea de referencia
$masaosearef = $masacuertkg;
$masaosearef1=  number_format($masaosearef,3,".",",");
//echo $masaosearef1."<br>";
//MOR - MOActual
$moactual = $masacuertkg-$masacuertkg;
$moactual1=  number_format($moactual,3,".",",");
//echo $moactual1."<br>";
//Suma de 4 masas
$masa4total = $kgtotal-$masacuertkg;
$masa4total1=  number_format($masa4total,3,".",",");
//echo $masa4total1."<br>";
//Nuevos porcentajes Adiposo
$nuevoporc = $masaadipkg/$masa4total;
$nuevoporc1=  number_format($nuevoporc,5,".",",");
//echo $nuevoporc1."<br>";
//Muscular
$nuevomusc = $masamusckg/$masa4total;
$nuevomusc1=  number_format($nuevomusc,5,".",",");
//echo $nuevomusc1."<br>";
//Residual
$nuevoresi = $masaresikg/$masa4total;
$nuevoresi1=  number_format($nuevoresi,5,".",",");
//echo $nuevoresi1."<br>";
//Piel
$nuevopiel = $masapielkg/$masa4total;
$nuevopiel1=  number_format($nuevopiel,5,".",",");
//echo $nuevopiel1."<br>";
//Suma de % de 4 masas
$masa4porc = $nuevoporc+$nuevomusc+$nuevoresi+$nuevopiel;
$masa4porc1=  number_format($masa4porc,5,".",",");
//echo $masa4porc1."<br>";
//Adiposa		25,309
$adipreajuste = $masaadipkg-($moactual*$nuevoporc);
$adipreajuste1=  number_format($adipreajuste,3,".",",");
//echo $adipreajuste1."<br>";
//Muscular		30,093
$muscreajuste = $masamusckg-($moactual*$nuevomusc);
$muscreajuste1=  number_format($muscreajuste,3,".",",");
//echo $muscreajuste1."<br>";
//Residual		7,204
$resireajuste = $masaresikg-($moactual*$nuevoresi);
$resireajuste1=  number_format($resireajuste,3,".",",");
//echo $resireajuste1."<br>";
//Ósea		7,062
$oseareajuste = $masacuertkg;
$oseareajuste1=  number_format($oseareajuste,3,".",",");
//echo $oseareajuste1."<br>";
//Piel		3,433
$pielreajuste = $masapielkg-($moactual*$nuevopiel);
$pielreajuste1=  number_format($pielreajuste,3,".",",");
//echo $pielreajuste1."<br>";
//Suma  de 5 m. Corr.		73,100
$total5corr = $adipreajuste+$muscreajuste+$resireajuste+$oseareajuste+$pielreajuste;
$total5corr1 =  number_format($total5corr,5,".",",");
//echo $total5corr1."<br>";
//Índices:	
//Adiposo	9,7035 =I50/($G$7/100)^2
$indadip=$adipreajuste/pow(($talla/100),2);
$indadip1 =  number_format($indadip,4,".",",");
//echo $indadip1."<br>";
//Muscular	11,5376
$indmusc=$muscreajuste/pow(($talla/100),2);
$indmusc1 =  number_format($indmusc,4,".",",");
//echo $indmusc1."<br>";
//Residual	2,7619
$indresi=$resireajuste/pow(($talla/100),2);
$indresi1 =  number_format($indresi,4,".",",");
//echo $indresi1."<br>";
//Óseo	2,7076
$indosea= $oseareajuste/pow(($talla/100),2);
$indosea1 =  number_format($indosea,4,".",",");
//echo $indosea1."<br>";
//Piel	1,3162
$indpiel=$pielreajuste/pow(($talla/100),2);
$indpiel1 =  number_format($indpiel,4,".",",");
//echo $indpiel1."<br>";
//Musc/Óseo	4,2612
$indmuscoseo= $muscreajuste/$oseareajuste;
$indmuscoseo1 =  number_format($indmuscoseo,4,".",",");
//echo $indmuscoseo1."<br>";
//Musc/Lastre	0,6997 =I51/(I55-I51)
$indmusclast= $muscreajuste/($total5corr-$muscreajuste);
$indmusclast1 =  number_format($indmusclast,4,".",",");
//echo $indmusclast1."<br>";
//Lastre	1,6489=(I55-I51)*1000/(G7)^2
$indlast= ($total5corr-$muscreajuste)*1000/pow($talla,2);
$indlast1 =  number_format($indlast,4,".",",");
//echo $indlast1."<br>";


//datos basicos
$etmpeso = 0.05;
$etmtall = 0.11;
$etmtals = 0.23;
//diametro
$etmbiac = 0.39;
$etmtórt = 0.61;
$etmtóra = 0.68;
$etmbiil = 0.64;
$etmhume = 0.40;
$etmfemo = 0.30;
//perimetro
$etmcabe = 0.16;
$etmbrar = 0.63;
$etmbraf = 0.69;
$etmante = 0.48;
$etmtórm = 0.35;
$etmcint = 0.54;
$etmcade = 0.21;
$etmmuss = 0.32;
$etmmusm = 0.33;
$etmpan1 = 0.28;
//pliegues
$etmtríc = 1.55;
$etmsube = 1.59;
$etmsupr = 2.19;
$etmabdo = 1.69;
$etmmusl = 1.54;
$etmpan2 = 1.62;

//datos basicos   zcore-z
$zpeso=	($peso*pow((170.18/$talla),3));	
$zcorezpeso = ($zpeso-64.58)/8.6;		

$ztallasen = ($tallasen*(170.18/$talla));	
$zcoreztals = ($ztallasen-89.92)/4.5;		
//diametro   zcore-z		

$zbiocrom = ($biocrom*(170.18/$talla));		
$zcorezbiac = ($zbiocrom-38.04)/1.92;		

$ztoraxtransv = ($toraxtransv*(170.18/$talla));		
$zcoreztórt = ($ztoraxtransv-27.92)/1.74;		

$ztoraxantpost = ($toraxantpost*(170.18/$talla));		
$zcoreztóra = ($ztoraxantpost-17.5)/1.38;
		
$zbiiliocres = ($biiliocres*(170.18/$talla));		
$zcorezbiil = ($zbiiliocres-28.84)/1.75;		

$zhumerobie = ($humerobie*(170.18/$talla));		
$zcorezhume = ($zhumerobie-6.48)/0.35;		

$zfemoralbie = ($femoralbie*(170.18/$talla));		
$zcorezfemo = ($zfemoralbie-9.52)/0.48;	
		
//perimetro   zcore-z

$zcabeza = ($cabeza*(170.18/$talla));		
$zcorezcabe = ($zcabeza-56)/1.44;	

$zbrazorela = ($brazorela*(170.18/$talla));	
$zcorezbrar = ($zbrazorela-26.89)/2.33;


$zbrazoflex = ($brazoflex*(170.18/$talla));
$zcorezbraf = ($zbrazoflex-29.41)/2.37;

 $zantebrazomax = ($antebrazomax*(170.18/$talla));		
$zcorezante = ($zantebrazomax-25.13)/1.41;

$ztoraxmeso = ($toraxmeso*(170.18/$talla));		
$zcoreztórm = ($ztoraxmeso-87.86)/5.18;

$zcirccin = ($circcin*(170.18/$talla));			
$zcorezcint = ($zcirccin-71.91)/4.45;

$zcirccad = ($circcad*(170.18/$talla));			
$zcorezcade = ($zcirccad-94.67)/5.58;

$zmuslomax = ($muslomax*(170.18/$talla));		
$zcorezmuss = ($zmuslomax-55.82)/4.23;

$zmuslomed = ($muslomed*(170.18/$talla));		
$zcorezmusm = ($zmuslomed-53.2)/4.56;

$zpantomax = ($pantomax*(170.18/$talla));		
$zcorezpan1 = ($zpantomax-35.25)/2.3;		

//pliegues   zcore-z		
$ztriceps = ($triceps*(170.18/$talla));
$zcoreztríc = ($ztriceps-15.4)/4.47;

$zsubesca = ($subesca*(170.18/$talla));		
$zcorezsube = ($zsubesca-17.2)/5.07;

$zsupraes = ($supraes*(170.18/$talla));		
$zcorezsupr = ($zsupraes-15.4)/4.47;

$zabdominal = ($abdominal*(170.18/$talla));		
$zcorezabdo = ($zabdominal-25.4)/7.78;

$zmuslomed2 = ($muslomed2*(170.18/$talla));		
$zcorezmusl = ($zmuslomed2-27)/8.33;

$zpantomax2 = ($pantomax2*(170.18/$talla));		
$zcorezpan2 = ($zpantomax2-16)/4.67;		


$azcorezpeso = number_format($zcorezpeso,2,'.',',');

$azcoreztals = number_format($zcoreztals,2,'.',',');

$azcorezbiac = number_format($zcorezbiac,2,'.',',');
$azcoreztórt = number_format($zcoreztórt,2,'.',',');
$azcoreztóra = number_format($zcoreztóra,2,'.',',');
$azcorezbiil = number_format($zcorezbiil,2,'.',',');
$azcorezhume = number_format($zcorezhume,2,'.',',');
$azcorezfemo = number_format($zcorezfemo,2,'.',',');

$azcorezcabe = number_format($zcorezcabe,2,'.',',');
$azcorezbrar = number_format($zcorezbrar,2,'.',',');
$azcorezbraf = number_format($zcorezbraf,2,'.',',');
$azcorezante = number_format($zcorezante,2,'.',',');
$azcoreztórm = number_format($zcoreztórm,2,'.',',');
$azcorezcint = number_format($zcorezcint,2,'.',',');
$azcorezcade = number_format($zcorezcade,2,'.',',');
$azcorezmuss = number_format($zcorezmuss,2,'.',',');
$azcorezmusm = number_format($zcorezmusm,2,'.',',');
$azcorezpan1 = number_format($zcorezpan1,2,'.',',');

$azcoreztríc = number_format($zcoreztríc,2,'.',',');
$azcorezsube = number_format($zcorezsube,2,'.',',');
$azcorezsupr = number_format($zcorezsupr,2,'.',',');
$azcorezabdo = number_format($zcorezabdo,2,'.',',');
$azcorezmusl = number_format($zcorezmusl,2,'.',',');
$azcorezpan2 = number_format($zcorezpan2,2,'.',',');

if($genero2==1 and $recredepor==1)
	{
	$oms=pow($talla/100,2)*23;	
	$rdhmin1=18.90;
	$rdhmax1= 0.00;
	$rdhmin2=19.00;
	$rdhmax2=23.10;
	$rdhmin3=23.20;
	$rdhmax3=27.50;
	$rdhmin4=27.60;
	$rdhmax4=33.00;
	$rdhmin5=33.00;
	$rdhmax5= 0.00;
	}	
if($genero2==1 and $recredepor==2)
	{
	$oms=pow($talla/100,2)*23;		
	$rdhmin1=16.60;
	$rdhmax1= 0.00;
	$rdhmin2=16.60;
	$rdhmax2=20.00;
	$rdhmin3=20.10;
	$rdhmax3=26.00;
	$rdhmin4=26.10;
	$rdhmax4=30.60;
	$rdhmin5=30.60;
	$rdhmax5= 0.00;
	}	
if($genero2==2 and $recredepor==1)
	{
	$oms=pow($talla/100,2)*21.5;		
	$rdhmin1=26.00;
	$rdhmax1= 0.00;
	$rdhmin2=26.10;
	$rdhmax2=28.00;
	$rdhmin3=28.10;
	$rdhmax3=30.00;
	$rdhmin4=30.10;
	$rdhmax4=36.00;
	$rdhmin5=36.00;
	$rdhmax5= 0.00;
	}	
if($genero2==2 and $recredepor==2)
	{
	$oms=pow($talla/100,2)*21.5;		
	$rdhmin1=21.00;
	$rdhmax1= 0.00;
	$rdhmin2=21.00;
	$rdhmax2=24.00;
	$rdhmin3=24.00;
	$rdhmax3=29.00;
	$rdhmin4=29.10;
	$rdhmax4=34.00;
	$rdhmin5=34.00;
	$rdhmax5= 0.00;
	}	

if($genero2==2)
    {
    if($recredepor==2)
	{	
	$amrdmin1 = 0.55;
	$amrdmax1 = 0.00;
	$amrdmin2 = 0.55;
	$amrdmax2 = 0.70;
	$amrdmin3 = 0.71;
	$amrdmax3 = 0.88;
	$amrdmin4 = 0.89;
	$amrdmax4 = 1.06;
	$amrdmin5 = 1.06;
	$amrdmax5 = 0.00;

	$mordmin1 = 4.30;
	$mordmax1 = 0.00;
	$mordmin2 = 3.91;
	$mordmax2 = 4.30;
	$mordmin3 = 3.50;
	$mordmax3 = 3.90;
	$mordmin4 = 3.10;
	$mordmax4 = 3.49;
	$mordmin5 = 3.10;
	$mordmax5 = 0.00;

	$tmrdmin1 = 47.50;
	$tmrdmax1 = 0.00;
	$tmrdmin2 = 43.90;
	$tmrdmax2 = 47.50;
	$tmrdmin3 = 36.40;
	$tmrdmax3 = 43.80;
	$tmrdmin4 = 32.70;
	$tmrdmax4 = 36.30;
	$tmrdmin5 = 32.70;
	$tmrdmax5 = 0.00;
    }
    if($recredepor==1)
	{	
	$amrdmin1 = 0.70;
	$amrdmax1 = 0.00;
	$amrdmin2 = 0.70;
	$amrdmax2 = 0.84;
	$amrdmin3 = 0.85;
	$amrdmax3 = 1.10;
	$amrdmin4 = 1.10;
	$amrdmax4 = 1.45;
	$amrdmin5 = 1.45;
	$amrdmax5 = 0.00;


	$mordmin1 = 4.15;
	$mordmax1 = 0.00;
	$mordmin2 = 3.76;
	$mordmax2 = 4.15;
	$mordmin3 = 3.35;
	$mordmax3 = 3.75;
	$mordmin4 = 2.95;
	$mordmax4 = 3.34;
	$mordmin5 = 2.95;
	$mordmax5 = 0.00;


	$tmrdmin1 = 45.20;
	$tmrdmax1 = 0.00;
	$tmrdmin2 = 41.00;
	$tmrdmax2 = 45.20;
	$tmrdmin3 = 32.30;
	$tmrdmax3 = 40.90;
	$tmrdmin4 = 28.00;
	$tmrdmax4 = 32.20;
	$tmrdmin5 = 28.00;
	$tmrdmax5 = 0.00;
	}
    }
if($genero2==1)
    {
    if($recredepor==1)
	{	
	$amrdmin1 = 0.36;
	$amrdmax1 = 0.00;
	$amrdmin2 = 0.36;
	$amrdmax2 = 0.41;
	$amrdmin3 = 0.42;
	$amrdmax3 = 0.54;
	$amrdmin4 = 0.55;
	$amrdmax4 = 0.65;
	$amrdmin5 = 0.65;
	$amrdmax5 = 0.00;

	$mordmin1 = 4.55;
	$mordmax1 = 0.00;
	$mordmin2 = 4.21;
	$mordmax2 = 4.55;
	$mordmin3 = 3.80;
	$mordmax3 = 4.20;
	$mordmin4 = 3.50;
	$mordmax4 = 3.79;
	$mordmin5 = 3.50;
	$mordmax5 = 0.00;

	$tmrdmin1 = 54.20;
	$tmrdmax1 = 0.00;
	$tmrdmin2 = 50.80;
	$tmrdmax2 = 54.20;
	$tmrdmin3 = 44.00;
	$tmrdmax3 = 50.80;
	$tmrdmin4 = 40.60;
	$tmrdmax4 = 43.90;
	$tmrdmin5 = 40.60;
	$tmrdmax5 = 0.00;
    } 
    if($recredepor==2)
	{	
	$amrdmin1 = 0.40;
	$amrdmax1 = 0.00;
	$amrdmin2 = 0.40;
	$amrdmax2 = 0.55;
	$amrdmin3 = 0.55;
	$amrdmax3 = 0.75;
	$amrdmin4 = 0.75;
	$amrdmax4 = 0.95;
	$amrdmin5 = 0.95;
	$amrdmax5 = 0.00;

	$mordmin1 = 4.45;
	$mordmax1 = 0.00;
	$mordmin2 = 4.11;
	$mordmax2 = 4.45;
	$mordmin3 = 3.70;
	$mordmax3 = 4.10;
	$mordmin4 = 3.40;
	$mordmax4 = 3.69;
	$mordmin5 = 3.40;
	$mordmax5 = 0.00;

	$tmrdmin1 = 50.70;
	$tmrdmax1 = 0.00;
	$tmrdmin2 = 47.40;
	$tmrdmax2 = 50.70;
	$tmrdmin3 = 40.50;
	$tmrdmax3 = 47.30;
	$tmrdmin4 = 37.10;
	$tmrdmax4 = 40.40;
	$tmrdmin5 = 37.10;
	$tmrdmax5 = 0.00;
	}
	}

	
$depfBalonce[1] = array(3.7,4,2.9);
$depfBaminto[2] = array(4.1,4.4,2.5);
$depfCricket[3] = array(4.9,4.4,2);
$depfEspald1[4] = array(2.5,3.7,3.1);
$depfEspald2[5] = array(2.6,3.5,3.6);
$depfFreest1[6] = array(2.9,3.7,3.2);
$depfFreest2[7] = array(2.8,3.7,3.2);
$depfFreest3[8] = array(2.4,3.8,3);
$depfFutbol[9] = array(4.2,4.6,2.2);
$depfHockey[10] = array(3.7,4.5,2.2);
$depfLacross[11] = array(4.1,4.5,2.4);
$depfLargadi[12] = array(4.4,4.7,1.7);
$depfMaripo1[13] = array(3,4.2,2.8);
$depfMaripo2[14] = array(2.8,3.9,3.1);
$depfMedley [15] = array(2.9,3.7,3);
$depfNetball[16] = array(3,3.8,3.3);
$depfNinguno[17] = array(0,0,0);
$depfPecho1[18] = array(2.9,4.3,2.8);
$depfPecho2[19] = array(2.6,3.9,3.3);
$depfSoftbol[20] = array(3.8,4.3,2.7);
$depfSquash[21] = array(3.4,4,2.8);
$depfVoleibo[22] = array(3,3.5,3.5);


$depmArq[1] = array(2.6,5.5,1.9);
$depmAtletis[2] = array(1.8,4.1,3.9);
$depmBalonce[3] = array(2.1,4.5,3.5);
$depmDefCen[4] = array(1.9,5.3,2.3);
$depmDefLat[5] = array(2,5.3,2.1);
$depmDelCen[6] = array(2.2,5.5,1.8);
$depmDelLat[7] = array(1.8,5.3,2.2);
$depmEspald1[8] = array(1.9,4.3,3.5);
$depmEspald2[9] = array(1.8,5.2,3.1);
$depmFutbola[10] = array(2.1,5.7,2.5);
$depmGimnasi[11] = array(1.9,6.1,2.5);
$depmHockey[12] = array(2.4,5.4,2.6);
$depmLevanta[13] = array(2.7,7.9,0.6);
$depmLibre1[14] = array(1.5,4.8,3.4);
$depmLibre2[15] = array(1.9,4.7,3.1);
$depmLibre3[16] = array(1.7,4.9,3.2);
$depmLuchagr[17] = array(2,6.5,1.5);
$depmLuchali[18] = array(1.8,6.8,1.4);
$depmMaripo1[19] = array(2,5.2,2.5);
$depmMaripo2[20] = array(2.1,5.5,2.5);
$depmMedDef[21] = array(2,5,2.3);
$depmMedley[22] = array(1.9,4.9,3);
$depmMedOf[23] = array(2.3,5.2,2.1);
$depmNatacio[24] = array(2.5,5.3,2.3);
$depmNinguno[25] = array(0,0,0);
$depmPecho1[26] = array(2.1,5.7,2.6);
$depmPecho2[27] = array(1.8,5.1,2.9);
$depmPedestr[28] = array(1.8,4.4,3.7);
$depmRemoca[29] = array(2,5.2,3);
$depmRugby1[30] = array(2.7,7.1,1.2);
$depmRugby2[31] = array(4.2,9.4,0.3);
$depmRugby3[32] = array(3.9,8.5,1);
$depmRugby4[33] = array(2.7,6,2);
$depmSquash[34] = array(2.5,5.2,2.8);

if($peso<$oms)
{$omsfinal=$peso;}
else
{$omsfinal=$oms;}	


$kgrdhmin1=number_format($rdhmin1*$omsfinal/100,3,",",".");
$kgrdhmax1=number_format($rdhmax1*$omsfinal/100,3,",",".");
$kgrdhmin2=number_format($rdhmin2*$omsfinal/100,3,",",".");
$kgrdhmax2=number_format($rdhmax2*$omsfinal/100,3,",",".");
$kgrdhmin3=number_format($rdhmin3*$omsfinal/100,3,",",".");
$kgrdhmax3=number_format($rdhmax3*$omsfinal/100,3,",",".");
$kgrdhmin4=number_format($rdhmin4*$omsfinal/100,3,",",".");
$kgrdhmax4=number_format($rdhmax4*$omsfinal/100,3,",",".");
$kgrdhmin5=number_format($rdhmin5*$omsfinal/100,3,",",".");
$kgrdhmax5=number_format($rdhmax5*$omsfinal/100,3,",",".");

$calcu=$peso*pow((170.18/$talla),3);
$calcu1=($calcu-64.58)/8.6;
$calcu2 = number_format($calcu1,2,'.',',');
//Masa ósea de referencia	
//MOR - MOActual	
$pesodif=$peso-$oms;
$mmuscul=$pesodif*0.25;
$metabasala=$oms+$mmuscul;

if($peso<$oms)
{$metabasal=$peso;}
else
{$metabasal=$metabasala;}

$edad=27;
//force la edad
	
if($genero2==1)
{
$mb=66+(13.7*$metabasal)+(5*$talla)-(6.8*$edad);	
}
else	
{
$mb=655+(9.6*$metabasal)+(1.7*$talla)-(4.7*$edad);	
}


$query =  "select * FROM act_fis_pacientes WHERE id_acti='$actfis'";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
    $categoria=$row['categoria'];		
    if($genero2==1)
	 {
	  $nivelact=$row['masculino'];	 
	 }
    else	 
	 {
	  $nivelact=$row['femenino'];	 
	 }
	}
$gastosener=$mb*$nivelact;
$pesorangomin=$oms-($oms*0.10);	
$pesorangomax=$oms+($oms*0.10);	
$indcincad=$circcin/$circcad;
$indmusose=$masamusckg/$masacuerkg;
$indadimus=$masaadipkg/$masamusckg;

$indcorporal=$peso/(pow($talla/100,2));
$tallasentpar=($tallasen/$talla)*100;


$totalpliegues2=$triceps+$subesca+$supraes;

$sumatoria=$totalpliegues2;
$altura=170.18/$talla;
$sumatoriasf=$sumatoria*$altura;

$corregbrazo=$brazoflex-($triceps/10);
$corregpanto=$pantomax-($pantomax2/10);
$raizpeso=pow($peso,0.3333);
$hwr=$talla/$raizpeso;
$endomorfo= -0.7182+(0.1451*$sumatoriasf)-(0.00068*(pow($sumatoriasf,2)))+(0.0000014*(pow($sumatoriasf,3)));
$mesomorfo = 0.858*$humerobie+0.601*$femoralbie+0.188*$corregbrazo+0.161*$corregpanto-$talla*0.131+4.5;


if($hwr<=38.25)
{
$ectomorfo =0.1;	
}
else	
{
	if($hwr<40.75)
		{
		$ectomorfo = 0.463*$hwr-17.63;		
		}
	else	
		{
		$ectomorfo = 0.732*$hwr-28.58;		
		}
	
}

	$tmkgmin1 = number_format($tmrdmin1*$omsfinal/100,3,",",".");
	$tmkgmax1 = number_format($tmrdmin1*$omsfinal/100,3,",",".");
	$tmkgmin2 = number_format($tmrdmin2*$omsfinal/100,3,",",".");
	$tmkgmax2 = number_format($tmrdmax2*$omsfinal/100,3,",",".");
	$tmkgmin3 = number_format($tmrdmin3*$omsfinal/100,3,",",".");
	$tmkgmax3 = number_format($tmrdmax3*$omsfinal/100,3,",",".");
	$tmkgmin4 = number_format($tmrdmin4*$omsfinal/100,3,",",".");
	$tmkgmax4 = number_format($tmrdmax4*$omsfinal/100,3,",",".");
	$tmkgmin5 = number_format($tmrdmin5*$omsfinal/100,3,",",".");
	$tmkgmax5 = number_format($tmrdmax5*$omsfinal/100,3,",",".");
					



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
					</div>					
				</div>					
					   <div class="col-md-1">
                       </div>
					   <div class="col-md-10">
   						<div class="widget box">
					    <div class="widget-content no-padding">
						<h1 align="center"><i class="icon-male"></i> Informe de Composición Corporal</h1>
						<table class="table" width="50%" style=" font-style: italic;font-size:20px;">
						<th  class="col-md-2">APELLIDO Y NOMBRE:</th> <th class="col-md-4"><?php echo $apellido2.",".$nombre2;?></th></tr>
						 <th  class="col-md-2">EDAD:</th> <th class="col-md-4"><?php echo $edad;?></th></tr>
                		 <th  class="col-md-2">NRO. INFORME:</th> <th class="col-md-4"><?php echo $id_informe;?></th></tr>
                		 <th  class="col-md-2">FECHA INFORME:</th> <th class="col-md-4"><?php echo $fecha_inf1;?></th></tr>
                        </table>						 
						</div>
						</div>

			<div class="widget box">
					    <div class="widget-content no-padding">
						<table class="table" width="50%" >
						 <th colspan=2 ><font color="blue" >DATOS BASICOS</th><th><font color="blue" >ETM%</font></th><th style="text-align:center;"><font color="blue" >ZCORE-Z</font></th></tr>
						 <th  class="col-md-2">PESO BRUTO (kg):</th> <th class="col-md-4"><?php echo $peso;?></th><th><?php echo $etmpeso; ?></th><td align="center"><?php echo $azcorezpeso; ?><td><tr>
						 <th  class="col-md-2">TALLA CORPORAL (cm):</th> <th class="col-md-4"><?php echo $talla;?></th><th><?php echo $etmtall; ?></th><th><th><tr>
						 <th  class="col-md-2">TALLA SENTADO (cm):</th> <th class="col-md-4"><?php echo $tallasen;?></th><th><?php echo $etmtals; ?></th><td align="center"><?php echo $azcoreztals; ?><td><tr>
						 <th colspan=2><font color="blue">DIAMETROS (cm)</font></th><th></th><th></th><th></th></tr>
						 <th  class="col-md-2">BIOCROMIAL:</th> <th class="col-md-4"><?php echo $biocrom;?></th><th><?php echo $etmbiac; ?></th><td align="center"><?php echo $azcorezbiac; ?><td><tr>
						 <th  class="col-md-2">TORAX TRANSVERSO:</th> <th class="col-md-4"><?php echo $toraxtransv;?></th><th><?php echo $etmtórt; ?></th><td align="center"><?php echo $azcoreztórt; ?><td><tr>
						 <th  class="col-md-2">TORAX ANTERO-POSTERIOR:</th> <th class="col-md-4"><?php echo $toraxantpost;?></th><th><?php echo $etmtóra; ?></th><td align="center"><?php echo $azcoreztóra; ?><td><tr>
						 <th  class="col-md-2">BI-ILIOCRESTIDEO:</th> <th class="col-md-4"><?php echo $biiliocres;?></th><th><?php echo $etmbiil; ?></th><td align="center"><?php echo $azcorezbiil; ?><td><tr>
						 <th  class="col-md-2">HUMERO(biepicondilar):</th> <th class="col-md-4"><?php echo $humerobie;?></th><th><?php echo $etmhume; ?></th><td align="center"><?php echo $azcorezhume; ?><td><tr>
						 <th  class="col-md-2">FEMORAL(biepicondilar):</th> <th class="col-md-4"><?php echo $femoralbie;?></th><th><?php echo $etmfemo; ?></th><td align="center"><?php echo $azcorezfemo; ?><td><tr>
						 <th colspan=2><font color="blue">PERIMETROS (cm)</font></th><th></th><th></th><th></th></tr>
						 <th  class="col-md-2">CABEZA:</th> <th class="col-md-4"><?php echo $cabeza;?></th><th><?php echo $etmcabe; ?></th><td align="center"><?php echo $azcorezcabe; ?><td><tr>
						 <th  class="col-md-2">BRAZO RELAJADO:</th> <th class="col-md-4"><?php echo $brazorela;?></th><th><?php echo $etmbrar; ?></th><td align="center"><?php echo $azcorezbrar; ?><td><tr>
						 <th  class="col-md-2">BRAZO FLEXIONADO EN TENSION:</th> <th class="col-md-4"><?php echo $brazoflex;?></th><th><?php echo $etmbraf; ?></th><td align="center"><?php echo $azcorezbraf; ?><td><tr>
						 <th  class="col-md-2">ANTEBRAZO MAXIMO:</th> <th class="col-md-4"><?php echo $antebrazomax;?></th><th><?php echo $etmante; ?></th><td align="center"><?php echo $azcorezante; ?><td><tr>
						 <th  class="col-md-2">TORAX MESOESTERNAL:</th> <th class="col-md-4"><?php echo $toraxmeso;?></th><th><?php echo $etmtórm; ?></th><td align="center"><?php echo $azcoreztórm; ?><td><tr>
						 <th  class="col-md-2">CINTURA MINIMA:</th> <th class="col-md-4"><?php echo $circcin;?></th><th><?php echo $etmcint; ?></th><td align="center"><?php echo $azcorezcint; ?><td><tr>
						 <th  class="col-md-2">CADERA MAXIMA:</th> <th class="col-md-4"><?php echo $circcad;?></th><th><?php echo $etmcade; ?></th><td align="center"><?php echo $azcorezcade; ?><td><tr>
						 <th  class="col-md-2">MUSLO MAXIMO:</th> <th class="col-md-4"><?php echo $muslomax;?></th><th><?php echo $etmmuss; ?></th><td align="center"><?php echo $azcorezmuss; ?><td><tr>
						 <th  class="col-md-2">MUSLO MEDIAL:</th> <th class="col-md-4"><?php echo $muslomed;?></th><th><?php echo $etmmusm; ?></th><td align="center"><?php echo $azcorezmusm; ?><td><tr>
						 <th  class="col-md-2">PANTORRILA MAXIMA:</th> <th class="col-md-4" align="center"><?php echo $pantomax;?></th><th><?php echo $etmpan1; ?></th><td align="center"><?php echo $azcorezpan1; ?><td><tr>
						 <th colspan=2><font color="blue">PLIEGUES CUTANEOS (mm)</font></th><th></th><th></th><td></td></tr>
						 <th  class="col-md-2">TRICEPS:</th> <th class="col-md-4"><?php echo $triceps;?></th><th><?php echo $etmtríc; ?></th><td align="center"><?php echo $azcoreztríc; ?><td><tr>
						 <th  class="col-md-2">SUBESCAPULAR:</th> <th class="col-md-4"><?php echo $subesca;?></th><th><?php echo $etmsube; ?></th><td align="center"><?php echo $azcorezsube; ?><td><tr>
						 <th  class="col-md-2">SUPRAESPINAL:</th> <th class="col-md-4"><?php echo $supraes;?></th><th><?php echo $etmsupr; ?></th><td align="center"><?php echo $azcorezsupr; ?><td><tr>
						 <th  class="col-md-2">ABDOMINAL:</th> <th class="col-md-4"><?php echo $abdominal;?></th><th><?php echo $etmabdo; ?></th><td align="center"><?php echo $azcorezabdo; ?><td><tr>
						 <th  class="col-md-2">MUSLO MEDIAL:</th> <th class="col-md-4"><?php echo $muslomed2;?></th><th><?php echo $etmmusl; ?></th><td align="center"><?php echo $azcorezmusl; ?><td><tr>
						 <th  class="col-md-2">PANTORRILA MAXIMA:</th> <th class="col-md-4"><?php echo $pantomax2;?></th><th><?php echo $etmpan2; ?></th><td align="center"><?php echo $azcorezpan2; ?><td><tr>

                        </table>						 
						</div>
				<div class="widget box">
					<div class="widget-header">
						<img src="vertorta.php?id_informe=<?php echo $id_informe;?>" class="img-thumbnail"/>
						<img src="vertorta1.php?id_informe=<?php echo $id_informe;?>" class="img-thumbnail"/>
					</div>
				</div>
				<table class="table" width="50%" >
				<th colspan=5 align="center"><font color="green" >FRACCIONAMIENTO 5 COMPONENTES (D. Kerr, 1988)</font></th></tr>
				<td><font color="green" >MASAS CORPORALES</td><td><font color="green" >PORCENTAJE</font></td><td align="center"><font color="green" >KILOS</font></td><td><font color="green" >ZCORE-Z</font></td><td align="center"><font color="green" >DIFERENCIA</font></td></tr>
				<td><font color="green" >MASA ADIPOSA</td><td><font color="green" ><?php echo $masaadipypeso1; ?>%</font></td><td align="center"><font color="green" ><?php echo $adipreajuste1; ?></font></td><td><font color="green" ><?php echo $szadiposa1; ?></font></td><td align="center"><font color="green" ><?php echo $adipreajuste1; ?></font></td></tr>
				<td><font color="green" >MASA MUSCULAR</td><td><font color="green" ><?php echo $masamuscypeso1; ?>%</font></td><td align="center"><font color="green" ><?php echo $muscreajuste1; ?></font></td><td><font color="green" ><?php echo $szmuscular1; ?></font></td><td align="center"><font color="green" ><?php echo $muscreajuste1; ?></font></td></tr>
				<td><font color="green" >MASA RESIDUAL</td><td><font color="green" ><?php echo $masaresiypeso1; ?>%</font></td><td align="center"><font color="green" ><?php echo $resireajuste1; ?></font></td><td><font color="green" ><?php echo $szresidual1; ?></font></td><td align="center"><font color="green" ><?php echo $resireajuste1; ?></font></td></tr>
				<td><font color="green" >MASA OSEA</td><td><font color="green" ><?php echo $masaoseaypeso1; ?>%</font></td><td align="center"><font color="green" ><?php echo $oseareajuste1; ?></font></td><td><font color="green" ><?php echo $szcuerpo1; ?></font></td><td align="center"><font color="green" ><?php echo $oseareajuste1; ?></font></td></tr>
				<td><font color="green" >MASA DE LA PIEL</td><td><font color="green" ><?php echo $masapielypeso1; ?>%</font></td><td align="center"><font color="green" ><?php echo $pielreajuste1; ?></font></td><td><font color="green" ></font></td><td align="center"><font color="green" ><?php echo $pielreajuste1; ?></font></td></tr>
				<td><font color="green" >MASA TOTAL</td><td><font color="green" ><?php echo $porcetotal1; ?>%</font></td><td align="center"><font color="green" ><?php echo $total5corr1; ?></font></td><td><font color="green" ><?php echo $calcu2; ?></font></td><td align="center"><font color="green" ><?php echo $total5corr1; ?></font></td></tr>
				<td colspan=2 align="center"><font color="green" >Porcentaje de diferencia î Peso Estructurado - Peso Bruto:</td><td align="center"><font color="green" ><?php echo $diferporc1; ?>%</font></td><td></td><td></td></tr>
                </table>	
		
				<table class="table" width="50%" >
				<th colspan=5><font color="gray" >El fraccionamiento corporal en 5 componentes (D. Kerr, 1988) es un modelo anatómico basado en estudios antropométricos con disección de cadáveres. Es en la actualidad, a pesar de sus limitaciones, el único modelo con validación directa. Lamentablemente, la gran variabilidad de la compresibilidad del tejido adiposo genera la principal fuente de error en la predicción de esta masa al utilizar calibres para pliegues cutáneos. Con este modelo, el cuerpo se fracciona en 5 tejidos:</font></th><th></th><th></th><th></th></tr>
				<td></td><td></td><td align="right"><font color="gray" >1-  Adiposo----></td><td><font color="gray" >("grasa subcutánea")</font></td><td></td><th></th><th></th><th></th></tr>
				<td></td><td></td><td align="right"><font color="gray" >2-  Muscular---></td><td><font color="gray" >(músculo)</font></td><td></td><th></th><th></th><th></th></tr>
				<td></td><td></td><td align="right"><font color="gray" >3-  Residual----></td><td><font color="gray" >(vísceras, órganos, pulmones)</font></td><td></td><th></th><th></th><th></th></tr>
				<td></td><td></td><td align="right"><font color="gray" >4-  Oseo---------></td><td><font color="gray" >(huesos)</font></td><td align="center"></td><td></td><th></th><th></th></tr>
				<td></td><td></td><td align="right"><font color="gray" >5-  Cutáneo----></td><td><font color="gray" >(piel)</font></td><td align="center"></td><td></td><th></th><th></th></tr>
				<th colspan=5><font color="gray" >El organismo es el resultado de la interacción entre nuestra herencia genética y hábitos nutricionales y de actividad física. Una alimentación sana y balanceada, en conjunto con una actividad física planificada, asegurarán cantidades de tejido adiposo y muscular ideales para los patrones genéticos predeterminados.</font></th><th></th><th></th><th></th></tr>
				<th colspan=5><font>MASAS ESPECÍFICAS PARA EL DEPORTE</font></th><th></th><th></th><th></th></tr>
				<th colspan=5><font color="gray" >Diferentes deportes requieren masas musculares, óseas y adiposas en cantidades específicas. En consecuencia, la interpretación de las mismas debe realizarse por un profesional con conocimientos del área.</font></th><th></th><th></th><th></th></tr>
                </table>
				<table class="table table-bordered" align="center" width="50%" >
				<th colspan=5 ><font color="gray" >COMPOSICION CORPORAL IDEAL (Clasificación según datos del laboratorio de Biosystem)</font></th></tr>
				<th colspan=5 style="text-align:center;"><font color="gray" >PORCENTAJES DE TEJIDO ADIPOSO</font></th></tr>
				<td align="left"><font color="gray" ></td><td colspan=2 style="text-align:center;"><font color="gray" >PORCENTAJES</font></td><td colspan=2 style="text-align:center;"><font color="gray" >EN KILOGRAMOS</font></td></tr>
				<td align="left"><font color="gray" >Excelente  </td><td style="text-align:center;"><font color="gray" ><</font></td>                     <td style="text-align:center;"><font color="gray" ><?php echo $rdhmin1;?></font></td><td style="text-align:center;"><font color="gray" ><</font></td>                       <td style="text-align:center;"><font color="gray" ><?php echo $kgrdhmin1;?></font></td></tr>
				<td align="left"><font color="gray" >Bueno      </td><td style="text-align:center;"><font color="gray" ><?php echo $rdhmin2;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $rdhmax2;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $kgrdhmin2;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $kgrdhmax2;?></font></td></tr>
				<td align="left"><font color="gray" >Aceptable  </td><td style="text-align:center;"><font color="gray" ><?php echo $rdhmin3;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $rdhmax3;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $kgrdhmin3;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $kgrdhmax3;?></font></td></tr>
				<td align="left"><font color="gray" >Elevado    </td><td style="text-align:center;"><font color="gray" ><?php echo $rdhmin4;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $rdhmax4;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $kgrdhmin4;?></font></td><td style="text-align:center;"><font color="gray" ><?php echo $kgrdhmax4;?></font></td></tr>
				<td align="left"><font color="gray" >Muy elevado</td><td style="text-align:center;"><font color="gray" >></font></td>                     <td style="text-align:center;"><font color="gray" ><?php echo $rdhmin5;?></font></td><td style="text-align:center;"><font color="gray" >></font>                       </td><td style="text-align:center;"><font color="gray" ><?php echo $kgrdhmin5;?></font></td></tr>
				<th colspan=5><font color="gray" >@NOTA: Una masa muscular disminuída elevará la fracción percentil de tejido adiposo en relación al peso total.</font></th></tr>
				</table>
			
				<table class="table" width="50%" >
				<th colspan=7><font color="gray" >MODELO DE PROPORCIONALIDAD PHANTOM</font></th></tr>
				<th colspan=5><font color="gray" >Los promedios y desvíos estándar del humano de referencia unisex PHANTOM son el resultado de miles de datos tomados de varios grupos poblacionales (ancianos, jóvenes, deportistas, sedentarios, mujeres, hombres). NO ES EL PROMEDIO IDEAL!!!</font></th><th></th><th></th></tr>
				<th colspan=5><font color="gray" >Es un punto de referencia para personas, ajustando por talla, como si todos midiesen 170,18 cm de altura. Cada variable está en proporción a esta talla, y el promedio de la muestra se ubica en el medio, sobre el valor "0", y la escala es en desvíos estándar. Entre el -1 y el +1 desvío estándar se ubicaron el 68% de los valores de la muestra, entre el -2 y el +2% el 95,5%, y entre el -3 y +3 el 99,7%.</font></th><th></th><th></th></tr>
				</table>
				

				<div class="widget box">
					<div class="widget-header">
						<img src="vertorta2.php?id_informe=<?php echo $id_informe;?>" class="img-thumbnail"/>
						<img src="vertorta3.php?id_informe=<?php echo $id_informe;?>" class="img-thumbnail"/>
					</div>
				</div>
				<div class="widget box">
					<div class="widget-header">
						<img src="vertorta4.php?id_informe=<?php echo $id_informe;?>" class="img-thumbnail"/>
						<img src="vertorta5.php?id_informe=<?php echo $id_informe;?>" class="img-thumbnail"/>
					</div>
				</div>
				<table class="table" width="50%" >
				<th colspan=4><font color="gray" >METABOLISMO BASAL<font></th></tr>
				<td align="left"><font color="gray" >Peso Ideal:                                       </td><td align="right"><font color="gray" ><?php $oms2=number_format($oms,3,",",".");echo $oms2;?>                  </font></td><td></td></tr>
				<td align="left"><font color="gray" >Masa muscular extra:                              </td><td align="right"><font color="gray" ><?php $mmuscul2=number_format($mmuscul,3,",",".");echo $mmuscul2;?>      </font></td><td></td></tr>
				<td align="left"><font color="gray" >Ajuste por sobrepeso - Diferencia:                </td><td align="right"><font color="gray" ><?php $pesodif2=number_format($pesodif,3,",",".");echo $pesodif2;?>      </font></td><td></td></tr>
				<td align="left"><font color="gray" >Peso para cálculo de metabolismo basal:           </td><td align="right"><font color="gray" ><?php $metabasal2=number_format($metabasal,3,",",".");echo $metabasal2;?></font></td><td></td></tr>
				<td align="left"><font color="gray" >Metabolismo Basal (MB): (Harris & Benedict, 1919):</td><td align="right"><font color="gray" ><?php $mb2=number_format($mb,3,",",".");echo $mb2;?>                     </font></td><td></td></tr>
				</table>

				<table class="table" width="50%" >
				<th colspan=5><font color="gray" >NIVEL DE ACTIVIDAD FÍSICA (OMS, 1985)<font></th></tr>
				<td align="left"><font color="gray" >Nivel de actividad física:                                  </td><td align="right"><font color="gray" ><?php echo $categoria;?>"  :</font></td><td align="right"><font color="gray" ><?php $nivelact2=number_format($nivelact,2,",",".");echo $nivelact2;?></font></td></tr>
				<td align="left"><font color="gray" >Gasto energético total estimado:                              </td><td align="right"><font color="gray" ><?php $gastosener2=number_format($gastosener,3,",",".");echo $gastosener2;?>   Kcals.</font></td><td></td></tr>
				</table>

				<table class="table" width="50%" >
				<th colspan=2><font color="gray" >PESO IDEAL<font></th><td  colspan=2 align="center"><font color="gray" >Rango</font></td></tr>
				<td align="left"><font color="gray" >Peso ideal en adultos según parámetros OMS (1985):</td><td align="right"><font color="gray" ><?php $oms2=number_format($oms,3,",",".");echo $oms2;?>Kg</font></td><td align="right"><font color="gray" ><?php $pesorangomin2=number_format($pesorangomin,3,",",".");echo $pesorangomin2;?>Kg</font></td><td align="right"><font color="gray" ><?php $pesorangomax2=number_format($pesorangomax,3,",",".");echo $pesorangomax2;?>Kg</font></td></tr>
				</table>
				<table class="table table-bordered" width="50%" border=1 >
				<th colspan=13 style="text-align:center;"><font color="gray" >INDICE CINTURA CADERA<font></th></tr>
				<td colspan=3></td><td colspan=8 align="center"><font color="gray" >Riesgo<font></td></tr>
				<th></th><td colspan=2 align="center"><font color="gray" >Edad<font></td><td colspan=2 align="center"><font color="gray" >Bajo<font></td><td colspan=2 align="center"><font color="gray" >Moderado<font></td><td colspan=2 align="center"><font color="gray" >Alto<font></td><td colspan=2 align="center"><font color="gray" >Muy Alto<font></td></tr>



<?php
$query =  "select * FROM cintura_riesgo_pacientes";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
    $genero=$row['genero'];
    $edadmin=$row['edadmin'];
    $edadmax=$row['edadmax'];
    $bajomin=$row['bajomin'];
    $modemin=$row['modemin'];
	$altomin=$row['altomin'];
	$maltomin=$row['maltomin'];
    $bajomax=$row['bajomax'];
    $modemax=$row['modemax'];
	$altomax=$row['altomax'];
	$maltomax=$row['maltomax'];
	if($genero==1)
	 {
	  $genero3="Hombre";	 
	 }
    else	 
	 {
	  $genero3="Mujer";	 
	 }
	echo "<td align='center'><font color='gray' >$genero3<font></td>";
	echo "<td align='center'><font color='gray' >$edadmin<font></td>";
	echo "<td align='center'><font color='gray' >$edadmax<font></td>";
	echo "<td align='center'><font color='gray' >$bajomin<font></td>";
	echo "<td align='center'><font color='gray' >$bajomax<font></td>";
	echo "<td align='center'><font color='gray' >$modemin<font></td>";
	echo "<td align='center'><font color='gray' >$modemax<font></td>";
	echo "<td align='center'><font color='gray' >$altomin<font></td>";
	echo "<td align='center'><font color='gray' >$altomax<font></td>";
	echo "<td align='center'><font color='gray' >$maltomin<font></td>";
	echo "<td align='center'><font color='gray' >$maltomax<font></td>";
	echo "<tr>";
	}
?>
				</table>

			<table class="table" width="50%" >
				<td align="left"><font color="gray" >Indice cintura/cadera:       </td><td align="right"><font color="gray" ><?php $indcincad2=number_format($indcincad,3,",",".");echo $indcincad2;?>                </font></td><td></td></tr>
				<th colspan=2 align="left"><font color="gray" >DATOS ADICIONALES       </th><td></td></tr>
				<td align="left"><font color="gray" >Suma de 6 pliegues:        </td><td align="right"><font color="gray" ><?php $totalpliegues3=number_format($totalpliegues,0,",",".");echo $totalpliegues3;?>      </font></td><td>Ideal 95.5</td></tr>
				<td align="left"><font color="gray" >Talla sentado/talla:       </td><td align="right"><font color="gray" ><?php $tallasentpar2=number_format($tallasentpar,3,",",".");echo $tallasentpar2;?>           </font></td>%<td></td></tr>
				<td align="left"><font color="gray" >Indice músculo/óseo:       </td><td align="right"><font color="gray" ><?php $indmusose2=number_format($indmusose,3,",",".");echo $indmusose2;?>                  </font></td><td></td></tr>
				<td align="left"><font color="gray" >Indice adiposo/muscular:   </td><td align="right"><font color="gray" ><?php $indadimus2=number_format($indadimus,3,",",".");echo $indadimus2;?>                  </font></td><td></td></tr>
				<td align="left"><font color="gray" >Indice masa corporal (IMC):</td><td align="right"><font color="gray" ><?php $indcorporal2=number_format($indcorporal,3,",",".");echo $indcorporal2;?>             </font>Kg/m2</td><td></td></tr>
				<th colspan=3 align="left"><font color="red" >IMC: Entre 18,5 y 24,9 Normal, entre 25 y 29,9 Sobrepeso, entre 30 y 39,9 Obesidad y mayor a 40  Obesidad Morbida.</th></tr>
			</table>
			<H3>Somatotipo de Heath & Carter(1990)</H3>			
			<table class="table" width="50%" >
				<td></td><td align="left"><font color="gray" >Sumatoria de pliegues:      </td><td align="right"><font color="gray" ><?php $totalpliegues3=number_format($totalpliegues2,3,",",".");echo $totalpliegues3;?>                </font></td><td></td><td></td><td></td></tr>
				<td></td><td align="left"><font color="gray" >170,18 / altura en cm:        </td><td align="right"><font color="gray" ><?php $altura2=number_format($altura,3,",",".");echo $altura2;?>      </font></td><td></td></tr>
				<td></td><td align="left"><font color="gray" >Sumatoria SF (sum.SF):       </td><td align="right"><font color="gray" ><?php $sumatoriasf2=number_format($sumatoriasf,3,",",".");echo $sumatoriasf2;?>           </font></td><td></td><td></td><td></td></tr>
				<td></td><td align="left"><font color="gray" >Per.correg. brazo:       </td><td align="right"><font color="gray" ><?php $corregbrazo2=number_format($corregbrazo,3,",",".");echo $corregbrazo2;?>                  </font></td><td></td><td></td><td></td></tr>
				<td></td><td align="left"><font color="gray" >Per.correg. pantorrilla:   </td><td align="right"><font color="gray" ><?php $corregpanto2=number_format($corregpanto,3,",",".");echo $corregpanto2;?>                  </font></td><td></td><td></td><td></td></tr>
				<td></td><td align="left"><font color="gray" >Raíz cúbica del peso:</td><td align="right"><font color="gray" ><?php $raizpeso2=number_format($raizpeso,3,",",".");echo $raizpeso2;?>             </font></td><td></td><td></td><td></td></tr>
				<td></td><td align="left"><font color="gray" >HWR:</td><td align="right"><font color="gray" ><?php $hwr2=number_format($hwr,3,",",".");echo $hwr2;?>             </font></td><td></td></tr>
				<td align="left"><font color="red" >ENDOMORFO:</td>
				<td align="left"><font color="red" ><?php $endomorfo2=number_format($endomorfo,1,",",".");echo $endomorfo2;?></font></td>
				<td align="left"><font color="red" >MESOMORFO:</td>
				<td align="left"><font color="red" ><?php $mesomorfo2=number_format($mesomorfo,1,",",".");echo $mesomorfo2;?></font></td>
				<td align="left"><font color="red" >ECTOMORFO:</td>
				<td align="left"><font color="red" ><?php $ectomorfo2=number_format($ectomorfo,1,",",".");echo $ectomorfo2;?></font></td>
				</tr>

				</table>
				<div class="widget box">
					<div class="widget-header" align='center'>
						<img  src="vertorta6.php?id_informe=<?php echo $id_informe;?>" class="img-thumbnail"/>
					</div>
				</div>				
			<H3>COMPARACION CON DEPORTE</H3>			
			<table class="table  table-bordered" width="50%" >
				<td></td>
				<td align="left"><font color="black" >ENDOMORFIA Adiposidad RelativA Sumatoria de pliegues: </td>
				<td align="left"><font color="black" >MESOMORFIA Robustez Músculo-Esquelética</font></td>
				<td align="left"><font color="black" >ECTOMORFIA Linearidad Relativa</font></td>
				</tr>
				<td>1     1(1/2)     2     2(1/2)    </td>
				<td align="left"><font color="green">Baja adiposidad relativa; poca grasa subcutánea; contornos musculares y óseos visibles.</font></td>
				<td align="left"><font color="green">Bajo desarrollo mús-esquelético relativo; diámetros óseos estrechos; diámetros musculares estrechos; pequeñas articulaciones en las extremidades.</font></td>
				<td align="left"><font color="green">Gran volumen por unidad de altura; extremidades relativamente voluminosas.</font></td>
				</tr>
				<td>3     3(1/2)     4     4(1/2)	5</td>
				<td align="left"><font color="green">Moderada adiposidad relativa; la grasa subcutánea cubre los contornos musculares y óseos; apariencia más blanda.</font></td>
				<td align="left"><font color="green">Moderado desarrollo músc-esquelético relativo; mayor volúmen muscular y huesos y articulaciones de mayores dimensiones.</font></td>
				<td align="left"><font color="green">Linearidad relativa moderada; menos volumen por unidad de altura; más estirado./font></td>				
				</tr>
				<td>5(1/2)   6     6(1/2)	   7	 </td>
				<td align="left"><font color="green">Alta adiposidad relativa; grasa subcutánea abundante; redondez en tronco y extremidades; mayor acumulación de grasa en el abdomen.</font></td>
				<td align="left"><font color="green">Alto desarrollo músc-esquelético relativo; diámetros óseos grandes; músculos de gran volumen; articulaciones grandes.</font></td>
				<td align="left"><font color="green">Linearidad relativa elevada; poco volumen por unidad de altura.</font></td>				
				</tr>
				<td>7(1/2)   8     8(1/2)			 </td>
				<td align="left"><font color="green">Extremadamente alta adiposidad relativa; muy abundante grasa subcutánea y grandes cantidades de grasa abdomin.en el tronco; concentración proximal de grasa en extremidades.</font></td>
				<td align="left"><font color="green">Desarrollo músculoésquelético relativo extremadamente alto; músculos muy voluminosos; esqueleto y articulaciones muy grandes.</font></td>
				<td align="left"><font color="green">Linearidad relativa extremadamente alta; muy estirado; volumen mínimo por unidad de altura.</font></td>				
				</tr>
				</table>	
			<H2 align="center">Calificaciones de Composición Corporal</H2>	
			<H4 align="center">COMPOSICION CORPORAL IDEAL</H4>
				<table class="table" width="50%" >
				<th colspan=8><font color="gray" >PORCENTAJES DE TEJIDO ADIPOSO</font></th><th></th><th></th></tr>
				<td></td><td></td><td align="left"><font color="gray" ></td><td colspan=2><font color="gray" >PORCENTAJES</font></td><td colspan=2><font color="gray" >EN KILOGRAMOS</font></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Excelente  </td><td><font color="gray" ><</font></td><td><font color="gray" ><?php echo $rdhmin1;?></font></td><td><font color="gray" ><</font></td><td><font color="gray" ><?php echo $kgrdhmin1;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Bueno      </td><td><font color="gray" ><?php echo $rdhmin2;?></font></td><td><font color="gray" ><?php echo $rdhmax2;?></font></td><td><font color="gray" ><?php echo $kgrdhmin2;?></font></td><td><font color="gray" ><?php echo $kgrdhmax2;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Aceptable  </td><td><font color="gray" ><?php echo $rdhmin3;?></font></td><td><font color="gray" ><?php echo $rdhmax3;?></font></td><td><font color="gray" ><?php echo $kgrdhmin3;?></font></td><td><font color="gray" ><?php echo $kgrdhmax3;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Elevado    </td><td><font color="gray" ><?php echo $rdhmin4;?></font></td><td><font color="gray" ><?php echo $rdhmax4;?></font></td><td><font color="gray" ><?php echo $kgrdhmin4;?></font></td><td><font color="gray" ><?php echo $kgrdhmax4;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Muy elevado</td><td><font color="gray" >></font></td><td><font color="gray" ><?php echo $rdhmin5;?></font></td><td><font color="gray" >></font></td><td><font color="gray" ><?php echo $kgrdhmin5;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				</table>
			<H5 align="center" style="color:green;">Porcentaje de tejido adiposo: <?php echo $masaadipypeso1;?>% - <?php echo "    ".$adipreajuste1."  "; ?>Kilogramos</H5>

				<table class="table" width="50%" >
				<th colspan=8><font color="gray" >PORCENTAJES DE TEJIDO MUSCULAR</font></th><th></th><th></th></tr>
				<td></td><td></td><td align="left"><font color="gray" ></td><td colspan=2><font color="gray" >PORCENTAJES</font></td><td colspan=2><font color="gray" >EN KILOGRAMOS</font></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Excelente  </td><td><font color="gray" ><</font></td><td><font color="gray" ><?php echo $tmrdmin1;?></font></td><td><font color="gray" ><</font></td><td><font color="gray" ><?php echo $tmkgmin1;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Bueno      </td><td><font color="gray" ><?php echo $tmrdmin2;?></font></td><td><font color="gray" ><?php echo $tmrdmax2;?></font></td><td><font color="gray" ><?php echo $tmkgmin2;?></font></td><td><font color="gray" ><?php echo $tmkgmax2;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Aceptable  </td><td><font color="gray" ><?php echo $tmrdmin3;?></font></td><td><font color="gray" ><?php echo $tmrdmax3;?></font></td><td><font color="gray" ><?php echo $tmkgmin3;?></font></td><td><font color="gray" ><?php echo $tmkgmax3;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Bajo    </td><td><font color="gray" ><?php echo $tmrdmin4;?></font></td><td><font color="gray" ><?php echo $tmrdmax4;?></font></td><td><font color="gray" ><?php echo $tmkgmin4;?></font></td><td><font color="gray" ><?php echo $tmkgmax4;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Muy Bajo</td><td><font color="gray" >></font></td><td><font color="gray" ><?php echo $tmrdmin5;?></font></td><td><font color="gray" >></font></td><td><font color="gray" ><?php echo $tmkgmin5;?></font></td><td><font color="gray" ></font></td><td><font color="gray" ></font></td><td></td></tr>
				</table>
			<H5 align="center" style="color:green;">Porcentaje de tejido Muscular: <?php echo $masamuscypeso1;?>% - <?php echo "    ".$muscreajuste1."  "; ?>Kilogramos</H5>
				<table class="table" width="50%" >
				<th colspan=8><font color="gray" >COCIENTE DE TEJIDO ADIPOSO / TEJIDO MUSCULAR</font></th><th></th><th></th><th></th><th></th><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" ></td><td colspan=2><font color="gray" >COCIENTE</font></td><td></td><td><td></td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Excelente  </td><td><font color="gray" ><</font></td><td><font color="gray" ><?php echo $amrdmin1;?></font></td><td><font color="gray" ><</font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><td></td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Bueno      </td><td><font color="gray" ><?php echo $amrdmin2;?></font></td><td><font color="gray" ><?php echo $amrdmax2;?></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Aceptable  </td><td><font color="gray" ><?php echo $amrdmin3;?></font></td><td><font color="gray" ><?php echo $amrdmax3;?></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Elevado    </td><td><font color="gray" ><?php echo $amrdmin4;?></font></td><td><font color="gray" ><?php echo $amrdmax4;?></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Muy Elevado</td><td><font color="gray" >></font></td><td><font color="gray" ><?php echo $amrdmin5;?></font></td><td><td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				</table>
			<H5 align="center" style="color:green;">Cociente adiposo/muscular: <?php $indadimus2=number_format($indadimus,3,",",".");echo $indadimus2;?>% </H5>
				<table class="table" width="50%" >
				<th colspan=8><font color="gray" >COCIENTE DE TEJIDO MUSCULAR / TEJIDO OSEO</font></th><th></th><th></th><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" ></td><td colspan=2><font color="gray" >COCIENTE</font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Excelente  </td><td><font color="gray" ><</font></td><td><font color="gray" ><?php echo $mordmin1;?></font></td><td><font color="gray" ><</font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Bueno      </td><td><font color="gray" ><?php echo $mordmin2;?></font></td><td><font color="gray" ><?php echo $mordmax2;?></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Aceptable  </td><td><font color="gray" ><?php echo $mordmin3;?></font></td><td><font color="gray" ><?php echo $mordmax3;?></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Bajo    </td><td><font color="gray" ><?php echo $mordmin4;?></font></td><td><font color="gray" ><?php echo $mordmax4;?></font></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<td></td><td></td><td align="left"><font color="gray" >Muy Bajo</td><td><font color="gray" >></font></td><td><font color="gray" ><?php echo $mordmin5;?></font></td><td><td><td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				</table>
			<H5 align="center" style="color:green;">Cociente muscular/óseo: <?php $indmusose2=number_format($indmusose,3,",",".");echo $indmusose2;?>% </H5>
	
			</div>
						</div>
					</div>
				</div>
					   <div class="col-md-1">
                       </div>

 
		</div>   
				</div>
				<!-- /Responsive DataTable -->
				<!-- /Page Content -->

			<!-- /.container -->

	</div>

</body>
</html>