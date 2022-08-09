

<?php
$pag = "";
$PHP_SELF = $_SERVER['PHP_SELF'];
if ( $PHP_SELF == "/caja/expediente-detalle.php" ){

include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( zona = '$zona' ) AND ( expe = '$expediente' ) LIMIT 1 " ;
$result = mysql_query ( $query);
while($row = mysql_fetch_array($result))
{$estado_exp = $row["estado"];}	
	
include("conexion-cupea.php");
$query =  "SELECT * FROM estados WHERE id = '$estado_exp' ORDER BY nombre " ;
$result = mysql_query ( $query) ;
while($row = mysql_fetch_array($result))
{$estado_expx = $row["nombre"];}


$pag = "<i class=icon-envelope-alt></i><b>Detalle de Expediente ".$zona."-".$expediente." (<font color=#ff0000>".$estado_expx."</font>)</b>";


;};


if ( $PHP_SELF == "/caja/afiliado-detalle.php" ){$pag = "<i class=icon-user></i><b>Detalle de Afiliado ".$dni."</b>" ;};
if ( $PHP_SELF == "/caja/afiliado-b.php" ){$pag = "<i class=icon-user></i><b>Consulta Afiliado ".$dni."</b>" ;};


?>

<!-- Breadcrumbs line -->
				<div class="crumbs  hidden-xs hidden-sm">
					<ul id="breadcrumbs" class="breadcrumb">
					
					<?php
//					echo $oficina_usuariox;
					?>
					
						<li><?php echo $pag;?>
						</li>
						<!--<li class="current">
							<a href="pages_calendar.html" title="">Calendar</a>
						</li>-->
					</ul>

					<ul class="crumb-buttons">
<!--						<li><a href="charts.php" title=""><i class="icon-signal"></i><span>Estadisticas</span></a></li>-->
						<!--<li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Users <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
							<ul class="dropdown-menu pull-right">
							<li><a href="form_components.html" title=""><i class="icon-plus"></i>Agregar un usuario</a></li>
							<li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
							</ul>
						</li>-->
						<!--<li class="range"><a href="#">
							<i class="icon-calendar"></i>
							<span>aaa</span>
							<i class="icon-angle-down"></i>
						</a></li>-->
						
<?php

?>

						

					</ul>
				</div>
				<br>
				<!-- /Breadcrumbs line -->
