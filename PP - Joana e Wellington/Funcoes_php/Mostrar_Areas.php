<!doctype Html>

<?php
include_once 'dbh.php';

echo ("<p id='AreaTXT' style='grid-area:title'>+ ÁREAS DE SERVIÇOS</p>");
for ($numero_area=1;$numero_area<=sizeof($coluna_nome)-5 ;$numero_area++)
{
echo ("<p id = 'area".$numero_area."' class='botaoarea'  style='grid-area:".$numero_area."a' onclick='Update_Resultados_Area(".$numero_area.");'>▶"
.$coluna_nome[$numero_area+4]."
</p>");}

?>