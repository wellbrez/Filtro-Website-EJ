<?php 
$value = $_REQUEST["q"];  
$servername = "localhost";
$username = "root";
$password = "";
$database = "empresas_juniores";

$value = "`".$value."`";
// Create connection
$conn = mysqli_connect($servername, $username, $password,
 $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "ALTER TABLE empresas ADD ".$value." BOOLEAN NOT NULL DEFAULT FALSE";
$result = mysqli_query($conn, $sql);


mysqli_close($conn);
include_once '../Formulario_Cadastro_Area.php';
?>