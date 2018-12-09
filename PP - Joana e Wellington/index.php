
<?php include_once 'Funcoes_php/dbh.php';?>
<!Doctype html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/Estilo.css">
    <script src="JavaScript/jquery-3.3.1.min.js"></script>
    <script src="JavaScript/Funcoes_Update.js"></script>
    <script type="text/javascript">
    <?php 
    $boolAreasConteudo = '0';
    for ($i=1;$i<$num_areas;$i++){$boolAreasConteudo.= ',0';}
    ?> 

    var boolAreas = [<?php echo $boolAreasConteudo;?>];
    var boolRegioes = [0,0,0,0];
    window.onload = function(){
        Update_Areas();
        Notab();
    }
    </script>
    
    
        <title>Contrate uma EJ</title>
    </head>
    <body>
    
        <nav id="NavTitulo">
            <ul>
            <img src = "Imagens/juniores.png" alt = "logo juniores">
                <li> <a href = "#">Contrate uma EJ </a></li>
                <li> <a href = "#"> Contato</a></li>
                <li> <a href = "#"> Blog </a></li>
                <li> <a href = "Cadastro.php"> Crie sua EJ</a> </li>
                <li> <a href = "#"> Nossos Produtos </a></li>
                <li> <a href = "index.php"> Home</a></li>
            </ul>
        </nav>
        <p id = "limpar" onClick = "Limpar_Filtros()"> 
            X Limpar Filtros
        </p>
        <p id = "resultado">
            Resultados:
        </p>
        <div id="DivTitulo">
        <div id="linhapequena"></div><h1>Contrate uma EJ</h1><div id="linhagrande"></div>
        </div>
        <div id="DivRegioes" >
        <p>+REGIÕES</p>
        <img src="Imagens/espirito santo.png" class="imgmap" style="z-index:0" usemap="#image-map">
        <map name="image-map" id='Map'>
            <area onclick="Update_Resultados_Regiao(1)" alt="Norte" title="Norte" coords="69,117,89,117,91,124,98,122,104,132,115,127,107,118,118,110,133,108,142,107,152,117,168,120,175,126,186,134,192,129,189,110,189,91,190,75,196,58,145,25,137,21,122,20,115,17,108,27,99,27,92,22,85,27,95,35,96,43,85,39,78,43,66,46,67,52,61,57,61,67,76,69,73,86,82,92,83,104,77,107,69,106,63,103,56,104,56,112,64,112" shape="poly">
            <area onclick="Update_Resultados_Regiao(2)" alt="Central" title="Central" coords="79,196,64,193,64,182,74,175,74,166,82,167,81,160,84,140,79,131,71,123,73,117,89,116,92,123,99,121,104,130,115,127,107,119,118,111,143,107,152,118,169,121,187,134,193,129,195,150,184,181,169,190,162,201,154,216,141,210,135,205,128,203,120,198,119,190,106,193,97,199,100,180,93,178,91,175,92,178,83,179,84,188" shape="poly">
            <area onclick="Update_Resultados_Regiao(3)" alt="Metropolitana" title="Metropolitana" coords="152,216,151,227,145,242,138,257,128,276,117,287,110,267,108,263,106,256,101,261,97,263,94,261,97,263,80,255,75,262,69,255,60,258,51,264,51,253,46,245,52,241,45,234,41,238,45,227,49,209,59,207,63,193,79,197,85,188,83,179,92,178,99,180,96,200,105,194,118,190,119,198,134,205" shape="poly">
            <area onclick="Update_Resultados_Regiao(4)" alt="Sul" title="Sul" coords="81,338,74,332,63,335,54,332,46,329,39,331,30,327,22,324,13,321,15,302,12,293,4,291,2,281,1,275,6,266,6,256,1,249,12,235,42,234,40,239,45,235,52,240,45,245,51,252,51,263,69,256,76,263,81,256,97,264,106,257,117,288,112,292,102,294,94,308,95,319" shape="poly">
        </map>
        </div>
        <div id="DivAreas"></div>
        <div id="DivResultados"></div>
    </body>
</html>