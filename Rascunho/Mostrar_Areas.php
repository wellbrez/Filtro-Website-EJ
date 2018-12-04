<!doctype Html>
<?php
$q = $_REQUEST["q"];

// process to retrieve and filter 

$servername = "localhost";
$username = "root";
$password = "";
$database = "empresas_juniores";

// Create connection
$conn = mysqli_connect($servername, $username, $password,
 $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM empresas";
$result = mysqli_query($conn, $sql);
$datas = array();
$num_columns = mysqli_field_count($conn);
if ($num_columns>0)
{
    while ($column = mysqli_fetch_assoc($result))
    {
        $datas[] = $column;
    }
}
mysqli_close($conn);





//Results
for ($j=1;$j<=$num_columns-5 ;$j++)
{
echo ("<div id = 'area".$j."' class='botaoarea_pai'  style='grid-area:".$j."a'
onclick='boolAreas[".($j-1)."]=(boolAreas[".($j-1)."]+1)%2;Update_Resultados(4)'>
<div class='botaoarea_filho'>
Area ".array_keys($datas)[$j]."
</div>
</div>");}
?>