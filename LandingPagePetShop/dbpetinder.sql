-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Maio-2023 às 19:58
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbpetinder`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadotante`
--

CREATE TABLE `tbadotante` (
  `Nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idAdotante` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbadotante`
--

INSERT INTO `tbadotante` (`Nome`, `email`, `idAdotante`) VALUES
('', '', 1),
('', '', 2),
('', '', 4),
('', '', 5),
('', '', 6),
('', '', 7),
('', '', 8),
('', '', 9),
('', '', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdoador`
--

CREATE TABLE `tbdoador` (
  `idDoador` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbdoador`
--

INSERT INTO `tbdoador` (`idDoador`, `Nome`, `email`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `Nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`senha`, `email`, `id`, `Nome`) VALUES
('$2y$10$Ncx3qz0mvFi5LU2RkCKsUun6xt88XXIa2r1.OrYkIMLwgKoSD6MIy', 'odin@gmail.com', 1, 'Odin'),
('$2y$10$2PZvQjDbD.Valkx/IoPR.OQa1sqZiWwI61lOizbgq86SaAbe.lHa2', 'regina@gmail.com', 2, 'Regina'),
('$2y$10$BKdXM51.t1bqC16h3FWxJe9ACpr2Ax5NK3SjIJMFnGwm88BKi09zi', 'regina1@gmail.com', 3, 'Regina1'),
('$2y$10$m75bM/9xYyEjkY9Mj/uYmeMbArbSum/UchrkdH7F9uaGVbuE8OUXO', 'rato@gmail.com', 4, 'rato'),
('$2y$10$frn3VnMlsYAfpHSvAM/SB.PODbX/r7.fqnvFT5zMWYOxrygdLTzK.', 'beavis@gmail.com', 5, 'Beavis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmeupet`
--

CREATE TABLE `tbmeupet` (
  `nomedoanimal` varchar(100) NOT NULL,
  `tipodeanimal` varchar(50) NOT NULL,
  `idadedoanimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbmeupet`
--

INSERT INTO `tbmeupet` (`nomedoanimal`, `tipodeanimal`, `idadedoanimal`) VALUES
('', 'a', 0),
('', 'a', 0),
('', 'a', 0),
('', 'a', 0),
('', 'Pardal', 0),
('Juju', 'Calopsita', 2),
('', '', 0),
('', 'Cobra', 0),
('', '', 0),
('Juju', 'Calopsita', 2),
('', '', 0),
('', 'Pardal', 0),
('', '', 0),
('', '', 0),
('', '', 0),
('Ettore', 'Gato', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `Nome` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `confirmacaosenha` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`Nome`, `email`, `senha`, `confirmacaosenha`, `id`) VALUES
('Regina', 'regina@gmail.com', '$2y$10$2PZvQjDbD.Valkx/IoPR.OQa1sqZiWwI61lOizbgq86SaAbe.lHa2', 'regina2812', 0),
('Safado', 'safado@gmail.com', '$2y$10$5nzJWV23B3YmwXO55GQXx.bZ/3Yr.tIgw5uHLkLRWZAvchsBqOsKe', 'Safado6969', 0),
('Horácio', 'hor@gmail.com', '$2y$10$8XqH/R7dmUXF3jnxaMB5FefoW2NY8la1X1106CJal9kiaY7DffnSy', 'Horobardo69', 0),
('Regina1', 'regina1@gmail.com', '$2y$10$BKdXM51.t1bqC16h3FWxJe9ACpr2Ax5NK3SjIJMFnGwm88BKi09zi', 'Regina2812', 0),
('Goblin', 'goblin@gmail.com', '$2y$10$Cq62C/hkp/w.ZdtRY3WvzeDFxmDArZx7xU2H320qzATFvZTZp40yO', '$2y$10$mHKR1KVbgixW2/8.9BaZwuARVeHDSjo1OpV7YOLIufDQQdT1D4p82', 0),
('Beavis', 'beavis@gmail.com', '$2y$10$frn3VnMlsYAfpHSvAM/SB.PODbX/r7.fqnvFT5zMWYOxrygdLTzK.', 'Butthead69', 0),
('zé ruela', 'ze@gmail.com', '$2y$10$GnBvJ0hRD6B7JZ1OQK2m7Ofp3MFTLRmni.qOexpckovOqdJG7F32u', 'Zeze6969', 0),
('Abominável homem das neves', 'abominavel@gmail.com', '$2y$10$jJLLPECNP65Qwf/4szQTkuOENOedHb5xr..ewxY4ts7cakV4kTBfe', '$2y$10$CDPsvSm8jJwsGLpdFPDWd.P5GxGTpF13tA4T4bdURzhrWStxGI0iy', 0),
('rato', 'rato@gmail.com', '$2y$10$m75bM/9xYyEjkY9Mj/uYmeMbArbSum/UchrkdH7F9uaGVbuE8OUXO', 'osuperratO69', 0),
('Odin', 'odin@gmail.com', '$2y$10$Ncx3qz0mvFi5LU2RkCKsUun6xt88XXIa2r1.OrYkIMLwgKoSD6MIy', 'Odinobarbaro69', 0),
('Gordo', 'gordo@gmail.com', '$2y$10$RclZ6xkYKdl5grMC.WmTXORo6iNI2TteQZzsBaSXgmpxN7gXnGsTa', '$2y$10$.RibOLMA6zI19COj5Xi4ROpm8xgWnZth8TZsVE3NysxKlm6QYZzMS', 0),
('João das Nuvens', 'joao@gmail.com', '$2y$10$ub1v6nQD19ZfQqkIH/FIBedqsiJTFM2wZMNFuJ1fDnJlFMVCf3hba', '$2y$10$wcqhCPp0QKmcO5tTG72rcO.rcWbgpStJAOHWWwm2j4w6hPJ62jZRq', 0),
('Iago', 'iago@gmail.com', '$2y$10$XDE72Jb5sE2bC2ODV2H6Redx9kNI1Mcne9NSUtPLnZudQtlhDamN2', 'Otelo69desdemona', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadotante`
--
ALTER TABLE `tbadotante`
  ADD PRIMARY KEY (`idAdotante`);

--
-- Índices para tabela `tbdoador`
--
ALTER TABLE `tbdoador`
  ADD PRIMARY KEY (`idDoador`);

--
-- Índices para tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `senha` (`senha`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`senha`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadotante`
--
ALTER TABLE `tbadotante`
  MODIFY `idAdotante` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbdoador`
--
ALTER TABLE `tbdoador`
  MODIFY `idDoador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD CONSTRAINT `tblogin_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tbusuario` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblogin_ibfk_2` FOREIGN KEY (`senha`) REFERENCES `tbusuario` (`senha`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
