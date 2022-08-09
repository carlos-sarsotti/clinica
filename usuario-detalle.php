<?
include("configura.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>ISBN.AR</title>
<link href="/cal/assets/img/barcode.gif" rel="shortcut icon" type="image/png" />
<link href="/cal/assets/img/barcode.gif" rel="icon" type="image/png" />
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

	<script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>

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
	<script type="text/javascript" src="assets/js/demo/charts/chart_filled_blue.js"></script>
</head>

<body>

<?
include("menu.php");
?>

	<div id="container">
<?
//include("menu-derecho.php");
?>

		<div id="content">
			<div class="container">
<?
include("header-menu.php");
include("header-page.php");



include("conexion-cupea.php");
$query =  "SELECT * FROM libros WHERE ( sello = '".$mieditorial."' ) AND ( Codigo = '".$idlibro."' ) ORDER BY Codigo DESC LIMIT 1";
$result = mysql_query ( $query);
while($row = mysql_fetch_array($result))
{
$id = $row["Codigo"];
$iddetalle = $row["LibroDetalles"];
$titulo = $row["Titulo"];
$subtitulo = $row["Subtitulo"];
$titulooriginal = $row["TituloOriginal"];
$fec1 = $row["FechaAparicion"];
$fechaaparicion = $fec1[5].$fec1[6]."/".$fec1[0].$fec1[1].$fec1[2].$fec1[3];

$volumen = $row["Volumen"];
if ( $volumen > 0 ){$volumenx = "Volumen ".$volumen;};

$ilustrascion = $row["Ilustraciones"];
$ilustrascionx = "NO";
if ( $ilustrascion == "S" ){$ilustrascionx = "SI";};

$coleccion = $row["Coleccion"];
$nrocoleccion = $row["NumeroEnColeccion"];
$subserie = $row["Subserie"];

$dominiopublico = $row["DominioPublico"];
$dominiopublicox = "NO";
if ( $dominiopublico == "S" ){$dominiopublicox = "SI";};

$tipolibro = $row["Tipo"];
$tipoobra = $row["TipoObra"];
$tipopublico = $row["Publico"];
$edicion = $row["Edicion"];
$tirada = $row["Tirada"];
$palabrasclaves = $row["PalabrasClave"];
$canalventa = $row["CanalVenta"];
$preciopesos = $row["PrecioPesos"];
$preciodolar = $row["PrecioDolares"];
$precioeuro = $row["PrecioEuros"];

$papeltapa = $row["PapelTapa"];
$papelinterior = $row["PapelInterior"];
$alto = $row["Altocm"];
$ancho = $row["Anchocm"];
$ancholomo = $row["AnchoLomocm"];
$peso = $row["PesoLibrogm"];
$cantidadpaginas = $row["CantidadPaginas"];
$disponible = $row["VigenciaOnix"];
$paisimpresion = $row["PaisImpresion"];
$fec1 = $row["FechaAparicion"];
$fechaaparicion = $fec1[5].$fec1[6]."/".$fec1[0].$fec1[1].$fec1[2].$fec1[3];
$gramostapa = $row["GramosTapa"];
$gramosinterior = $row["GramosInterior"];

include("conexion-cupea.php");
$query1 =  "SELECT * FROM librodetalle WHERE ( Codigo = '".$iddetalle."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{
$encuadernacion = $row["Encuadernacion"];
$formato = $row["Formato"];
$soporte = $row["Soporte"];
$sintesis = $row["AbstractEsp"];
$foto = $row["ImagenTapa"];
}

$encuadernacionx = "";
if (  $encuadernacion == "BB"){$encuadernacionx = "Caton&#233; (Hardback)";};
if (  $encuadernacion == "BC"){$encuadernacionx = "R&#250;stica (Paperback / softback)";};
if (  $encuadernacion == "BE"){$encuadernacionx = "(Anillado / Espiralado)Spiral bound";};
if (  $encuadernacion == "BG"){$encuadernacionx = "Fina (Leather / fine binding)";};

$isbn = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM isbn WHERE ( Codigo = '".$id."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$isbn = $row["ISBN13"];}

$autorx = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM libroautores WHERE ( Libro = '".$id."' ) ";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{
$idautor = $row["DatosAutor"];

include("conexion-cupea.php");
$query2 =  "SELECT * FROM personas WHERE ( Codigo = '".$idautor."' ) ";
$result2 = mysql_query ( $query2);
while($row = mysql_fetch_array($result2))
{
$autorx = $autorx.$row["Apellidos"].", ".$row["Nombres"]." / ";
}

}

$materialcomplementariox = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM  libromaterialcomplementario WHERE ( Libro = '".$id."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{
$idmaterialcomplementario = $row["MaterialComplementario"];

include("conexion-cupea.php");
$query2 =  "SELECT * FROM  tipossoporte WHERE ( Codigo = '".$idmaterialcomplementario."' ) ";
$result2 = mysql_query ( $query2);
while($row = mysql_fetch_array($result2))
{
$materialcomplementariox = $row["Descripcion"]." / ";
}

//$materialcomplementariox = "SIN DETERMINAR";
}

$coeditorx = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM librocoeditor WHERE ( Libro = '".$id."' ) ";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{
$idcoeditor = $row["Coeditor"];

include("conexion-cupea.php");
$query2 =  "SELECT * FROM editoriales WHERE ( Codigo = '".$idcoeditor."' ) ";
$result2 = mysql_query ( $query2);
while($row = mysql_fetch_array($result2))
{
$coeditorx = $coeditorx.$row["Nombre"]." / ";
}

}

