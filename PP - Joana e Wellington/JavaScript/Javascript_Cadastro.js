function Mostrar_Form_Cadastro_Area()
{
    var xmlhttp = new XMLHttpRequest();                 //CODIGO AUXILIAR AJAX
xmlhttp.onreadystatechange = function()              //CODIGO AUXILIAR AJAX
{       
    if (this.readyState == 4 && this.status == 200)      //CODIGO AUXILIAR AJAX
    {
        document.getElementById("DivFormulario").innerHTML = this.responseText; //ATUALIZANDO DIV DE RESULTADOS
        //document.getElementById("NavTitulo").innerHTML = boolAreas // TESTE DEBUG
    }
};
xmlhttp.open("GET", "Formulario_Cadastro_Area.php", true);
xmlhttp.send();
}
function Mostrar_Form_Cadastro_Empresa()
{
    var xmlhttp = new XMLHttpRequest();                 //CODIGO AUXILIAR AJAX
xmlhttp.onreadystatechange = function()              //CODIGO AUXILIAR AJAX
{       
    if (this.readyState == 4 && this.status == 200)      //CODIGO AUXILIAR AJAX
    {
        document.getElementById("DivFormulario").innerHTML = this.responseText; //ATUALIZANDO DIV DE RESULTADOS
        //document.getElementById("NavTitulo").innerHTML = boolAreas // TESTE DEBUG
    }
};
xmlhttp.open("GET", "Formulario_Cadastro_Empresa.php", true);
xmlhttp.send();
}


function Adicionar_Servico()
{
value = document.getElementById("txtServico").value;
var xmlhttp = new XMLHttpRequest();                 //CODIGO AUXILIAR AJAX
xmlhttp.onreadystatechange = function()              //CODIGO AUXILIAR AJAX
{       
    if (this.readyState == 4 && this.status == 200)      //CODIGO AUXILIAR AJAX
    {
        document.getElementById("DivFormulario").innerHTML = this.responseText; //ATUALIZANDO DIV DE RESULTADOS
        //document.getElementById("NavTitulo").innerHTML = boolAreas // TESTE DEBUG
    }
};
xmlhttp.open("GET", "Funcoes_php/Adicionar_Servico.php?q="+value, true);
xmlhttp.send();
}

function Remover_Servico()
{
var listbox_value = document.getElementById('listbox').value;
var xmlhttp = new XMLHttpRequest();                 //CODIGO AUXILIAR AJAX
xmlhttp.onreadystatechange = function()              //CODIGO AUXILIAR AJAX
{       
    if (this.readyState == 4 && this.status == 200)      //CODIGO AUXILIAR AJAX
    {
        document.getElementById("DivFormulario").innerHTML = this.responseText; //ATUALIZANDO DIV DE RESULTADOS
        //document.getElementById("NavTitulo").innerHTML = boolAreas // TESTE DEBUG
    }
};
xmlhttp.open("GET", "Funcoes_php/Remover_Servico.php?q="+listbox_value, true);
xmlhttp.send();
}
function marcar_chb(i)
{
    marcado = document.getElementById('chbcoluna'+i).checked ;
    if (marcado==true)
    {
        document.getElementById('chbcoluna'+i).checked = false;
    }
    else
    {
        document.getElementById('chbcoluna'+i).checked = true;
    }

}
function Adicionar_Empresa()
{
    var iduvidoso = document.getElementById('txtremove').value;
    if (isNaN(iduvidoso))
    {
        id = "NULL";
    }
    else
    {
        id = iduvidoso;
    }
    var nome = document.getElementById('txtnome').value;
    var telefone = document.getElementById('txttelefone').value;
    var email = document.getElementById('txtemail').value;
    var regiao = document.getElementById('txtregiao').value;
    var i=0;
    var stringSQL="VALUES ("+id+",'"+nome+"','"+telefone+"','"+email+"','"+regiao+"'";
    abbrs = document.getElementsByClassName("chbbox");
    lenabrs = abbrs.length;

    for( i=0; i < lenabrs ; i++)
    {
        if (abbrs[i].checked==true)
        {
            stringSQL=stringSQL+",'1'";
        }
        else
        {
            stringSQL=stringSQL+",'0'";
        }
    }
    stringSQL+=')';
    
    var xmlhttp = new XMLHttpRequest();                 //CODIGO AUXILIAR AJAX
    xmlhttp.onreadystatechange = function()              //CODIGO AUXILIAR AJAX
    {       
        if (this.readyState == 4 && this.status == 200)      //CODIGO AUXILIAR AJAX
        {
            document.getElementById("DivFormulario").innerHTML = this.responseText; //ATUALIZANDO DIV DE RESULTADOS
            //document.getElementById("NavTitulo").innerHTML = boolAreas // TESTE DEBUG
        }
    };
xmlhttp.open("GET", "Funcoes_php/Adicionar_Empresa.php?q="+stringSQL, true);
xmlhttp.send();

}
function Remover_Empresa()
{
    
    var id = document.getElementById('txtremove').value;
    if (isNaN(id))
    {}
    else
    {
        var xmlhttp = new XMLHttpRequest();                 //CODIGO AUXILIAR AJAX
        xmlhttp.onreadystatechange = function()              //CODIGO AUXILIAR AJAX
        {       
            if (this.readyState == 4 && this.status == 200)      //CODIGO AUXILIAR AJAX
            {
                document.getElementById("DivFormulario").innerHTML = this.responseText; //ATUALIZANDO DIV DE RESULTADOS
                //document.getElementById("NavTitulo").innerHTML = boolAreas // TESTE DEBUG
            }
        };
        xmlhttp.open("GET", "Funcoes_php/Remover_Empresa.php?q="+id, true);
        xmlhttp.send();
    }
}
