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

$index =0;
$indexes = array();
$n_zeros = 0;
$n_areas = sizeof($arrayFiltro_areas);
foreach ($arrayFiltro_areas as $test)
{
    if ($test == '1')
    {
        $indexes1[]=$index;
    }
    else
    {
        $n_zeros++;
    }
    
    $index++;
}
if ($n_zeros == $num_areas)
{
    for ($i=1;$i<=$num_rows;$i++)
    {
        echo ("<div id = 'elem".$i."' class='caixaresultado_pai'>
        <h1>".$datas[$i-1]['nome']."</h1>
        <div class='caixaresultado_filho' style='grid-area:".$i."'>
        <h2>EMAIL: ".$datas[$i-1]['email']."</h2>
        <h2>Tel: ".$datas[$i-1]['telefone']."</h2>
        </div>
        </div>");
    }
}
else
{
    $i_filtradas = array();
    foreach ($indexes1 as $m)
    {
        for ($i=0;$i<$num_rows;$i++)
        {
            if ($datas[$i][$coluna_nome[$m+5]]==1)
            {
                $i_filtradas[]=$i;
            }
        }
    }
    $i_filtradas = array_unique($i_filtradas);
    $areai = 1;
    foreach ($i_filtradas as $i)
    {
        
        echo ("<div id = 'elem".$areai."' class='caixaresultado_pai'>
        <h1>".$datas[$i]['nome']."</h1>
        <div class='caixaresultado_filho' style='grid-area:".$areai."'>
        <h2>EMAIL: ".$datas[$i]['email']."</h2>
        <h2>Tel: ".$datas[$i]['telefone']."</h2>
        </div>
        </div>");
        $areai++;
    }
}



?>