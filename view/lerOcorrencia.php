<?php
require_once '../DAO/ocorrencia.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LER OCORRÊNCIAS</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
        <script>
	    function confirmar(id){
	      var resposta= confirm("deseja mesmo excluir?");
	    if (resposta == true){
		//window.location.href = "../../controler/adm/controlerDeletarUsr.php?idUsr="+id;
                window.location.href = "../controler/deletarOcorrencia.php?idOcor="+id;
	    }
	    }
	</script>
		<script>
		function printDiv(imprimir)
{
var conteudo = document.getElementById('imprimir').innerHTML;
tela_impressao = window.open('about:blank');
tela_impressao.document.write(conteudo);
tela_impressao.window.print();
tela_impressao.window.close()
} 
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
		<div id='imprimir'>
				<center>
        <?php 
        if(empty($_GET['idOcor'])){
            
           //echo"<script>window.location='http://localhost/BC_1.1/view/listarAlunos.php'</script>";
        }
 else {
     $idOcor=$_GET['idOcor'];
     $Ocorrencia=new ocorrencia();
     $lerOcor=$Ocorrencia->lerOcorrencia($idOcor);
     //print_r($lerOcor);
     foreach ($lerOcor as $dados) {
         
     }
 }
        ?><table border="1">
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
                   <?php echo $dados['conteudo'];?>
                </center>
                    </td>
                </tr>
                <tr>
                </tr>
            </table>
			</center>
		</div>
        <?php
        echo "<a href='javascript:history.back(1)'>voltar</a>";
        echo '||';
        echo "<a href='javascript:func()' onClick='confirmar(".$dados['id'].");'>Excluir</a>";
        echo '||';
        echo '<a href="http://localhost/BC_1.1/view/editarOcorrrencia.php?idOcor=' . $dados['id'] . '">Editar</a>';?>
        ||<a href='javascript:func()' onClick="printDiv('imprimir')">imprimir</a>
		
		</div>
        <br>
        <?PHP include './parts/footer.php';?>
    </center>
            <?php
            if(!empty($_GET['msg'])){
                
                if($_GET['msg']=='m1'){
                    echo '<script>alert("Ocorência inserida")</script>';
                }
                
                else if($_GET['msg']=='m2'){
                    echo '<script>alert("Ocorência deletada")</script>';
                }
                
            }
            ?>
			
    </body>
</html>
