
<!Doctype html>
<html>
    <head>
    <script src="jquery-3.3.1.min.js"></script>
    <script>
    var boolAreas = [0,0,0,0,0,0,0];
    var boolRegioes = [0,0,0,0,0,0,0];
    function Update_Resultados() 
        {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("DivResultados").innerHTML = this.responseText;
                document.getElementById("NavTitulo").innerHTML = boolAreas;
            }
        };
        xmlhttp.open("GET", "Filtrar_e_mostrar_Rslt.php?q=" + boolAreas.toString()+"-"+
        boolRegioes.toString(), true);
        xmlhttp.send();
        }

    function Update_Areas()
        {
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("DivAreas").innerHTML = this.responseText;
                document.getElementById("NavTitulo").innerHTML = boolAreas;
            }
        };
        xmlhttp.open("GET", "Mostrar_Areas.php?q=1", true);
        xmlhttp.send();
        Update_Resultados();
        }
    window.onload = Update_Areas;
    </script>
        <style>
        body{
            display:grid;
            width:100%;
            height:100vh;
            margin: 0;
            grid-template-columns:1fr 3fr;
            grid-template-rows:1fr 2fr 3fr;
            grid-template-areas:
            "titulo titulo"
            "area resultado"
            "regiao resultado";
        }
        #NavTitulo
        {
            grid-area:titulo;
            height:100%;
            width:100%;
            background-color:yellow;
        }

        #DivRegioes
        {
            grid-area:regiao;
            height:100%;
            width:100%;
            background-color:green;
        }
        #DivAreas
        {
            grid-area:area;
            height:100%;
            width:100%;
            
            background-color:blue;
            
            display:grid;
            grid-template-columns:1fr 1fr 1fr;
            grid-template-rows:1fr 1fr 1fr 1fr;
            grid-template-areas:
            "1a 2a 3a"
            "4a 5a 6a"
            "7a 8a 9a"
            "10a 11a 12a";
        }
        #DivResultados
        {
            grid-area:resultado;
            height:100%;
            width:100%;
            background-color:red;
            overflow:hidden;
            display:grid;
            grid-template-columns:1fr 1fr 1fr 1fr 1fr;
            grid-template-rows:1fr 1fr 1fr 1fr 1fr;
            grid-template-areas:
            "1 2 3 4 5"
            "6 7 8 9 10"
            "11 12 13 14 15"
            "16 17 18 19 20"
            "21 22 23 24 25";
        }
        .caixaresultado_pai
                {
                    position:relative;
                  height:100px;
                  width:200px;
                  background-color:rgba(0,255,0,0.5);
                  overflow:hidden;
                  transition:color 0.4s;
                }
        .caixaresultado_filho
          {
              position:absolute;
              top:100px;
              height:100px;
              width:200px;
              background-color:blue;
              opacity:0;
              transition:transform cubic-bezier(0.165, 0.84, 0.44, 1) 0.5s,
              opacity cubic-bezier(0.165, 0.84, 0.44, 1) 0.2s;
          }
          .caixaresultado_filho h2
          {font-size:12pt;}
          div.caixaresultado_pai:hover
        {
            color:transparent;
        }
        div.caixaresultado_pai:hover div.caixaresultado_filho
        {
            opacity:0.8;
            transform:translateY(-100px);
            color:black;
        }
        .botaoarea_filho
        {
            position:relative;
            height:85%;
            width:90%;
            margin:3px auto;
            overflow:hidden;
            background-color:rgba(0,0,0,0);
            text-align:center;
        }
        .botaoarea_pai
        {position:relative;
        display:block;
        height:90%;
        width:90%;
        margin:5% 5% 5% 5%;
        background-color:red;}

        .botaoarea_pai:hover .botaoarea_filho
        {
            
            border-radius:35%;
            border-color:yellow;
            border-style:solid;
            border-width:1px;
        }
        </style>
        <title>Página rascunho</title>
    </head>
    <body>
        <nav id="NavTitulo"></nav>
        <div id="DivRegioes"></div>
        <div id="DivAreas"></div>
        <div id="DivResultados" onclick="Update_Areas();"></div>
    </body>
</html>