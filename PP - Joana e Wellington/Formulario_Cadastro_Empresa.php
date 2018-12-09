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
<option>CONCEICAO DA BARRA</option>
<option>PEDRO CANARIO</option>
<option>MONTANHA</option>
<option>MUCURICI</option>
<option>ECOPORANGA</option>
<option>PONTO BELO</option>
<option>PINHEIROS</option>
<option>AGUA DOCE DO NORTE</option>
<option>BARRA DE SAO FRANCISCO</option>
<option>MANTENOPOLIS</option>
<option>VILA PAVAO</option>
<option>AGUIA BRANCA</option>
<option>NOVA VENECIA</option>
<option>JAGUARE</option>
<option>SAO MATEUS</option>
<option>BOA ESPERANCA</option>
<option>LINHARES</option>
<option>SOORETAMA</option>
<option>VILA VALERIO</option>
<option>SAO GABRIEL DA PALHA</option>
<option>ALTO RIO NOVO</option>
<option>PANCAS</option>
<option>SAO DOMINGOS DO NORTE</option>
<option>GOVERNADOR LINDENBERG</option>
<option>RIO BANANAL</option>
<option>MARILANDIA</option>
<option>COLATINA</option>
<option>BAIXO GUANDU</option>
<option>JOAO NEIVA</option>
<option>IBIRACU</option>
<option>SAO ROQUE DO CANAA</option>
<option>ARACRUZ</option>
<option>LARANJA DA TERRA</option>
<option>AFONSO CLAUDIO</option>
<option>BREJETUBA</option>
<option>CONCEICAO DO CASTELO</option>
<option>VENDA NOVA DO IMIGRANTE</option>
<option>DOMINGOS MARTINS</option>
<option>MARECHAL FLORIANO</option>
<option>SANTA MARIA DE JETIBA</option>
<option>ITARANA</option>
<option>ITAGUACU</option>
<option>SANTA TERESA</option>
<option>FUNDAO</option>
<option>SERRA</option>
<option>VITORIA</option>
<option>CARIACICA</option>
<option>VIANA</option>
<option>VILA VELHA</option>
<option>GUARAPARI</option>
<option>SANTA LEOPOLDINA</option>
<option>IBATIBA</option>
<option>IRUPI</option>
<option>IUNA</option>
<option>MUNIZ FREIRE</option>
<option>IBITIRAMA</option>
<option>DIVINO DE SAO LOURENCO</option>
<option>DORES DO RIO PRETO</option>
<option>GUACUI</option>
<option>ALEGRE</option>
<option>SAO JOSE DO CALCADO</option>
<option>BOM JESUS DO NORTE</option>
<option>MIMOSO DO SUL</option>
<option>MUQUI</option>
<option>JERONIMO MONTEIRO</option>
<option>PRESIDENTE KENNEDY</option>
<option>ATILIO VIVACQUA</option>
<option>MARATAIZES</option>
<option>ITAPEMIRIM</option>
<option>RIO NOVO DO SUL</option>
<option>CACHOEIRO DE ITAPEMIRIM</option>
<option>CASTELO</option>
<option>VARGEM ALTA</option>
<option>ICONHA</option>
<option>PIUMA</option>
<option>ANCHIETA</option>
<option>ALFREDO CHAVES</option>
<option>APIACA</option>
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
