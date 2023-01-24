-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bcrobertoalves`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `infoalunos`
--

CREATE TABLE IF NOT EXISTS `infoalunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `serie` varchar(255) DEFAULT NULL,
  `dataNasc` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `rg` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `uf` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `alergia` varchar(255) DEFAULT NULL,
  `Dcngenita` varchar(255) DEFAULT NULL,
  `Dexistente` varchar(255) DEFAULT NULL,
  `DIcont` varchar(255) DEFAULT NULL,
  `Tmedico` varchar(255) DEFAULT NULL,
  `acompanhamento` varchar(255) DEFAULT NULL,
  `OutAcomp` varchar(255) DEFAULT NULL,
  `Mespecifica` varchar(255) DEFAULT NULL,
  `Tsanguineo` varchar(255) DEFAULT NULL,
  `Npai` varchar(255) DEFAULT NULL,
  `TPrincPai` varchar(255) DEFAULT NULL,
  `TSecPai` varchar(255) DEFAULT NULL,
  `Nmae` varchar(255) DEFAULT NULL,
  `TPrincMae` varchar(255) DEFAULT NULL,
  `TsecMae` varchar(255) NOT NULL,
  `saida` varchar(255) DEFAULT NULL,
  `FLoco` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Extraindo dados da tabela `infoalunos`
--

