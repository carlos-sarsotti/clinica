<?php // content="text/plain; charset=utf-8"
// Example of pie with center circle
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
require_once ('jpgraph/jpgraph_pie3d.php');
// Some data
// Rellenar array con los datos para el gráfico.
$data = array(40,60,21,33);

// Crear el gráfico de torta.
$graph = new PieGraph(350,250);

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Establecer el título del plot.
$graph->title->Set("A Simple 3D Pie Plot");

// Crear
$p1 = new PiePlot3D($data);
$graph->Add($p1);

//$p1->ShowBorder();
//$p1->SetColor('black');
//$p1->ExplodeSlice(1);
// Add plot to pie graph

// Send back the image when we are called from within the <img> tag
$graph->StrokeCSIMImage();

?>


