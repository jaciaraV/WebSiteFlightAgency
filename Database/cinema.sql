-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Set-2024 às 13:49
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aeronaves`
--

DROP TABLE IF EXISTS `aeronaves`;
CREATE TABLE IF NOT EXISTS `aeronaves` (
  `AeronaveID` int NOT NULL AUTO_INCREMENT,
  `Modelo` varchar(50) DEFAULT NULL,
  `CapacidadePassageiros` int DEFAULT NULL,
  PRIMARY KEY (`AeronaveID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `aeronaves`
--

INSERT INTO `aeronaves` (`AeronaveID`, `Modelo`, `CapacidadePassageiros`) VALUES
(1, 'Airbus A320', 180),
(2, 'Boeing 737', 160),
(3, 'Airbus A330', 250),
(4, 'Boeing 787', 210),
(5, 'Embraer E190', 110),
(6, 'Airbus A350', 300),
(7, 'Boeing 747', 400),
(8, 'Airbus A380', 550),
(9, 'Boeing 777', 350),
(10, 'Bombardier CRJ900', 90),
(11, 'ATR 72', 70),
(12, 'Embraer E195', 120),
(13, 'Airbus A319', 140),
(14, 'Boeing 767', 280);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aeroportos`
--

DROP TABLE IF EXISTS `aeroportos`;
CREATE TABLE IF NOT EXISTS `aeroportos` (
  `AeroportoID` int NOT NULL AUTO_INCREMENT,
  `NomeAeroporto` varchar(50) DEFAULT NULL,
  `Cidade` varchar(50) DEFAULT NULL,
  `Pais` varchar(50) DEFAULT NULL,
  `CodigoIATA` varchar(10) DEFAULT NULL,
  `CodigoICAO` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`AeroportoID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `aeroportos`
--

