<!doctype Html>
<?php
$q = $_REQUEST["q"];

// process to retrieve and filter 







//Results
for ($j=1;$j<=12 ;$j++)
{
echo ("<div id = 'area".$j."' class='botaoarea_pai'  style='grid-area:".$j."a'
onclick='boolAreas[".($j-1)."]=(boolAreas[".($j-1)."]+1)%2;Update_Resultados(4)'>
<div class='botaoarea_filho'>
Area ".$j."
</div>
</div>");}
?>