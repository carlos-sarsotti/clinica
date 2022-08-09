<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
require_once ('jpgraph/jpgraph_pie3d.php');
require_once ('jpgraph/jpgraph_line.php');
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

























// Rellenar array con los datos para el gráfico.
$data = array(round($masapielypeso*100-15)/100,round($masamuscypeso*100-15)/100,round($masaresiypeso*100-15)/100,round($masaadipypeso*100-15)/100,round($masacuertypeso*100-15)/100);

// Crear el gráfico de torta.
$graph = new PieGraph(475,400,"auto");

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Establecer el título del plot.
$graph->title->Set("FRACCIONAMIENTO MASA");

// Crear
$p1 = new PiePlot3D($data);
$p1->SetSize(0.3);
$p1->SetCenter(0.5);
$graph->img->SetAntiAliasing();
$graph->SetMarginColor('#FAFAFA');

//$graph->SetShadow();
$graph->Add($p1);
$p1->value->SetFont(FF_FONT1,FS_BOLD);
$p1->value->SetColor("black");
$p1->SetLabelPos(1);


$nombres=array("Piel","Musculo","Residual","Adiposa","Osea");
$p1->SetLegends($nombres);
$graph->legend->SetShadow('gray@0.5',3);
$graph->legend->SetPos(0.5,0.96, 'center', 'bottom');
$graph->legend->SetColumns(5);
$p1->ShowBorder(1);
$p1->ExplodeSlice(1);
$p1->ExplodeSlice(2);
$p1->ExplodeSlice(3);
$p1->ExplodeSlice(4);
$p1->ExplodeSlice(5);
$graph->Stroke();

?>