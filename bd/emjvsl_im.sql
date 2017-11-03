-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Out-2017 às 08:56
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emjvsl_im`
--
CREATE DATABASE IF NOT EXISTS `emjvsl_im` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `emjvsl_im`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `matricula` int(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `pai` varchar(255) NOT NULL,
  `mae` varchar(255) NOT NULL,
  `profissao_pai` varchar(255) NOT NULL,
  `profissao_mae` varchar(255) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `naturalidade` varchar(255) NOT NULL,
  `cor` int(11) NOT NULL,
  `sexo` int(11) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` int(20) DEFAULT NULL,
  `cep` int(10) NOT NULL,
  `n_registro` varchar(20) NOT NULL,
  `n_livro` varchar(10) NOT NULL,
  `folha` varchar(10) NOT NULL,
  `cartorio` varchar(255) NOT NULL,
  `cidade_cartorio` varchar(255) NOT NULL,
  `estado_cartorio` int(11) NOT NULL,
  `data_registro` date NOT NULL,
  `instituicao` varchar(255) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `turma` int(11) DEFAULT NULL,
  `turno` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  `telefone_fixo` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `data_matricula` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aux_cor`
--

CREATE TABLE `aux_cor` (
  `id` int(11) NOT NULL,
  `cor` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aux_cor`
--

