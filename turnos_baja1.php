<?php
include("conexion-cupea.php");
$resultado="";
$id_turno = $_POST['valorCaja1'];
$fechahoy = date("Y-m-d");
$query =  "update turnos_pacientes set fecha_baja='$fechahoy',estado=1 where id_turnos='$id_turno'";
$result = mysqli_query($bd,$query);

echo "Baja";
?>
