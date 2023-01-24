<?php

/* ARQUIVO DE CONTROLE DE EDIÇÃO DE OCORRẼNCIAS */
//REQUER A CLASSE DE ACESSO AS FUNÇÕES RELACIONADAS A OCORRẼNCIAS
require_once '../DAO/ocorrencia.php';
//SE NÃO ESTIVEREM VAZIAS AS VARIÁVEIS QUE CONTÉM O ID DA OCORRêNCIA E O CONTEÚDO
if (!empty($_GET['idOcor']) && !empty($_POST['conteudo'])) {
    //RECEBE O ID DA OCORRÊNCIA
    $idOcor = $_GET['idOcor'];
    //RECEBE O CONTEÚDO DA OCORRẼNCIA
    $conteudo = $_POST['conteudo'];
    //INSTANCIA A CLASSE DE TRANSFERÊNCIA DE DADOS DE OCORRẼNCIAS
    $ocorrencia = new Ocorrencias();
    //SETA O VALOR DO CONTEÚDO
    $ocorrencia->setConteudo($conteudo);
    //INSTANCIA A CLASSE DE ACESSO AOS MÉTODOS DE OCORRENCIAS
    $Ocorrencia = new ocorrencia();
    //CHAMA O MÉTODO DE EDITAR A OCORRENCIA
    $Ocorrencia->editar($idOcor, $conteudo);
    //RETORNA À PÁGINA DE LISTAR OCORRÊNCIAS
    $msg = "m3";
    echo"<script>window.location='http://localhost/BC_1.1/view/listarOcorrencias.php?msg=$msg'</script>";
}

