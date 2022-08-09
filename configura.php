<?php
$b1=$_POST['b1'];
$b2=$_POST['b2'];

session_start();
$_SESSION['b1']=$b1;
$_SESSION['b2']=$b2;	
$b1 = $_SESSION['b1'];
$b2 = $_SESSION['b2'];

error_reporting(0);
$esuser = 0;

include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( email = '".$b1."' OR ( usuario = '".$b1."' AND usuario <> '' ) ) AND ( pass = '".$b2."' ) AND ( estado = '0' OR estado = '1' ) LIMIT 1 ";
$consulta = mysqli_query($bd,$query);
 
while($row = mysqli_fetch_assoc($consulta))
{
	$oficina_usuario = $row["oficina"];
	$tipousuario = $row["tipo"];
	$estadousuario = $row["estado"];
	$idmd5 = $row["idmd5"];
	$emailusuario = $row["email"];
	$idgestor = $row["id"];
	$perfilusuario2 = $row["perfil"];
	$perfilusuario1 = $row["perfil1"];
	$nombreusuario = $row["apellido"].", ".$row["nombre"];
	$sede = $row["zona"];
    $esuser = 1;
}


if ( $esuser == 1 ){
$_SESSION['perfilusuario2']=$perfilusuario2;
$_SESSION['nombreusuario']=$nombreusuario;
$_SESSION['idgestor']=$idgestor;
echo "<script>window.open('index.php','_top');</script>"
;};

if ( $esuser == 0 ){
	
include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( email = '".$b1."' ) LIMIT 1 ";

$result = mysqli_query($bd,$query);
$estaenbase = mysql_num_rows($result);

if ( $estaenbase == 0 ){echo "<script>window.open('login.php?motivo=1','_top');</script>"
;};

if ( $estaenbase == 1 ){

include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( email = '".$b1."' ) AND ( pass = '".$b2."' ) LIMIT 1 ";
$result = mysqli_query($bd,$query);
$malpass = mysql_num_rows($result);

if ( $malpass == 0 ){echo "<script>window.open('login.php?motivo=2','_top');</script>";
;};

if ( $malpass == 1 ){

include("conexion-cupea.php");
$query =  "SELECT * FROM users WHERE ( email = '".$b1."' ) AND ( pass = '".$b2."' ) AND ( estado = '-1' ) LIMIT 1 ";
$result = mysql_query ( $query);
$pendveri = mysql_num_rows($result);	
	
if ( $pendveri == 1 ){echo "<script>window.open('login.php?motivo=3','_top');</script>";};
		
;};

;};

;};



$decipo = " onKeypress='if ( ( event.keyCode == 43 || event.keyCode == 44 ||event.keyCode == 45 ||event.keyCode == 47 ||   event.keyCode < 42 || event.keyCode > 57 ) ) event.returnValue = false' "; 
$decine = " onKeypress='if ( ( event.keyCode == 43 || event.keyCode == 44 ||event.keyCode == 47 ||   event.keyCode < 42 || event.keyCode > 57 ) ) event.returnValue = false' "; 
$entepo = " onKeypress='if ( ( event.keyCode == 43 || event.keyCode == 44 ||event.keyCode == 45 ||event.keyCode == 46 ||event.keyCode == 47 ||   event.keyCode < 42 || event.keyCode > 57 ) ) event.returnValue = false' "; 
$entene = " onKeypress='if ( ( event.keyCode == 43 || event.keyCode == 44 ||event.keyCode == 46 ||event.keyCode == 47 ||   event.keyCode < 42 || event.keyCode > 57 ) ) event.returnValue = false' "; 

//$valfecha = " onKeypress='if ( (  event.keyCode < 47 || event.keyCode > 57 ) ) event.returnValue = false' "; 
//
//42 = *
//43 = +
//44 = ,
//45 = -
//46 = .
//47 = /
//48 = 0
//49 = 1
//50 = 2
//51 = 3
//52 = 4
//53 = 5
//54 = 6
//55 = 7
//56 = 8
//57 = 9

