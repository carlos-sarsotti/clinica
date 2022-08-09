<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_gantt.php');
require_once ('jpgraph/jpgraph_line.php');
require_once ('jpgraph/jpgraph_scatter.php');
require_once ('jpgraph/jpgraph_regstat.php');
require_once ('jpgraph/jpgraph_bar.php');
require_once ('jpgraph/jpgraph_log.php');
require_once ('jpgraph/jpgraph_plotline.php');
Session_start();
$b1 = $_SESSION['b1'];
$b2 = $_SESSION['b2'];
$perfilusuario2 = $_SESSION['perfilusuario2'];
$nombreusuario = $_SESSION['nombreusuario'];
$idgestor = $_SESSION['idgestor'];
error_reporting(0);
$id_informe=$_GET['id_informe'];

include("conexion-cupea.php");
$query =  "select * FROM informes_pacientes WHERE id_informe='$id_informe'";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$id_paciente = $row['id_paciente'];
	$peso = $row['peso'];
	$talla = $row['talla'];
	$tallasen = $row['talla_sentado'];
	$biocrom = $row['biocromial'];
	$toraxtransv = $row['torax_transverso'];
	$toraxantpost = $row['torax_ant_post'];
	$biiliocres = $row['bi_iliocrestideo'];
	$humerobie = $row['humeral_biepicondilar'];
	$femoralbie = $row['femoral_biepicondilar'];
	$cabeza = $row['cabeza'];
	$brazorela = $row['brazo_relajado'];
	$brazoflex = $row['Brazo_Flex_tens'];
	$antebrazomax = $row['antebrazo_max'];
	$toraxmeso = $row['torax_meso_est'];
	$circcin = $row['cintura'];
	$circcad = $row['cadera'];
	$muslomax = $row['muslo_max'];
	$muslomed = $row['muslo_med'];
	$pantomax = $row['pantorrilla_max'];
	$triceps = $row['triceps'];
	$subesca = $row['subescapular'];
	$supraes = $row['supraespinal'];
	$abdominal = $row['abdominal'];
	$muslomed2 = $row['muslo_medial2'];
	$pantomax2 = $row['pantorrilla_max2'];
	$actfis = $row['actividad_fis'];
	$medicacion = $row['medicacion'];
	$grosorpiel=$row['grosor_piel'];
	$constpiel=$row['constante_piel'];
	$obs = $row['observaciones'];
	}
	
	
$query =  "select * FROM agenda_pacientes WHERE id_paciente='$id_paciente'";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$genero2=$row['sexo'];	
	$id_paciente=$row['id_paciente'];
	$dni2=$row['dni'];
	$apellido2=$row['apellido'];
	$nombre2=$row['nombre'];
	}
//area superficial=$constpiel*peso*talla
$area_sup= ($constpiel*pow($peso,0.425)*pow($talla,0.725))/10000;
$area_sup1= number_format($area_sup,3,".",",");
//echo $area_sup1."<br>";
//Masa de la Piel (Kg):
$masapiel=  ($area_sup*$grosorpiel*1.05);
$masapiel1=  number_format($masapiel,4,".",",");
//echo $masapiel1."<br>";


//totalpliegues
$totalpliegues=	$triceps+$subesca+$supraes+$abdominal+$muslomed2+$pantomax2;
$szadiposa=($totalpliegues*(170.18/$talla)-116.41)/34.79;
$szadiposa1=  number_format($szadiposa,3,".",",");
//echo $triceps."/".$subesca."/".$supraes."/".$abdominal."/".$muslomed2."/".$pantomax2."<br>";
//echo $szadiposa1."<br>";
//masa adiposa

$masaadiposa=(($szadiposa*5.85)+25.6)/pow((170.18/$talla),3);
$masaadiposa1=  number_format($masaadiposa,4,".",",");
//echo $masaadiposa1."<br>";

