
<?php 
$valueremove = $_REQUEST["q"];  
$servername = "localhost";
$username = "root";
$password = "";
$database = "empresas_juniores";

$valueremove = "`".$valueremove."`";
// Create connection
$conn = mysqli_connect($servername, $username, $password,
 $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "ALTER TABLE empresas DROP ".$valueremove;
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
include_once '../Formulario_Cadastro_Area.php';
?>  
