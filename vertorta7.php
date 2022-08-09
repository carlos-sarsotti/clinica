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
$id_paciente=$_GET['id_paciente'];


$contar=0;
$coma="";
$tilde="";
include("conexion-cupea.php");
$query =  "select sum(peso+talla+talla_sentado) as basico,sum(biocromial+torax_transverso+torax_ant_post+bi_iliocrestideo+humeral_biepicondilar+femoral_biepicondilar)as diametro,sum(cabeza+brazo_relajado+Brazo_Flex_tens+antebrazo_max+torax_meso_est+cintura+cadera+muslo_max+muslo_med+pantorrilla_max)as perimetro,sum(triceps+subescapular+supraespinal+abdominal+muslo_medial2+pantorrilla_max2) as pliegue FROM informes_pacientes WHERE id_paciente='$id_paciente' group by id_informe order by id_informe";
$result = mysqli_query($bd,$query) ;
//echo $query;
while($row = mysqli_fetch_assoc($result))
	{
	$contar=$contar+1;	
	$basico = $row['basico'];
	$diametro = $row['diametro'];
	$perimetro = $row['perimetro'];
	$pliegue = $row['pliegue'];
    $bas[$contar]=$basico;  	
    $dia[$contar]=$diametro;  	
    $per[$contar]=$perimetro;  	
    $pli[$contar]=$pliegue;

    $data1= $data1.$coma.$bas[$contar];
    $data2= $data2.$coma.$dia[$contar];
    $data3= $data3.$coma.$per[$contar];
    $data4= $data4.$coma.$pli[$contar];
    $informe =$informe.$coma."Informe-".$contar; 
    $coma=" ";   	
	}
// Some data

$datay1=explode(" ",$data1);
$datay2=explode(" ",$data2);
$datay3=explode(" ",$data3);
$datay4=explode(" ",$data4);
$informe1=explode(" ",$informe);

// Create the basic graph
$graph = new Graph(650,450,'auto');
$graph->clearTheme();
$graph->SetScale("textlin");
$graph->img->SetMargin(40,80,50,40);
// Adjust the position of the legend box
$graph->legend->Pos(0.02,0.15);

// Adjust the color for theshadow of the legend
$graph->legend->SetShadow('darkgray@0.5');
$graph->legend->SetFillColor('lightblue@0.3');

// Get localised version of the month names

// Set a nice summer (in Stockholm) image
//$graph->SetBackgroundImage('stship.jpg',BGIMG_COPY);

// Set axis titles and fonts
//$graph->xaxis->title->Set('Year 2002');
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetColor('black');

$graph->xaxis->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->SetColor('black');

$graph->yaxis->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->SetColor('black');
$graph->xaxis->SetTickLabels(explode(" ",$informe));
$graph->yaxis->SetTickPositions(array(0,50,100,150,200,250,300,350,400,450,500,550,600,650,700));


$graph->ygrid->Show(false);
$graph->ygrid->SetColor('black@0.5');

// Setup graph title
$graph->title->Set('Grafico de Progresos');
// Some extra margin (from the top)
$graph->title->SetMargin(10);
$graph->title->SetFont(FF_ARIAL,FS_NORMAL,12);

// Create the three var series we will combine
$bplot1 = new BarPlot($datay1);
$bplot2 = new BarPlot($datay2);
$bplot3 = new BarPlot($datay3);
$bplot4 = new BarPlot($datay4);

// Setup the colors with 40% transparency (alpha channel)
$bplot1->SetFillColor('orange@0.4');
$bplot2->SetFillColor('brown@0.4');
$bplot3->SetFillColor('darkgreen@0.4');
$bplot4->SetFillColor('blue@0.4');

// Setup legends
$bplot1->SetLegend('Inf. Basica');
$bplot2->SetLegend('Diametro   ');
$bplot3->SetLegend('Perimetro  ');
$bplot4->SetLegend('Pliegues   ');

// Setup each bar with a shadow of 50% transparency
$bplot1->SetShadow('black@0.4');
$bplot2->SetShadow('black@0.4');
$bplot3->SetShadow('black@0.4');
$bplot4->SetShadow('black@0.4');

$gbarplot = new GroupBarPlot(array($bplot1,$bplot2,$bplot3,$bplot4));
$gbarplot->SetWidth(0.6);
$graph->Add($gbarplot);

$graph->Stroke();

?>