INSERT INTO `aux_cor` (`id`, `cor`) VALUES
(1, 'Branco'),
(2, 'Pardo'),
(3, 'Indígena'),
(4, 'Amarelo'),
(5, 'Preto'),
(6, 'Não Informado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aux_documentos`
--

CREATE TABLE `aux_documentos` (
  `id_turma_virtual` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `documento` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aux_horario`
--

CREATE TABLE `aux_horario` (
  `id_horario` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `horario` time NOT NULL,
  `disciplina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aux_sexo`
--

CREATE TABLE `aux_sexo` (
  `id` int(11) NOT NULL,
  `sexo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aux_sexo`
--

INSERT INTO `aux_sexo` (`id`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Feminino'),
(3, 'Outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `boletim`
--

CREATE TABLE `boletim` (
  `id` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `disciplina` int(11) NOT NULL,
  `ch` int(11) NOT NULL,
  `tad` int(11) NOT NULL,
  `n1` double NOT NULL,
  `f1` int(10) NOT NULL,
  `n2` double NOT NULL,
  `f2` int(10) NOT NULL,
  `n3` double NOT NULL,
  `f3` int(10) NOT NULL,
  `n4` double NOT NULL,
  `f4` int(10) NOT NULL,
  `frequencia` int(11) NOT NULL,
  `media` double NOT NULL,
  `situacao` int(11) NOT NULL,
  `nota_rec` double NOT NULL,
  `ano` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`) VALUES
(16, 'HistÃ³ria'),
(15, 'Geografia'),
(13, 'MatemÃ¡tica'),
(14, 'CiÃªncias'),
(12, 'PortuguÃªs'),
(17, 'Cultura'),
(18, 'Ensino Religioso'),
(19, 'InglÃªs'),
(20, 'Artes'),
(21, 'EducaÃ§Ã£o FisÃ­ca'),
(23, 'InformÃ¡tica BÃ¡sica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `responsavel` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) DEFAULT NULL,
  `sigla` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(72) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id_estado`, `sigla`, `nome`) VALUES
(1, 'AC', 'ACRE'),
(2, 'AL', 'ALAGOAS'),
(3, 'AP', 'AMAPÁ'),
(4, 'AM', 'AMAZONAS'),
(5, 'BA', 'BAHIA'),
(6, 'CE', 'CEARÁ'),
(7, 'DF', 'DISTRITO FEDERAL'),
(8, 'ES', 'ESPÍRITO SANTO'),
(9, 'RR', 'RORAIMA'),
(10, 'GO', 'GOIÁS'),
(11, 'MA', 'MARANHÃO'),
(12, 'MT', 'MATO GROSSO'),
(13, 'MS', 'MATO GROSSO DO SUL'),
(14, 'MG', 'MINAS GERAIS'),
(15, 'PA', 'PARÁ'),
(16, 'PB', 'PARAÍBA'),
(17, 'PR', 'PARANÁ'),
(18, 'PE', 'PERNAMBUCO'),
(19, 'PI', 'PIAUÍ'),
(20, 'RJ', 'RIO DE JANEIRO'),
(21, 'RN', 'RIO GRANDE DO NORTE'),
(22, 'RS', 'RIO GRANDE DO SUL'),
(23, 'RO', 'RONDÔNIA'),
(24, 'TO', 'TOCANTINS'),
(25, 'SC', 'SANTA CATARINA'),
(26, 'SP', 'SÃO PAULO'),
(27, 'SE', 'SERGIPE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `turno` int(11) NOT NULL,
  `ano` year(4) NOT NULL,
  `segunda` int(11) NOT NULL DEFAULT '1',
  `terca` int(11) NOT NULL DEFAULT '2',
  `quarta` int(11) NOT NULL DEFAULT '3',
  `quinta` int(11) NOT NULL DEFAULT '4',
  `sexta` int(11) NOT NULL DEFAULT '5'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `matricula` int(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `sexo` int(11) NOT NULL,
  `cor` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(15) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone_celular` varchar(20) NOT NULL,
  `telefone_fixo` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`matricula`, `senha`, `foto`, `nome`, `sexo`, `cor`, `cpf`, `rg`, `cep`, `id_disciplina`, `id_turno`, `data_nascimento`, `telefone_celular`, `telefone_fixo`, `email`, `data_cadastro`) VALUES
(1201729129, '0448', 'nenhum arquivo', 'Leonardo MaurÃ­cio da Silva', 1, 2, 1759890448, 3240161, '59490-000', 23, 1, '1995-11-24', '(84)9430-2191', '(84)99482-9780', 'leomauricio7@gmail.com', '2017-10-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recados`
--

CREATE TABLE `recados` (
  `id` int(11) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `conteudo` varchar(10000) NOT NULL,
  `remetente` varchar(255) NOT NULL,
  `destinatario` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `lida` int(1) NOT NULL DEFAULT '0',
  `nao_lida` int(1) DEFAULT '0',
  `lixeira` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_aluno`
--

CREATE TABLE `situacao_aluno` (
  `id` int(11) NOT NULL,
  `situacao` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `situacao_aluno`
--

INSERT INTO `situacao_aluno` (`id`, `situacao`) VALUES
(1, 'Cursando'),
(2, 'Aprovado'),
(3, 'Reprovado'),
(4, 'Recuperação'),
(5, 'Evadido'),
(6, 'Tranferido'),
(7, 'Matricula Cancelada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `tipo`) VALUES
(1, 'Declaração de Matricula'),
(2, 'Declaração de Vinculo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_recado`
--

CREATE TABLE `tipo_recado` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_recado`
--

INSERT INTO `tipo_recado` (`id`, `tipo`) VALUES
(1, 'sala'),
(2, 'Aluno'),
(3, 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `turno` int(11) NOT NULL,
  `sala` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `turno`, `sala`) VALUES
(383, '7Âº Ano ', 3, 7),
(18649, '3Âº Ano "A"', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_virtual`
--

CREATE TABLE `turma_virtual` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `turma` int(11) NOT NULL,
  `disciplina` int(11) NOT NULL,
  `ano` year(4) NOT NULL,
  `documentos` int(11) NOT NULL,
  `professor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turno`
--

CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `turno` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turno`
--

INSERT INTO `turno` (`id`, `turno`) VALUES
(1, 'Matutino'),
(2, 'Vespertino'),
(3, 'Noturno');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `aux_cor`
--
ALTER TABLE `aux_cor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aux_documentos`
--
ALTER TABLE `aux_documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indexes for table `aux_horario`
--
ALTER TABLE `aux_horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indexes for table `aux_sexo`
--
ALTER TABLE `aux_sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boletim`
--
ALTER TABLE `boletim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `recados`
--
ALTER TABLE `recados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `situacao_aluno`
--
ALTER TABLE `situacao_aluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_recado`
--
ALTER TABLE `tipo_recado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turma_virtual`
--
ALTER TABLE `turma_virtual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aux_cor`
--
ALTER TABLE `aux_cor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `aux_documentos`
--
ALTER TABLE `aux_documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aux_sexo`
--
ALTER TABLE `aux_sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `boletim`
--
ALTER TABLE `boletim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recados`
--
ALTER TABLE `recados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `situacao_aluno`
--
ALTER TABLE `situacao_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo_recado`
--
ALTER TABLE `tipo_recado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `turma_virtual`
--
ALTER TABLE `turma_virtual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `turno`
--
ALTER TABLE `turno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
