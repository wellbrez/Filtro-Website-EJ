<!doctype Html>

<?php include_once 'Funcoes_php/dbh.php';?>

<div id=form>
        <select id="listbox" style='grid-area:listbox'multiple name="Servicos">
                    <?php 
                    $i=0;
                    foreach ($coluna_nome as $nome_de_coluna)
                    {
                        if ($i>=5)
                        {echo"<option value='".$nome_de_coluna."'>".$nome_de_coluna."</option>";}
                        $i++;
                    }
                    ?>
        </select>
        <input style='grid-area:btAdd' type="submit" value="Adicionar" onclick='Adicionar_Servico()'/>
        <input style='grid-area:btRmv'type="submit" value="Remover" onclick='Remover_Servico();' />
        <input id="txtServico" style='grid-area:InputTxt' type="text" value='Insira nome do novo serviço'/>
</div>
