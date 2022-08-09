
<?php

//if ( $perfilusuario == 3 ){$qtipocoas = " AND ( coas = '4' OR coas = '12' OR coas = '13' ) ";};
if ( $perfilusuario == 4 ){$qtipocoas = " AND ( coas = '4' OR coas = '12' OR coas = '13' ) ";};
//if ( $perfilusuario == 5 ){$qtipocoas = " AND ( coas = '4' OR coas = '12' OR coas = '13' ) ";};
if ( $perfilusuario == 6 ){$qtipocoas = " AND ( coas = '2' OR coas = '3' ) ";};
if ( $perfilusuario == 8 ){$qtipocoas = " AND ( coas = '14' ) ";};


include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( estado = '1' ) ".$qtipocoas;
$result = mysql_query ( $query);
$pendveridatos = mysql_num_rows($result);

include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( estado = '2' ) ".$qtipocoas;
$result = mysql_query ( $query);
$pendimpu = mysql_num_rows($result);

include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( estado = '3' OR estado = '12' ) ".$qtipocoas;
$result = mysql_query ( $query);
$pendliq = mysql_num_rows($result);

include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( estado = '4' OR estado = '13' ) ".$qtipocoas;
$result = mysql_query ( $query);
$pendreso = mysql_num_rows($result);

include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( estado = '9' OR estado = '14' ) ".$qtipocoas;
$result = mysql_query ( $query);
$pendvreso = mysql_num_rows($result);

include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( estado = '10' OR estado = '15' ) ".$qtipocoas;
$result = mysql_query ( $query);
$pendhabpago  = mysql_num_rows($result);

include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( estado = '5' ) ".$qtipocoas;
$result = mysql_query ( $query);
$pendauto = mysql_num_rows($result);

include("conexion-cupea.php");
$query =  "SELECT * FROM mesa1t WHERE ( estado = '8' ) ".$qtipocoas;
$result = mysql_query ( $query);
$pendarchivo = mysql_num_rows($result);


?>
	<!--=== Statboxes ===-->
				<div class="row row-bg"> <!-- .row-bg -->
				

					<?php if ( ( $perfilusuario == 2 OR $perfilusuario == 3 OR $perfilusuario == 4 OR $perfilusuario == 6 ) ){ ?>

					<div class="col-sm-4 col-md-2">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual gris">
									<i class="icon-ok"></i>
								</div>
								<div class="title">Pendiente Verificacion datos</div>
								<div class="value"><?php echo $pendveridatos; ?></div>
								<a class="more" href="expediente-b.php?ingresar=&estado=1">Ver mas.. <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					<?php ;}; ?>

					

					<?php if ( ( $perfilusuario == 2 OR $perfilusuario == 4 OR $perfilusuario == 6 ) ){ ?>
					<div class="col-sm-4 col-md-2">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual green">
									<i class="icon-dollar"></i>
								</div>
								<div class="title">Pendiente Liquidaci&oacute;n</div>
								<div class="value"><?php echo $pendliq; ?></div>
								<a class="more" href="expediente-b.php?ingresar=&estado=3">Ver mas.. <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					<?php ;}; ?>
					
					<?php if ( ( $perfilusuario == 2 OR $perfilusuario == 4 OR $perfilusuario == 6 ) ){ ?>

					<div class="col-sm-4 col-md-2">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual violeta">
									<i class="icon-edit"></i>
								</div>
								<div class="title">Pendiente Imputaci&oacute;n</div>
								<div class="value"><?php echo $pendimpu; ?></div>
								<a class="more" href="expediente-b.php?ingresar=&estado=2">Ver mas.. <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					<?php ;}; ?>

					
					
					<?php if ( ( $perfilusuario == 2 OR $perfilusuario == 4 OR $perfilusuario == 5 OR $perfilusuario == 6 ) ){ ?>
					
					
						<div class="col-sm-4 col-md-2">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual azul">
									<div class="statbox-sparkline">30,20,15,30,22,25,26,30,27</div>
								</div>
								<div class="title">Pendiente resoluci&oacute;n</div>
								<div class="value"><?php echo $pendreso; ?></div>
								<a class="more" href="expediente-b.php?ingresar=&estado=4">Ver mas.. <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					<?php ;}; ?>

					
					
					<?php if ( ( $perfilusuario == 2 OR $perfilusuario == 5 ) ){ ?>
					
					
						<div class="col-sm-4 col-md-2">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual gris">
									<div class="statbox-sparkline">30,20,15,30,22,25,26,30,27</div>
								</div>
								<div class="title">Pendiente V.resoluci&oacute;n</div>
								<div class="value"><?php echo $pendvreso; ?></div>
								<a class="more" href="expediente-b.php?ingresar=&estado=9">Ver mas.. <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					<?php ;}; ?>

					<?php if ( ( $perfilusuario == 2 OR $perfilusuario == 5 ) ){ ?>
					
					
						<div class="col-sm-4 col-md-2">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual violeta">
									<div class="statbox-sparkline">30,20,15,30,22,25,26,30,27</div>
								</div>
								<div class="title">Pendiente Hab.Pago</div>
								<div class="value"><?php echo $pendhabpago; ?></div>
								<a class="more" href="expediente-b.php?ingresar=&estado=10">Ver mas.. <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					<?php ;}; ?>

				

					<?php if ( ( $perfilusuario == 2 OR $perfilusuario1 == 8 ) ){ ?>
					<div class="col-sm-4 col-md-2 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual red">
									<i class="icon-user"></i>
								</div>
								<div class="title">Pendiente Auditor&iacute;a</div>
								<div class="value"><?php echo $pendauto; ?></div>
								<a class="more" href="expediente-b.php?ingresar=&estado=5">Ver mas.. <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					<?php ;}; ?>


					<?php if ( ( $perfilusuario == 2 OR $perfilusuario1 == 8 ) ){ ?>
					<div class="col-sm-4 col-md-2 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content">
								<div class="visual salmon">
									<i class="icon-inbox"></i>
								</div>
								<div class="title">Pendiente Archivo</div>
								<div class="value"><?php echo $pendarchivo; ?></div>
								<a class="more" href="expediente-b.php?ingresar=&estado=8">Ver mas.. <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					<?php ;}; ?>

					
				</div> <!-- /.row -->
				<!-- /Statboxes -->