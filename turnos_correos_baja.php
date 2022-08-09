<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
include("conexion-cupea.php");
$resultado="";
$id_turno = $_POST['valorCaja1'];

$fechahoy = date("Y-m-d");
$query1 =  "update turnos_pacientes set fecha_baja='$fechahoy',estado=1 where id_turnos='$id_turno'";
$result1 = mysqli_query($bd,$query1) ;


$query2 =  "select * FROM turnos_pacientes WHERE id_turnos='$id_turno'";
//echo $query;
$result2 = mysqli_query($bd, $query2) ;
while($row = mysqli_fetch_assoc($result2))
	{
	$id_turnos=$row['id_turnos'];
	$apellido=$row['apellido'];
	$nombre=$row['nombre'];
	$hora=$row['fecha'];
	$correo=$row['correo'];
    }




$fecha= substr($hora,0,10);
$hora1= substr($hora,11,8);

$tmpf = str_replace ('-', "@", $fecha);
$tmpf =  split ("@", $tmpf, 3);
$anob = $tmpf[0];
$mesb = $tmpf[1];
$diab = $tmpf[2];


if ( $mesb == "01" ){$mesx = "Enero";};
if ( $mesb == "02" ){$mesx = "Febrero";};
if ( $mesb == "03" ){$mesx = "Marzo";};
if ( $mesb == "04" ){$mesx = "Abril";};
if ( $mesb == "05" ){$mesx = "Mayo";};
if ( $mesb == "06" ){$mesx = "Junio";};
if ( $mesb == "07" ){$mesx = "Julio";};
if ( $mesb == "08" ){$mesx = "Agosto";};
if ( $mesb == "09" ){$mesx = "Septiembre";};
if ( $mesb == "10" ){$mesx = "Octubre";};
if ( $mesb == "11" ){$mesx = "Noviembre";};
if ( $mesb == "12" ){$mesx = "Diciembre";};



$fechalarga = " ".$diab." de ".$mesx." de ".$anob;
$mensaje="Si Ud. no realizó ninguna solicitud de préstamo, desestime el presente correo.<br>".$fechalarga."<br>".$hora1."<br>";

$body = $mensaje ;

$mail = new PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 0 ;                      // Enable verbose debug output

    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'nuevaclinica2021@gmail.com';                     // SMTP username
    $mail->Password   = 'c22584967';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above



    //Recipients
    $mail->setFrom('nuevaclinica2021@gmail.com', 'Clinica');
    $mail->addAddress($correo,$apellido.", ".$nombre);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Cancelacion Turno clinica';
	$mail->MsgHTML($body);
    $mail->send();
    echo 'El mensaje se envio';
} catch (Exception $e) {
    echo "El mensaje no se envio:",$mail->ErrorInfo;
}
?>