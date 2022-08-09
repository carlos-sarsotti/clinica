<?php
//include("configura.php");
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
			<title>:: SIGEX ::</title>

<link href="assets/img/barcode.gif" rel="shortcut icon" type="image/png" />
<link href="assets/img/barcode.gif" rel="icon" type="image/png" />

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


	<!-- DataTables -->
	<script type="text/javascript" src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="plugins/datatables/DT_bootstrap.js"></script>
	<script type="text/javascript" src="plugins/datatables/responsive/datatables.responsive.js"></script> <!-- optional -->

	<!-- App -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/plugins.form-components.js"></script>
   	 <script type="text/javascript" src="assets/js/jquery.tokeninput.js"></script>

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
include("header-page.php");
$ingresar=$_POST['ingresar'];
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$elimina=$_GET['elimina'];
$id=$_GET['id'];

if ( $elimina == 1 AND $idgestor <> "" AND $perfilusuario2 == 2 ){

include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( id = '$id' ) ";
$result = mysqli_query($bd, $query);
while($row = mysqli_fetch_assoc($result))
{$email_id = $row["apellido"].", ".$row["nombre"]."<br>".$row["email"];}
	
$query =  "DELETE FROM users WHERE id = '".$id."'  LIMIT 1";
$result = mysqli_query($bd, $query) ;

//echo $query;

$accion = "Elimina usuario";
$textoaccion = $email_id;
include("conexion-cupea.php");
$query44 = "INSERT INTO acciones ( tramite, libro, editorial, accion, texto, fecha, gestor ) VALUES ( '', '' , '', '$accion', '$textoaccion' , '".date("c")."', '$idgestor' ); ";
$result44 = mysqli_query($bd, $query44);

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
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Usuarios</h4>
								<!--<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>-->
							</div>
	<form name=frm method="POST" action="usuario-b.php">						
							
							<div class="widget-content no-padding">

								<table class="table" width="50%" align="center">
									<thead>
										<tr>
																				<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>



						<th><input class="form-control input-width-medium" type="text" placeholder="NOMBRE Y APELLIDO" name="nombre" value="<?php echo $nombre;?>" style="display: block; margin-top: 6px;">
						<span class="help-block">Ingrese parte del nombre</span>

						</th>
						<th><input class="form-control input-width-medium" type="text" placeholder="EMAIL" name="email" value="<?php echo $email;?>" style="display: block; margin-top: 6px;">
						<span class="help-block">Ingrese parte del email</span>

						</th>
											
					
						
						<th><button class="btn btn-success" onclick="entra();">Buscar</button></th>
										<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						
										</tr>
										

										

										
										
									</thead>
						</table>
<script>
function entra()
{
document.frm.submit();
}


</script>

						
							<table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
<thead>
<tr>
<th class="checkbox-column"><input type="checkbox" class="uniform"></th>
<th>Acciones</th>
<th>Nombre y Apellido</th>
<?php if ( $perfilusuario2 == 2 ){ ?><th>Perfil</th> <?php ;}; ?>
<th>Oficina</th>
<th>Zona</th>
<th>Email</th>
<th>Activo</th>
<?php if ( $perfilusuario2 == 2 ){ ?><th>Eliminar</th> <?php ;}; ?>
</tr>
</thead>
<tbody>
<?php


if ( $ingresar == "" ){$limite = "  LIMIT 100";};

if ( $nombre <> "" ){$qnombre = " AND ( nombre LIKE '%".$nombre."%' OR apellido LIKE '%".$nombre."%'  ) ";};

if ( $email <> "" ){$qemail = " AND ( email LIKE '%".$email."%'  ) ";};

include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( id > '0' ) ".$qnombre.$qemail." ORDER BY id DESC LIMIT 100";
$result = mysqli_query($bd, $query);
//echo $query;
while($row = mysqli_fetch_assoc($result))
{
$id = $row["id"];
$nombre = $row["nombre"];
$apellido = $row["apellido"];
$dni = $row["dni"];
$sexo = $row["sexo"];
$telefono = $row["tel"];
$direccion = $row["direccion"];
$cp = $row["cp"];
$ciudad = $row["ciudad"];
$provincia = $row["prov"];
$pais = $row["pais"];
$telefono = $row["tel"];
$celular = $row["celular"];
$estado = $row["estado"];
$perfil = $row["perfil"];
$tipo = $row["tipo"];
$oficina = $row["oficina"];
$zona = $row["zona"];

$perfilx = "";
//if ( $perfil == 2 ){$perfilx = "Admin";};

$zonax = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM zona WHERE ( id = '$zona' ) ";
$result1 = mysqli_query($bd, $query1);
//echo $query;
while($row = mysqli_fetch_assoc($result1))
{$zonax = $row["nombre"];}

include("conexion-cupea.php");
$query1 =  "SELECT * FROM perfiles WHERE ( perfilId = '$perfil' ) ";
$result1 = mysqli_query($bd, $query1);
//echo $query;
while($row = mysqli_fetch_assoc($result1))
{$perfilx = $row["Nombre"];
$perfilid = $row["perfilId"];}

$oficinax = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM oficinas WHERE ofic = '$oficina' ORDER BY oficina " ;
$result1 = mysqli_query($bd, $query1) ;
while($row = mysqli_fetch_assoc($result1))
{$oficinax = $row["oficina"];}

$publicax = "";
if ( $estado == -1 ){$publicax = "<span class='label label-danger'>Sin verificar</span>";};
if ( $estado == 0 ){$publicax = "<span class='label label-info'>Pendiente</span>";};
if ( $estado == 1 ){$publicax = "<span class='label label-success'>SI</span>";};
if ( $estado == 2 ){$publicax = "<span class='label label-danger'>Inactivo</span>";};

echo "<tr> \n";
echo "<td></td> \n";


echo "<td>";
?>
<div class="btn-group dropup">
<button class="btn btn-xs dropdown-toggle" data-toggle="dropdown"><i class="icol-cog"></i> Acciones <span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="accion-b.php?iduser=<?php echo $id;?>&idtramite=<?php echo $id;?>" target="_top"> <i class="icol-database"></i> Log</a></li>
<?php if ( $estado == -1 ){ ?><li><a href="javascript:enviamail('<?php echo $id;?>')"><i class="icon-inbox"></i> Re-enviar mail</a></li><?php ;}; ?>
<?php if ( $estado == -1 ){ ?><li><a href="javascript:verimail('<?php echo $id;?>')"><i class="icon-inbox"></i> Validar mail</a></li><?php ;}; ?>
</ul>
</div>
<?php
echo "</td> \n";

if ( $perfilusuario2 == 2 ){echo "<td><a href='usuario-a.php?iduser=".$id."' target=_top>".$apellido.", ".$nombre."</a></td> \n";};
if ( $perfilusuario2 == 2 ){echo "<td>".$perfilx."-".$perfilid."</td> \n";};
echo "<td>".$oficinax."</td> \n";
echo "<td>".$zonax."</td> \n";
echo "<td>".$email."</td> \n";
echo "<td>".$publicax."</td> \n";
if ( $perfilusuario2 == 2 ){echo "<td><a href=javascript:elimina('".$id."'); class='btn btn-xs bs-tooltip' title='Eliminar ".$email."'><i class='icon-trash'></i></a></td> \n";};
echo "</tr> \n";

}

?>

</tbody>
</table>

<script>
function enviamail(id1){
var opciones="scrollbars,scroll=true,left=100,top=100,width=100,height=100", i= 0;
window.open('re-envia-mail-registro.php?ingresar=&iduser='+id1 ,'_blank',opciones)
}

function verimail(id1){
if ( confirm('Seguro desea CONFIRMAR MAIL?') ){
var opciones="scrollbars,scroll=true,left=100,top=100,width=100,height=100", i= 0;
window.open('re-envia-mail-registro.php?ingresar=1&iduser='+id1 ,'_blank',opciones)
}
}

</script>
</form>
</div>
						</div>
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



<script>

function elimina(ids){
	
if (confirm('seguro desea ELIMINAR?')){
	
window.open('usuario-b.php?elimina=1&id='+ids,'_top');

}

}

</script>
