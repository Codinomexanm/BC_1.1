<?php
require_once '../DAO/ocorrencia.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OCORRÊNCIAS</title>
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
            <center>
                <br><br>
                <table>
                    <?php
                        if (!empty($_GET['idAl'])) {
                            $idAluno = $_GET['idAl'];
                            $listarOcorrencia = new ocorrencia();
                            $lista = $listarOcorrencia->ocorrenciasAluno($idAluno);
                            //print_r($lista);
                            if (!empty($lista)) {
                                echo"<th>Nome</th>
                    <th>Turma</th>
                    <th>Data</th>
                    <th>Ocorrência</th>
                    <tr>";
                                foreach ($lista as $dados) {
                                    echo '<td>';
                                    echo '<center>';
                                    echo $dados['nome'];
                                    echo '</center>';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '<center>';
                                    echo ($dados['serie'] == '1') ? 'PRIMEIRO ANO' : '';
                                    echo ($dados['serie'] == '2') ? 'SEGUNDO ANO' : '';
                                    echo ($dados['serie'] == '3') ? 'TERCEIRO ANO' : '';
                                    echo ($dados['serie'] == '4') ? 'QUARTO ANO' : '';
                                    echo ($dados['serie'] == '5') ? 'QUINTO ANO' : '';
                                    echo '</center>';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '<center>';
                                    echo $dados['data'];
                                    echo '</center>';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '<center>';
                                    echo '<a href="http://localhost/BC_1.1/view/lerOcorrencia.php?idOcor=' . $dados['id'] . '" class="exibir">ler ocorrẽncia</a>';
                                    echo '</center>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<center>';
                                echo 'Não há ocorrência para este aluno';
                                echo '<br><br>';
								echo '<center>';
                                echo '<a href="http://localhost/BC_1.1/view/NovaOcorrencia.php?idAl=' .$idAluno . '" class="exibir">nova Ocorrência</a>';
                                echo '</center>';
								echo '<br><br>';
                                echo "<a href='javascript:history.back(1)' class='exibir'>voltar</a>";
                                echo '</center>';
                            }
                        }
                        ?>
                </table>
        </div>
        <br>
        <?PHP include './parts/footer.php'; ?>
    </center>
</body>
</html>