//per. Brazo corregido
$brazocorreg= $brazorela-($triceps*3.141/10);
$brazocorreg1=  number_format($brazocorreg,3,".",",");
//echo $brazocorreg1."<br>";
//per. Antebrazo
$antebrazocorreg=$antebrazomax;
$antebrazocorreg1=  number_format($antebrazocorreg,3,".",",");
//echo $antebrazocorreg1."<br>";
//per. Muslo corregido
$muslocorreg=$muslomax-($muslomed2*3.141/10);
$muslocorreg1=  number_format($muslocorreg,3,".",",");
//echo $muslocorreg1."<br>";
//per. Pantorrilla corregido
$pantocorreg=$pantomax-($pantomax2*3.141/10);
$pantocorreg1=  number_format($pantocorreg,3,".",",");
//echo $pantocorreg1."<br>";
//per. Tórax corregido
//echo $toraxmeso."/".$subesca."<br>";
$toraxcorreg=$toraxmeso-($subesca*3.141/10);
$toraxcorreg1=  number_format($toraxcorreg,3,".",",");
//echo $toraxcorreg1."<br>";
//Suma perímetros corregidos:
$pericorreg=$brazocorreg+$antebrazocorreg+$muslocorreg+$pantocorreg+$toraxcorreg;
$pericorreg1=  number_format($pericorreg,3,".",",");
//echo $pericorreg1."<br>";
//Score Z muscular:
$szmuscular=(($pericorreg*(170.18/$talla)-207.21)/13.74);
$szmuscular1=  number_format($szmuscular,3,".",",");
//echo $szmuscular1."<br>";
//Masa Muscular (Kg):
$masamuscular=(($szmuscular*5.4)+24.5)/pow((170.18/$talla),3);
$masamuscular1=  number_format($masamuscular,4,".",",");
//echo $masamuscular1."<br>";
//per. Cintura corregido
$cinturacorreg=$circcin-($abdominal*0.3141);
$cinturacorreg1=  number_format($cinturacorreg,4,".",",");
//echo $cinturacorreg1."<br>";
//Suma de tórax
$toraxtotal=$toraxtransv+$toraxantpost+$cinturacorreg;
$toraxtotal1=  number_format($toraxtotal,4,".",",");
//echo $toraxtotal1."<br>";
//Score Z residual:
$szresidual=(($toraxtotal*(89.92/$tallasen)-109.35)/7.08);
$szresidual1=  number_format($szresidual,4,".",","); 
//echo $szresidual1."<br>";
//Masa Residual (Kg):
$masaresidual=(($szresidual*1.24)+6.1)/pow((89.92/$tallasen),3);
$masaresidual1=  number_format($masaresidual,4,".",",");
//echo $masaresidual1."<br>";
//Score Z cabeza:
$szcabeza =($cabeza-56)/1.44;
$szcabeza1=  number_format($szcabeza,4,".",","); 
//echo $szcabeza1."<br>";
//Masa ósea Cabeza (Kg):
$masaosea=($szcabeza*0.18)+1.2;
$masaosea1=  number_format($masaosea,4,".",",");
//echo $masaosea1."<br>";
//Suma de Diámetros:
$diametrototal =$biocrom +$biiliocres+($humerobie*2)+($femoralbie*2);
$diametrototal1=  number_format($diametrototal,4,".",",");
//echo $diametrototal1."<br>";
//Score Z ósea cuerpo:
$szcuerpo =(($diametrototal*(170.18/$talla))-98.88)/5.33;
$szcuerpo1=  number_format($szcuerpo,4,".",","); 
//echo $szcuerpo1."<br>";
//Masa Ósea Cuerpo (Kg):
$masacuerpo=(($szcuerpo*1.34)+6.7)/pow((170.18/$talla),3);
$masacuerpo1=  number_format($masacuerpo,4,".",",");
//echo $masacuerpo1."<br>";
//Masa Ósea Total (Kg):
$masatotal= $masaosea + $masacuerpo;
$masatotal1=  number_format($masatotal,4,".",",");
//echo $masatotal1."<br>";
//Peso Estructurado (Kg):
$pesoestruc= $masapiel+$masaadiposa+$masamuscular+$masaresidual+$masaosea + $masacuerpo;
$pesoestruc1=  number_format($pesoestruc,4,".",",");
//echo $pesoestruc1."<br>";
//Diferencia P.E. - Peso Bruto:
$diferpeypb= $pesoestruc-$peso;
$diferpeypb1=  number_format($diferpeypb,4,".",",");
//echo $diferpeypb1."<br>";
//% de diferencia:
$diferporc= $diferpeypb/$peso*100;
$diferporc1=  number_format($diferporc,2,".",",");
//echo $diferporc1."%<br>";

