<!doctype Html>
<?php
include_once 'dbh.php';

$string_filtro = $_REQUEST["q"];
$stringfiltro_geral = str_replace(',','',$string_filtro);
$idivisor = strpos($stringfiltro_geral,'-');
$stringfiltro_regioes = substr($stringfiltro_geral,$idivisor+1);
$stringfiltro_areas = substr($stringfiltro_geral,0,$idivisor);

$arrayFiltro_areas = str_split($stringfiltro_areas);
$arrayfiltro_regioes = str_split($stringfiltro_regioes);


$empresa_nome = '';
//Results
for ($i=1;$i<=$num_rows;$i++)
{
echo ("<div id = 'elem".$i."' class='caixaresultado_pai'>
<h1>".$datas[$i-1]['nome']."</h1>
<div class='caixaresultado_filho' style='grid-area:".$i."'>
    <h2>".$stringfiltro_areas.": ".$datas[$i-1]['email']."</h2>
    <h2>Tel: ".$datas[$i-1]['telefone']."</h2>
</div>
</div>");}
?>