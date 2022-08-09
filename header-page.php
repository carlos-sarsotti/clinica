		<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>
						
						
						</h3>
<!--						<span>C&aacute;mara Argentina del Libro</span>-->
					</div>
				<?php 
				if (!isset($mieditorial)) { $mieditorial = "" ; } ;
				
				if ( $mieditorial > 0 ){;
				?>

					<!-- Page Stats -->
					<ul class="page-stats">
						<li>
							<div class="summary">
								<span>Mis Expedientes</span>
								<h3><?php 
//include("conexion-cupea.php");
//$query =  "SELECT * FROM libros WHERE ( Codigo > '0' ) AND ( Estado = 'A' ) ".$qsellos." ORDER BY Codigo ";
//$result = mysql_query ( $query);
//$mislibros = mysql_num_rows($result);
								echo $mislibros;
								?></h3>
							</div>
							<div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
							<!-- Use instead of sparkline e.g. this:
							<div class="graph circular-chart" data-percent="73">73%</div>
							-->
						</li>
<?php if ( $tipoeditorial == 1 ){ ?>
						<li>
							<div class="summary">
								<span>Mi Saldo</span>
								<h3>
								<?php 
								
$misaldo = 0;
include("conexion-cupea.php");
$query =  "SELECT * FROM editoriales WHERE ( Codigo = '".$mieditorial."' ) ";
$result = mysql_query ( $query);
while($row = mysql_fetch_array($result))
{$misaldo = $row["saldo"];}

//include("conexion-cupea.php");
//$query1 =  "SELECT SUM(Monto) FROM movimientoscuenta WHERE editorial = '$mieditorial' AND TipoMovimiento = 'D' ";
//$result1 = mysql_query($query1);
//$debito = mysql_result($result1, 0);
//
//include("conexion-cupea.php");
//$query1 =  "SELECT SUM(Monto) FROM movimientoscuenta WHERE editorial = '$mieditorial' AND TipoMovimiento = 'C' ";
//$result1 = mysql_query($query1);
//$credito = mysql_result($result1, 0);
//
//$misaldo = $credito - $debito;


								echo "$ ".number_format($misaldo, 2, ',', '.');
								?>
								
								</h3>
							</div>
							<div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
						</li>
						<?php ;}; ?>
					</ul>
					<!-- /Page Stats -->
					<?php ;}; ?>
				</div>
				<!-- /Page Header -->