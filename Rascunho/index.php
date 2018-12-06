
<?php include_once 'dbh.php';?>
<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Estilo.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="Funcoes_Update1.js"></script>
    <script>
    
    <?php 
    $boolAreasConteudo = '0';
    for ($i=1;$i<$num_areas;$i++){$boolAreasConteudo.= ',0';}
    ?>


    var boolAreas = [<?php echo $boolAreasConteudo;?>];
    var boolRegioes = [0,0,0,0,0,0,0];
    window.onload = Update_Areas;
    
    </script>
        <title>Página rascunho</title>
    </head>
    <body>
    
        <nav id="NavTitulo"></nav>
        <div id="DivRegioes"></div>
        <div id="DivAreas"></div>
        <div id="DivResultados"></div>
    </body>
</html>