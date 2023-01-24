<?php
require_once '../DAO/ocorrencia.php';
require_once '../DAO/SysFunc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NOVA OCORRÊNCIA</title>

        <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
        <script type="text/javascript" src="../JS/tinymce/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({selector: 'textarea'});
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
                <?php
                if (empty($_GET['idAl'])) {

                    echo"<script>window.location='http://localhost/BC_1.1/view/listarAlunos.php'</script>";
                } else {
                    $idAluno = $_GET['idAl'];
                    $nomeAluno=new SysFunc();
                    $nome=$nomeAluno->visualizarAlunos($idAluno);
                    foreach ($nome as $dados){
                        $nomeAl=$dados['nome'];
                    }
                }
                ?>
                <form method="post" name="ocorrencias" action="../controler/novaOcorrencia.php?idAl=<?php echo $idAluno ?>">
                    <table>
                        <thead>Nova  Ocorrência</thead>
                        <tr>
                            <td>
                        <center>
                            Aluno:
                        </center>
                        </td>
                        <td>
                        <center>
<?php echo $nomeAl;?>
                        </center>

                        </td>
                        </tr>
                        <tr>
                            <td>
                        <center>
                            Data: 
                        </center>
                        </td>
                        <td>
                        <center>
<?php echo date('d-m-Y') ?>
                        </center>
                        </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                        <center>
                            <textarea  name="conteudo" rows="20"></textarea>
                        </center
                        </td>
                        </tr>
                        <tr>
                            <td colspan="2"> 
                        <center>
                            <br>
                            <input type="submit" value="Inserir" class="enviar">
                        </center>
                        </td>
                        </tr>
                    </table>
                </form>
        </div>
        <br>
<?PHP include './parts/footer.php'; ?>
    </center>
        <?php
        if (!empty($_GET['msg'])) {

            if ($_GET['msg'] == 'm1') {
                echo '<script>alert("Ocorência inserida")</script>';
            }
        }
        ?>
</body>
</html>
