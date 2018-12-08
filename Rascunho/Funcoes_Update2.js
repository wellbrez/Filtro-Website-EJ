var regiaonome = ['norte','central','metropolitana','sul'];
function Update_Resultados_Regiao(regiao)
{
    if (boolRegioes[regiao-1]==0)
    {
        document.getElementById("DivRegioes").innerHTML = document.getElementById("DivRegioes").innerHTML+"<img style='z-index:1' class='imgmap' id='regiao"+regiao+"' src='"+regiaonome[regiao-1]+".png' usemap='#image-map'>";
        boolRegioes[regiao-1]=1;
    }
    else
    {
        document.getElementById("regiao"+regiao+"").remove();
        boolRegioes[regiao-1]=0;
    }
    Update_Resultados();
}
function Update_Resultados()
{
    var xmlhttp = new XMLHttpRequest();                 //CODIGO AUXILIAR AJAX
    xmlhttp.onreadystatechange = function()              //CODIGO AUXILIAR AJAX
    {       
        if (this.readyState == 4 && this.status == 200)      //CODIGO AUXILIAR AJAX
        {
            document.getElementById("DivResultados").innerHTML = this.responseText; //ATUALIZANDO DIV DE RESULTADOS
            //document.getElementById("NavTitulo").innerHTML = boolAreas // TESTE DEBUG
        }
    };
    xmlhttp.open("GET", "Filtrar_e_mostrar_Rslt.php?q=" + boolAreas.toString()+"-"+ //CHAMANDO CODIGO PHP
    boolRegioes.toString(), true);
    xmlhttp.send();
}
function Update_Resultados_Area(narea) 
        {
        if (narea !=0) 
            {
                boolAreas[narea-1]=(boolAreas[narea-1]+1)%2; //UPDATE DA VARIAVEL DE (ATIVO OU INATIVO, DO BOTAO DE FILTRO)
            }
        Update_Resultados();
        }

function Update_Areas()
        {
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("DivAreas").innerHTML = this.responseText;
                //document.getElementById("NavTitulo").innerHTML = boolAreas;
            }
        };
        xmlhttp.open("GET", "Mostrar_Areas.php", true);
        xmlhttp.send();
        Update_Resultados_Area(0);
        }