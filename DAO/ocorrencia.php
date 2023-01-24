<?php
                    /*CLASSE QUE CONTÉM AS FUNÇOES DO SISTEMA RELACIONADAS À OCORRÊNCIAS DOS ALUNOS*/

//REQUER A CLASSE DE CONEXÃO COM O BANCO DE DADOS
require_once 'conexao/conexaoBD.php';
//REQUER A CLASSE DE TRANSFERÊNCIA DE DADOS DAS OCORRÊNCIAS
require_once 'C:/xampp/htdocs/BC_1.1//DTO/OcorrenciasDTO.php';

class ocorrencia {
   //VARIÁVEL PÚBLICA QUE GUARDA VALORES NECESÁRIOS PARA REALIZAR FUNÇÕES COM O BANCO DE DADOS
    public $pdo = null;
//MÉTODO CONTRUTOR. AO SER CHAMADO OBTÉM CONEXÃO COM O BANCO DE DADOS
    public function __construct() {
        $this->pdo = Conexao::obterConexao();
    }
    //MÉTODO DE INSERÇÃO DE OCORRENCIA NO SISTEMA
    public function novaOcorrencia(Ocorrencias $ocorrencia) {
       try {
        $idAluno= $ocorrencia->getIdAluno();
        $dataOorrencia=$ocorrencia->getDataOcorrencia();
        $conteudo=$ocorrencia->getConteudo();
        $sql="INSERT INTO `ocorrencias` VALUES ('','$idAluno','$dataOorrencia','$conteudo')";
           //prepara
            $stmt = $this->pdo->prepare($sql);
//execulta
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        
    }
    //MÉTOD DE LISTAGEM DE CORRÊNCIAS
    public function listarOcorrencias() {
     try {
            $sql = "SELECT InfoAlunos.nome, InfoAlunos.serie, ocorrencias.data, ocorrencias.id
FROM InfoAlunos
JOIN ocorrencias
ON(
InfoAlunos.id=ocorrencias.idAluno
)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //MÉTODO ULTILIZADO PARA EDITAR OCORRÊNCIAS. LISTA AS INFORMAÇÕES MAS NÃO REALIZA AS ALTERAÇÕES
    public function editarOcorrencia($idOcor) {
             try {
            $id=$idOcor;
            $sql = "SELECT InfoAlunos.nome, InfoAlunos.serie, ocorrencias.data, ocorrencias.conteudo, ocorrencias.id
FROM InfoAlunos
JOIN ocorrencias
ON(
InfoAlunos.id=ocorrencias.idAluno
)
AND ocorrencias.id='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //MÉTODO PRÓRPIO DE EDIÇÃO DE OCORRẼNCAS. ALTERA OS VALORES
    public function editar($idOcor, $content) {
               try {
            $id=$idOcor;
            $conteudo=$content;
            $sql = "UPDATE `ocorrencias` SET `conteudo`='$conteudo' WHERE id='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        
    }
    //MÉTODO DE EXCLUSSÃO DE OCORRÊNCIAS
    public function excluirOcorrencia($idOcor) {
                try {
            $id=$idOcor;
            $sql = "DELETE FROM ocorrencias WHERE id='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //MÉTODO DE EIVIÇÃO DE OCORRẼNCIAS REALCIONADA AOS ALUNOS
    public function ocorrenciasAluno($idAluno) {
       try {
           $id=$idAluno;
            $sql = "SELECT InfoAlunos.nome, InfoAlunos.serie, ocorrencias.data, ocorrencias.id
FROM InfoAlunos
JOIN ocorrencias
ON(
InfoAlunos.id=ocorrencias.idAluno
)
AND InfoAlunos.id='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        } 
    }
    //MÉTODO DE LEITURA DE OCORRÊNCIAS
    public function lerOcorrencia($idOcor) {
        try {
           $id=$idOcor;
            $sql = "SELECT InfoAlunos.nome, InfoAlunos.serie, ocorrencias.data, ocorrencias.conteudo,ocorrencias.id
FROM InfoAlunos
JOIN ocorrencias
ON(
InfoAlunos.id=ocorrencias.idAluno
)
AND ocorrencias.id='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        
    }
}
