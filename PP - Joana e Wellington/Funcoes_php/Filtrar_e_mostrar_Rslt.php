<!doctype Html>
<?php
include_once 'dbh.php';
$regiao['norte']=
[
'CONCEICAO DA BARRA',
'PEDRO CANARIO',
'MONTANHA',
'MUCURICI',
'ECOPORANGA',
'PONTO BELO',
'PINHEIROS',
'AGUA DOCE DO NORTE',
'BARRA DE SAO FRANCISCO',
'MANTENOPOLIS',
'VILA PAVAO',
'AGUIA BRANCA',
'NOVA VENECIA',
'JAGUARE',
'SAO MATEUS',
'BOA ESPERANCA'];
$regiao['centro']= 
[
'LINHARES',
'SOORETAMA',
'VILA VALERIO',
'SAO GABRIEL DA PALHA',
'ALTO RIO NOVO',
'PANCAS',
'SAO DOMINGOS DO NORTE',
'GOVERNADOR LINDENBERG',
'RIO BANANAL',
'MARILANDIA',
'COLATINA',
'BAIXO GUANDU',
'JOAO NEIVA',
'IBIRACU',
'SAO ROQUE DO CANAA',
'ARACRUZ'
];
$regiao['metropolitana']= 
[
'LARANJA DA TERRA',
'AFONSO CLAUDIO',
'BREJETUBA',
'CONCEICAO DO CASTELO',
'VENDA NOVA DO IMIGRANTE',
'DOMINGOS MARTINS',
'MARECHAL FLORIANO',
'SANTA MARIA DE JETIBA',
'ITARANA',
'ITAGUACU',
'SANTA TERESA',
'FUNDAO',
'SERRA',
'VITORIA',
'CARIACICA',
'VIANA',
'VILA VELHA',
'GUARAPARI',
'SANTA LEOPOLDINA'
];
$regiao['sul']= 
[
'IBATIBA',
'IRUPI',
'IUNA',
'MUNIZ FREIRE',
'IBITIRAMA',
'DIVINO DE SAO LOURENCO',
'DORES DO RIO PRETO',
'GUACUI',
'ALEGRE',
'SAO JOSE DO CALCADO',
'BOM JESUS DO NORTE',
'MIMOSO DO SUL',
'MUQUI',
'JERONIMO MONTEIRO',
'PRESIDENTE KENNEDY',
'ATILIO VIVACQUA',
'MARATAIZES',
'ITAPEMIRIM',
'RIO NOVO DO SUL',
'CACHOEIRO DE ITAPEMIRIM',
'CASTELO',
'VARGEM ALTA',
'ICONHA',
'PIUMA',
'ANCHIETA',
'ALFREDO CHAVES',
'APIACA'
];

$string_filtro = $_REQUEST["q"];                       
$stringfiltro_geral = str_replace(',','',$string_filtro);       
$idivisor = strpos($stringfiltro_geral,'-');
$stringfiltro_regioes = substr($stringfiltro_geral,$idivisor+1);
$stringfiltro_areas = substr($stringfiltro_geral,0,$idivisor);

$arrayFiltro_areas = str_split($stringfiltro_areas);
$arrayfiltro_regioes = str_split($stringfiltro_regioes);

$index =0;
$indexes = array();
$indexes1 = array();
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
if ($n_zeros == $num_areas && $arrayfiltro_regioes==[0,0,0,0])
{
    for ($i=1;$i<=$num_rows;$i++)
    {
        echo ("<div id = 'elem".$i."' class='caixaresultado_pai'>
        <h1>".$datas[$i-1]['nome']."</h1><p>".$datas[$i-1]['regiao']."</p>
        <div class='caixaresultado_filho'>
        <h2><adress>Email: <a href='mailto:".$datas[$i-1]['email']."'>".$datas[$i-1]['email']."</a></adress></h2>
        <h2/><adress class = 'notab'>Tel: <a href='tel:".$datas[$i-1]['telefone']."'>".$datas[$i-1]['telefone']."</a></adress></h2>
        </div>
        </div>");
    }
}
else
{
    $i_filtrada_areas = array();
    for ($i=0;$i<$num_rows;$i++)
    {   
        $quantos_filtros_passaram=0;
        foreach ($indexes1 as $m)
        {
            if ($datas[$i][$coluna_nome[$m+5]]==1)
            {
                $quantos_filtros_passaram++;
            }
        }
        if ($quantos_filtros_passaram==sizeof($indexes1))
        {
            $i_filtrada_areas[]=$i;
        }
    }
    if($n_zeros == $num_areas)

    {
        for ($i=0;$i<$num_rows;$i++)
        {
            $i_filtrada_areas[]=$i;
        }
    
    }

    $regioes_filtro=array();

    if ($arrayfiltro_regioes[0]=='1')
    {
        $regioes_filtro[]='norte';
    }
    if ($arrayfiltro_regioes[1]=='1')
    {
        $regioes_filtro[]='centro';
    }
    if ($arrayfiltro_regioes[2]=='1')
    {
        $regioes_filtro[]='metropolitana';
    }
    if ($arrayfiltro_regioes[3]=='1')
    {
        $regioes_filtro[]='sul';
    }
     //regioes_filtro = ['norte','sul']
     //i_filtradas_areas = [1,4,6]
    if (sizeof($regioes_filtro)==0)
    {
        $i_filtradas = $i_filtrada_areas;
    }
    else
    {
        $i_filtradas = array();
        foreach ($i_filtrada_areas as $index) //$index = 1,4,6
        {
            foreach ($regioes_filtro as $rgfiltro)  //$rgfiltro = 'norte','sul'
            {
                if(in_array($datas[$index]['regiao'],$regiao[$rgfiltro]))
                {
                    $i_filtradas[]=$index;
                    break;
                }
            }
        }
    }

    
    $i_filtradas = array_unique($i_filtradas);
    
    $areai = 1;
    foreach ($i_filtradas as $i)
    {
        
        echo ("<div id = 'elem".$areai."' class='caixaresultado_pai'>
        <h1 >".$datas[$i]['nome']."</h1><p>".$datas[$i]['regiao']."</p>
        <div class='caixaresultado_filho'>
        <h2><adress>Email: <a href='mailto:".$datas[$i]['email']."'>".$datas[$i]['email']."</a></adress></h2>
        <h2><adress>Tel: <a href='tel:".$datas[$i]['telefone']."'>".$datas[$i]['telefone']."</a></adress></h2>
        </div>
        </div>");
        $areai++;
    }
}



?>