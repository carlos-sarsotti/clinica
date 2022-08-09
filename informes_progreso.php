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
 <script language="javascript" type="text/javascript"> 
 //this code handles the F5/Ctrl+F5/Ctrl+R document.onkeydown = checkKeycode 
 function checkKeycode(e) 
 { 
 var keycode;
 if (window.event) keycode = window.event.keyCode;
 else if (e) keycode = e.which; 
 // Mozilla firefox 
 if ($.browser.mozilla) 
 { 
if (keycode == 116 ||(e.ctrlKey && keycode == 82)) 
{ if (e.preventDefault) 
{ e.preventDefault(); e.stopPropagation(); 
	} 
	} 
} 
// IE 
else if ($.browser.msie) {
	if (keycode == 116 || (window.event.ctrlKey && keycode == 82)) 
	{ window.event.returnValue = false;
window.event.keyCode = 0;
 window.status = "Refresh is disabled"; 
	}
	}
 }
 </script> 


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
					<form name=frm method="GET" action="informes_progreso.php">						
					<input type="hidden" name="ingresar">
					<div class="widget-content no-padding">
					<span class="black"><h4>Progresos - Busqueda de Informe</h4></span>
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
window.open('informes_progreso.php' ,'_top')
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
	$id_paciente1=$row['id_paciente'];
    $alta=1;
	$dni2=$row['dni'];
	$apellido2=$row['apellido'];
	$nombre2=$row['nombre'];
	}
	if($alta==1)
	{		
$contar=0;
$coma="";
$tilde="";
include("conexion-cupea.php");
$query =  "select sum(peso+talla+talla_sentado) as basico,sum(biocromial+torax_transverso+torax_ant_post+bi_iliocrestideo+humeral_biepicondilar+femoral_biepicondilar)as diametro,sum(cabeza+brazo_relajado+Brazo_Flex_tens+antebrazo_max+torax_meso_est+cintura+cadera+muslo_max+muslo_med+pantorrilla_max)as perimetro,sum(triceps+subescapular+supraespinal+abdominal+muslo_medial2+pantorrilla_max2) as pliegue FROM informes_pacientes WHERE id_paciente='$id_paciente' group by id_informe order by id_informe";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$contar=$contar+1;	
	$basico = $row['basico'];
	$diametro = $row['diametro'];
	$perimetro = $row['perimetro'];
	$pliegue = $row['pliegue'];
    $bas[$contar]=$basico;  	
    $dia[$contar]=$diametro;  	
    $per[$contar]=$perimetro;  	
    $pli[$contar]=$pliegue;

    $data1= $data1.$coma.$bas[$contar];
    $data2= $data2.$coma.$dia[$contar];
    $data3= $data3.$coma.$per[$contar];
    $data4= $data4.$coma.$pli[$contar];
    $informe =$informe.$coma."Informe-".$contar; 
    $coma=" ";   	
	}
	
$tmpf = str_replace('-', "@", $fecha_inf);
$tmpf =  explode("@",$tmpf);
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

?>
		
				<div class="row" >
				<div class="col-md-12">

					<div class="widget-content no-padding">


					</div>					
				</div>					
					   <div class="col-md-1">
                       </div>
					   <div class="col-md-10">
   						<div class="widget box">
					    <div class="widget-content no-padding">
						<h1 align="center"><i class="icon-male"></i> Grafico de Progresos</h1>
						<table class="table" width="50%" style=" font-style: italic;font-size:20px;">
						<th  class="col-md-2">APELLIDO Y NOMBRE:</th> <th class="col-md-4"><?php echo $apellido2.",".$nombre2;?></th></tr>
						 <th  class="col-md-2">EDAD:</th> <th class="col-md-4"><?php echo $edad;?></th></tr>
                        </table>						 
						</div>
						</div>

			<div class="widget box">
				<div class="widget box">
					<div class="widget-header" align="center">
						<img src="vertorta7.php?id_paciente=<?php echo $id_paciente;?>" class="img-thumbnail"/>
					</div>
				</div>
				<table class="table" width="50%" >
				<th align="center"><font color="green" >INFORMES</font></th><th align="center"><font color="green" >INF. BASICA</font></th><th align="center"><font color="green" >DIAMETRO</font></th><th align="center"><font color="green" >PERIMETRO</font></th><th align="center"><font color="green" >PLIEGUES</font></th></tr>
<?php
$contar=0;
include("conexion-cupea.php");
$query =  "select sum(peso+talla+talla_sentado) as basico,sum(biocromial+torax_transverso+torax_ant_post+bi_iliocrestideo+humeral_biepicondilar+femoral_biepicondilar)as diametro,sum(cabeza+brazo_relajado+Brazo_Flex_tens+antebrazo_max+torax_meso_est+cintura+cadera+muslo_max+muslo_med+pantorrilla_max)as perimetro,sum(triceps+subescapular+supraespinal+abdominal+muslo_medial2+pantorrilla_max2) as pliegue FROM informes_pacientes WHERE id_paciente='$id_paciente' group by id_informe order by id_informe";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$contar=$contar+1;	
	$basico = $row['basico'];
	$diametro = $row['diametro'];
	$perimetro = $row['perimetro'];
	$pliegue = $row['pliegue'];
    $bas[$contar]=$basico;  	
    $dia[$contar]=$diametro;  	
    $per[$contar]=$perimetro;  	
    $pli[$contar]=$pliegue;
    $informe ="Informe-".$contar;
    echo "<td><font color='blue'>$informe</font></td><td><font color='blue'>$bas[$contar]</font></td><td><font color='blue'>$dia[$contar]</font></td><td><font color='blue'>$per[$contar]</font></td><td><font color='blue'>$pli[$contar]</font></td></tr>";  	
	}

?>

                </table>	
				 <?php ;};?> 
				</div>
		
				
					   <div class="col-md-1">
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