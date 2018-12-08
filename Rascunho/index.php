
<?php include_once 'dbh.php';?>
<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Estilo.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="Funcoes_Update2.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.maphilight.min.js"></script>

    <script type="text/javascript">
    $(function() {
    $('.map').maphilight();
    });
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
        <div id="DivRegioes" onclick='trocatitulo();'>
        <img src="nao filtrado1.png" id="imgmap" usemap="#image-map">
        <map name="image-map" id="Map">
            <area alt="" title="" href="#" shape="poly" coords="82,339,69,331,47,332,28,327,17,317,13,293,3,287,8,272,10,256,3,248,13,237,39,234,53,236,65,239,81,234,102,230,115,236,127,235,143,236,151,237,140,257,133,273,121,287,111,293,103,294,99,303,99,315,95,322,85,326" />
            <area alt="" title="" href="#" shape="poly" coords="87,144,85,158,80,164,73,161,75,171,71,176,65,184,65,194,64,201,54,208,51,219,49,229,55,235,67,236,73,234,82,231,90,228,99,227,107,231,113,234,134,234,152,234,154,222,157,207,164,196,174,188,184,182,192,168,199,151,198,134,196,130,189,135,184,130,180,124,171,122,168,119,162,131,165,135,161,139,156,138,152,134,148,129,143,126,134,126,128,128,120,131,115,135,112,140,107,141,103,145,96,147,94,152,89,148" />
            <area alt="" title="" href="#" shape="poly" coords="85,140,80,131,71,124,75,116,68,111,62,107,56,103,65,99,69,104,79,103,86,100,83,92,80,86,75,82,77,67,65,67,64,59,64,52,69,48,69,43,85,36,96,38,98,34,88,24,95,19,103,24,113,16,120,13,127,18,137,15,144,20,155,26,165,31,176,39,185,44,197,53,197,60,195,74,192,92,190,106,192,118,195,128,189,131,183,122,177,120,173,118,168,115,164,121,163,128,161,135,155,132,146,123,138,122,129,124,120,127,112,134,105,140,92,147" />
        </map>
        </div>
        <div id="DivAreas"></div>
        <div id="DivResultados"></div>
    </body>
</html>