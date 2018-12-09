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
value = document.getElementById("txtServico").value
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