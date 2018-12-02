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
$num_rows = mysqli_num_rows($result);
if ($num_rows>0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        $datas[] = $row;
    }
}
mysqli_close($conn);
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