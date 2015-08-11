<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="../../public/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../public/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <link href="../../public/css/style.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../../public/js/bootstrap.js"></script>


    <title>dados de refeicoes</title>
</head>
<body>
<div class="container">

    <div class="row">

        <div class="span10 head">
            <h1 ALIGN="CENTER">TIPO DE REFEICOES</h1>

        </div>

    </div>

    <div class="row">

        <div class="span10 corpo">
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
            $registros = 0;
            while($list->hasNextTipo()){
                $tipo = $list->getNextTipo();
                $registros++;
            }
            $registros = 1;
            if($registros>0) {
                ?>

                        <table class="table table-bordered">
                            <caption>painel de controle</caption>
                            <thead>
                            <tr bgcolor="#abaf9b">
                                <th>C&Oacute;DIGO</th>
                                <th >DESCRI&Ccedil;&Atilde;O</th>
                                <th ALIGN="CENTER">ALTERAR</th>
                                <th ALIGN="CENTER">EXCLUIR</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            while ($list->hasNextTipo()) {
                                $i++;
                                if ($i % 2 == 0) {
                                    $par = "#cdd4aa";
                                } else {
                                    $par = "#fff";
                                }
                                $tipo = $list->getNextTipo();
                                echo "<tr bgcolor=$par>";
                                echo "<td>" . $tipo->getId() . "</td>";
                                echo "<td>" . $tipo->getDescricao() . "</td>";
                                echo "<td align=center><a href=AcaoPesquisa.php?acao='A'&code=" . $pesquisa->getCd_Pesquisa() . " title='Alterar Pesquisa' rel='facebox' > <img src=../../public/img/alterar.png width=20 height=20></a></td>";
                                echo "<td align=center><a href=# onClick=redirecionar(" . $pesquisa->getCd_Pesquisa() . ") title='Deletar Pesquisa'> <img src=../../public/img/delete.png width=20 height=20></a></td>";
                                echo "</tr>";

                            }
                            ?>
                            </tbody>

                        </table>


                <?php
            }else{
                echo "N&atilde;o existem dados a serem mostrados";
            }

            ?>

        </div>

    </div>





</div>

</body>
</html>