//porcentajes masa piel y peso estruc
$masapielypeso= $masapiel/$pesoestruc*100;
$masapielypeso1=  number_format($masapielypeso,2,".",",");
//echo $masapielypeso1."%<br>";
//porcentajes masa de adiposa y peso estruc
$masaadipypeso= $masaadiposa/$pesoestruc*100;
$masaadipypeso1=  number_format($masaadipypeso,2,".",",");
//echo $masaadipypeso1."%<br>";
//porcentajes masa muscular y peso estruc
$masamuscypeso= $masamuscular/$pesoestruc*100;
$masamuscypeso1=  number_format($masamuscypeso,2,".",",");
//echo $masamuscypeso1."%<br>";
//porcentajes masa residual y peso estruc
$masaresiypeso= $masaresidual/$pesoestruc*100;
$masaresiypeso1=  number_format($masaresiypeso,2,".",",");
//echo $masaresiypeso1."%<br>";
//porcentajes masa oseacabeza y peso estruc
$masaoseaypeso= $masaosea/$pesoestruc*100;
$masaoseaypeso1=  number_format($masaoseaypeso,2,".",",");
//echo $masaoseaypeso1."%<br>";
//porcentajes masa osea cuerpo y peso estruc
$masacuerypeso= $masacuerpo/$pesoestruc*100;
$masacuerypeso1=  number_format($masacuerypeso,2,".",",");
//echo $masacuerypeso1."%<br>";
//porcentajes masa osea cuerpo total y peso estruc
$masacuertypeso= $masatotal/$pesoestruc*100;
$masacuertypeso1=  number_format($masacuertypeso,2,".",",");
//echo $masacuertypeso1."%<br>";
//porcentajes total 
$porcetotal= $masapielypeso+$masaadipypeso+$masamuscypeso+$masaresiypeso+$masaoseaypeso+$masacuerypeso;
$porcetotal1=  number_format($porcetotal,2,".",",");
//echo $porcetotal1."%<br>";

//ajustes
$masapielajuste= $masapielypeso*$diferpeypb/100;
$masapielajuste1=  number_format($masapielajuste,3,".",",");
//echo $masapielajuste1."%<br>";
//porcentajes masa de adiposa y peso estruc
$masaadipajuste= $masaadipypeso*$diferpeypb/100;
$masaadipajuste1=  number_format($masaadipajuste,3,".",",");
//echo $masaadipajuste1."%<br>";
//porcentajes masa muscular y peso estruc
$masamuscajuste= $masamuscypeso*$diferpeypb/100;
$masamuscajuste1=  number_format($masamuscajuste,3,".",",");
//echo $masamuscajuste1."%<br>";
//porcentajes masa residual y peso estruc
$masaresiajuste= $masaresiypeso*$diferpeypb/100;
$masaresiajuste1=  number_format($masaresiajuste,3,".",",");
//echo $masaresiajuste1."%<br>";
//porcentajes masa oseacabeza y peso estruc
$masaoseaajuste= $masaoseaypeso*$diferpeypb/100;
$masaoseaajuste1=  number_format($masaoseaajuste,3,".",",");
//echo $masaoseaajuste1."%<br>";
//porcentajes masa osea cuerpo y peso estruc
$masacuerajuste= $masacuerypeso*$diferpeypb/100;
$masacuerajuste1=  number_format($masacuerajuste,3,".",",");
//echo $masacuerajuste1."%<br>";
//porcentajes masa osea cuerpo total y peso estruc
$masacuertajuste= $masacuertypeso*$diferpeypb/100;
$masacuertajuste1=  number_format($masacuertajuste,3,".",",");
//echo $masacuertajuste1."%<br>";
//porcentajes total 
$ajustetotal= $masapielajuste+$masaadipajuste+$masamuscajuste+$masaresiajuste+$masaoseaajuste+$masacuerajuste;
$ajustetotal1=  number_format($ajustetotal,3,".",",");
//echo $ajustetotal1."%<br>";

