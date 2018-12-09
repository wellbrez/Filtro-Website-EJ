<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Css/Estilo_Cadastro.css">
    <script src="JavaScript/jquery-3.3.1.min.js"></script>
    <script src="JavaScript/Javascript_Cadastro.js"></script>
    <script>
    windows.onload=Mostrar_Form_Cadastro_Area;
    </script>
        <title>Página Cadastro</title>
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
        <div id="DivTitulo">
        <div id="linhapequena"></div><h1>Cadastro de EJ/Serviços</h1><div id="linhagrande"></div>
</div>
            <p id="BotaoEmpresas"style="grid-area:botao_empresas" onclick="Mostrar_Form_Cadastro_Empresa();"><b>Cadastrar Empresas</b></p>
            <p id="BotaoServicos"style="grid-area:botao_serviços" onclick="Mostrar_Form_Cadastro_Area()"><b>Cadastrar Serviços</b></p>

        <div id="DivFormulario"></div>
    </body>
</html>