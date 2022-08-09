<?  
  session_register("count") ;
  header("expires: Mon, 26 Jul 1998 05:00:00 GMT") ;
  header("Last-Modified: ". gmdate("D, d M Y H:i:s") . " GMT");
  header("Pragma: no-cache");
if(!isset($PHP_AUTH_USER))
  {
  header("WWW-authenticate: Basic realm=\"cajadeprevisionsf\"");
  header("HTTP/1.0 401 No authorized");
  exit ;
  }
else
  {
  $hash= md5($PHP_AUTH_PW);
  include ("conexion-cupea2.php");
  $query =  "select * from usuarios where nombre = '".$PHP_AUTH_USER."' and clave = '".$hash."'";
  $result = mysql_query ($query) or die("error en sistema") ;
  #
  # muestro  los datos
  #
  if (!$result || mysql_num_rows($result) < 1)
     {  
     echo "Acceso no Autorizado <BR>";
     #echo "query:".$query."<BR>";
     #echo "result:".$result."<BR>";
     #echo "-rows:".$mysql_num_rows."<BR>";
     #echo "user:".$PHP_AUTH_USER."<BR>";
     #echo "pword:".$PHP_AUTH_PW."<BR>";
     exit;
     }
  ;
  }
;
#
#
#  Empieza la Joda !!!
$v0 = $PHPSESSID ;
$v1 = $PHP_AUTH_USER ;
$v2 = $REMOTE_ADDR ;
$v3 = date('ymdHi') ;
#
#
#
#
#
$query = "Insert into sesiones (ip,session,usuario,inicio,fin,obs) VALUES ('$v2','$v0','$v1','$v3','$v3',' ')";
   $result2 = mysql_query($query) or die("error en sesion");
   #
   #
$row = mysql_fetch_array($result);
echo " <script language=javascript>";
echo "        window.open ('";
echo          $row["menu"];
echo          "','_top');";
echo "       </script>  " ; 
;