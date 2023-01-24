<?php
/* CLASSE DE TRANSFERENCA DE DADOS RELACIONADOS A OCORRÊNCIA DOS  ALUNOS DO SISTEMA
SEUS MÉTODOS SÃO APENAS GET'S(PEGAR) E SET'S(MOSTAR) */

class Ocorrencias {
    private $id;
    private $idAluno;
    private $dataOcorrencia;
    private $conteudo;
    
    public function getId() {
        return $this->id;
    }

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function getDataOcorrencia() {
        return $this->dataOcorrencia;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function setDataOcorrencia($dataOcorrencia) {
        $this->dataOcorrencia = $dataOcorrencia;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }


}
