<!doctype Html>

<?php
include_once 'dbh.php';

for ($numero_area=1;$numero_area<=sizeof($coluna_nome)-5 ;$numero_area++)
{
echo ("<div id = 'area".$numero_area."' class='botaoarea_pai'  style='grid-area:".$numero_area."a'>
<div class='botaoarea_filho' onclick='Update_Resultados(".$numero_area.");'
>"
.$coluna_nome[$numero_area+4]."
</div>
</div>");}

?>