$soportex = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM soporte WHERE ( Codigo = '".$soporte."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$soportex = $row["Nombre"];}

$formatox = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM formato WHERE ( Codigo = '".$formato."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$formatox = $row["Nombre"];}

$paisimpresionx = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM paises WHERE ( Codigo = '".$paisimpresion."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$paisimpresionx = $row["Nombre"];}

$disponiblex = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM vigenciaonix WHERE ( Codigo = '".$disponible."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$disponiblex = $row["Nombre"];}

$papeltapax = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM tipospapel WHERE ( Codigo = '".$papeltapa."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$papeltapax = $row["Descripcion"];}

$papelinteriorx = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM tipospapel WHERE ( Codigo = '".$papelinterior."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$papelinteriorx = $row["Descripcion"];}

$tipolibrox = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM tipolibro WHERE ( Codigo = '".$tipolibro."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$tipolibrox = $row["Descripcion"];}

$tipoobrax = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM tipoobra WHERE ( Codigo = '".$tipoobra."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$tipoobrax = $row["Descripcion"];}

$tipopublicox = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM publico WHERE ( Codigo = '".$tipopublico."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$tipopublicox = $row["Descripcion"];}

$canalventax = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM canalesventa WHERE ( Codigo = '".$canalventa."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$canalventax = $row["Nombre"];}

$idiomax = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM libroidiomas WHERE ( Libro = '".$id."' ) ";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{
$ididioma = $row["Idioma"];

include("conexion-cupea.php");
$query2 =  "SELECT * FROM idiomas WHERE ( Codigo = '".$ididioma."' ) ";
$result2 = mysql_query ( $query2);
while($row = mysql_fetch_array($result2))
{
$idiomax = $idiomax.$row["Descripcion"]." / ";
}

}

$mencionx = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM libromenciononix WHERE ( CodigoLibro = '".$id."' ) ";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{
$tipomencion = $row["TipoMencion"];
$idmencion = $row["PersonaId"];

$tipomencionx = "";
include("conexion-cupea.php");
$query1 =  "SELECT * FROM menciononix WHERE ( Codigo = '".$tipomencion."' ) LIMIT 1";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{$tipomencionx = $row["Descripcion"];}

//$mencionx = $tipomencionx;

include("conexion-cupea.php");
$query2 =  "SELECT * FROM personas WHERE ( Codigo = '".$idmencion."' ) ";
$result2 = mysql_query ( $query2);
while($row = mysql_fetch_array($result2))
{
$mencionx = $mencionx.$tipomencionx." ".$row["Apellidos"].", ".$row["Nombres"]." / ";
}

}


}
?>

				<!--=== Page Content ===-->
				<!--=== Inline Tabs ===-->
				<div class="row">
					<div class="col-md-12">
						<!-- Tabs-->
						<div class="tabbable tabbable-custom tabbable-full-width">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_overview" data-toggle="tab">Detalles generales</a></li>
								<li><a href="#tab_edit_account" data-toggle="tab">Caracteristicas</a></li>
							</ul>
							<div class="tab-content row">
								<!--=== Overview ===-->
								<div class="tab-pane active" id="tab_overview">
									<div class="col-md-3">
										<div class="list-group">
											<li class="list-group-item no-padding">
												<img src="assets/img/demo/avatar-large.jpg" alt="">
											</li>
											<!--<a href="javascript:void(0);" class="list-group-item">Projects</a>
											<a href="javascript:void(0);" class="list-group-item">Messages</a>
											<a href="javascript:void(0);" class="list-group-item"><span class="badge">3</span>Friends</a>
											<a href="javascript:void(0);" class="list-group-item">Settings</a>-->
										</div>
									</div>

									<div class="col-md-9">
										<div class="row profile-info">
											
											
<h2><? echo $titulo;?></h2>
<? if ( $subtitulo <> "" ){?><h1><? echo $subtitulo;?></h1> <? ;}; ?>
<? if ( $titulooriginal <> "" ){?><h1><? echo $titulooriginal;?></h1> <? ;}; ?>


<table width="100%">
<tr>
<td width="50%" valign="top">

<table class="table table-hover table-striped" width="50%">
<thead>
<tr>
<th>ISBN</th><td><? echo $isbn;?></td>
</tr>
<tr>
<th>AUTOR</th><td><? echo $autorx;?></td>
</tr>
<tr>
<th>COEDITOR</th><td><? echo $coeditorx;?></td>
</tr>
<tr>
<th>TIPO LIBRO</th><td><? echo $tipolibrox;?></td>
</tr>
<tr>
<th>IDIOMA</th><td><? echo $idiomax;?></td>
</tr>
<tr>
<th>TIPO OBRA</th><td><? echo $tipoobrax;?></td>
</tr>
<tr>
<th>TIPO PUBLICO</th><td><? echo $tipopublicox;?></td>
</tr>
<tr>
<th>DOMINIO PUBLICO</th><td><? echo $dominiopublicox;?></td>
</tr>
<tr>
<th>ILUSTRACION</th><td><? echo $ilustrascionx;?></td>
</tr>

</thead>
</table>

</td>
<td width="50%" valign="top">


<table class="table table-hover table-striped" width="50%">
<thead>
<tr>
<th>VOLUMEN DE OBRA</th><td><? echo $volumen;?></td>
</tr>
<tr>
<th>MENCIONES</th><td><? echo $mencionx;?></td>
</tr>
<tr>
<th>EDICION</th><td><? echo $edicion;?></td>
</tr>
<tr>
<th>TIRADA</th><td><? echo $tirada;?></td>
</tr>
<tr>
<th>PALABRAS CLAVES</th><td><? echo $palabrasclaves;?></td>
</tr>
<tr>
<th>CANAL DE VENTA</th><td><? echo $canalventax;?></td>
</tr>
<tr>
<th>PRECIO PESOS</th><td><? echo $preciopesos;?></td>
</tr>
<tr>
<th>PRECIO DOLAR</th><td><? echo $preciodolar;?></td>
</tr>
<tr>
<th>PRECIO EURO</th><td><? echo $precioeuro;?></td>
</tr>
</thead>
</table>

</td>
</tr>
</thead>
</table>
												
												
											
										</div> <!-- /.row -->

										<div class="row">
											<div class="col-md-12">
												<div class="widget">
													<!--<div class="widget-content">
														<table class="table table-hover table-striped">
															<thead>
																<tr>
																	<th>#</th>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th class="hidden-xs">Username</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Joey</td>
																	<td>Greyson</td>
																	<td class="hidden-xs">joey123</td>
																	<td><span class="label label-success">Approved</span></td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Wolf</td>
																	<td>Bud</td>
																	<td class="hidden-xs">wolfy</td>
																	<td><span class="label label-info">Pending</span></td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>Darin</td>
																	<td>Alec</td>
																	<td class="hidden-xs">alec82</td>
																	<td><span class="label label-warning">Suspended</span></td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>Andrea</td>
																	<td>Brenden</td>
																	<td class="hidden-xs">andry</td>
																	<td><span class="label label-danger">Blocked</span></td>
																</tr>
															</tbody>
														</table>
													</div>-->
												</div>
											</div>
											<!-- /Striped Table -->
										</div> <!-- /.row -->
									</div> <!-- /.col-md-9 -->
								</div>
								<!-- /Overview -->

<!--=== tab_edit_account ===-->
								<div class="tab-pane" id="tab_edit_account">
									<div class="col-md-3">
										<div class="list-group">
											<li class="list-group-item no-padding">
											<table width="100%" align="center"><tr><td><img src="assets/img/demo/avatar-large.jpg" alt="" ></td></tr></table>
											</li>
											<!--<a href="javascript:void(0);" class="list-group-item">Projects</a>
											<a href="javascript:void(0);" class="list-group-item">Messages</a>
											<a href="javascript:void(0);" class="list-group-item"><span class="badge">3</span>Friends</a>
											<a href="javascript:void(0);" class="list-group-item">Settings</a>-->
										</div>
									</div>

									<div class="col-md-9">
										<div class="row profile-info">
											
											
<h2><? echo $titulo;?></h2>
<? if ( $subtitulo <> "" ){?><h1><? echo $subtitulo;?></h1> <? ;}; ?>
<? if ( $titulooriginal <> "" ){?><h1><? echo $titulooriginal;?></h1> <? ;}; ?>


<table width="100%">
<tr>
<td width="50%" valign="top">

<table class="table table-hover table-striped" width="50%">
<thead>
<tr>
<th>ENCUADERNACION</th><td><? echo $encuadernacionx;?></td>
</tr>
<tr>
<th>SOPORTE</th><td><? echo $soportex;?></td>
</tr>
<tr>
<th>FORMATO</th><td><? echo $formatox;?></td>
</tr>
<tr>
<th>TIPO PAPEL TAPA</th><td><? echo $papeltapax;?></td>
</tr>
<tr>
<th>TIPO PAPEL INTERIOR</th><td><? echo $papelinteriorx;?></td>
</tr>
<tr>
<th>CANTIDAD DE PAGINAS</th><td><? echo $cantidadpaginas;?></td>
</tr>
<tr>
<th>ALTO</th><td><? echo $alto;?></td>
</tr>
<tr>
<th>ANCHO</th><td><? echo $ancho;?></td>
</tr>
</thead>
</table>

</td>
<td width="50%" valign="top">


<table class="table table-hover table-striped" width="50%">
<thead>
<tr>
<th>ANCHO LOMO</th><td><? echo $ancholomo;?></td>
</tr>
<tr>
<th>PESO LIBRO</th><td><? echo $peso;?></td>
</tr>
<tr>
<th>MATERIAL COMPLEMENTARIO</th><td><? echo $materialcomplementariox;?></td>
</tr>
<tr>
<th>DISPONIBILIDAD</th><td><? echo $disponiblex;?></td>
</tr>
<tr>
<th>PAIS DE IMPRESION</th><td><? echo $paisimpresionx;?></td>
</tr>
<tr>
<th>FECHA APARICION</th><td><? echo $fechaaparicion;?></td>
</tr>
<tr>
<th>GRAMAJE PAPEL TAPAS</th><td><? echo $gramostapa;?></td>
</tr>
<tr>
<th>GRAMAJE PAPEL INTERIOR</th><td><? echo $gramosinterior;?></td>
</tr>
</thead>
</table>


</td>
</tr>
</thead>
</table>
												
												
											
										</div> <!-- /.row -->

										<div class="row">
											<div class="col-md-12">
												<div class="widget">
													<!--<div class="widget-content">
														<table class="table table-hover table-striped">
															<thead>
																<tr>
																	<th>#</th>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th class="hidden-xs">Username</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Joey</td>
																	<td>Greyson</td>
																	<td class="hidden-xs">joey123</td>
																	<td><span class="label label-success">Approved</span></td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Wolf</td>
																	<td>Bud</td>
																	<td class="hidden-xs">wolfy</td>
																	<td><span class="label label-info">Pending</span></td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>Darin</td>
																	<td>Alec</td>
																	<td class="hidden-xs">alec82</td>
																	<td><span class="label label-warning">Suspended</span></td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>Andrea</td>
																	<td>Brenden</td>
																	<td class="hidden-xs">andry</td>
																	<td><span class="label label-danger">Blocked</span></td>
																</tr>
															</tbody>
														</table>
													</div>-->
												</div>
											</div>
											<!-- /Striped Table -->
										</div> <!-- /.row -->
									</div> <!-- /.col-md-9 -->
								</div>
								<!-- /tab_edit_account -->
															</div> <!-- /.tab-content -->
						</div>
						<!--END TABS-->
					</div>
				</div> <!-- /.row -->
				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>