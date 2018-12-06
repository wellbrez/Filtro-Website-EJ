<?php 

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


if ($num_columns>0)
{
    while ($linha = mysqli_fetch_array($result))
    {
        $coluna_nome[] = $linha['Field'];
    }
}
$num_areas = sizeof($coluna_nome)-5;

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
?>