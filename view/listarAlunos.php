<?php
require_once '../DAO/SysFunc.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TODOS OS ALUNOS</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
        <script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    //window.location.href = "../../controler/adm/controlerDeletarUsr.php?idUsr="+id;
                    window.location.href = "../controler/deletar.php?idAl=" + id;
                }
            }
        </script>
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
                <table class="exibir">
                    <tr>
                        <?php
                        $ListaAlunos = new SysFunc();
                        $lista = $ListaAlunos->ListarAlunos();
                        //print_r($lista);
                        if (!empty($lista)) {
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
                                echo '<a href="http://localhost/BC_1.1/view/dadosAluno.php?idAl=' . $dados['id'] . '" class="exibir">+informações</a>';
                                echo '<center>';
                                echo '</td>';
                                echo '<td>';
                                echo '<center>';
                                echo '<a href="http://localhost/BC_1.1/view/ocorrenciasALuno.php?idAl=' . $dados['id'] . '" class="exibir">ocorrências</a>';
                                echo '</center>';
                                echo '</td>';
                                echo '<td>';
                                echo '<center>';
                                echo '<a href="http://localhost/BC_1.1/view/NovaOcorrencia.php?idAl=' . $dados['id'] . '" class="exibir">nova Ocorrência</a>';
                                echo '</center>';
                                echo '</td>';
                                echo '<td>';
                                echo '<center>';
                                echo "<a href='javascript:func()' onClick='confirmar(" . $dados['id'] . ");' class='exibir'>Excluir</a>";
                                echo '</center>';
                                echo '</td>';
                                echo '</tr>';
                                
                            }
                        } else {
                            echo 'não há alunos cadastrados no sistema';
                        }
                        ?>
                </table>
        </div>
        <br>
    <?PHP include './parts/footer.php'; ?>
    </center>
    <?php
    if (!empty($_GET['msg'])) {

        if ($_GET['msg'] == 'm2') {
            echo '<script>alert("Dados alterados")</script>';
        }
    }
    ?>
</body>
</html>
