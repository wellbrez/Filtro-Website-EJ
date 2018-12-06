
<?php include_once 'dbh.php';?>
<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Estilo.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="Funcoes_Update.js"></script>
    <script>
    <?php
    ?>
    var boolAreas = [0,0,0,0];
    var boolRegioes = [0,0,0,0,0,0,0];
    window.onload = Update_Areas(2);
    
    </script>
        <title>Página rascunho</title>
    </head>
    <body>
    
    <?php 
    $boolAreaContent = '0';
    for ($i=1;$i<=$num_columns;$i++){$boolAreaContent.= ',0';}
    echo $boolAreaContent?>
        <nav id="NavTitulo"></nav>
        <div id="DivRegioes"></div>
        <div id="DivAreas"></div>
        <div id="DivResultados"></div>
    </body>
</html>