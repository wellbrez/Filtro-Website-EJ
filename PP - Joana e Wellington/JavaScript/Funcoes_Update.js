function Notab(){
var i=0;
  abbrs = document.getElementsByClassName("notab");
  tamanho = abbrs.length;
for( i = 0; i < tamanho ; i++){
    abbrs[i].tabIndex = -1;
}
}
var regiaonome = ['norte','central','metropolitana','sul'];
function Limpar_Filtros()
{
    for (var j=1;j<=boolRegioes.length;j++)
    {
        if (boolRegioes[j-1]==1)
        {
            boolRegioes[j-1]=0;
            document.getElementById("regiao"+j).remove();
        }
    }

    for (var i=1;i<=boolAreas.length;i++)
    {
        if (boolAreas[i-1]==1)
        {
            boolAreas[i-1]=0;
            document.getElementById("area"+i).style.border="";
        }
    }
    Update_Resultados();
}
function Update_Resultados_Regiao(regiao)
{
    if (boolRegioes[regiao-1]==0)
    {
        document.getElementById("DivRegioes").innerHTML = document.getElementById("DivRegioes").innerHTML+"<img  class='imgmap' id='regiao"+regiao+"' src='Imagens/"+regiaonome[regiao-1]+".png' usemap='#image-map'>";
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
    xmlhttp.open("GET", "Funcoes_php/Filtrar_e_mostrar_Rslt.php?q=" + boolAreas.toString()+"-"+ //CHAMANDO CODIGO PHP
    boolRegioes.toString(), true);
    xmlhttp.send();
    //Notab();
}
function Update_Resultados_Area(narea) 
        {
        if (narea !=0) 
            {
                boolAreas[narea-1]=(boolAreas[narea-1]+1)%2; //UPDATE DA VARIAVEL DE (ATIVO OU INATIVO, DO BOTAO DE FILTRO)
                if (boolAreas[narea-1]==1)
                {document.getElementById('area'+narea).style.border=".05em solid #FF1493";}
                else
                {document.getElementById('area'+narea).style.border="";}
            }
        Update_Resultados();
        Notab();
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
        xmlhttp.open("GET", "Funcoes_php/Mostrar_Areas.php", true);
        xmlhttp.send();
        Update_Resultados_Area(0);
        }