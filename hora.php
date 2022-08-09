<html>
<head>
<style>
option.line2 {
	background-color: #ffffff;
	color: #ff0000;
}
</head>
</style>
<?php
$tdh["0"]="07:30:00";
$tdh["1"]="07:45:00";
$tdh["2"]="08:00:00";
$tdh["3"]="08:15:00";
$tdh["4"]="08:30:00";
$tdh["5"]="08:45:00";
$tdh["6"]="09:00:00";
$tdh["7"]="09:15:00";
$tdh["8"]="09:30:00";
$tdh["9"]="09:45:00";
$tdh["10"]="10:00:00";
$tdh["11"]="10:15:00";
$tdh["12"]="10:30:00";
$tdh["13"]="10:45:00";
$tdh["14"]="11:00:00";
$tdh["15"]="11:15:00";
$tdh["16"]="11:30:00";
$tdh["17"]="11:45:00";
$tdh["18"]="12:00:00";
$tdh["19"]="12:15:00";
$tdh["20"]="12:30:00";
$tdh["21"]="12:45:00";
$tdh["22"]="13:00:00";


$fecha1 = $_GET['param_id'];





echo '<option value=""></option>';
$contar = 0;
$control=0;
while ($contar < 23)
{
$hora =$tdh[$contar];
$fecha2 = $fecha1." ".$hora;
$control=0;
include("conexion-cupea.php");
$query = "select  fecha from turnos_pacientes where fecha='$fecha2' and estado ='0'";
$res=mysqli_query($bd,$query);
  while ( $row = mysqli_fetch_assoc($res))
     {
      $diahora = $row['fecha'];
      $control=1;
     };

   if($control==1)
      {       
      echo '<option class=line2 value="' . $diahora. '" disabled>' . $diahora . '</option>' . "\n";
      }
    else
      {
      echo '<option value="' . $fecha1." ".$tdh[$contar]. '">' . $fecha1." ".$tdh[$contar] .'</option>' . "\n";
      };
$contar = $contar + 1;
};
echo "ok";
?>
