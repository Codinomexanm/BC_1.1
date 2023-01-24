<?php
require_once '../DAO/ocorrencia.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EDITAR OCORRẼNCIA</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
        <script type="text/javascript" src="../JS/tinymce/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({selector: 'textarea'});
        </script>
    </head>
    <body>
    <center>
        <div class="conteudo">
        <?PHP include './parts/header.php';?>
            <?php
            if($_SESSION['USR']=='ADM'){
              include './parts/adm/menu.php';  
            }
            else if($_SESSION['USR']=='PROF'){
                include './parts/professor/menu.php';
            }
            ?>
    <center>
        <br><br>
        <?php 
        if(empty($_GET['idOcor'])){
            
           //echo"<script>window.location='http://localhost/BC_1.1/view/listarAlunos.php'</script>";
        }
 else {
     $idOcor=$_GET['idOcor'];
     $Ocorrencia=new ocorrencia();
     $lerOcor=$Ocorrencia->editarOcorrencia($idOcor);
     //print_r($lerOcor);
     foreach ($lerOcor as $dados) {
         
     }
 }
        ?>
        <form name="editarOcorrencia" method="post" action="../controler/editarOcorrencia.php?idOcor=<?php echo $idOcor?>">
        <table border="1">
                <thead>Ocorrência</thead>
                <tr>
                    <td>
                <center>
                        Aluno:
                </center>
                    </td>
                    <td>
                    <center>
                        <?php echo $dados['nome'];?>
                    </center>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                <center>
                        Data da ocorrência: 
                </center>
                    </td>
                    <td>
                    <center>
                        <?php echo $dados['data'];?>
            </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                <center>
                    <textarea  name="conteudo" rows="20"><?php echo $dados['conteudo'];?></textarea>
                </center
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                <center>
                        <input type="submit" value="Editar">
                </center>
                        </td>
                </tr>
            </table>
        </form>
        <?php
        echo "<a href='javascript:history.back(1)'>voltar</a>";
        echo '||';
        echo "<a href='javascript:func()' onClick='confirmar(".$dados['id'].");'>Excluir</a>";
        ?>
        </div>
        <br>
        <?PHP include './parts/footer.php';?>
    </center>
    </body>
</html>