//kg
$masapielkg= $masapiel-$masapielajuste;
$masapielkg1=  number_format($masapielkg,3,".",",");
//echo $masapielkg1."<br>";
//porcentajes masa de adiposa y peso estruc
$masaadipkg= $masaadiposa-$masaadipajuste;
$masaadipkg1=  number_format($masaadipkg,3,".",",");
//echo $masaadipkg1."<br>";
//porcentajes masa muscular y peso estruc
$masamusckg= $masamuscular-$masamuscajuste;
$masamusckg1=  number_format($masamusckg,3,".",",");
//echo $masamusckg1."<br>";
//porcentajes masa residual y peso estruc
$masaresikg= $masaresidual-$masaresiajuste;
$masaresikg1=  number_format($masaresikg,3,".",",");
//echo $masaresikg1."<br>";
//porcentajes masa seacabeza y peso estruc
$masaoseakg= $masaosea-$masaoseaajuste;
$masaoseakg1=  number_format($masaoseakg,3,".",",");
//echo $masaoseakg1."<br>";
//porcentajes masa osea cuerpo y peso estruc
$masacuerkg= $masacuerpo-$masacuerajuste;
$masacuerkg1=  number_format($masacuerkg,3,".",",");
//echo $masacuerkg1."<br>";
//porcentajes masa osea cuerpo total y peso estruc
$masacuertkg= $masatotal-$masacuertajuste;
$masacuertkg1=  number_format($masacuertkg,3,".",",");
//echo $masacuertkg1."<br>";
//porcentajes total 
$kgtotal= $masapielkg+$masaadipkg+$masamusckg+$masaresikg+$masaoseakg+$masacuerkg;
$kgtotal1=  number_format($kgtotal,3,".",",");
//echo $kgtotal1."<br>";
//ajuste pe y pesob
$ajustedifcuer= $ajustetotal-$diferpeypb;
$ajustedifcuer1=  number_format($ajustedifcuer,3,".",",");
//echo $ajustedifcuer1."<br>";
//kg pe y pesob
$kgdifer= $kgtotal-$peso;
$kgdifer1=  number_format($kgdifer,3,".",",");
//echo $kgdifer1."<br>";

