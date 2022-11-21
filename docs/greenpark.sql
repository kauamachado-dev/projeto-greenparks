-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2022 às 16:00
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `greenpark`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `id_usuario` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id_usuario`, `id_oficina`) VALUES
(7, 1),
(8, 2),
(1, 1),
(2, 1),
(3, 1),
(5, 1),
(4, 2),
(6, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_eventos` int(11) NOT NULL,
  `nome_eventos` varchar(100) NOT NULL,
  `data_eventos` date NOT NULL,
  `horario_eventos` time NOT NULL,
  `desc_eventos` varchar(250) NOT NULL,
  `cep_eventos` int(11) NOT NULL,
  `num_ende_eventos` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id_eventos`, `nome_eventos`, `data_eventos`, `horario_eventos`, `desc_eventos`, `cep_eventos`, `num_ende_eventos`, `id_usuario`) VALUES
(1, 'Feira Saul Elkind', '2022-10-16', '00:00:00', 'Feira todos os domingos.', 0, '', 0),
(2, 'Festa de Halloween', '2022-10-30', '00:00:00', 'Venha participar da festa de Halloween!!', 0, '', 0),
(5, 'teste', '2003-11-23', '11:20:00', 'teste', 8606782, '1234', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oficina`
--

CREATE TABLE `oficina` (
  `id_oficina` int(11) NOT NULL,
  `nome_oficina` varchar(100) NOT NULL,
  `data_oficina` date NOT NULL,
  `horario_oficina` time NOT NULL,
  `desc_oficina` varchar(100) NOT NULL,
  `cep_oficina` int(11) NOT NULL,
  `num_ende_oficina` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `oficina`
--

INSERT INTO `oficina` (`id_oficina`, `nome_oficina`, `data_oficina`, `horario_oficina`, `desc_oficina`, `cep_oficina`, `num_ende_oficina`, `id_usuario`) VALUES
(1, '', '2022-09-23', '09:00:00', 'Aula de vôlei', 0, '', 7),
(2, '', '2022-09-24', '16:00:00', 'Aula de futebol', 0, '', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `id_responsavel` int(11) NOT NULL,
  `nome_responsavel` varchar(100) NOT NULL,
  `sobrenome_responsavel` varchar(100) NOT NULL,
  `cpf_responsavel` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`id_responsavel`, `nome_responsavel`, `sobrenome_responsavel`, `cpf_responsavel`) VALUES
(1, 'Thiago ', 'Thomas Araújo', 0),
(2, 'Carolina ', 'Rosa Freitas', 0),
(3, 'Jaqueline ', 'Hernandes Baptista', 0),
(4, 'Michael ', 'Roberto da Silva', 0),
(5, 'Maria ', 'Carolina Fernandes', 0),
(6, 'Jorge ', 'Gabriel de Souza', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `descricao`) VALUES
(1, 'adm'),
(2, 'professor'),
(3, 'aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `sobrenome_usuario` varchar(100) NOT NULL,
  `nasc_usuario` date NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `fone_usuario` varchar(20) NOT NULL,
  `cpf_usuario` varchar(20) NOT NULL,
  `senha_usuario` varchar(30) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `id_responsavel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `sobrenome_usuario`, `nasc_usuario`, `email_usuario`, `fone_usuario`, `cpf_usuario`, `senha_usuario`, `id_tipo_usuario`, `id_responsavel`) VALUES
(1, 'Marcele ', 'Antonia Baptista', '2009-06-10', 'marcele.dutra@geradornv.com.br', '(43) 99205-2454 ', '485.860.166-83   ', 'hKz=BWy07@G', 1, 3),
(2, 'Rosiméri ', 'Radgonda da Silva', '2005-07-12', 'rosimeri.souza@geradornv.com.br', '(43) 96781-1358 ', '771.877.469-46', 'tJdsTvG+*VNN', 1, 4),
(3, 'Douglas ', 'Rodrigues Freitas', '2006-10-06', 'douglas.almeida@geradornv.com.br', '(43) 98230-1546', '349.464.319-93', 'AIZgbvvugQO7', 1, 2),
(4, 'Joana ', 'Braganza Araújo', '2005-08-26', 'joana.Araújo@geradornv.com.br', '(43) 97105-3285', '315.011.579-57', '3TACsD**6073', 1, 1),
(5, 'Caio ', 'Henrique de Souza', '2009-08-27', 'caio.Henrique@geradornv.com.br', '(43) 98636-6748', '622.166.799-25', '_UcKkUKctWjC', 1, 6),
(6, 'Adson ', 'Matos Fernandes', '2007-11-15', 'adson.Fernandes@geradornv.com.br', '(43) 98515-6256', '453.871.109-89', '5TYu0gYS_N(G', 1, 5),
(7, 'Evelyn', 'Antônia Branco', '1992-08-22', 'evelyn.branco@geradornv.com.br', '(43) 96788-7887', '510.266.609-63', 'GS#LW)r0+u6*', 2, 0),
(8, 'Raimundo', 'Campos Campelo', '1996-01-25', 'raimundo.campelo@geradornv.com.br', '(43) 98753-2667', '305.838.329-03', 'auOvU@Rn9TWB', 2, 0),
(9, 'ADM', '', '2000-09-15', 'greenpower.adm@gmail.com', '43 956689253', '155.040.196-60   ', 'green123', 0, 0),
(10, 'teste', 'teste', '2022-11-10', 'teste@teste', '4312345678', '14573658942', '123456', 2, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aula`
--
ALTER TABLE `aula`
  ADD KEY `fk_usuario_aula` (`id_usuario`),
  ADD KEY `fk_aula_oficina` (`id_oficina`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_eventos`),
  ADD KEY `fk_evento_usuario` (`id_usuario`);

--
-- Índices para tabela `oficina`
--
ALTER TABLE `oficina`
  ADD PRIMARY KEY (`id_oficina`),
  ADD KEY `fk_usuario_oficina` (`id_usuario`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`id_responsavel`);

--
-- Índices para tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_tipo_usuario` (`id_tipo_usuario`),
  ADD KEY `fk_usuario_responsavel` (`id_responsavel`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `oficina`
--
ALTER TABLE `oficina`
  MODIFY `id_oficina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `id_responsavel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `fk_aula_oficina` FOREIGN KEY (`id_oficina`) REFERENCES `oficina` (`id_oficina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aula_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_evento_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `oficina`
--
ALTER TABLE `oficina`
  ADD CONSTRAINT `fk_oficina_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_responsavel` FOREIGN KEY (`id_responsavel`) REFERENCES `responsavel` (`id_responsavel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipo_usuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
