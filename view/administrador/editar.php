<?php
require_once '../../DAO/SysFunc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EDITAR ALUNOS</title>
<link rel="stylesheet" type="text/css" href="../../CSS/estilo.css">
<script src="../../JS/jquery.js"></script>
        <script src="../../JS/jquery.maskedinput.js"></script>
        <script src="../../JS/jquery.validate.js"></script>
        <script src="../../JS/jquery-ui.custom.js"></script>
<script type="text/javascript">
        function up(lstr){ // converte minusculas em maiusculas
var str=lstr.value; //obtem o valor
lstr.value=str.toUpperCase(); //converte as strings e retorna ao campo
}
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#cadastroAluno').validate({
                    rules: {
                        nomeAluno: {
                            required: true,
                            minlength: 3
                        },
                        serie: {required: true},
                        dataNasc: {required: true},
                        rg: {required: true},
                        endereco: {required: true},
                        bairro: {required: true},
                        cidade: {required: true},
                        cep: {required: true},
                        uf: {required: true},
                    },
                    messages: {
                        nomeAluno: {required: "O campo nome é obrigatorio.", minlength: "O campo nome deve conter no mínimo 3 caracteres."},
                        serie: {required: "O campo Série é obrigatorio."},
                        dataNasc: {required: "O campo Data é obrigatorio."},
                        rg: {required: "O campo RG é obrigatorio."},
                        endereco: {required: "O campo Endereço é obrigatorio."},
                        bairro: {required: "O campo Bairro é obrigatorio."},
                        cidade: {required: "O campo Cidade é obrigatorio."},
                        cep: {required: "O campo CEP é obrigatorio."},
                        uf: {required: "O campo UF é obrigatorio."},
                    }
                });
            });
        </script> 
        <script type="text/javascript">
            jQuery(function($) {
                $("#telefone").mask("(99)9999-9999");
                $("#telefone1").mask("(99)9999-9999");
                $("#telefone2").mask("(99)9999-9999");
                $("#telefone3").mask("(99)9999-9999");
                $("#telefone4").mask("(99)9999-9999");
                $("#dataNasc").mask("99/99/9999");
                $("#rg").mask("9.999.999");
                $("#cep").mask("99999-999");

            });
        </script>
    </head>
    <body>
    <center>
        <div class="conteudo">
            <?PHP include '../parts/header.php'; ?>
            <?php require_once '../../controler/verificaPerfilAdm.php'; ?>
            <?PHP include '../parts/adm/menu.php'; ?>
            <center>
                <br><br>
                <?php
                if (!empty($_GET['idAl'])) {
                    $idAluno = $_GET['idAl'];
                    $informaoesAluno = new SysFunc();
                    $dados = $informaoesAluno->visualizarAlunos($idAluno);
                    //print_r($dados);
                    foreach ($dados as $informacoes) {
                        
                    }
                }
                ?>
                <form name="cadastroAluno"id="cadastroAluno" method="post"action="../../controler/editarDados.php?idAl=<?php echo $idAluno ?>">
                    <fieldset>
                        <legend>Editar Informações do Aluno</legend>
                        <table border="1">
                            <tr>

                                <td  colspan="2">
                            <center>
                                Nome do Aluno: <input type="text"name="nomeAluno" id="nomeAluno" class="inserir" value="<?php echo ' ' . $informacoes['nome'] ?>" onkeyup="up(this)">
                            </center>
                            </td>

                            <td>
                                Série: 
                                <select name="serie" id="serie" name="serie">
                                    <?php
                                    $informacoes['serie'];
                                    if ($informacoes['serie'] == '1') {
                                        echo '<option value="1" selected></center>Primeiro ano</center></option>
                                        <option value="2">Segundo ano</center></option>
                                <option value="3">Terceiro ano</center></option>
                                <option value="4">Quarto ano</center></option>
                                <option value="5">Quinto ano</option>';
                                    }
                                    if ($informacoes['serie'] == '2') {
                                        echo '<option value="1"></center>Primeiro ano</center></option>
                                        <option value="2" selected>Segundo ano</center></option>
                                <option value="3" >Terceiro ano</center></option>
                                <option value="4">Quarto ano</center></option>
                                <option value="5">Quinto ano</option>';
                                    }
                                    if ($informacoes['serie'] == '3') {
                                        echo '<option value="1"></center>Primeiro ano</center></option>
                                        <option value="2">Segundo ano</center></option>
                                <option value="3" selected>Terceiro ano</center></option>
                                <option value="4">Quarto ano</center></option>
                                <option value="5">Quinto ano</option>';
                                    }
                                    if ($informacoes['serie'] == '4') {
                                        echo '<option value="1"></center>Primeiro ano</center></option>
                                        <option value="2">Segundo ano</center></option>
                                <option value="3">Terceiro ano</center></option>
                                <option value="4" selected>Quarto ano</center></option>
                                <option value="5">Quinto ano</option>';
                                    }
                                    if ($informacoes['serie'] == '5') {
                                        echo '<option value="1"></center>Primeiro ano</center></option>
                                        <option value="2">Segundo ano</center></option>
                                <option value="3">Terceiro ano</center></option>
                                <option value="4">Quarto ano</center></option>
                                <option value="5" selected>Quinto ano</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                            </tr>

                            <tr>
                                <td>
                            <center>
                                Data de nascimento: <input type="text" name="dataNasc" id="dataNasc" value="<?php echo ' ' . $informacoes['dataNasc'] ?>">                                 <center>
                                </center>
                                </td>
                                <td>
                                <center>
                                    <?php
                                    $informacoes['sexo'];
                                    if ($informacoes['sexo'] == 'masculino') {
                                        echo' <input type="radio" name="sexo" value="masculino" checked>Masculino
                                <input type="radio" name="sexo" value="feminino">Feminino';
                                    } else if ($informacoes['sexo'] == 'feminino') {
                                        echo' <input type="radio" name="sexo" value="masculino" >Masculino
                                <input type="radio" name="sexo" value="feminino" checked>Feminino';
                                    } else {
                                        echo' <input type="radio" name="sexo" value="masculino" >Masculino
                                <input type="radio" name="sexo" value="feminino">Feminino';
                                    }
                                    ?>
                                </center>
                                </td>
                                <td>
                                <center>
                                    RG: <input type="text" name="rg" id="rg" value="<?php echo ' ' . $informacoes['rg'] ?>">
                                </center>
                                </td>
                                </tr>

                                <tr>
                                    <td>
                                <center>
                                    Endereço: <input type="text" name="endereco" id="endereco" value="<?php echo ' ' . $informacoes['endereco'] ?>" onkeyup="up(this)">
                                </center>
                                </td>
                                <td>
                                <center>
                                    Bairro: <input type="text" name="bairro" id="bairro" value="<?php echo ' ' . $informacoes['bairro'] ?>" onkeyup="up(this)">
                                </center>
                                </td>
                                <td>
                                <center>
                                    Cidade: <input type="text" name="cidade" id="cidade" value="<?php echo ' ' . $informacoes['cidade'] ?>" onkeyup="up(this)">
                                </center>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                <center>
                                    CEP: <input type="text" name="cep" id="cep"  value="<?php echo ' ' . $informacoes['cep'] ?>">
                                </center>
                                </td>
                                <td>
                                <center>
                                    UF: <input type="text" name="uf" id="uf" maxlength="2" value="<?php echo ' ' . $informacoes['uf'] ?>" onkeyup="up(this)">
                                </center>
                                </td>
                                <td>
                                <center>
                                    Telefone: <input type="text" name="telefone" id="telefone" value="<?php echo ' ' . $informacoes['telefone'] ?>">
                                </center>
                                </td>
                                </tr>
                        </table>
                    </fieldset>

                    <fieldset>
                        <legend>Ficha médica</legend>
                        <table border="1">
                            <tr>
                                <td>
                            <center>
                                Possui alguma alergia?qual?
                            </center>
                            </td>
                            <td>
                            <center>
                                <input type="text" name="alergia" id="alergia" class="inserir" value="<?php echo ' ' . $informacoes['alergia'] ?>" onkeyup="up(this)">
                            </center>
                            </td>
                            </tr>
                            <tr>
                                <td>
                            <center>
                                Possui alguma doença congênita?qual?
                            </center>
                            </td>
                            <td> 
                            <center>
                                <input type="text" name="Dcongenita" id="Dcongenita" class="inserir" value="<?php echo ' ' . $informacoes['Dcngenita'] ?>" onkeyup="up(this)"> 
                                <center>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                    <center>Doenças ou problemas existentes
                                    </center>
                                    </td>
                                    <td>                              
                                    <center>

                                        <input type="text" name="Dexistente" id="Dexistente" class="inserir" value="<?php echo ' ' . $informacoes['Dexistente'] ?>" onkeyup="up(this)">
                                        <center>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                            <center>
                                                Doenças da infância já contraídas
                                            </center>
                                            </td>
                                            <td>
                                            <center>
                                                <input type="text" name="DIcont" class="inserir" value="<?php echo ' ' . $informacoes['DIcont'] ?>" onkeyup="up(this)">
                                            </center>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                            <center>
                                                O aluno está fazendo algum tratamento médico?qual?
                                            </center>
                                            </td>
                                            <td>
                                            <center>
                                                <input type="text" name="Tmedico" class="inserir" value="<?php echo ' ' . $informacoes['Tmedico'] ?>" onkeyup="up(this)">
                                            </center>
                                            </td>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td>
                                            <center>
                                                Acompanhamento
                                            </center>
                                            </td>
                                            <td>
                                            <center>
                                                <input type="text" name="acompanhamento" class="inserir" value="<?php echo ' ' . $informacoes['acompanhamento'] ?>">
                                            </center>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                            <center>
                                                Outro tipo de acompanhamento?
                                            </center>
                                            </td>
                                            <td>
                                            <center>
                                                <input type="text" name="OutAcomp" class="inserir" value="<?php echo ' ' . $informacoes['OutAcomp'] ?>" onkeyup="up(this)" >
                                            </center>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                            <center>
                                                O aluno está tomando alguma medicação específica? qual?
                                            </center>
                                            </td>
                                            <td>
                                            <center>
                                                <input type="text" name="Mespecifica" class="inserir" value="<?php echo ' ' . $informacoes['Mespecifica'] ?>" onkeyup="up(this)">
                                            </center>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                            <center>
                                                Tipo sanguíneo:
                                            </center>
                                            </td>
                                            <td>
                                            <center>
                                                <input type="text" name="Tsanguineo"  class="inserir" value="<?php echo ' ' . $informacoes['Tsanguineo'] ?>" onkeyup="up(this)">
                                            </center>
                                            </td>
                                            </tr>
                                            </table>
                                            </fieldset>

                                            <fieldset>
                                                <legend>Outras informações</legend>
                                                <table border="1">
                                                    <tr>
                                                        <td>
                                                    <center>
                                                        Nome do Pai: <input type="Text" name="Npai" value="<?php echo ' ' . $informacoes['Npai'] ?>" onkeyup="up(this)">
                                                    </center>
                                                    </td>
                                                    <td>
                                                    <center>
                                                        Telefone principal: <input type="text" name="TPrincPai" value="<?php echo ' ' . $informacoes['TPrincPai'] ?>" id="telefone1">
                                                        <br>
                                                        Telefone secundário: <input type="text" name="TSecPai" value="<?php echo ' ' . $informacoes['TSecPai'] ?>" id="telefone2">
                                                    </center>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                    <center>
                                                        Nome da mãe: <input type="Text" name="Nmae" value="<?php echo ' ' . $informacoes['Nmae'] ?>" onkeyup="up(this)">
                                                    </center>
                                                    </td>
                                                    <td>
                                                    <center>
                                                        Telefone principal: <input type="text" name="TPrincMae" value="<?php echo ' ' . $informacoes['TPrincMae'] ?>"id="telefone3">
                                                        <br>
                                                        Telefone secundário: <input type="text" name="TSecMae" value="<?php echo ' ' . $informacoes['TsecMae'] ?>" id="telefone4">
                                                    </center>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                    <center>
                                                        O aluno pode deixar o colégio no horário de saída sozinho?
                                                    </center>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $informacoes['saida'];
                                                        if ($informacoes['saida'] == 'sim') {

                                                            echo'<center>
                                                        <input type="radio" name="saida" value="sim" checked>Sim
                                                        <input type="radio" name="saida" value="nao">Não
                                                                                                        </center>';
                                                        }
                                                        if ($informacoes['saida'] == 'nao') {

                                                            echo'<center>
                                                        <input type="radio" name="saida" value="sim">Sim
                                                        <input type="radio" name="saida" value="nao" checked>Não
                                                                                                        </center>';
                                                        } else {
                                                            echo'<center>
                                                        <input type="radio" name="saida" value="sim">Sim
                                                        <input type="radio" name="saida" value="nao">Não
                                                                                                        </center>';
                                                        }
                                                        ?>

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                    <center>
                                                        De que forma o aluno vem para a escola?
                                                    </center>    
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $informacoes['FLoco'];
                                                        if ($informacoes['FLoco'] == 'ape') {
                                                            echo '<center>
                                                        <input type="radio" name="FLoco" value="ape" checked>a pé e sozinho
                                                        <input type="radio" name="FLoco" value="onibus">de ônibus e sozinho
                                                        <input type="radio" name="FLoco" value="Tescolar">Transporte escolar
                                                        <input type="radio" name="FLoco" value="acomp">Alguém vem trazê-lo
                                                    </center>';
                                                        } else if ($informacoes['FLoco'] == 'onibus') {
                                                            echo '<center>
                                                        <input type="radio" name="FLoco" value="ape">a pé e sozinho
                                                        <input type="radio" name="FLoco" value="onibus" checked>de ônibus e sozinho
                                                        <input type="radio" name="FLoco" value="Tescolar">Transporte escolar
                                                        <input type="radio" name="FLoco" value="acomp">Alguém vem trazê-lo
                                                    </center>';
                                                        } else if ($informacoes['FLoco'] == 'Tescolar') {
                                                            echo '<center>
                                                        <input type="radio" name="FLoco" value="ape">a pé e sozinho
                                                        <input type="radio" name="FLoco" value="onibus">de ônibus e sozinho
                                                        <input type="radio" name="FLoco" value="Tescolar" checked>Transporte escolar
                                                        <input type="radio" name="FLoco" value="acomp">Alguém vem trazê-lo
                                                    </center>';
                                                        } else if ($informacoes['FLoco'] == 'acomp') {
                                                            echo '<center>
                                                        <input type="radio" name="FLoco" value="ape">a pé e sozinho
                                                        <input type="radio" name="FLoco" value="onibus">de ônibus e sozinho
                                                        <input type="radio" name="FLoco" value="Tescolar">Transporte escolar
                                                        <input type="radio" name="FLoco" value="acomp" checked>Alguém vem trazê-lo
                                                    </center>';
                                                        } else {
                                                            echo '<center>
                                                        <input type="radio" name="FLoco" value="ape">a pé e sozinho
                                                        <input type="radio" name="FLoco" value="onibus">de ônibus e sozinho
                                                        <input type="radio" name="FLoco" value="Tescolar">Transporte escolar
                                                        <input type="radio" name="FLoco" value="acomp">Alguém vem trazê-lo
                                                    </center>';
                                                        }
                                                        ?>
                                                    </td>
                                                    </tr>
                                                </table>

                                            </fieldset>
                    <br>
                    <input type="submit" value="Editar dados" class="enviar">
                    <br>
                                            </form>
<?php
if (!empty($_GET['msg'])) {
    if ($_GET['msg'] == 'm1') {
        echo '<script>alert("Aluno cadastrado")</script>';
    }
}
?>
                                            </div>
                                            <?PHP include '../parts/footer.php'; ?>
                                        </center>
                                        </body>
                                        </html>
