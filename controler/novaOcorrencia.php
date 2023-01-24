<?php

/* CONTROLER DE INSERÇÃO DE OCORRENCIA NO SISTEMA */
//REQUER A CLASSE QUE CONTÉM OS MÉTODOS DE ACESSO AS FUNÇÕES RELACIONADAS A OCORRẼNCIAS DO SISTEMA
require_once '../DAO/ocorrencia.php';
//SE NÃO ESTIVEREM VAZIOS OS VALORES QUE CONTÉM O ID DO ALUNO E O CONTEÚDO DA OCORRÊNCIA
if (!empty($_GET['idAl']) && !empty($_POST['conteudo'])) {
    //RECEBER O ID DO ALUNO
    $idAluno = $_GET['idAl'];
    //RECEBE O CONTEÚDO DA OCORRẼNCIA
    $conteudo = $_POST['conteudo'];
    //RECEBE A DATA DA OCORRÊNCIA
    $dataOcorrencia = date('d-m-Y');
    //INSTANCIA A CLASSE DE TRANSFERÊNCIA DE DADOS  OCORRÊNCIAS
    $ocorrencia = new Ocorrencias();
    //SETA OS VALORES DO CONTEÚDO
    $ocorrencia->setConteudo($conteudo);
    //SETA O ID DO ALUNO
    $ocorrencia->setIdAluno($idAluno);
    //SETA A DATA DA OCORRẼNCIA
    $ocorrencia->setDataOcorrencia($dataOcorrencia);
    //INSTANCIA A CLASSE DE ACESSO AOS MÉTODOS DE OCORRÊNCIAS 
    $Ocorrencia = new ocorrencia();
    //CHAMA A FUNÇÃO DE SALVAR A OCORRÊNCIA NO BD
    $Ocorrencia->novaOcorrencia($ocorrencia);
    //retorna á página iniial
    $msg = "m1";
    echo"<script>window.location='http://localhost/BC_1.1/view/listarOcorrencias.php?msg=$msg'</script>";
}

