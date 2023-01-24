<?php
require_once '../DAO/SysFunc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DADOS DO ALUNO</title>

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
            <?PHP include './parts/header.php'; ?>
            <?PHP include './parts/adm/menu.php'; ?>
            <center>
                <BR><BR>
				<div id='imprimir'>
				<center>
                <?php
                if (!empty($_GET['idAl'])) {
                    $idAluno = $_GET['idAl'];
                    $informaoesAluno = new SysFunc();
                    $dados = $informaoesAluno->visualizarAlunos($idAluno);
                    // print_r($dados);
                    foreach ($dados as $informacoes) {
                        
                    }
                } else {
                    echo "<script>
        window.location='http://localhost/BC_1.1/view/listarAlunos.php';
        </script>";
                }
                ?>
                <fieldset>
                    <legend>Informações básicas</legend>

                    Nome do Aluno:<?php echo '<span>' . $informacoes['nome'] . '</span><br>' ?>

                    Série: <?php
                    echo ($informacoes['serie'] == '1') ? 'PRIMEIRO ANO' : '</span>';
                    echo ($informacoes['serie'] == '2') ? 'SEGUNDO ANO' : '</span>';
                    echo ($informacoes['serie'] == '3') ? 'TERCEIRO ANO' : '</span>';
                    echo ($informacoes['serie'] == '4') ? 'QUARTO ANO' : '</span>';
                    echo ($informacoes['serie'] == '5') ? 'QUINTO ANO' : '</span>';
                    echo '<br>';
                    ?>

                    Data de nascimento: 
                    <?php echo (empty($informacoes['dataNasc'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['dataNasc'] . '</span><br>' ?>

                    sexo: 
                    <?php echo (empty($informacoes['sexo'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['sexo'] . '</span><br>' ?>

                    RG: 
                    <?php echo (empty($informacoes['rg'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['rg'] . '</span><br>' ?>

                    Endereço:
                    <?php echo (empty($informacoes['endereco'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['endereco'] . '</span><br>' ?>

                    Bairro: 
                    <?php echo (empty($informacoes['bairro'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['bairro'] . '</span><br>' ?>

                    Cidade:
                    <?php echo (empty($informacoes['cidade'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['cidade'] . '</span><br>' ?>

                    CEP:
                    <?php echo (empty($informacoes['cep'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['cep'] . '</span><br>' ?>

                    UF: 
                    <?php echo (empty($informacoes['uf'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['uf'] . '</span><br>' ?>

                    Telefone:
                    <?php echo (empty($informacoes['telefone'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['telefone'] . '</span><br>' ?>

                </fieldset>

                <fieldset>
                    <legend>Ficha médica</legend>

                    Possui alguma alergia?qual?
                    <?php echo (empty($informacoes['alergia'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['alergia'] . '</span><br>' ?>

                    Possui alguma doença congênita?qual?
                    <?php echo (empty($informacoes['Dcngenita'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['Dcngenita'] . '</span><br>' ?>

                    Doenças ou problemas existentes
                    <?php echo (empty($informacoes['Dexistente'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['Dexistente'] . '</span><br>' ?>

                    Doenças da infância já contraídas 
                    <?php echo (empty($informacoes['DIcont'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['DIcont'] . '</span><br>' ?>

                    O aluno está fazendo algum tratamento médico?qual?
                    <?php echo (empty($informacoes['Tmedico'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['Tmedico'] . '</span><br>' ?>

                    Acompanhamento
                    <?php echo (empty($informacoes['acompanhamento'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['acompanhamento'] . '</span><br>' ?>

                    Outro tipo de acompanhamento?
                    <?php echo (empty($informacoes['OutAcomp'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['OutAcomp'] . '</span><br>' ?>

                    O aluno está tomando alguma medicação específica? qual?
                    <?php echo (empty($informacoes['Mespecifica'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['Mespecifica'] . '</span><br>' ?>

                    Tipo sanguíneo:
                    <?php echo (empty($informacoes['Tsanguineo'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['Tsanguineo'] . '</span><br>' ?>

                </fieldset>

                <fieldset>
                    <legend>Outras informações</legend>

                    Nome do Pai:
                    <?php echo (empty($informacoes['Npai'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['Npai'] . '</span><br>' ?>

                    Telefone principal
                    <?php echo (empty($informacoes['TPrincPai'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['TPrincPai'] . '</span><br>' ?>

                    Telefone secundário
                    <?php echo (empty($informacoes['TSecPai'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['TSecPai'] . '</span><br>' ?>

                    Nome da mãe:
                    <?php echo (empty($informacoes['Nmae'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['Nmae'] . '</span><br>' ?>

                    Telefone principal
                    <?php echo (empty($informacoes['TPrincMae'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['TPrincMae'] . '</span><br>' ?>

                    Telefone secundário
                    <?php echo (empty($informacoes['TsecMae'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['TsecMae'] . '</span><br>' ?>

                    O aluno pode deixar o colégio no horário de saída sozinho?
                    <?php echo (empty($informacoes['saida'])) ? '<span>Não informado</span><br>' : '<span>' . $informacoes['saida'] . '</span><br>' ?>

                    De que forma o aluno vem para a escola?
                    <?php echo (empty($informacoes['FLoco'])) ? '<span>Não informado</span><br><br>' : '<span>' . $informacoes['FLoco'] . '</span><br>' ?>


                </fieldset>
                <br>
                <br>
				</center>	
				</div>
                <?php
                echo '<a href="http://localhost/BC_1.1/view/administrador/editar.php?idAl=' . $idAluno . '" class="exibir">Editar informações</a>';
                echo '||';
                echo "<a href='javascript:func()' onClick='confirmar(" . $idAluno . ");'class='exibir'>Excluir</a>";
                ?>
				||<a href='javascript:func()' onClick="printDiv('imprimir')">imprimir</a>
        </div>
        <br>
        <?PHP include './parts/footer.php'; ?>
    </center>
</body>
</html>
