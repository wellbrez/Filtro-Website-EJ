<!doctype Html>
<?php include_once 'dbh.php';?>
<?php


$q = $_REQUEST["q"];
$empresa_nome = '';
//Results
for ($i=1;$i<=$num_rows;$i++)
{
echo ("<div id = 'elem".$i."' class='caixaresultado_pai'>
<h1>".$datas[$i-1]['nome']."</h1>
<div class='caixaresultado_filho' style='grid-area:".$i."'>
    <h2>E-mail: ".$datas[$i-1]['email']."</h2>
    <h2>Tel: ".$datas[$i-1]['telefone']."</h2>
</div>
</div>");}
?>