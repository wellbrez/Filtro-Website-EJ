<?php 
$sqlString = $_REQUEST["q"];  
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


$sql = "SHOW COLUMNS FROM empresas";
$result = mysqli_query($conn, $sql);
$coluna_nome = array();
$num_columns = mysqli_field_count($conn);

$sqlString1 = "INSERT INTO empresas (`id`";

if ($num_columns>0)
{
    while ($linha = mysqli_fetch_array($result))
    {
        $coluna_nome[] = $linha['Field'];
    }
}

foreach ($coluna_nome as $item)
{
    if ($item!='id'){
    $sqlString1 .= ",`".$item."`";}
}
$sqlString1.=') '.$sqlString;

$result = mysqli_query($conn,$sqlString1);
mysqli_close($conn);

include_once '../Formulario_Cadastro_Empresa.php';
?>