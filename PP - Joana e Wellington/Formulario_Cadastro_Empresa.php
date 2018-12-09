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
        <input style='grid-area:btAdd' type="submit" value="Adicionar" onclick='Adicionar_Servico()'/>
        <input style='grid-area:btRmv'type="submit" value="Remover" onclick='Remover_Servico();' />
        <input id="txtServico" style='grid-area:InputTxt' type="text" value='Insira nome do novo serviço'/>
</div>