//Masa ósea de referencia
$masaosearef = $masacuertkg;
$masaosearef1=  number_format($masaosearef,3,".",",");
//echo $masaosearef1."<br>";
//MOR - MOActual
$moactual = $masacuertkg-$masacuertkg;
$moactual1=  number_format($moactual,3,".",",");
//echo $moactual1."<br>";
//Suma de 4 masas
$masa4total = $kgtotal-$masacuertkg;
$masa4total1=  number_format($masa4total,3,".",",");
//echo $masa4total1."<br>";
//Nuevos porcentajes Adiposo
$nuevoporc = $masaadipkg/$masa4total;
$nuevoporc1=  number_format($nuevoporc,5,".",",");
//echo $nuevoporc1."<br>";
//Muscular
$nuevomusc = $masamusckg/$masa4total;
$nuevomusc1=  number_format($nuevomusc,5,".",",");
//echo $nuevomusc1."<br>";
//Residual
$nuevoresi = $masaresikg/$masa4total;
$nuevoresi1=  number_format($nuevoresi,5,".",",");
//echo $nuevoresi1."<br>";
//Piel
$nuevopiel = $masapielkg/$masa4total;
$nuevopiel1=  number_format($nuevopiel,5,".",",");
//echo $nuevopiel1."<br>";
//Suma de % de 4 masas
$masa4porc = $nuevoporc+$nuevomusc+$nuevoresi+$nuevopiel;
$masa4porc1=  number_format($masa4porc,5,".",",");
//echo $masa4porc1."<br>";
//Adiposa		25,309
$adipreajuste = $masaadipkg-($moactual*$nuevoporc);
$adipreajuste1=  number_format($adipreajuste,3,".",",");
//echo $adipreajuste1."<br>";
//Muscular		30,093
$muscreajuste = $masamusckg-($moactual*$nuevomusc);
$muscreajuste1=  number_format($muscreajuste,3,".",",");
//echo $muscreajuste1."<br>";
//Residual		7,204
$resireajuste = $masaresikg-($moactual*$nuevoresi);
$resireajuste1=  number_format($resireajuste,3,".",",");
//echo $resireajuste1."<br>";
//Ósea		7,062
$oseareajuste = $masacuertkg;
$oseareajuste1=  number_format($oseareajuste,3,".",",");
//echo $oseareajuste1."<br>";
//Piel		3,433
$pielreajuste = $masapielkg-($moactual*$nuevopiel);
$pielreajuste1=  number_format($pielreajuste,3,".",",");
//echo $pielreajuste1."<br>";
//Suma  de 5 m. Corr.		73,100
$total5corr = $adipreajuste+$muscreajuste+$resireajuste+$oseareajuste+$pielreajuste;
$total5corr1 =  number_format($total5corr,5,".",",");
//echo $total5corr1."<br>";
//Índices:	
//Adiposo	9,7035 =I50/($G$7/100)^2
$indadip=$adipreajuste/pow(($talla/100),2);
$indadip1 =  number_format($indadip,4,".",",");
//echo $indadip1."<br>";
//Muscular	11,5376
$indmusc=$muscreajuste/pow(($talla/100),2);
$indmusc1 =  number_format($indmusc,4,".",",");
//echo $indmusc1."<br>";
//Residual	2,7619
$indresi=$resireajuste/pow(($talla/100),2);
$indresi1 =  number_format($indresi,4,".",",");
//echo $indresi1."<br>";
//Óseo	2,7076
$indosea= $oseareajuste/pow(($talla/100),2);
$indosea1 =  number_format($indosea,4,".",",");
//echo $indosea1."<br>";
//Piel	1,3162
$indpiel=$pielreajuste/pow(($talla/100),2);
$indpiel1 =  number_format($indpiel,4,".",",");
//echo $indpiel1."<br>";
//Musc/Óseo	4,2612
$indmuscoseo= $muscreajuste/$oseareajuste;
$indmuscoseo1 =  number_format($indmuscoseo,4,".",",");
//echo $indmuscoseo1."<br>";
//Musc/Lastre	0,6997 =I51/(I55-I51)
$indmusclast= $muscreajuste/($total5corr-$muscreajuste);
$indmusclast1 =  number_format($indmusclast,4,".",",");
//echo $indmusclast1."<br>";
//Lastre	1,6489=(I55-I51)*1000/(G7)^2
$indlast= ($total5corr-$muscreajuste)*1000/pow($talla,2);
$indlast1 =  number_format($indlast,4,".",",");
//echo $indlast1."<br>";
$calcu=$peso*pow((170.18/$talla),3);
$calcu1=($calcu-64.58)/8.6;
$calcu2 = number_format($calcu1,2,'.',',');

//datos basicos
$etmpeso = 0.05;
$etmtall = 0.11;
$etmtals = 0.23;
//diametro
$etmbiac = 0.39;
$etmtórt = 0.61;
$etmtóra = 0.68;
$etmbiil = 0.64;
$etmhume = 0.40;
$etmfemo = 0.30;
//perimetro
$etmcabe = 0.16;
$etmbrar = 0.63;
$etmbraf = 0.69;
$etmante = 0.48;
$etmtórm = 0.35;
$etmcint = 0.54;
$etmcade = 0.21;
$etmmuss = 0.32;
$etmmusm = 0.33;
$etmpan1 = 0.28;
//pliegues
$etmtríc = 1.55;
$etmsube = 1.59;
$etmsupr = 2.19;
$etmabdo = 1.69;
$etmmusl = 1.54;
$etmpan2 = 1.62;

