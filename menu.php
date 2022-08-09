<?php
$perfilusuario2 = $_SESSION['perfilusuario2'];
?>
<link rel="stylesheet" href="./material.min.css">
<script src="./material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<!-- Header -->
	<header class = "header navbar navbar-fixed-top" role = "banner" style = "background-color: #000">
<img src="clinica.jpg" width="100%" >
		<!-- Top Navigation Bar -->
		<div class="container">
			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.php">
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<!--<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Menu">
				<i class="icon-reorder"></i>
			</a>-->
			<!-- /Sidebar Toggler -->


<!-- Top Left Menu -->

<ul class="nav navbar-nav navbar-left hidden-xs background-color:#000">

<li class="hidden-xs hidden-sm"><a href="index.php"><i class="icon-home"></i> Home</a></li>

<?php if ( $perfilusuario2 == 3 or $perfilusuario2 == 2 or $perfilusuario2 == 20){; ?>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user" ></i> Turnos <i class="icon-caret-down small"></i></a>
<ul class="dropdown-menu">
<li><a href="turnos_alta.php"><i class="icon-user"></i> Alta</a></li>
<li><a href="turnos_baja.php"><i class="icon-user"></i> Baja</a></li>
<li class="divider"></li>
<li><a href="turnos_lista.php"><i class="icon-folder-open-alt"></i> Listar</a></li>
</ul>
</li>
<?php ;}; ?>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-alt" ></i> Registros Pacientes<i class="icon-caret-down small"></i></a>
<ul class="dropdown-menu">
<?php if ( $perfilusuario2 == 3 or $perfilusuario2 == 2 or $perfilusuario2 == 20){ ?>
<!--
<li><a href="liquidacion-b.php"><i class="icon-dollar"></i> Liquidaciones</a></li>
<li class="divider"></li>

<li><a href="resolucion-b.php"><i class="icon-file"></i> Resoluciones</a></li>
<li class="divider"></li>-->

<li><a href="turnos_lista_hoy.php"><i class="icon-envelope-alt"></i> Atencion Turno Hoy</a></li>
<li class="divider"></li>
<li><a href="pacientes_alta_dir.php"><i class="icon-envelope-alt"></i>Paciente Alta</a></li>
<li><a href="pacientes_modif.php"><i class="icon-envelope-alt"></i>Paciente Modificacion</a></li>
<li><a href="pacientes_buscar.php"><i class="icon-envelope-alt"></i>Paciente Buscar</a></li>
<li class="divider"></li>
<li><a href="informes_alta.php"><i class="icon-envelope-alt"></i>Informe Alta</a></li>
<li><a href="informes_modif.php"><i class="icon-envelope-alt"></i>Informe Modificacion</a></li>
<li><a href="informes_buscar.php"><i class="icon-envelope-alt"></i>Informe Buscar</a></li>
<li class="divider"></li>
<li><a href="informes_progreso.php"><i class="icon-envelope-alt"></i>Informe Progreso</a></li>
<li class="divider"></li>

<?php ;}; ?>

</ul>
</li>

<?php if ( ( $perfilusuario2 == 2 ) ){; ?>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks"></i> Base <i class="icon-caret-down small"></i></a>
<ul class="dropdown-menu">

<!--<li><a href="reporte-bene.php"><i class="icon-bar-chart"></i> Reporte de beneficios detallado</a></li>
<li><a href="reporte-bene1.php"><i class="icon-bar-chart"></i> Reporte de beneficios unificado</a></li>

<li><a href="conectados.php" target="_blank"><i class="icon-bell"></i> Conectados</a></li>-->
<li><a href="../phpmyadmin/index.php" target="_blank"><i class="icon-bell"></i> BASE</a></li>
<li><a href="genera_salida_archivos.php"><i class="icon-envelope-alt"></i> Generar Respaldo</a></li>
</ul>
</li>

<?php ;}; ?>


</ul>

<!-- /Top Left Menu -->
	<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Notifications -->
				
				<!-- Tasks -->
			<!--	<li class="dropdown hidden-xs hidden-sm">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-tasks"></i>
						<span class="badge"><?php echo $canttramitespend;?></span>
					</a>
					
					
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>Usted tiene <?php echo $canttramitespend;?> tr&aacute;mites pendientes</p>
						</li>
						
					</ul>
				</li>-->
				
				

<!-- Messages -->
<!--
<li class="dropdown hidden-xs hidden-sm">


<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope"></i><span class="badge"><?php echo $haymsg;?></span></a>
<ul class="dropdown-menu extended notification">

<?php if ( $haymsg == 0 ){;?>

<li class="title"><p>no tiene nuevos mensajes.</p></li>

<?php ;}; ?>
</ul>
</li>-->

			
	
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username" ><?php $nomb_c = str_pad($nombreusuario, 20); echo $nomb_c;?></span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="usuario-a1.php"><i class="icon-user"></i> Mis datos</a></li>
<!--						<li><a href="password-a.php"><i class="icon-key"></i> Cambiar contrase&ntilde;a</a></li>-->
						
						<li class="divider"></li>
					
						<li class="divider"></li>
						<li><a href="configura2.php"><i class="icon-off"></i> Salir del sistema</a></li>
						
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->
		
		
		<!--=== Project Switcher ===-->
		<div id="project-switcher" class="container project-switcher">
			<div id="scrollbar">
				<div class="handle"></div>
			</div>

			<div id="frame">
				<ul class="project-list">
					<li class="current">
						<a href="libro-a.php">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title"></span>
						</a>
					</li>
					<li>
						<a href="usuario-a.php">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Mis Datos</span>
						</a>
					</li>
					
					<li>
						<a href="autor-a.php">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title"></span>
						</a>
					</li>
				</ul>
			</div> <!-- /#frame -->
		</div> <!-- /#project-switcher -->
	</header> <!-- /.header -->
	<br><br><br><br><br><br>
	
	
