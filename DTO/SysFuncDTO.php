<?php
/* CLASSE DE TRANSFERENCA DE DADOS RELACIONADOS AOS ALUNOS DO SISTEMA
SEUS MÉTODOS SÃO APENAS GET'S(PEGAR) E SET'S(MOSTAR) */
class SysFuncDTO {
    private $id;
    private $nomeAluno;
    private $serie;
    private $dataNasc;
    private $sexo;
    private $rg;
    private $endereco;
    private $bairro;
    private $cidade;
    private $cep;
    private $uf;
    private $telefone;
    private $alergia;
    private $Dcngenita;
    private $Dexistente;
    private $DIcont;
    private $Tmedico;
    private $acompanhamento;
    private $OutAcomp;
    private $Mespecifica;
    private $Tsanguineo;
    private $Npai;
    private $TPrincPai;
    private $TSecPai;
    private $Nmae;
    private $TPrincMae;
    private $TsecMae;
    private $saida;
    private $FLoco;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    
    public function getTsecMae() {
        return $this->TsecMae;
    }

    public function setTsecMae($TsecMae) {
        $this->TsecMae = $TsecMae;
    }

        public function getNomeAluno() {
        return $this->nomeAluno;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function getDataNasc() {
        return $this->dataNasc;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getAlergia() {
        return $this->alergia;
    }

    public function getDcngenita() {
        return $this->Dcngenita;
    }

    public function getDexistente() {
        return $this->Dexistente;
    }

    public function getDIcont() {
        return $this->DIcont;
    }

    public function getTmedico() {
        return $this->Tmedico;
    }

    public function getAcompanhamento() {
        return $this->acompanhamento;
    }

    public function getOutAcomp() {
        return $this->OutAcomp;
    }

    public function getMespecifica() {
        return $this->Mespecifica;
    }

    public function getTsanguineo() {
        return $this->Tsanguineo;
    }

    public function getNpai() {
        return $this->Npai;
    }

    public function getTPrincPai() {
        return $this->TPrincPai;
    }

    public function getTSecPai() {
        return $this->TSecPai;
    }

    public function getNmae() {
        return $this->Nmae;
    }

    public function getTPrincMae() {
        return $this->TPrincMae;
    }

    public function getSaida() {
        return $this->saida;
    }

    public function getFLoco() {
        return $this->FLoco;
    }

    public function setNomeAluno($nomeAluno) {
        $this->nomeAluno = $nomeAluno;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setAlergia($alergia) {
        $this->alergia = $alergia;
    }

    public function setDcngenita($Dcngenita) {
        $this->Dcngenita = $Dcngenita;
    }

    public function setDexistente($Dexistente) {
        $this->Dexistente = $Dexistente;
    }

    public function setDIcont($DIcont) {
        $this->DIcont = $DIcont;
    }

    public function setTmedico($Tmedico) {
        $this->Tmedico = $Tmedico;
    }

    public function setAcompanhamento($acompanhamento) {
        $this->acompanhamento = $acompanhamento;
    }

    public function setOutAcomp($OutAcomp) {
        $this->OutAcomp = $OutAcomp;
    }

    public function setMespecifica($Mespecifica) {
        $this->Mespecifica = $Mespecifica;
    }

    public function setTsanguineo($Tsanguineo) {
        $this->Tsanguineo = $Tsanguineo;
    }

    public function setNpai($Npai) {
        $this->Npai = $Npai;
    }

    public function setTPrincPai($TPrincPai) {
        $this->TPrincPai = $TPrincPai;
    }

    public function setTSecPai($TSecPai) {
        $this->TSecPai = $TSecPai;
    }

    public function setNmae($Nmae) {
        $this->Nmae = $Nmae;
    }

    public function setTPrincMae($TPrincMae) {
        $this->TPrincMae = $TPrincMae;
    }

    public function setSaida($saida) {
        $this->saida = $saida;
    }

    public function setFLoco($FLoco) {
        $this->FLoco = $FLoco;
    }

}
