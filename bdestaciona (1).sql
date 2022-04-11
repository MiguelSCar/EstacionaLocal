-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Abr-2022 às 23:20
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdestaciona`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblaluguel`
--

CREATE TABLE `tblaluguel` (
  `idaluguel` int(11) NOT NULL,
  `carro` int(30) NOT NULL,
  `vaga` int(30) NOT NULL,
  `tempo` varchar(30) NOT NULL,
  `preco` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblaluguel`
--

INSERT INTO `tblaluguel` (`idaluguel`, `carro`, `vaga`, `tempo`, `preco`) VALUES
(3, 1, 5, '3hrs', 21.00),
(4, 1, 5, '3 hrs', 6.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblaviso`
--

CREATE TABLE `tblaviso` (
  `idaviso` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` longtext NOT NULL,
  `remetente` varchar(100) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblaviso`
--

INSERT INTO `tblaviso` (`idaviso`, `titulo`, `texto`, `remetente`, `data`) VALUES
(1, 'oi', 'aaaaaaaaaaaaaaaaaaaaaaa', 'eu', '2022-04-20'),
(2, 'aaaaa', 'a', 'eu', '2022-01-26'),
(3, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'miguel', '2022-04-06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcarros`
--

CREATE TABLE `tblcarros` (
  `idcarro` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cor` varchar(30) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblcarros`
--

INSERT INTO `tblcarros` (`idcarro`, `nome`, `marca`, `cor`, `cliente`, `email`, `celular`) VALUES
(1, 'ASX 2022', 'Mitsubishi', 'azulado', 'juan', 'juan@gmail.com', '219393932'),
(3, 'Pálio', 'Fiat', 'Branco', '', '', ''),
(7, 'BR20', 'Ferrari', 'Vermelho', 'Miguel', 'migserafcarva@gmail.com', '2232323'),
(8, 'juana', 'Fiat', 'verde', 'Miguel', 'migserafcarva@gmail.com', '2232323');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblidoso`
--

CREATE TABLE `tblidoso` (
  `ididoso` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblidoso`
--

INSERT INTO `tblidoso` (`ididoso`, `status`) VALUES
(1, 'sim'),
(2, 'não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblpreferencial`
--

CREATE TABLE `tblpreferencial` (
  `idpreferencial` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblpreferencial`
--

INSERT INTO `tblpreferencial` (`idpreferencial`, `status`) VALUES
(1, 'sim'),
(2, 'não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblvagas`
--

CREATE TABLE `tblvagas` (
  `idvaga` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `preferencial` int(30) NOT NULL,
  `idoso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblvagas`
--

INSERT INTO `tblvagas` (`idvaga`, `estado`, `preferencial`, `idoso`) VALUES
(5, 'Ativa', 2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblaluguel`
--
ALTER TABLE `tblaluguel`
  ADD PRIMARY KEY (`idaluguel`),
  ADD KEY `fk_aluguel_carros` (`carro`),
  ADD KEY `fk_vagas_vagas` (`vaga`);

--
-- Índices para tabela `tblaviso`
--
ALTER TABLE `tblaviso`
  ADD PRIMARY KEY (`idaviso`);

--
-- Índices para tabela `tblcarros`
--
ALTER TABLE `tblcarros`
  ADD PRIMARY KEY (`idcarro`);

--
-- Índices para tabela `tblidoso`
--
ALTER TABLE `tblidoso`
  ADD PRIMARY KEY (`ididoso`);

--
-- Índices para tabela `tblpreferencial`
--
ALTER TABLE `tblpreferencial`
  ADD PRIMARY KEY (`idpreferencial`);

--
-- Índices para tabela `tblvagas`
--
ALTER TABLE `tblvagas`
  ADD PRIMARY KEY (`idvaga`),
  ADD KEY `fk_vagas_idoso` (`preferencial`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblaluguel`
--
ALTER TABLE `tblaluguel`
  MODIFY `idaluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tblaviso`
--
ALTER TABLE `tblaviso`
  MODIFY `idaviso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblcarros`
--
ALTER TABLE `tblcarros`
  MODIFY `idcarro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tblidoso`
--
ALTER TABLE `tblidoso`
  MODIFY `ididoso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblpreferencial`
--
ALTER TABLE `tblpreferencial`
  MODIFY `idpreferencial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblvagas`
--
ALTER TABLE `tblvagas`
  MODIFY `idvaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tblaluguel`
--
ALTER TABLE `tblaluguel`
  ADD CONSTRAINT `fk_aluguel_carros` FOREIGN KEY (`carro`) REFERENCES `tblcarros` (`idcarro`),
  ADD CONSTRAINT `fk_vagas_vagas` FOREIGN KEY (`vaga`) REFERENCES `tblvagas` (`idvaga`);

--
-- Limitadores para a tabela `tblvagas`
--
ALTER TABLE `tblvagas`
  ADD CONSTRAINT `fk_vagas_idoso` FOREIGN KEY (`preferencial`) REFERENCES `tblpreferencial` (`idpreferencial`),
  ADD CONSTRAINT `fk_vagas_preferencial` FOREIGN KEY (`preferencial`) REFERENCES `tblpreferencial` (`idpreferencial`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