function corta_texto ($txt, $limite, $fin = '...', $encontrar = ' ') {
	// Primero elimino todas las etiquetas de HTML
	
	$txt = preg_replace('/<[^>]+>/', '', $txt);
	// Si la cadena es más corta que el límite
	if (strlen($txt) <= $limite) {
		// Quito los saltos de linea y los paso a HTML
		return preg_replace("/\n/s",'<br />', preg_replace("/(\r\n|\r)/s","\n", $txt));	}
		// Si no encuentra ninguna entidad HTML corta el texto y devuelve el resultado
		if (strstr($txt, '&') === false) {
			return substr($txt, 0, $limite).$fin;
		}
		$caracteres = preg_split('/(&[^;\s]+;)|/', $txt, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_OFFSET_CAPTURE);
		$longitud = count($caracteres);
		if ($longitud === 0) {
			return '';
		}
		$inicio = max(0, -$longitud);
		$inicio_real = $caracteres[$longitud + $inicio][1];
		if (($inicio + $limite) >= $longitud) {
			$txt = substr($txt, $inicio_real).$fin;
		} else {
			$remate = $caracteres[max($inicio, 0) + $limite][1] - $inicio_real;
			while (($remate >= 0) && (!preg_match('/[ ,\.\;]/', $txt[$remate]))) {
				$remate--;
			}
			$txt = substr($txt, $inicio_real, $remate).$fin;
		}
		// Si no se define una cadena de texto a encontrar.
		if (empty($encontrar)) {
			return preg_replace("/\n/s",'<br />', preg_replace("/(\r\n|\r)/s","\n", $txt)).$fin;
		}
		$pos = strrpos($txt, $encontrar);
		if ($pos === false) {
			return preg_replace("/\n/s",'<br />', preg_replace("/(\r\n|\r)/s","\n", $txt)).$fin;
		} else {
			return preg_replace("/\n/s",'<br />', preg_replace("/(\r\n|\r)/s","\n", substr($txt, 0, $pos))).$fin;
		}
}
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$PHP_SELF = $_SERVER['PHP_SELF'];
$PHPSESSID = session_id();
 if ( $REMOTE_ADDR == 0 ){
$fechasxco = date("Y")."-".date("m")."-".date("d")." ".date("H").":".date("i").":".date("s");
$pag = str_replace ('/caja/', "", $PHP_SELF);
include("conexion-cupea.php");
$param = "zona=''&expediente=''&dni=''&nombre=''&ingresar=''";
$query =  "INSERT INTO log (pag, param, ip, user , fecha, session, texto, resolucion ) VALUES ('".$pag."','".$param."', '".$REMOTE_ADDR."', '".$idgestor."', '".$fechasxco."', '".$PHPSESSID."', '".$_SERVER["HTTP_USER_AGENT"]."', '' );";
$result = mysqli_query($bd,$query);
;};

include("conexion-cupea.php");
$query2 =  "DELETE FROM tmp WHERE sesion = '$PHPSESSID' AND tipo = '1'  ";
$result2 = mysqli_query($bd,$query2);

include("conexion-cupea.php");
$query =  "INSERT INTO tmp ( sesion, tipo, valor ) VALUES ( '".$PHPSESSID."', '1', '' );";
$result = mysqli_query($bd,$query);


include("conexion-cupea.php");
$query =  "SELECT * FROM oficinas WHERE ofic = '$oficina_usuario' ORDER BY oficina " ;
$result = mysqli_query($bd,$query);
while($row = mysqli_fetch_assoc($result))
{$oficina_usuariox = $row["oficina"];$oficx = $row["ofic"];}

//$tmpf = str_replace ('á', "&aacute;", $fechaaparicion);
//$tmpf = str_replace ('é', "&eacute;", $fechaaparicion);
//$tmpf = str_replace ('í', "&iacute;", $fechaaparicion);
//$tmpf = str_replace ('ó', "&oacute;", $fechaaparicion);
//$tmpf = str_replace ('ú', "&uacute;", $fechaaparicion);


function acentos($pp)
{
$pp = str_replace ('Ã¡', "á", $pp);
$pp = str_replace ('Ã©', "é", $pp);
$pp = str_replace ('Ã­', "í", $pp);
$pp = str_replace ('Ã³', "ó", $pp);
$pp = str_replace ('Ãº', "ú", $pp);
$pp = str_replace ('Ã±', "ñ", $pp);

return $pp;

}

?>
