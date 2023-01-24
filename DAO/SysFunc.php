
<?php

/* CLASSE QUE CONTÉM AS FUNÇÕES PRINCIPAIS DO SISTEMA RELACIONADAS AOS ALUNOS */

//REQUER O ARQUIVO DE CONEXÃO
require_once 'conexao/conexaoBD.php';
//REQUER A CLASSE DE TRANSFERÊNCIA DE DADOS 
require_once 'C:/xampp/htdocs/BC_1.1//DTO/SysFuncDTO.php';

/**
 * @author diogenes
 */
class SysFunc {

//VARIÁVEL ULTILIZADA PARA ARMAZENAR O VALOR DA CONEXÃO COM O BANCO DE DADOS
    public $pdo = null;

//MÉTODO CONTRUTOR. CHAMA O MÉTODO DE OBTER CONEXÃO 
    public function __construct() {
        $this->pdo = Conexao::obterConexao();
    }

//FUNÇÃO DE CADASTRO DE ALUNOS
    public function cadastrarAlunos(SysFuncDTO $AlunoDTO) {
        try {
            //salva os gets
            $nomeAlunoSys = $AlunoDTO->getNomeAluno();
            $serieSys = $AlunoDTO->getSerie();
            $dataNascSys = $AlunoDTO->getDataNasc();
            $sexoSys = $AlunoDTO->getSexo();
            $rgSys = $AlunoDTO->getRg();
            $enderecoSys = $AlunoDTO->getEndereco();
            $bairroSys = $AlunoDTO->getBairro();
            $cidadeSys = $AlunoDTO->getCidade();
            $cepSys = $AlunoDTO->getCep();
            $ufSys = $AlunoDTO->getUf();
            $telefoneSys = $AlunoDTO->getTelefone();
            $alergiaSys = $AlunoDTO->getAlergia();
            $DcngenitaSys = $AlunoDTO->getDcngenita();
            $DexistenteSys = $AlunoDTO->getDexistente();
            $DIcontSys = $AlunoDTO->getDIcont();
            $TmedicoSys = $AlunoDTO->getTmedico();
            $acompanhamentoSys = $AlunoDTO->getAcompanhamento();
            $OutAcompSys = $AlunoDTO->getOutAcomp();
            $MespecificaSys = $AlunoDTO->getMespecifica();
            $TsanguineoSys = $AlunoDTO->getTsanguineo();
            $NpaiSys = $AlunoDTO->getNpai();
            $TPrincPaiSys = $AlunoDTO->getTPrincPai();
            $TSecPaiSys = $AlunoDTO->getTSecPai();
            $NmaeSys = $AlunoDTO->getNmae();
            $TPrincMaeSys = $AlunoDTO->getTPrincMae();
            $TsecMaeSys = $AlunoDTO->getTsecMae();
            $saidaSys = $AlunoDTO->getSaida();
            $FLocoSys = $AlunoDTO->getFLoco();
            //forma sql
            $sql = "INSERT INTO `InfoAlunos`VALUES ('',
     '$nomeAlunoSys',
     '$serieSys',
     '$dataNascSys',
     '$sexoSys',
     '$rgSys',
     '$enderecoSys',
     '$bairroSys',
     '$cidadeSys',
     '$cepSys',
     '$ufSys',
     '$telefoneSys',
     '$alergiaSys',
     '$DcngenitaSys',
     '$DexistenteSys',
     '$DIcontSys',
     '$TmedicoSys',
     '$acompanhamentoSys',
     '$OutAcompSys',
     '$MespecificaSys',
     '$TsanguineoSys',
     '$NpaiSys',
     '$TPrincPaiSys',
     '$TSecPaiSys',
     '$NmaeSys',
     '$TPrincMaeSys',
     '$TsecMaeSys',
     '$saidaSys',
     '$FLocoSys')";
            //prepara
            $stmt = $this->pdo->prepare($sql);

            //execulta
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

//FUNÇÃO DE LISTAGEM DE ALUNOS
    public function ListarAlunos() {
        try {
            $sql = "SELECT nome, serie, id FROM InfoAlunos";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

//FUNÇÃO DE EXCLUSSÃO DE ALUNOS
    public function ExcluirAlunos($idAluno) {
        try {
            $id = $idAluno;
            $sql = "DELETE FROM InfoAlunos WHERE id='$id'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

//FUNÇÃO DE PESQUISA DE ALUNOS
    public function PesquisarAlunos($pesquisa, $serie) {
        try {
            $sql = "(SELECT id, nome FROM InfoAlunos WHERE";
            switch ($serie) {
                case "1":
                    $sql = $sql . " serie='1' AND nome LIKE '%{$pesquisa}%')";
                    break;
                case "2":
                    $sql = $sql . " serie='2' AND nome LIKE '%{$pesquisa}%')";
                    break;
                case "3":
                    $sql = $sql . " serie='3' AND nome LIKE '%{$pesquisa}%')";
                    break;
                case "4":
                    $sql = $sql . " serie='4' AND nome LIKE '%{$pesquisa}%')";
                    break;
                case "5":
                    $sql = $sql . " serie='5' AND nome LIKE '%{$pesquisa}%')";
                    break;
                case "6":
                    $sql = $sql . " nome LIKE '%{$pesquisa}%')";
                    break;
            }
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            $p = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $p;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //FUNÇÃO DE VISUALIZAR AS INFORMAÇÕES DOS ALUNOS
    public function visualizarAlunos($idAluno) {
        try {
            $id = $idAluno;
            $sql = "SELECT * FROM InfoAlunos WHERE id='$id'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //FUNÇÃO DE EDIÇÃO DOS DADOS DOS ALUNOS
    public function editar(SysFuncDTO $AlunoDTO) {
        try {
            //salva os gets
            $id = $AlunoDTO->getId();
            $nomeAlunoSys = $AlunoDTO->getNomeAluno();
            $serieSys = $AlunoDTO->getSerie();
            $dataNascSys = $AlunoDTO->getDataNasc();
            $sexoSys = $AlunoDTO->getSexo();
            $rgSys = $AlunoDTO->getRg();
            $enderecoSys = $AlunoDTO->getEndereco();
            $bairroSys = $AlunoDTO->getBairro();
            $cidadeSys = $AlunoDTO->getCidade();
            $cepSys = $AlunoDTO->getCep();
            $ufSys = $AlunoDTO->getUf();
            $telefoneSys = $AlunoDTO->getTelefone();
            $alergiaSys = $AlunoDTO->getAlergia();
            $DcngenitaSys = $AlunoDTO->getDcngenita();
            $DexistenteSys = $AlunoDTO->getDexistente();
            $DIcontSys = $AlunoDTO->getDIcont();
            $TmedicoSys = $AlunoDTO->getTmedico();
            $acompanhamentoSys = $AlunoDTO->getAcompanhamento();
            $OutAcompSys = $AlunoDTO->getOutAcomp();
            $MespecificaSys = $AlunoDTO->getMespecifica();
            $TsanguineoSys = $AlunoDTO->getTsanguineo();
            $NpaiSys = $AlunoDTO->getNpai();
            $TPrincPaiSys = $AlunoDTO->getTPrincPai();
            $TSecPaiSys = $AlunoDTO->getTSecPai();
            $NmaeSys = $AlunoDTO->getNmae();
            $TPrincMaeSys = $AlunoDTO->getTPrincMae();
            $TsecMaeSys = $AlunoDTO->getTsecMae();
            $saidaSys = $AlunoDTO->getSaida();
            $FLocoSys = $AlunoDTO->getFLoco();
            //forma sql
            $sql = "UPDATE `InfoAlunos` SET
     nome='$nomeAlunoSys',
     serie='$serieSys',
     dataNasc='$dataNascSys',
     sexo='$sexoSys',
     rg='$rgSys',
     endereco='$enderecoSys',
     bairro='$bairroSys',
     cidade='$cidadeSys',
     cep='$cepSys',
     uf='$ufSys',
     telefone='$telefoneSys',
     alergia='$alergiaSys',
     Dcngenita='$DcngenitaSys',
     Dexistente='$DexistenteSys',
     DIcont='$DIcontSys',
     Tmedico='$TmedicoSys',
     acompanhamento='$acompanhamentoSys',
     OutAcomp='$OutAcompSys',
     Mespecifica='$MespecificaSys',
     Tsanguineo='$TsanguineoSys',
     Npai='$NpaiSys',
     TPrincPai='$TPrincPaiSys',
     TSecPai='$TSecPaiSys',
     Nmae='$NmaeSys',
     TPrincMae='$TPrincMaeSys',
     TsecMae='$TsecMaeSys',
     Saida='$saidaSys',
     FLoco='$FLocoSys'"
                    . " WHERE id='$id'";
            //prepara
            $stmt = $this->pdo->prepare($sql);

            //execulta
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