INSERT INTO `aeroportos` (`AeroportoID`, `NomeAeroporto`, `Cidade`, `Pais`, `CodigoIATA`, `CodigoICAO`) VALUES
(1, 'Aeroporto Humberto Delgado', 'Lisboa', 'Portugal', 'LIS', 'LPPT'),
(2, 'Aeroporto Francisco Sá Carneiro', 'Porto', 'Portugal', 'OPO', 'LPPR'),
(3, 'Aeroporto de Faro', 'Faro', 'Portugal', 'FAO', 'LPFR'),
(4, 'Aeroporto João Paulo II', 'Ponta Delgada', 'Portugal', 'PDL', 'LPPD'),
(5, 'Aeroporto Cristiano Ronaldo', 'Funchal', 'Portugal', 'FNC', 'LPMA'),
(6, 'Aeroporto de Madrid-Barajas', 'Madrid', 'Espanha', 'MAD', 'LEMD'),
(7, 'Aeroporto de Paris-Charles de Gaulle', 'Paris', 'França', 'CDG', 'LFPG'),
(8, 'Aeroporto de Londres-Heathrow', 'Londres', 'Reino Unido', 'LHR', 'EGLL'),
(9, 'Aeroporto de Berlim-Tegel', 'Berlim', 'Alemanha', 'TXL', 'EDDT'),
(10, 'Aeroporto de Roma-Fiumicino', 'Roma', 'Itália', 'FCO', 'LIRF'),
(11, 'Aeroporto de Amsterdã-Schiphol', 'Amsterdã', 'Países Baixos', 'AMS', 'EHAM'),
(12, 'Aeroporto de Zurique', 'Zurique', 'Suíça', 'ZRH', 'LSZH'),
(13, 'Aeroporto de Bruxelas', 'Bruxelas', 'Bélgica', 'BRU', 'EBBR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `assentos`
--

DROP TABLE IF EXISTS `assentos`;
CREATE TABLE IF NOT EXISTS `assentos` (
  `AssentoID` int NOT NULL AUTO_INCREMENT,
  `DestinoID` int DEFAULT NULL,
  `AeronaveID` int DEFAULT NULL,
  `Status` enum('Disponivel','Reservado','Ocupado') DEFAULT NULL,
  PRIMARY KEY (`AssentoID`),
  KEY `DestinoID` (`DestinoID`),
  KEY `AeronaveID` (`AeronaveID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `assentos`
--

INSERT INTO `assentos` (`AssentoID`, `DestinoID`, `AeronaveID`, `Status`) VALUES
(1, 1, 1, 'Ocupado'),
(2, 1, 2, 'Ocupado'),
(3, 2, 3, 'Ocupado'),
(4, 2, 4, 'Ocupado'),
(5, 3, 5, 'Ocupado'),
(6, 3, 6, 'Ocupado'),
(7, 4, 7, 'Ocupado'),
(8, 4, 8, 'Ocupado'),
(9, 5, 9, 'Ocupado'),
(10, 5, 10, 'Ocupado'),
(11, 6, 11, 'Ocupado'),
(12, 6, 12, 'Ocupado'),
(13, 7, 13, 'Ocupado'),
(14, 7, 14, 'Reservado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destinos`
--

DROP TABLE IF EXISTS `destinos`;
CREATE TABLE IF NOT EXISTS `destinos` (
  `DestinoID` int NOT NULL AUTO_INCREMENT,
  `NomeDestino` varchar(50) DEFAULT NULL,
  `DataDisponibilidadeInicio` date DEFAULT NULL,
  `DataDisponibilidadeFim` date DEFAULT NULL,
  PRIMARY KEY (`DestinoID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `destinos`
--

INSERT INTO `destinos` (`DestinoID`, `NomeDestino`, `DataDisponibilidadeInicio`, `DataDisponibilidadeFim`) VALUES
(1, 'Paris', '2024-06-01', '2024-12-31'),
(2, 'Barcelona', '2024-06-01', '2024-12-31'),
(3, 'Amsterdã', '2024-06-01', '2024-12-31'),
(4, 'Roma', '2024-06-01', '2024-12-31'),
(5, 'Dublin', '2024-06-01', '2024-12-31'),
(6, 'Atenas', '2024-06-01', '2024-12-31'),
(7, 'Bruxelas', '2024-06-01', '2024-12-31'),
(8, 'Zurique', '2024-06-01', '2024-12-31'),
(9, 'Copenhague', '2024-06-01', '2024-12-31'),
(10, 'Oslo', '2024-06-01', '2024-12-31'),
(11, 'Varsóvia', '2024-06-01', '2024-12-31'),
(12, 'Praga', '2024-06-01', '2024-12-31'),
(13, 'Viena', '2024-06-01', '2024-12-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `passageiros`
--

DROP TABLE IF EXISTS `passageiros`;
CREATE TABLE IF NOT EXISTS `passageiros` (
  `PassageiroID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Data_Nas` date DEFAULT NULL,
  `N_documento` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`PassageiroID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `passageiros`
--

INSERT INTO `passageiros` (`PassageiroID`, `Nome`, `Data_Nas`, `N_documento`, `Email`, `Telefone`) VALUES
(1, 'Joana Silva', '1985-01-15', '123456789', 'joana.silva@example.com', '912003942'),
(2, 'Vivian Vieira', '1996-07-16', '987654321', 'vivian.vieira@example.com', '912038576'),
(3, 'Sergio da Silva', '1988-03-25', '112233445', 'sergio.dasilva@example.com', '923485732'),
(4, 'Luis Fernandes', '1975-04-05', '556677889', 'luis.fernandes@example.com', '913476588'),
(5, 'Ana Costa', '1982-05-12', '667788990', 'ana.costa@example.com', '912004567'),
(6, 'Carlos Nogueira', '1991-06-21', '778899001', 'carlos.nogueira@example.com', '915678234'),
(7, 'Rita Martins', '1987-07-30', '889900112', 'rita.martins@example.com', '917845632'),
(8, 'Pedro Sousa', '1995-08-18', '990011223', 'pedro.sousa@example.com', '912345678'),
(9, 'Mariana Lopes', '1983-09-25', '101112334', 'mariana.lopes@example.com', '918273645'),
(10, 'João Pereira', '1979-10-10', '121314445', 'joao.pereira@example.com', '919384756'),
(11, 'Clara Mendes', '1986-11-29', '131415556', 'clara.mendes@example.com', '911234567'),
(12, 'Paulo Rodrigues', '1993-12-15', '141516667', 'paulo.rodrigues@example.com', '922456789'),
(13, 'Lucia Carvalho', '1989-02-14', '151617778', 'lucia.carvalho@example.com', '933567890');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pilotos`
--

DROP TABLE IF EXISTS `pilotos`;
CREATE TABLE IF NOT EXISTS `pilotos` (
  `PilotoID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`PilotoID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pilotos`
--

INSERT INTO `pilotos` (`PilotoID`, `Nome`, `Email`, `Telefone`) VALUES
(1, 'Ana Pires', 'ana.pires@example.com', '911224455'),
(2, 'Tiago Gomes', 'tiago.gomes@example.com', '912335566'),
(3, 'Mariana Ferreira', 'mariana.ferreira@example.com', '913556677'),
(4, 'Rui Matos', 'rui.matos@example.com', '914667788'),
(5, 'Sofia Almeida', 'sofia.almeida@example.com', '915778899'),
(6, 'José Ribeiro', 'jose.ribeiro@example.com', '916889900'),
(7, 'Inês Costa', 'ines.costa@example.com', '917990011'),
(8, 'Pedro Martins', 'pedro.martins@example.com', '918101112'),
(9, 'Carla Azevedo', 'carla.azevedo@example.com', '919212223'),
(10, 'Nuno Cunha', 'nuno.cunha@example.com', '920323334'),
(11, 'Helena Figueiredo', 'helena.figueiredo@example.com', '921434445'),
(12, 'Paulo Monteiro', 'paulo.monteiro@example.com', '922545556'),
(13, 'Vera Campos', 'vera.campos@example.com', '923656667');

-- --------------------------------------------------------

--
-- Estrutura da tabela `precos`
--

DROP TABLE IF EXISTS `precos`;
CREATE TABLE IF NOT EXISTS `precos` (
  `PrecoID` int NOT NULL,
  `DestinoID` int DEFAULT NULL,
  `Preco` decimal(10,2) DEFAULT NULL,
  `DataValidadeInicio` date DEFAULT NULL,
  `DataValidadeFim` date DEFAULT NULL,
  `VooID` int UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`PrecoID`),
  KEY `DestinoID` (`DestinoID`),
  KEY `fk_precovoo` (`VooID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `precos`
--

INSERT INTO `precos` (`PrecoID`, `DestinoID`, `Preco`, `DataValidadeInicio`, `DataValidadeFim`, `VooID`) VALUES
(0, 1, '150.00', '2024-06-15', '2024-12-31', 1),
(1, 1, '150.00', '2024-06-15', '2024-12-31', 2),
(2, 2, '200.00', '2024-06-15', '2024-12-31', 3),
(3, 3, '120.00', '2024-06-15', '2024-12-31', 4),
(4, 4, '180.00', '2024-06-15', '2024-12-31', 5),
(5, 5, '250.00', '2024-06-15', '2024-12-31', 6),
(6, 6, '300.00', '2024-06-15', '2024-12-31', 7),
(7, 7, '180.00', '2024-06-15', '2024-12-31', 8),
(8, 8, '220.00', '2024-06-15', '2024-12-31', 9),
(9, 9, '280.00', '2024-06-15', '2024-12-31', 10),
(10, 10, '350.00', '2024-06-15', '2024-12-31', 11),
(11, 11, '400.00', '2024-06-15', '2024-12-31', 13),
(12, 12, '210.00', '2024-06-15', '2024-12-31', 12),
(13, 13, '180.00', '2024-06-15', '2024-12-31', 14),
(14, 14, '300.00', '2024-06-15', '2024-12-31', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `ReservaID` int NOT NULL AUTO_INCREMENT,
  `PassageiroID` int DEFAULT NULL,
  `VooID` int DEFAULT NULL,
  `AssentoID` int DEFAULT NULL,
  `NomePassageiro` varchar(100) DEFAULT NULL,
  `DataHoraReserva` datetime DEFAULT NULL,
  PRIMARY KEY (`ReservaID`),
  KEY `PassageiroID` (`PassageiroID`),
  KEY `VooID` (`VooID`),
  KEY `AssentoID` (`AssentoID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`ReservaID`, `PassageiroID`, `VooID`, `AssentoID`, `NomePassageiro`, `DataHoraReserva`) VALUES
(1, 1, 1, 1, NULL, '2024-06-15 10:00:00'),
(2, 2, 2, 2, NULL, '2024-06-16 11:30:00'),
(3, 3, 3, 3, NULL, '2024-06-17 12:45:00'),
(4, 4, 4, 4, NULL, '2024-06-18 14:15:00'),
(5, 5, 5, 5, NULL, '2024-06-19 16:00:00'),
(6, 6, 6, 6, NULL, '2024-06-20 18:30:00'),
(7, 7, 7, 7, NULL, '2024-06-21 20:45:00'),
(8, 8, 8, 8, NULL, '2024-06-22 22:00:00'),
(9, 9, 9, 9, NULL, '2024-06-23 09:30:00'),
(10, 10, 10, 10, NULL, '2024-06-24 11:15:00'),
(11, 11, 11, 11, NULL, '2024-06-25 13:00:00'),
(12, 12, 12, 12, NULL, '2024-06-26 15:30:00'),
(13, 13, 13, 13, NULL, '2024-06-27 17:45:00'),
(14, 14, 14, 14, NULL, '2024-06-28 19:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `email`, `senha`) VALUES
(37, 'h', 'cc@gmail.com', '$2y$10$Yd1MhIuy5pLJV9bqL2z0BOdxIfFvy7uLPWLFFYRlOyT/VceACPE/W'),
(40, 'sergio', 'cc@gmail.com', '$2y$10$9nLvtzl5bFEeHpvrNJBrsuJK2d7Rtz440WW553DWN8gb7zDmzYHf2'),
(35, 'connor', 'cc@gmail.com', '$2y$10$tjKTncJ4/o1k67E9fLj0V.ZBqYieV10sliPaAeFvg5VzkJ7YOSi3y'),
(39, 'Vivian', 'vivian@gmail.com', '$2y$10$QWbYtBdIaaY5uaOYZD4cNOXd0BPIdZlPPjbMNzJu4OvUgXOE1yRLW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voos`
--

DROP TABLE IF EXISTS `voos`;
CREATE TABLE IF NOT EXISTS `voos` (
  `VooID` int NOT NULL AUTO_INCREMENT,
  `NumeroVoo` varchar(20) DEFAULT NULL,
  `DataHoraPartida` datetime DEFAULT NULL,
  `DataHoraChegada` datetime DEFAULT NULL,
  `AeroportoOrigem` varchar(50) DEFAULT NULL,
  `AeroportoDestino` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`VooID`),
  KEY `fk_precosvoo` (`preco`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `voos`
--

INSERT INTO `voos` (`VooID`, `NumeroVoo`, `DataHoraPartida`, `DataHoraChegada`, `AeroportoOrigem`, `AeroportoDestino`, `preco`) VALUES
(1, 'TP124', '2024-06-15 15:00:00', '2024-06-15 19:00:00', 'LIS', 'CDG', '150.00'),
(2, 'TP125', '2024-06-16 18:00:00', '2024-06-16 22:00:00', 'OPO', 'BCN', '150.00'),
(3, 'TP126', '2024-06-17 13:00:00', '2024-06-17 17:00:00', 'FAO', 'AMS', '200.00'),
(4, 'TP127', '2024-06-18 07:00:00', '2024-06-18 11:00:00', 'LIS', 'FCO', '120.00'),
(5, 'TP128', '2024-06-19 09:00:00', '2024-06-19 13:00:00', 'OPO', 'DUB', '180.00'),
(6, 'TP129', '2024-06-20 14:00:00', '2024-06-20 18:00:00', 'FAO', 'ATH', '250.00'),
(7, 'TP130', '2024-06-21 16:00:00', '2024-06-21 20:00:00', 'LIS', 'BRU', '300.00'),
(8, 'TP131', '2024-06-22 10:00:00', '2024-06-22 14:00:00', 'OPO', 'ZRH', '180.00'),
(9, 'TP132', '2024-06-23 11:00:00', '2024-06-23 15:00:00', 'FAO', 'CPH', '220.00'),
(10, 'TP133', '2024-06-24 12:00:00', '2024-06-24 16:00:00', 'LIS', 'OSL', '280.00'),
(11, 'TP134', '2024-06-25 08:00:00', '2024-06-25 12:00:00', 'OPO', 'WAW', '350.00'),
(12, 'TP135', '2024-06-26 17:00:00', '2024-06-26 21:00:00', 'FAO', 'PRG', '210.00'),
(13, 'TP136', '2024-06-27 06:00:00', '2024-06-27 10:00:00', 'LIS', 'VIE', '400.00'),
(14, 'PT123', '2024-07-06 10:00:00', '2024-07-06 12:00:00', 'Portugal', 'Portugal', '180.00'),
(15, 'TP137', '2024-09-09 10:00:00', '2024-09-09 12:00:00', 'Brasil', 'Peru', '300.00'),
(16, 'TP138', '2024-09-09 14:00:00', '2024-09-09 16:00:00', 'Peru', 'Brasil', NULL),
(17, 'TP139', '2024-09-09 18:00:00', '2024-09-09 20:00:00', 'Espanha', 'Peru', NULL),
(18, 'TP140', '2024-09-10 09:00:00', '2024-09-10 11:00:00', 'Portugal', 'Brasil', NULL),
(19, 'TP141', '2024-09-10 13:00:00', '2024-09-10 15:00:00', 'Brasil', 'Portugal', NULL),
(20, 'TP142', '2024-09-11 11:00:00', '2024-09-11 13:00:00', 'Espanha', 'Peru', NULL),
(21, 'TP143', '2024-09-12 08:00:00', '2024-09-12 10:00:00', 'Portugal', 'Peru', NULL),
(22, 'TP144', '2024-09-13 16:00:00', '2024-09-13 18:00:00', 'Portugal', 'Espanha', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
