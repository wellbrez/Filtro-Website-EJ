<?php 
$id = $_REQUEST["q"];  
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

$sql = "DELETE FROM `empresas` WHERE `empresas`.`id` = ".$id."";
$result = mysqli_query($conn, $sql);


mysqli_close($conn);
include_once '../Formulario_Cadastro_Empresa.php';
?>