INSERT INTO `infoalunos` (`id`, `nome`, `serie`, `dataNasc`, `sexo`, `rg`, `endereco`, `bairro`, `cidade`, `cep`, `uf`, `telefone`, `alergia`, `Dcngenita`, `Dexistente`, `DIcont`, `Tmedico`, `acompanhamento`, `OutAcomp`, `Mespecifica`, `Tsanguineo`, `Npai`, `TPrincPai`, `TSecPai`, `Nmae`, `TPrincMae`, `TsecMae`, `saida`, `FLoco`) VALUES
(11, 'LUIZ HENRIQUE SANTOS DA SILVA', '5', '00/00/0000', 'masculino', '0.000.000', 'NÃƒO INFORMADO ', 'COIMBRA', 'ÃGUAS LINDAS', '72191-000', 'GO', '(61)9371-1487', 'NAO', 'NAO', '', '', '', '', '', '', '', 'LUIS FERANDO PEREIRA DA SILVA', '(61)9102-5130', '', 'JULIANA SANTOS DE OLIVEIRA', '(61)9371-1487', '', 'sim', 'acomp'),
(14, ' MATEUS FERANDO E. D', '5', '19/04/2014', 'masculino', '0.000.000', ' QUADRA R LOTE 2 H ', ' COIMBRA', ' ÃGUAS LINDAS', '72911-521', ' GO', '(61)9217-6082', ' ', 'NÃƒO', ' ', ' ', 'NÃƒO', ' ', ' ', 'NÃƒO', 'O +', ' ', '', '', ' FERNANDA A. BEZEIRRA', '(61)9217-6082', '', 'sim', 'ape'),
(15, 'KAIO DE SOUSA MORAIS', '5', '10/03/2004', 'masculino', '0.000.000', 'QUADRA Q CHAC 1 LOTE 22', 'COIMBRA', 'ÃGUAS LINDAS ', '00000-000', 'GO', '(61)3618-5543', 'NÃƒO', 'NÃƒO', '', '', 'NÃƒO', '', '', 'NÃƒO', '', 'FRANCISCO DAS CHAGAS DA S. MORAIS ', '(61)3618-5543', '', 'SAARA DE S. MORAIS', '(61)9300-0860', '', 'sim', 'acomp'),
(16, 'CARLOS HENRIQUE COSTA DA CONCEIÃ‡ÃƒO', '5', '11/04/2004', 'masculino', '0.000.000', 'QUADRA Q CH 18 LOTE 8', 'COIMBRA', 'ÃGUAS LINDAS', '00000-000', 'GO', '(61)9255-6501', '', 'NÃƒO', '', '', '', '', '', '', '', 'JOSÃ‰ CARLOS DA CONCEIÃ‡ÃƒO ', '(61)9375-3688', '', 'FRANCILENE COSTA DA CONCEIÃ‡ÃƒO', '(61)9255-6501', '', 'sim', 'ape'),
(17, 'MARLOM ANDREY DA COSTA ARAUJO', '4', '02/09/2006', 'masculino', '0.000.000', 'QUADRA A CH 23 LOTE 20', 'COIMBRA', 'ÃGUAS LINDAS', '00000-000', 'GO', '(61)9120-0997', '', '', '', 'CATAPORA', '', '', '', '', '', 'AMILTON Z. DA COSTA', '(61)9120-0997', '', 'MARIA ODALIA DE ARAUJO', '(61)9519-0351', '', 'sim', 'ape'),
(18, 'GILHERME GILSON DA COSTA', '5', '27/03/2005', 'masculino', '0.000.000', 'QUADRA R CASA 6 MOD. D CH 13', 'COIMBRA', 'ÃGUAS LINDAS', '72911-521', 'GO', '(61)3613-0715', '', 'NÃƒO', '', 'CATAPORA', 'NÃƒO', '', '', 'NÃƒO', '', 'GILSON AZEVEDO DA COSTA', '(61)9363-3005', '', 'IVINA MARIA SOUZA COSTA', '(61)9266-7075', '', 'sim', 'ape'),
(19, 'EMERSON PEREIRA VAZ', '4', '23/10/2004', 'masculino', '0.000.000', 'QUADRA P CH 26/10', 'COIMBRA', 'ÃGUAS LINDAS', '72911-515', 'GO', '(61)9379-6615', '', 'NÃƒO', 'NÃƒO', 'CATAPORA', 'NÃƒO', '', '', 'NÃƒO', 'O -', 'EDILSON PEREIRA ', '(61)9379-6615', '', 'MARLENE VAZ FERREIRA', '(61)9536-3406', '', 'sim', 'acomp'),
(20, 'ENZO MIGUEL AP DE LIMA', '4', '23/07/2004', 'masculino', '0.000.000', 'QUADRA 9 LOTE 25 ', 'BELA VISTA', 'ÃGUAS LINDAS', '72911-557', 'GO', '(61)9555-9025', '', 'NÃƒO', '', '', 'NÃƒO', '', '', 'NÃƒO', 'B +', '', '', '', 'MARIA DO SOCORRO AL PEREIRA', '(61)8565-1765', '', 'sim', 'acomp'),
(21, 'ROBERTA JAMILLY DA SILVA VALE', '4', '15/05/2006', 'feminino', '0.000.000', '0000000000', 'COIMBRA ', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', '', '', 'CATAPORA', '', '', '', '', '', '', '', '', 'MARA YESULERE RIBEIRO DA SILVA', '(61)9122-8520', '', 'nao', 'acomp'),
(22, 'SARAH ', '4', '16/07/2002', 'feminino', '2.751.990', 'QUADRA 1 RUA 11 LOTE 15', 'NÃƒO INFORMADO', 'ÃGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', '', 'HIPERTENSÃƒO ', 'CATAPORA, CAXUMBA', '', '', '', '', '', '', '', '', 'MARIA ANGELICA B. OLIVEIRA', '(61)9529-3782', '', 'sim', 'ape'),
(23, 'RAYNARA LIMA SILVA ', '4', '03/02/2006', 'feminino', '0.000.000', 'QUADRA K LOTE 09 ', 'COIMBRA', 'ÃGUAS LINDAS', '00000-000', 'GO', '(61)9269-5438', '', 'NÃƒO', 'NÃƒO', '', '', '', 'NÃƒO', 'NÃƒO', '', '', '', '', 'ROSICLEIA LIMA SILVA', '(61)8574-8767', '', 'sim', 'ape'),
(24, 'CARLOS MANOEL CARDOSO REIS', '4', '03/08/2008', 'masculino', '0.000.000', 'QUADRA 3 CH. 1 LOTE 1 ', 'COIMBRA', 'ÃGUAS LINDAS', '00000-000', 'GO', '(61)9588-8792', '', 'NÃƒO', 'JA TEVE CONVULSÃƒO', 'CARAPOTA', 'NÃƒO', '', '', '', '', '', '', '', 'DIANA FLAVIA CARDOSO REIS ', '(61)9588-8792', '', 'nao', 'acomp'),
(25, 'ROSELIA BORGES DA SILVA ', '5', '05/11/2004', 'feminino', '0.000.000', 'QUADRA C CASA 5 LOTE 7 E 8 ', 'COIMBRA', 'ÃGUAS LINDAS', '00000-000', 'GO', '(61)8275-9077', '', '', '', '', '', '', '', '', '', 'AZELIO MOREIRA DA SILVA', '', '', 'CIRLENE BORGES DOS SANTOS ', '', '', 'sim', 'acomp'),
(26, 'GABRIEL ASSIS CABRAL DE FREITAS', '4', '07/07/2005', 'masculino', '0.000.000', 'QUADRA Q CH22 LT 4', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)8525-6863', '', 'NÃƒO', '', 'CATAPORA', '', '', '', '', 'A +', 'JOSE LUIZ O. FREITAS', '(61)8525-6863', '', 'JAQUELINE FREITAS ASSIS', '', '', 'sim', 'ape'),
(27, 'GLAUBER DOS SANTOS ARAUJO ', '4', '14/07/2005', 'masculino', '0.000.000', 'QUADRA P CH 26', 'COIMBRA', 'AGUAS LINDAS', '75910-000', 'GO', '(61)9223-9785', '', 'NÃƒO', 'NÃƒO', '', '', 'NÃƒO', '', 'NÃƒO', '', 'GLEIDSON SIQUEIRA DE ARAUJO', '(61)9223-9785', '', 'MARIA NEIDE ALVES DOS SANTOS', '(61)8160-6591', '', 'sim', 'ape'),
(28, 'JONATAS LIMA DA SILVA ', '4', '26/06/2005', 'masculino', '0.000.000', 'NÃƒO INFORMADO ', 'BELA VISTA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9287-3147', '', 'NÃƒO', '', 'CATAPORA', 'NÃƒO', '', '', 'NÃƒO ', 'A +', '', '', '', '', '', '', 'sim', 'ape'),
(29, 'EMERSON JOSE DUARTE P. DE CARVALHO', '4', '14/03/2006', 'masculino', '0.000.000', 'QUADRA 8 CASA 33 ', 'BELA VISTA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9538-5256', '', '', 'ASMA, BONQUITE ', '', '', '', '', 'BOMBA DE SABUTANOL', 'O +', 'JOSE ADRIANO DE CARVALHO ', '(61)8238-5269', '', 'ROSELIRE DUARTE SANTANA', '(61)9538-5256', '(61)9333-1960', 'nao', 'acomp'),
(30, 'JOÃƒO VICTOR FERREIRA DE OLIVEIRA ', '5', '08/03/2005', 'masculino', '0.000.000', 'QUADRA B MOD E CH. 10-14', 'COIMBRA', 'AGUAS LINDAS', '72910-000', 'GO', '(61)8477-8260', '', 'NÃƒO', '', 'CATAPORA', 'NÃƒO', '', '', 'NÃƒO', 'AB +', 'FRANCISCO OTAVIO FERNANDES DE OLIVEIRA ', '(61)8647-9053', '', 'FRANCIDALVA FERREIRA DE OLIVEIRA ', '(61)8477-8260', '', 'nao', 'acomp'),
(31, ' KAUANY SOUZA DA SILVA', '4', '20/02/2006', 'feminino', '0.000.000', ' QUADRA I LOTE 29', ' COIMBRA', ' AGUAS LINDAS', '72911-494', ' GO', '', ' ', 'NÃƒO', 'NÃƒO', 'NÃƒO', ' ', ' ', ' ', 'NÃƒO', 'A +', 'FRANCISCO DE SOUZA VICENTE ', '(61)9248-8612', '', 'LEILA ROSA DA SILVA', '(61)9275-7397', '', 'nao', 'acomp'),
(32, ' ADEMILSON BATISTA DOS SANTOS ', '5', '06/11/2002', 'masculino', '0.000.000', ' QUADRA O LOTE 25', ' COIMBRA', ' AGUAS LINDAS', '00000-000', ' GO', '(61)9158-9421', ' ', ' NÃƒO', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', '', ' VALDIRENE FELIX BATISTA ', '(61)9158-9421', '', 'sim', 'ape'),
(33, 'SAMARA BUENO PIRES SOUZA ', '5', '10/08/2005', 'feminino', '1.729.074', 'QUADRA 60 LOTE 25', 'SÃƒO JOSÃ‰', 'SANTO ANTONIO ', '72907-400', 'GO', '(61)8621-6473', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'O +', 'WALCIANDRO BUENO PIRES', '(61)8621-6473', '', 'ELIENE CARLA DE SOUZA ', '(61)8621-6473', '', 'nao', 'acomp'),
(34, 'MARIA DE FATIMA NUNES DA SILVA', '4', '23/04/2003', 'feminino', '0.000.000', 'AV', 'COIMBRA', 'AGUAS LINDAS', '72910-000', 'GO', '', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', '', 'NÃƒO', '', '', 'ANTONIO JOSÃ‰ NUNES', '(61)9380-1924', '', 'SILVIA CARLOS DA SILVA', '(61)9240-4318', '', 'sim', 'acomp'),
(35, 'ANA VITÃ“RIA SOARES DE ALMEIDA', '4', '10/04/2006', 'feminino', '0.000.000', 'QUADRA R LOTE 1 CH 1', 'COIMBRA', 'AGUAS LINDAS', '72910-000', 'GO', '(61)9209-3472', '', 'NÃƒO', 'NÃƒO', '', 'DENTISTA', '', '', '', 'B +', 'JOSÃ‰ DE RIBAMAR FERREIRA ALMEIDA', '(61)8228-7961', '', 'APARECIDA SOARES DE SILVA', '(61)9209-3472', '', 'nao', 'acomp'),
(36, 'MAIZA ALVES NUNIZ ', '4', '02/01/2006', 'feminino', '0.000.000', 'QUADRA 3 CASA 6', 'JARDIN LARANJEIRA', 'AGUAS LINDAS', '72910-000', 'GO', '(00)0000-0000', '', '', '', '', 'DENTISTA', '', '', '', 'O +', 'WILLIAN ALVES ARAGÃƒO', '(61)9394-4119', '(61)3372-2180', 'MARIA PEREIRA NUNIZ', '(61)9504-5327', '(61)3372-2180', 'sim', 'acomp'),
(37, 'PEDRO HENRIQUE RODRIGUES DA COSTA', '4', '10/05/2004', 'masculino', '0.000.000', 'QUADRA R CHACARA 1 LOTE 1E', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)3618-6995', '', 'NÃƒO', 'PROBLEMA DE COLUNA', 'CATAPORA', 'TRATAMENTO DE COLUNA', 'MEDICO', '', 'NÃƒO', 'O NEGATIVO ', 'LUIZ CARLOS RODRIGUES DA SILVA', '', '', 'MARIA AGUIDO PERREIRA DA COSTA', '(61)9537-9695', '(61)3618-6995', 'sim', 'ape'),
(38, 'LUCAS DE SOUZA OLIVEIRA', '4', '30/01/2006', 'masculino', '0.000.000', 'QUADRA 1 LOTE 5 ', 'LARANJEIRAS', 'AGUAS LINDAS', '00000-000', 'GO', '(61)8221-1451', '', '', 'ASMA', 'CATAPORA', '', '', '', 'NÃƒO', '', 'FRANCISCO DEASSES GOME OLIVEIRA', '(61)8144-4706', '', 'NUBIA LOPES DE SOUZA OLIVEIRA', '(61)9214-0537', '(61)8221-1451', 'nao', 'acomp'),
(39, 'MATHEUS MESQUITA DA SILVA', '5', '00/00/0000', 'masculino', '0.000.000', 'QUADRA R CH 2 LOTE 2E', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', '', '', '', '', '', '', '', '', '', '', '', 'ELAINA MESQUITA', '(61)9122-4619', '', 'nao', 'ape'),
(40, 'JOÃƒO PAULO MARTINS JORGE DOS SANTOS', '4', '09/08/2005', 'masculino', '0.000.000', 'QUADRA Q LOTE 09 CH3', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9123-9688', '', 'NÃƒO', 'NÃƒO', '', '', '', '', 'NÃƒO', 'A +', 'RIADLO LUIZ J. DOS SANTOS MARTINS', '(61)9200-8858', '', 'FLAVIA MARTINS DOS SANTOS', '(61)9123-9688', '', 'sim', 'ape'),
(41, 'THATYANE MENDES RODRIGUES ', '4', '23/07/2005', 'feminino', '0.000.000', 'QUADRA R CHRACARA 14 LOTE 12', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', '', '', '', '', '', 'LUCILENE RODRIGUES DA SILVA', '(61)9384-3819', '', 'sim', 'ape'),
(42, 'AMANDA FERNANDES DA SILVA', '5', '05/11/2005', 'feminino', '0.000.000', 'QUADRA 3 LOTE 13', 'BELA VISTA', 'AGUAS LINDAS', '72911-536', 'GO', '(61)3618-1920', '', '', 'A ALUNA E EXTREMAMENTE ALERGICA A ABELHA', '', '', '', '', '', '', 'JOSÃ‰ ALENCAR PERREIRA DA SILVA', '(62)9368-3375', '(62)8324-6693', 'FELISBELA BACELAR FERNANDES ', '(61)3618-1920', '(61)8526-8434', 'sim', 'ape'),
(43, 'LUANA RIBEIRO MARQUES', '5', '20/07/2005', 'feminino', '0.000.000', 'NÃƒO INFORMADO', 'NÃƒO INFORMADO', 'AGUAS LINDAS', '00000-000', 'NI', '(00)0000-0000', '', '', '', '', '', '', '', '', '', 'LUCIANO MARQUES ', '(00)0000-0000', '(00)0000-0000', 'GENESI RIBEIRO ', '(00)0000-0000', '(00)0000-0000', 'sim', 'ape'),
(44, 'RONALDO VIANA DO NASCIMENTO ', '4', '16/04/2006', 'masculino', '0.000.000', 'QUADRA R LOTE 2K CH 2', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9535-2703', '', '', '', '', '', '', '', '', '', 'ANTONIO QUERINO DO NASCIMENTO ', '(61)8304-9880', '', 'ANA CLAUDIA VIANA DOS SANTOS ', '(61)9535-2703', '(61)8304-9817', 'nao', 'acomp'),
(45, 'THIAGO SOUSA XAVIER', '4', '19/02/2005', 'masculino', '0.000.000', 'QUADRA R CH 5 LOTE 17', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'NI', '(00)0000-0000', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', '', 'FRANCINALDO LINDO D SOUSA ', '(61)8606-1664', '', 'MARIA ANTONIA R DA SILVA ', '(61)8648-6982', '', 'sim', 'ape'),
(46, 'ERICK CAUÃƒ SILVA MARTINS', '5', '00/00/0000', 'masculino', '0.000.000', 'Q2 LOTE 1 CONJ B ', 'BELA VISTA', 'AGUAS LINDAS', '72911-533', 'NI', '(61)3618-4832', '', '', 'CONVULSÃƒO', 'CATAPORA', '', '', '', '', '', '', '', '', '', '', '', 'sim', 'ape'),
(47, 'LETICIA MONTEIRO ', '5', '20/03/1004', 'feminino', '0.000.000', 'QR B3 LT 05', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9116-3009', '', '', '', '', 'NÃƒO', '', '', '', 'A +', '', '', '', '', '', '', 'sim', 'ape'),
(48, 'GABRIELLY YASMIN H. BEZEIRRA', '4', '22/04/2005', 'feminino', '0.000.000', 'QUADRA K6 LOTE 17', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)3613-8123', '', 'NÃƒO', '', '', 'NÃƒO', '', '', 'NÃƒO', '', '', '', '', 'CAROLINA ESTEFANE H. BEZEIRRA', '', '', 'nao', 'Tescolar'),
(49, 'YASMIN NOGUEIRA DA CUNHA ', '5', '02/03/2004', 'feminino', '0.000.000', 'LEBA C LOTE 9-A ', 'COIMBRA', 'AGUAS LINDAS', '92910-000', 'GO', '(61)3613-2839', '', 'NÃƒO', 'NÃƒO', '', 'NÃƒO', '', '', 'NÃƒO', 'O -', 'ANTONIO CARLOS ALVES DA CUNHA', '(61)9246-2868', '', 'RAIANY ALVES NOGUEIRA', '(61)8510-7773', '(61)3257-9321', 'sim', 'acomp'),
(50, 'JAMILY TEXEIRA FERREIRA', '5', '18/10/2003', 'feminino', '0.000.000', 'QUADRA Q CH22 LT 8', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', 'NÃƒO', 'NÃƒO', 'SARAMPO, CATAPORA', 'NÃƒO', '', '', 'NÃƒO', '', 'JARI EVANGELISTA AFONSO FERREIRA', '', '', 'EVANGELINA OLIVEIRA TEIXEIRA', '(61)8677-1546', '(61)2562-4239', 'sim', 'ape'),
(51, 'IZABELA BARBOSA DE SOUZA LOPES', '5', '23/12/2004', 'feminino', '0.000.000', 'CH 25 LOTE 36', 'COIMBRA', 'AGUAS LINDAS', '72910-518', 'GO', '(61)3613-6975', '', 'NÃƒO', 'NÃƒO', 'CATAPORA', 'NÃƒO', '', '', 'NÃƒO', '', 'EDIVAN DE SOUZA LOPES', '(61)9134-5592', '(62)3352-5005', 'LUCINELE BARBOSA LOPES ', '(61)9226-7180', '', 'sim', 'ape'),
(52, 'LUANA DE SOUZA SANTOS', '5', '21/01/2004', 'feminino', '0.000.000', 'QUADRA D LOTE 8 ', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(__)____-____', '', '', '', '', '', '', '', '', '', 'ISRAEL PERREIRA DOS SANTOS', '', '', 'ANA RITA DE SOUZA SANTOS', '(61)9529-2630', '', 'nao', 'acomp'),
(53, 'MARIA EMANOELLE SILVA DA MACENA', '5', '07/03/2003', 'feminino', '0.000.000', 'QUADRA R CH 4 LOTE 10', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', '', '', 'CATAPORA', '', '', '', '', '', 'JAILTON PERREIRA DAMASCENO', '(61)9312-7637', '', 'ERINETE DOS SANTOSSILVA ', '(61)9288-3274', '(61)9364-2479', 'sim', 'ape'),
(54, 'YAN LIMA COSTA', '5', '11/01/2005', 'masculino', '0.000.000', 'QUADRA P LOTE 18 CH 24', 'COIMBRA', 'AGUAS LINDAS', '72910-000', 'GO', '(61)3619-1827', '', 'NÃƒO', 'NÃƒO', 'CAXUMBA, SARAMPO, CATAPORA', 'NÃƒO', '', '', 'NÃƒO', 'A +', 'ROBERTO BISCO DA COSTA LIMA', '(61)9153-9196', '', 'IARA R. LIMA COSTA', '(61)3619-1827', '', 'sim', 'ape'),
(55, 'HULGO RAILAN MENDES RODRIGUES ', '5', '13/12/2001', 'masculino', '0.000.000', 'QUADRA R CHRACARA 14 LOTE 12', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', 'NÃƒO', 'NÃƒO', '', 'NÃƒO', '', '', 'NÃƒO', '', '', '', '', 'LUCILENE RODRIGUES DA SILVA', '(61)9384-3819', '', 'sim', 'ape'),
(56, 'KAUANNY DOS SANTOS LOPES', '4', '24/11/2005', 'feminino', '0.000.000', 'QUADRA Q LOTE 14 CASA 22', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', 'NÃƒO', 'NÃƒO', '', 'NÃƒO', '', '', 'NÃƒO', '', 'MARCONDEZ LOPES DOS SANTOS ', '(61)9195-6865', '', 'LUCIANEA SANTOS SIQUEIRA ', '(61)9508-1248', '', 'nao', 'acomp'),
(57, 'PEDRO  HENRIQUE DA SILVA CAMPOS', '5', '13/07/2003', 'masculino', '0.000.000', 'QUADRA P CH 18', 'COIMBRA', 'AGUAS LINDAS', '72910-000', 'GO', '(61)9418-1271', '', '', '', '', '', '', '', '', '', 'ROBSON', '', '', 'MARIA LUIZA BEZEIRA DA SILVA', '(61)9224-1817', '', 'sim', 'ape'),
(58, 'KAUÃ FERREIRA LIMA', '4', '30/10/2004', 'masculino', '0.000.000', 'QUADRA Q CH 24 LOTE 8', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9283-4316', '', 'NÃƒO', 'NÃƒO', 'CATAPORA', 'NÃƒO', '', '', 'NÃƒO', 'O +', 'ANTONIO LIMA SILVA ', '(61)9241-1438', '', 'HELLANE PERRIRA LIMA', '(61)9223-4316', '', 'sim', 'ape'),
(59, 'THIAGO ALMEIDA VIRGINHO ', '5', '09/05/2005', 'masculino', '0.000.000', 'QUADRA K CH 2 LOTE 14', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', 'NÃƒO', 'NÃƒO', '', 'NÃƒO', '', '', 'NÃƒO', '', 'FRANCISCO CELSON SILVA VIRGINHO ', '', '', 'CREUZELEIDE ', '', '', 'sim', 'acomp'),
(60, 'NATHALIA B. DE SENA OLIVEIRA ', '4', '01/02/2006', 'feminino', '0.000.000', 'QUADRA B CONJ 2 LOTE 15', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)8331-7826', '', '', '', 'SARAMPO, CATAPORA', '', '', '', '', '', 'EVANDRO DE SENA ', '(61)8528-7082', '(61)9504-1811', 'TERESA MARIA DE OLIVEIRA ', '(61)8331-7826', '', 'nao', 'acomp'),
(61, ' YORANA P. DE ARAUJO ', '4', '02/08/2003', 'feminino', '0.000.000', ' QUADRA 10 LOTE 24 ', ' BELA VISTA', ' AGUAS LINDAS', '72910-000', ' GO', '(61)3033-3968', ' ', ' NÃƒO', 'ALERGIA A MOSQUITO ', 'CATAPORA', 'NÃƒO', 'MEDICO', ' ', 'NÃƒO', 'A +', '', '', '', 'FRANCISCA PERREIRA ARAUJO ', '(61)9159-4878', '(61)8473-7846', 'nao', 'acomp'),
(62, 'ISNAIA VITORIA DA SILVA CRUZ', '4', '14/02/2006', 'feminino', '0.000.000', 'QUADRA B LOTE 10 CONJ B', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', '', 'NÃƒO', 'NÃƒO', '', 'NÃƒO', '', '', 'NÃƒO', 'O -', 'ANDERSON DA SILVA CRUS', '', '', 'IRIS MARIA DA SILVA ', '(61)9374-5377', '', 'sim', 'ape'),
(63, 'DANIELA PRADO SANTOS', '4', '17/08/2005', 'feminino', '0.000.000', 'QUADRA 7 LOTE 16', 'JARDIN LARANJEIRA', 'AGUAS LINDAS', '92911-415', 'GO', '(61)3618-3033', '', 'NÃƒO', '', '', 'NÃƒO', '', '', 'NÃƒO', '', 'WESLEY DOS SANTOS DIAS', '(61)3618-3033', '', 'APARECIDA RODRIGUES DO PRADO', '(61)9652-4317', '', 'nao', 'Tescolar'),
(64, 'IGOR JOSE DUTRO RODRIGUES', '4', '25/08/2005', 'masculino', '0.000.000', 'LOTE 15B CH 15', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)3613-1976', '', '', '', '', '', '', '', '', '', 'JARIADSON PEREIRA ALVES', '(61)3613-1976', '(61)8427-6285', 'CLAUDENIR MARQUES DUTRO', '(61)8575-9325', '(61)3613-1976', 'nao', 'acomp'),
(65, 'SAMUEL PHELIPE DOMINGUES OLIVEIRA', '4', '06/02/2006', 'masculino', '0.000.000', 'QUADRA Q CH 25 LOTE 51', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)3613-7191', '', '', 'BRONQUITE ', 'RUBEOLA, CATAPORA ', '', '', '', '', 'A +', 'JANEI DOMINGUES DE OLIVEIRA ', '(61)3613-7191', '(61)9933-6362', 'LUZINEIDE RODRIGUES DE OLIVEIRA', '(61)3613-7191', '', 'nao', 'acomp'),
(66, 'THAIS ALVES DE BRITO ', '5', '15/10/2004', 'feminino', '0.000.000', 'QUADRA 7 LOTE 30', 'BELA VISTA', 'AGUAS LINDAS', '00000-000', 'GO', '(00)0000-0000', 'NÃƒO', 'NÃƒO', '', '', 'NÃƒO', '', '', 'NÃƒO', '', 'ANTONIO CLEICIE FERREIRA ALVES ', '(61)9292-4399', '', 'ROSIMIRA DE BRITO', '(61)9292-4399', '', 'nao', 'acomp'),
(67, 'AMAIANY SOUSA DOS ANJOS', '5', '00/00/0000', 'feminino', '0.000.000', 'QUADRA LOTE 15 CH 20', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9860-4293', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'CATAPORA', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'A +', 'ALECIO ALVES DOS ANJOS', '(61)9111-2363', '', 'MARIA ELIANA M. F. DE SOUSA', '(61)9860-4293', '', 'sim', 'acomp'),
(68, 'DAVID LINHARES FERREIRA PASCAL ', '5', '14/06/2004', 'masculino', '0.000.000', 'QUADRA R CH 4 LOTE 16', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9128-8109', '', '', '', '', '', '', '', '', '', 'FRANCISCO DEASSIS MENDES PASCAL', '', '', 'NEIE LINHARIS FERREIRA PASCAL', '(61)9128-8109', '(61)9851-8800', 'sim', 'ape'),
(69, 'DIEGO DE CARVALHO DE OLIVEIRA ', '4', '26/10/2004', 'masculino', '0.000.000', 'AV 1 CH P ', 'COIMBRA', 'AGUAS LINDAS', '77616-712', 'GO', '(61)9128-3003', '', '', 'SINUZITI TENITI ALÃ‰RGICA', '', '', '', '', '', 'A +', 'GILSON CARVALHO DA SILVA', '(61)9128-3003', '', 'ANA CÃ‰LIA DE OLIVEIRA REIS ', '(61)9566-8309', '', 'sim', 'acomp'),
(70, 'RICARDO SANTOS SILVA', '4', '23/04/2004', 'masculino', '3.399.605', 'QUADRA R CH 4 LOTE 10', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9312-7637', '', '', '', '', '', '', '', 'CARBONAZEZINA', '', 'JAILTON PERREIRA DAMASCENO', '(61)9312-7637', '(61)9288-3274', 'ELIZETY DOS SANTOS ', '(61)9288-3274', '(61)9312-7637', 'sim', 'ape'),
(71, 'YAN SILVA UZANA ', '4', '00/00/0000', 'masculino', '0.000.000', 'QUADRA K LOTE 9 ', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9269-5438', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'CATAPORA, COQUELUCHE ', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'A +', '', '', '', 'ROSICLEIA LIMA SILVA', '(61)8574-8767', '', 'sim', 'ape'),
(72, 'BRUNO RODRIGUES DE LIMA', '5', '25/03/2003', 'masculino', '0.000.000', 'QUADRA Q CHACARA 1 LOTE 19', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)9238-5397', 'NÃƒO', 'NÃƒO', 'BRONQUITE ', 'CATAPORA', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'O +', 'BERNARDO DE LIMA FERREIRA FILHO ', '', '', 'CLAUDENES RODRIGUES PIRES ', '(61)9238-5397', '(61)8502-8265', 'sim', 'acomp'),
(73, 'ANNA BEATRIZ ASSIS CABRAL FREITAS', '5', '27/05/2000', 'feminino', '0.000.000', 'QUADRA Q CH 22 LOTE 4 ', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '(61)8525-6863', '', '', '', 'CATAPORA', '', '', '', '', 'A +', 'JOSE LUIZ O. FREITAS', '(61)9629-7574', '', 'JAQUELINE FRANCISCA ASSIS', '(61)8525-6863', '', 'sim', 'ape'),
(74, 'FABRICIO GABRIEL HENDES GOMES', '4', '21/10/2005', 'masculino', '0.000.000', 'QUADRA 15 LOTE 20', 'BELA VISTA', 'ÃGUAS LINDAS', '00000-000', 'GO', '(61)9294-6232', 'NÃƒO', 'NÃƒO', '', 'CATAPORA', 'NÃƒO', '', '', 'NÃƒO', 'A +', 'JOSUE OLIVEIRA GOMES', '(61)9294-6232', '', 'THATIANA CRISTHINA B MENDES', '(61)9294-6232', '', 'sim', 'ape'),
(75, 'JOAO VINICIUS FERREIRA CUNHA', '4', '19/02/2006', 'masculino', '0.000.000', 'QUADRA C LOTE 03 CH.8/28', 'COIMBRA', 'AGUAS LINDAS', '72911-476', 'GO', '(61)8518-3725', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'O +', 'ANDERSON RIBEIRO DOS SANTOS', '(61)8439-9745', '(61)9504-3617', 'ALYNE ROSANA REIS FERREIRA', '(61)9333-0983', '(61)8518-3725', 'nao', 'acomp'),
(76, ' ANA CLARA FERREIRA CUNHA', '4', '25/05/2004', 'masculino', '0.000.000', ' QUADRA C LT03 CH 8/28', ' COIMBRA', ' AGUAS LINDAS', '72911-476', ' GO', '(61)8518-3725', ' NÃƒO', ' NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'O +', 'ANDERSON RIBEIRO DOS SANTOS', '(61)8418-9745', '(61)9504-3617', 'ALYNE ROSANA REIS FERREIRA', '(61)8518-3725', '(61)9333-0983', 'nao', 'ape'),
(77, 'MAURICIO MIGUEL B. DA SILVA', '4', '28/02/2006', 'masculino', '0.000.000', 'Q B3 LOTE 10', 'JARDIN LARANJEIRA', 'AGUAS LINDAS', '72333-335', 'GO', '(61)9150-2541', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'CATAPORA', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', '', 'ROMEU BATISTA PIRES', '(61)9569-5929', '', 'IVANI PIRES DA SILVA', '(61)9150-2541', '', 'nao', 'acomp'),
(78, 'GABRIEL FERREIRA LOPES', '5', '20/08/2004', 'masculino', '0.000.000', 'CASA 28 Q.C L3 CH 28', 'SETOR COIMBRA ', 'AGUAS LINDAS', '72910-000', 'GO', '(61)9283-4441', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'CATAPORA', 'NÃƒO', 'NÃƒO', 'NÃƒO', 'NÃƒO', '', 'ABEL DOS SANTOS LOPES', '', '', 'ROSEANE CONCEICAO REIS FERREIRA ', '(61)9283-4441', '', 'nao', 'acomp'),
(79, 'MATHEUS HENRQIQUE OLIVEIRA DE SOUZA', '5', '26/01/2002', 'masculino', '0.000.000', 'Q 7 LOTE 25 ', 'COIMBRA', 'AGUAS LINDAS', '00000-000', 'GO', '', 'NÃƒO', 'NÃƒO', '', 'ALERGIA', '', '', '', '', '', '', '', '', 'JANDERLENE ALCINA DE OLIVEIRA', '', '', 'sim', 'ape');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