//datos basicos   zcore-z
$zpeso=	($peso*pow((170.18/$talla),3));	
$zcorezpeso = ($zpeso-64.58)/8.6;		

$ztallasen = ($tallasen*(170.18/$talla));	
$zcoreztals = ($ztallasen-89.92)/4.5;		
//diametro   zcore-z		

$zbiocrom = ($biocrom*(170.18/$talla));		
$zcorezbiac = ($zbiocrom-38.04)/1.92;		

$ztoraxtransv = ($toraxtransv*(170.18/$talla));		
$zcoreztórt = ($ztoraxtransv-27.92)/1.74;		

$ztoraxantpost = ($toraxantpost*(170.18/$talla));		
$zcoreztóra = ($ztoraxantpost-17.5)/1.38;
		
$zbiiliocres = ($biiliocres*(170.18/$talla));		
$zcorezbiil = ($zbiiliocres-28.84)/1.75;		

$zhumerobie = ($humerobie*(170.18/$talla));		
$zcorezhume = ($zhumerobie-6.48)/0.35;		

$zfemoralbie = ($femoralbie*(170.18/$talla));		
$zcorezfemo = ($zfemoralbie-9.52)/0.48;	
		
//perimetro   zcore-z

$zcabeza = ($cabeza*(170.18/$talla));		
$zcorezcabe = ($zcabeza-56)/1.44;	

$zbrazorela = ($brazorela*(170.18/$talla));	
$zcorezbrar = ($zbrazorela-26.89)/2.33;


$zbrazoflex = ($brazoflex*(170.18/$talla));
$zcorezbraf = ($zbrazoflex-29.41)/2.37;

 $zantebrazomax = ($antebrazomax*(170.18/$talla));		
$zcorezante = ($zantebrazomax-25.13)/1.41;

$ztoraxmeso = ($toraxmeso*(170.18/$talla));		
$zcoreztórm = ($ztoraxmeso-87.86)/5.18;

$zcirccin = ($circcin*(170.18/$talla));			
$zcorezcint = ($zcirccin-71.91)/4.45;

$zcirccad = ($circcad*(170.18/$talla));			
$zcorezcade = ($zcirccad-94.67)/5.58;

$zmuslomax = ($muslomax*(170.18/$talla));		
$zcorezmuss = ($zmuslomax-55.82)/4.23;

$zmuslomed = ($muslomed*(170.18/$talla));		
$zcorezmusm = ($zmuslomed-53.2)/4.56;

$zpantomax = ($pantomax*(170.18/$talla));		
$zcorezpan1 = ($zpantomax-35.25)/2.3;		

//pliegues   zcore-z		
$ztriceps = ($triceps*(170.18/$talla));
$zcoreztríc = ($ztriceps-15.4)/4.47;

$zsubesca = ($subesca*(170.18/$talla));		
$zcorezsube = ($zsubesca-17.2)/5.07;

$zsupraes = ($supraes*(170.18/$talla));		
$zcorezsupr = ($zsupraes-15.4)/4.47;

$zabdominal = ($abdominal*(170.18/$talla));		
$zcorezabdo = ($zabdominal-25.4)/7.78;

$zmuslomed2 = ($muslomed2*(170.18/$talla));		
$zcorezmusl = ($zmuslomed2-27)/8.33;

$zpantomax2 = ($pantomax2*(170.18/$talla));		
$zcorezpan2 = ($zpantomax2-16)/4.67;	

$azcorezpeso = number_format($zcorezpeso,2,'.',',');

$azcoreztals = number_format($zcoreztals,2,'.',',');

