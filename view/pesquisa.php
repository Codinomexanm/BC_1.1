<?php require_once '../DAO/SysFunc.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PESQUISA</title>

        <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    </head>
    <body>
    <center>
        <div class="conteudo">
            <?PHP include './parts/header.php'; ?>
            <?php
            if ($_SESSION['USR'] == 'ADM') {
                include './parts/adm/menu.php';
            } else if ($_SESSION['USR'] == 'PROF') {
                include './parts/professor/menu.php';
            }
            ?>
            <?php
            if (!empty($_POST['pesquisa']) && !empty($_POST['serie'])) {
                $pesquisa = $_POST['pesquisa'];
                $serie = $_POST['serie'];
                $pesquisaAluno = new SysFunc();
                $resutados = $pesquisaAluno->PesquisarAlunos($pesquisa, $serie);
                if (!empty($resutados)) {

                    echo '
                    <br><br>
            <table>
                <tr>';
                    foreach ($resutados as $dados) {

                        echo '<td>';
                                echo '<center>';
                        echo $dados['nome'];
                        
                                echo '</center>';
                        echo '</td>';

                        echo '<td>';
                        
                                echo '<center>';
                        echo '<a href="http://localhost/BC_1.1/view/dadosAluno.php?idAl=' . $dados['id'] . '" class="exibir">+informações</a>';
                        
                                echo '</center>';
                        echo '</td>';
                  
                                echo '<td>';
                                echo '<center>';
                                echo '<a href="http://localhost/BC_1.1/view/ocorrenciasALuno.php?idAl=' . $dados['id'] . '" class="exibir">ocorrências</a>';
                                echo '</center>';
                                echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<br><br><center>Não foram encontrados resultados para sua busca</center>';
                }
            } else {
                echo '<br><br><center>Não foram encontrados resultados para sua busca</center>';
            }
            ?>

            </table>
            </div>
        <br>
<?PHP include './parts/footer.php'; ?>
    </center>

</center>
</body>
</html>
