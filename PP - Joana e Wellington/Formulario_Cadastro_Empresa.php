<!doctype Html>

<?php include_once 'Funcoes_php/dbh.php';?>

<div id=form2>
<table style='grid-area:tabela' border="1">
    <tr>
        <?php foreach ($coluna_nome as $nome_de_coluna)
                    {
                        echo"<th>".$nome_de_coluna."</th>";
                    }
        ?>
    </tr>
    
    <?php foreach ($datas as $vetor_linha)
            {
                echo '<tr>';
                foreach ($vetor_linha as $elemento)
                {
                    echo '<td>'.$elemento.'</td>';
                }
                echo '</tr>';
            }
            ?>
</table>
        <input id = "add_empresa" style='grid-area:btAdd' type="submit" value="Adicionar" onclick='Adicionar_Empresa();'/>
        <input id = "rmv_empresa" style='grid-area:btRmv'type="submit" value="Remover" onclick='Remover_Empresa();' />
        <input id="txtnome" style='grid-area:nometxt' type="text" value=""/>
        <input id="txttelefone" style='grid-area:telefonetxt' type="text" value=""/>
        <input id="txtemail" style='grid-area:emailtxt' type="text" value=""/>
        <input id="txtremove" style='grid-area:Rmvtxt' value="ID"/>
        <select id="txtregiao" style='grid-area:regiaotxt' name="Cidades"> 
        <option>AFONSO CLAUDIO</option>
<option>AGUA DOCE DO NORTE</option>
<option>AGUIA BRANCA</option>
<option>ALEGRE</option>
<option>ALFREDO CHAVES</option>
<option>ALTO RIO NOVO</option>
<option>ANCHIETA</option>
<option>APIACA</option>
<option>ARACRUZ</option>
<option>ATILIO VIVACQUA</option>
<option>BAIXO GUANDU</option>
<option>BARRA DE SAO FRANCISCO</option>
<option>BOA ESPERANCA</option>
<option>BOM JESUS DO NORTE</option>
<option>BREJETUBA</option>
<option>CACHOEIRO DE ITAPEMIRIM</option>
<option>CARIACICA</option>
<option>CASTELO</option>
<option>COLATINA</option>
<option>CONCEICAO DA BARRA</option>
<option>CONCEICAO DO CASTELO</option>
<option>DIVINO DE SAO LOURENCO</option>
<option>DOMINGOS MARTINS</option>
<option>DORES DO RIO PRETO</option>
<option>ECOPORANGA</option>
<option>FUNDAO</option>
<option>GOVERNADOR LINDENBERG</option>
<option>GUACUI</option>
<option>GUARAPARI</option>
<option>IBATIBA</option>
<option>IBIRACU</option>
<option>IBITIRAMA</option>
<option>ICONHA</option>
<option>IRUPI</option>
<option>ITAGUACU</option>
<option>ITAPEMIRIM</option>
<option>ITARANA</option>
<option>IUNA</option>
<option>JAGUARE</option>
<option>JERONIMO MONTEIRO</option>
<option>JOAO NEIVA</option>
<option>LARANJA DA TERRA</option>
<option>LINHARES</option>
<option>MANTENOPOLIS</option>
<option>MARATAIZES</option>
<option>MARECHAL FLORIANO</option>
<option>MARILANDIA</option>
<option>MIMOSO DO SUL</option>
<option>MONTANHA</option>
<option>MUCURICI</option>
<option>MUNIZ FREIRE</option>
<option>MUQUI</option>
<option>NOVA VENECIA</option>
<option>PANCAS</option>
<option>PEDRO CANARIO</option>
<option>PINHEIROS</option>
<option>PIUMA</option>
<option>PONTO BELO</option>
<option>PRESIDENTE KENNEDY</option>
<option>RIO BANANAL</option>
<option>RIO NOVO DO SUL</option>
<option>SANTA LEOPOLDINA</option>
<option>SANTA MARIA DE JETIBA</option>
<option>SANTA TERESA</option>
<option>SAO DOMINGOS DO NORTE</option>
<option>SAO GABRIEL DA PALHA</option>
<option>SAO JOSE DO CALCADO</option>
<option>SAO MATEUS</option>
<option>SAO ROQUE DO CANAA</option>
<option>SERRA</option>
<option>SOORETAMA</option>
<option>VARGEM ALTA</option>
<option>VENDA NOVA DO IMIGRANTE</option>
<option>VIANA</option>
<option>VILA PAVAO</option>
<option>VILA VALERIO</option>
<option>VILA VELHA</option>
<option>VITORIA</option>
</select>
    <p style = 'grid-area:nomelbl'> Nome da empresa </p>
    <p style = 'grid-area:telefonelbl'> Telefone de Contato </p>
    <p style = 'grid-area: emaillbl'> Email de Contato </p>
    <p style = 'grid-area: regiaolbl'> Cidade </p>
    
 <div id = "divchb" style = 'grid-area:chb'> 
     <?php 
                    $i=0;
                    foreach ($coluna_nome as $nome_de_coluna)
                    {
                        if ($i>=5)
                        {echo"<p class = 'chb' onclick='marcar_chb(".$i.")'> <input id='chbcoluna".$i."' class='chbbox' type = 'checkbox'>".$nome_de_coluna."</p>";}
                        $i++;
                    }
                    ?>
     
</div> 

</div>