$azcorezbiac = number_format($zcorezbiac,2,'.',',');
$azcoreztórt = number_format($zcoreztórt,2,'.',',');
$azcoreztóra = number_format($zcoreztóra,2,'.',',');
$azcorezbiil = number_format($zcorezbiil,2,'.',',');
$azcorezhume = number_format($zcorezhume,2,'.',',');
$azcorezfemo = number_format($zcorezfemo,2,'.',',');

$azcorezcabe = number_format($zcorezcabe,2,'.',',');
$azcorezbrar = number_format($zcorezbrar,2,'.',',');
$azcorezbraf = number_format($zcorezbraf,2,'.',',');
$azcorezante = number_format($zcorezante,2,'.',',');
$azcoreztórm = number_format($zcoreztórm,2,'.',',');
$azcorezcint = number_format($zcorezcint,2,'.',',');
$azcorezcade = number_format($zcorezcade,2,'.',',');
$azcorezmuss = number_format($zcorezmuss,2,'.',',');
$azcorezmusm = number_format($zcorezmusm,2,'.',',');
$azcorezpan1 = number_format($zcorezpan1,2,'.',',');

$azcoreztríc = number_format($zcoreztríc,2,'.',',');
$azcorezsube = number_format($zcorezsube,2,'.',',');
$azcorezsupr = number_format($zcorezsupr,2,'.',',');
$azcorezabdo = number_format($zcorezabdo,2,'.',',');
$azcorezmusl = number_format($zcorezmusl,2,'.',',');
$azcorezpan2 = number_format($zcorezpan2,2,'.',',');




// Setup a basic graph
$graph = new Graph(475,400);
$graph->clearTheme();
$graph->SetScale('intint',0,7,-4,4);
$graph->SetMargin(10,160,30,30);
$graph->SetMarginColor('lightblue');
$graph->SetShadow(0);
$graph->yaxis->SetColor('black');
$graph->xaxis->SetColor('black');
$graph->title->Set("SCORE-Z DIAMETRO");
$graph->title->SetFont(FF_ARIAL,FS_BOLD,10);
$graph->title->SetMargin(8);
$graph->xaxis->SetPos(0);
$graph->yaxis->SetPos(0);
$graph->SetBox();

// Use a lot of grace to get large scales since the ballon have
// size and we don't want them to collide with the X-axis


// Create the linear plot
$datay[1]=array(6);
$datay[2]=array(5);
$datay[3]=array(4);
$datay[4]=array(3);
$datay[5]=array(2);
$datay[6]=array(1);

$datax[1]=array($azcorezbiac);
$datax[2]=array($azcoreztórt);
$datax[3]=array($azcoreztóra);
$datax[4]=array($azcorezbiil);
$datax[5]=array($azcorezhume);
$datax[6]=array($azcorezfemo);



$color[1] = 'green';
$color[2] = 'red';
$color[3] = 'lightblue';
$color[4] = 'yellow';
$color[5] = 'blue';
$color[6] = 'gray';

$line[1] = 'Biocromial';
$line[2] = 'Torax Transverso';
$line[3] = 'Torax Anteropost.';
$line[4] = 'Bi-iliocrestideo';
$line[5] = 'Humero(Biepicond.)';
$line[6] = 'Femoral(Biepicond.)';

for( $i=1; $i < 7; ++$i ) {
$sp1=new ScatterPlot($datay[$i],$datax[$i]);
// Add an image mark scaled to 50%
//$sp1->mark->SetType(MARK_FILLEDCIRCLE); 
$sp1->mark->SetType(MARK_IMG_MBALL,$color[$i],1.2);
// Add the plot to the graph
// Specify the callback
// Add the scatter plot to the graph
$sp1->SetColor($color[$i]);
$sp1->SetLegend($line[$i]);
$sp1->value->SetFont(FF_FONT1,FS_BOLD,6);

$graph->Add($sp1);
}
// Second multi Y-axis plot
// Create the third line
$graph->legend->SetColumns(1);
$graph->legend->SetShadow('gray@0.01',0);
$graph->legend->SetPos(0.01,0.15,'right','top');
// ... and send to browser
$graph->Stroke();
?>



