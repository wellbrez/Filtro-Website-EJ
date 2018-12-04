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