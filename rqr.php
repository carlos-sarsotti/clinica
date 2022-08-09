<?
  session_register("count") ;
  session_register("dedonde") ;
  session_register("dedonde2") ;
 // header("expires: Mon, 26 Jul 1998 05:00:00 GMT") ;
 // header("Last-Modified: ". gmdate("D, d M Y H:i:s") . " GMT");
  //header("Pragma: no-cache");
if(!isset($PHPSESSID))
  {
  header("WWW-authenticate: Basic realm=\"cajadeprevisionsf\"");
  header("HTTP/1.0 401 No authorized");
  exit ;
  }
  include ("conexion-cupea2.php");
  $query =  "select * from sesiones where session = '".$PHPSESSID."'";
  $result = mysql_query ($query) or die("error en sistema") ;
  if (!$result || mysql_num_rows($result) < 1)
     {  
     echo "Acceso no Autorizado <BR>";
   #
echo " <script language=javascript>
        window.open ('index_login.php','_top');
       </script>  " ; 
;
#
     }
   ##########################################################
   #
   #  traigo los datos de la sesion
   #
   #
   $row = mysql_fetch_array($result);
   $usu = $row["usuario"];
   $ip = $row["ip"];
   $obs = $row["obs"];
   ##########################################################
   ##########################################################
   #
   #  grabo el log
   #
   #  PHPSESSID es el id de la sesion del usuario
   #
   $ses = $PHPSESSID;
   ##########################################################
   #
   #  PHP_SELF  es el id de la pagina actual
   #
   $pag = $_SERVER['PHP_SELF'];
   #
   ##########################################################
   #
   #  REMOTE_ADDR es el ip de la maquina que pide la pagina.
   #  es la ip del proxy si esta conectado via uno.
   #
   $addr = $_SERVER['REMOTE_ADDR'];
   #
   ##########################################################
   #
   #  HTTP_REFERER es el id de la pagina desde donde fue redirigido
   #
 #
 if (!isset($_SERVER['HTTP_REFERER'])) { $_SERVER['HTTP_REFERER'] = "" ; } ;
 #
   $refe = $_SERVER['HTTP_REFERER'];
   #
   ##########################################################
   #
   #  QUERY_STRING es el comando completo con el que fue pedida
   #  la pagina
   #
   $que = $_SERVER['QUERY_STRING'];
   #
   ##########################################################
   #
   $tick = date('ymdHis');
   #
   ##########################################################
   #
   include ("conexion-cupea2.php");
   $query = "Insert into log (page,session,clock,user) VALUES ('$pag','$ses','$tick','$usu')";
   $result = mysql_query($query) or die("error en sesion".$query);
   mysql_close();
   #
;
#
#
#
# a partir de aca programar usualmente
#
#
#echo $addr ;
#echo "<br> aca deberia ir el desarrollo normal de la pagina" ;
#
#
?>
