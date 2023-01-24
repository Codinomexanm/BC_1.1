<?php

/* SCRIPT DE CONTROLE DE EDIÇÃO DE DADOS DOS ALUNOS */

//REQUER A CCLASSE QUE CONTEM OS METODOS DE ACESSO AS FUNÇOES RELACIONADAS AOS ALUNOS
require_once '../DAO/SysFunc.php';
//RECEBE OS DADOS
$nomeAluno = $_POST['nomeAluno'];
$serie = $_POST['serie'];
$dataNasc = $_POST['dataNasc'];
$sexo = $_POST['sexo'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$telefone = $_POST['telefone'];
$alergia = $_POST['alergia'];
$Dcngenita = $_POST['Dcongenita'];
$Dexistente = $_POST['Dexistente'];
$DIcont = $_POST['DIcont'];
$Tmedico = $_POST['Tmedico'];
$acompanhamento = $_POST['acompanhamento'];
$OutAcomp = $_POST['OutAcomp'];
$Mespecifica = $_POST['Mespecifica'];
$Tsanguineo = $_POST['Tsanguineo'];
$Npai = $_POST['Npai'];
$TPrincPai = $_POST['TPrincPai'];
$TSecPai = $_POST['TSecPai'];
$Nmae = $_POST['Nmae'];
$TPrincMae = $_POST['TPrincMae'];
$TSecMe = $_POST['TSecMae'];
$saida = $_POST['saida'];
$FLoco = $_POST['FLoco'];
$id = $_GET['idAl'];
//INSTANCIA A DTO DAS FUNÇÕES
$AlunoDTO = new SysFuncDTO();
//SETA OS VALORES
$AlunoDTO->setId($id);
$AlunoDTO->setNomeAluno($nomeAluno);
$AlunoDTO->setSerie($serie);
$AlunoDTO->setDataNasc($dataNasc);
$AlunoDTO->setSexo($sexo);
$AlunoDTO->setRg($rg);
$AlunoDTO->setEndereco($endereco);
$AlunoDTO->setBairro($bairro);
$AlunoDTO->setCidade($cidade);
$AlunoDTO->setCep($cep);
$AlunoDTO->setUf($uf);
$AlunoDTO->setTelefone($telefone);
$AlunoDTO->setAlergia($alergia);
$AlunoDTO->setDcngenita($Dcngenita);
$AlunoDTO->setDexistente($Dexistente);
$AlunoDTO->setDIcont($DIcont);
$AlunoDTO->setTmedico($Tmedico);
$AlunoDTO->setAcompanhamento($acompanhamento);
$AlunoDTO->setOutAcomp($OutAcomp);
$AlunoDTO->setMespecifica($Mespecifica);
$AlunoDTO->setTsanguineo($Tsanguineo);
$AlunoDTO->setNpai($Npai);
$AlunoDTO->setTPrincPai($TPrincPai);
$AlunoDTO->setTSecPai($TSecPai);
$AlunoDTO->setNmae($Nmae);
$AlunoDTO->setTPrincMae($TPrincMae);
$AlunoDTO->setTsecMae($TSecMe);
$AlunoDTO->setSaida($saida);
$AlunoDTO->setFLoco($FLoco);
//instancia a classe DAO
$AlunoDAO = new SysFunc();
//edita os dados
$AlunoDAO->editar($AlunoDTO);

//retorna á página iniial
$msg = "m2";
echo"<script>window.location='http://localhost/BC_1.1/view/listarAlunos.php?msg=$msg'</script>";
