<html>
   <head>
       <title> Tipos de Refeição </title>
       <meta charset="utf-8">
   </head>
<body>
        <table>
            <thead>
            <tr bgcolor="#abaf9b">
                <td>C&Oacute;DIGO</td>
                <TD >DESCRI&Ccedil;&Atilde;O</TD>
                <TD ALIGN="CENTER">ALTERAR</TD>
                <TD ALIGN="CENTER">EXCLUIR</TD>

            </tr>
            </thead>
            <tbody>
                            <?php
                            //$_SERVER['DOCUMENT_ROOT'].'rh/application

                            include_once '../controller/Tipo_Controller.class.php';
                            include_once '../services/TipoListIterator.class.php';

                            $tc = new Tipo_Controller();
                            $nome = "";
                            $codigo = 0;
                            $rec = $tc->listarTipo($nome, $codigo);
                            $list = new TipoListIterator($rec);

                            $tipo = new Tipo_Ref();

                            $i = 0;
                            while($list->hasNextTipo()){
                                $i++;
                                if($i % 2 == 0){
                                    $par = "#cdd4aa";
                                }
                                else{
                                    $par = "#fff";
                                }
                                $tipo = $list->getNextTipo();
                                echo "<tr bgcolor=$par>";
                                echo "<td>".$tipo->getId()."</td>";
                                echo "<td>".$tipo->getDescricao()."</td>";
                                echo "<td align=center><a href=AcaoPesquisa.php?acao='A'&code=".$pesquisa->getCd_Pesquisa()." title='Alterar Pesquisa' rel='facebox' > <img src=../../public/img/alterar.png width=20 height=20></a></td>";
                                echo "<td align=center><a href=# onClick=redirecionar(".$pesquisa->getCd_Pesquisa().") title='Deletar Pesquisa'> <img src=../../public/img/delete.png width=20 height=20></a></td>";
                                echo "</tr>";

                            }

                            ?>
            </tbody>

        </table>
</body>
</html>