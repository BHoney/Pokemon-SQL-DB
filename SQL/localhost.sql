-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2016 at 10:38 AM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `robertm7_Pokemon`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`robertm7`@`localhost` PROCEDURE `catchPokemon`(IN `Pokemon` VARCHAR(255), IN `Trainer` SMALLINT(5))
    NO SQL
update Pokemon set OT = Trainer, CurrentTrainer = Trainer
where SpeciesName = Pokemon$$

CREATE DEFINER=`robertm7`@`localhost` PROCEDURE `releasePokemon`(IN `Pokemon` VARCHAR(255))
    NO SQL
update Pokemon set CurrentTrainer = null
where SpeciesName = Pokemon$$

--
-- Functions
--
CREATE DEFINER=`robertm7`@`localhost` FUNCTION `playerwins`(`player` VARCHAR(255)) RETURNS int(11)
    NO SQL
return (select count(Winner) as 'Battles Won' from BattleRecord where Winner =player)$$

CREATE DEFINER=`robertm7`@`localhost` FUNCTION `test_function`(text char(255)) RETURNS char(255) CHARSET utf8
return concat ('You said: ', text)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `BattleRecord`
--

CREATE TABLE IF NOT EXISTS `BattleRecord` (
  `ID` smallint(5) NOT NULL AUTO_INCREMENT,
  `PlayerID1` smallint(6) NOT NULL,
  `Player1` varchar(11) NOT NULL,
  `PlayerID2` int(11) NOT NULL,
  `Player2` varchar(255) NOT NULL,
  `Winner` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Player`
--

CREATE TABLE IF NOT EXISTS `Player` (
  `PlayerID` smallint(5) NOT NULL AUTO_INCREMENT,
  `PlayerName` varchar(255) NOT NULL DEFAULT 'Red',
  `BadgeCount` int(10) DEFAULT NULL,
  `DexCount` int(10) DEFAULT NULL,
  PRIMARY KEY (`PlayerID`,`PlayerName`),
  UNIQUE KEY `PlayerID` (`PlayerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25947 ;

--
-- Dumping data for table `Player`
--

INSERT INTO `Player` (`PlayerID`, `PlayerName`, `BadgeCount`, `DexCount`) VALUES
(439, 'Zoe', 8, 296),
(25922, 'Todd', 7, 190),
(25924, 'Micah', 24, 700),
(25937, 'Amethyst', 4, 1143),
(25945, 'Robert', 8, 6),
(25946, 'Aspen', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `PokeDexEntry`
--

CREATE TABLE IF NOT EXISTS `PokeDexEntry` (
  `DexNumber` int(10) NOT NULL,
  `PokemonSpeciesName` varchar(255) NOT NULL,
  `DexEntry` varchar(255) NOT NULL,
  PRIMARY KEY (`DexNumber`),
  KEY `FKPokeDexEnt107186` (`PokemonSpeciesName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Pokemon`
--

CREATE TABLE IF NOT EXISTS `Pokemon` (
  `OT` smallint(5) DEFAULT NULL,
  `DexNumber` int(10) NOT NULL,
  `SpeciesName` varchar(255) NOT NULL,
  `Level` smallint(3) NOT NULL,
  `Nickname` varchar(255) DEFAULT NULL,
  `PlayerPlayerName` varchar(255) DEFAULT NULL,
  `CurrentTrainer` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`SpeciesName`),
  KEY `FKPokemon598329` (`OT`,`PlayerPlayerName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pokemon`
--

INSERT INTO `Pokemon` (`OT`, `DexNumber`, `SpeciesName`, `Level`, `Nickname`, `PlayerPlayerName`, `CurrentTrainer`) VALUES
(25937, 681, 'Aegislash', 89, NULL, 'Amethyst', 25924),
(25946, 1, 'Bulbasaur', 1, '', 'Aspen', 439),
(NULL, 420, 'Cherubi', 5, NULL, NULL, NULL),
(439, 466, 'Electrivire', 78, 'Duracell', 'Zoe', 25922),
(25922, 196, 'Espeon', 74, NULL, 'Todd', 439),
(439, 999, 'FakeMon', 100, 'Garbage Trash', 'Zoe', 25946),
(25945, 94, 'Gengar', 50, 'Beetlejuice', 'Robert', 25945),
(25922, 471, 'Glaceon', 58, NULL, 'Todd', 25922),
(439, 392, 'Infernape', 80, 'Wu Kong', 'Zoe', 25922),
(25922, 470, 'Leafeon', 68, NULL, 'Todd', 25922),
(439, 474, 'Porygon-Z', 50, 'Crash Override', 'Zoe', 439),
(25924, 212, 'Scizor', 38, 'Clamps', 'Micah', 25937),
(25922, 700, 'Slyveon', 80, NULL, 'Todd', 25922),
(439, 121, 'Starmie', 69, NULL, 'Zoe', 439);

-- --------------------------------------------------------

--
-- Table structure for table `Stats`
--

CREATE TABLE IF NOT EXISTS `Stats` (
  `PokemonSpeciesName` varchar(255) NOT NULL,
  `PokemonOT` smallint(5) NOT NULL DEFAULT '0',
  `Attack` int(10) NOT NULL,
  `Defense` int(10) NOT NULL,
  `Special Attack` int(10) NOT NULL,
  `Special Defense` int(10) NOT NULL,
  `Speed` int(10) NOT NULL,
  PRIMARY KEY (`PokemonOT`),
  KEY `FKStats286580` (`PokemonSpeciesName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `TradeRecord`
--

CREATE TABLE IF NOT EXISTS `TradeRecord` (
  `TradeID` int(255) NOT NULL AUTO_INCREMENT,
  `PlayerPlayerID` smallint(5) NOT NULL,
  `PlayerPlayerName` varchar(255) NOT NULL,
  `PokemonSpeciesName` varchar(255) NOT NULL,
  `PlayerPlayerID2` smallint(5) NOT NULL,
  `PlayerPlayerName2` varchar(255) NOT NULL,
  `PokemonSpeciesName2` varchar(255) NOT NULL,
  PRIMARY KEY (`TradeID`),
  KEY `FKTradeRecor761006` (`PlayerPlayerID`,`PlayerPlayerName`),
  KEY `FKTradeRecor855746` (`PlayerPlayerID2`,`PlayerPlayerName2`),
  KEY `FKTradeRecor819404` (`PokemonSpeciesName`),
  KEY `FKTradeRecor361183` (`PokemonSpeciesName2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Triggers `TradeRecord`
--
DROP TRIGGER IF EXISTS `CurrentTrainerUpdate`;
DELIMITER //
CREATE TRIGGER `CurrentTrainerUpdate` AFTER INSERT ON `TradeRecord`
 FOR EACH ROW BEGIN
	declare oldId smallInt;
	declare newId smallInt;
	set oldId = new.PlayerPlayerID;
	set newId = new.PlayerPlayerID2;

	update Pokemon set CurrentTrainer = newID where (Pokemon.PlayerPlayerName = new.PlayerPlayerName) and (Pokemon.SpeciesName = new.PokemonSpeciesName);
	update Pokemon set CurrentTrainer = oldId where (Pokemon.PlayerPlayerName = new.PlayerPlayerName2) and (Pokemon.SpeciesName = new.PokemonSpeciesName2);
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `fiftyview`
--
CREATE TABLE IF NOT EXISTS `fiftyview` (
`OT` smallint(5)
,`DexNumber` int(10)
,`SpeciesName` varchar(255)
,`Level` smallint(3)
,`Nickname` varchar(255)
,`PlayerPlayerName` varchar(255)
,`CurrentTrainer` smallint(6)
);
-- --------------------------------------------------------

--
-- Table structure for table `movelist`
--

CREATE TABLE IF NOT EXISTS `movelist` (
  `Pokemon` varchar(255) NOT NULL,
  `OT` smallint(5) DEFAULT NULL,
  `Move1` varchar(255) NOT NULL,
  `Move2` varchar(255) DEFAULT NULL,
  `Move3` varchar(255) DEFAULT NULL,
  `Move4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Pokemon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movelist`
--

INSERT INTO `movelist` (`Pokemon`, `OT`, `Move1`, `Move2`, `Move3`, `Move4`) VALUES
('Gengar', 25945, 'Disable', 'Encore', 'Shadow Ball', 'Substitute'),
('Starmie', 439, 'Rapid Spin', 'Psychic', 'Surf', 'Hydro Pump');

-- --------------------------------------------------------

--
-- Structure for view `fiftyview`
--
DROP TABLE IF EXISTS `fiftyview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`robertm7`@`localhost` SQL SECURITY DEFINER VIEW `fiftyview` AS select `Pokemon`.`OT` AS `OT`,`Pokemon`.`DexNumber` AS `DexNumber`,`Pokemon`.`SpeciesName` AS `SpeciesName`,`Pokemon`.`Level` AS `Level`,`Pokemon`.`Nickname` AS `Nickname`,`Pokemon`.`PlayerPlayerName` AS `PlayerPlayerName`,`Pokemon`.`CurrentTrainer` AS `CurrentTrainer` from `Pokemon` where (`Pokemon`.`Level` >= 50);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `PokeDexEntry`
--
ALTER TABLE `PokeDexEntry`
  ADD CONSTRAINT `FKPokeDexEnt107186` FOREIGN KEY (`PokemonSpeciesName`) REFERENCES `Pokemon` (`SpeciesName`);

--
-- Constraints for table `Pokemon`
--
ALTER TABLE `Pokemon`
  ADD CONSTRAINT `FKPokemon598329` FOREIGN KEY (`OT`, `PlayerPlayerName`) REFERENCES `Player` (`PlayerID`, `PlayerName`),
  ADD CONSTRAINT `Pokemon_ibfk_1` FOREIGN KEY (`OT`) REFERENCES `Player` (`PlayerID`);

--
-- Constraints for table `TradeRecord`
--
ALTER TABLE `TradeRecord`
  ADD CONSTRAINT `FKTradeRecor761006` FOREIGN KEY (`PlayerPlayerID`, `PlayerPlayerName`) REFERENCES `Player` (`PlayerID`, `PlayerName`),
  ADD CONSTRAINT `FKTradeRecor855746` FOREIGN KEY (`PlayerPlayerID2`, `PlayerPlayerName2`) REFERENCES `Player` (`PlayerID`, `PlayerName`),
  ADD CONSTRAINT `Player1ID` FOREIGN KEY (`PlayerPlayerID`) REFERENCES `Player` (`PlayerID`),
  ADD CONSTRAINT `Player2ID` FOREIGN KEY (`PlayerPlayerID2`) REFERENCES `Player` (`PlayerID`),
  ADD CONSTRAINT `Pokemon1` FOREIGN KEY (`PokemonSpeciesName`) REFERENCES `Pokemon` (`SpeciesName`),
  ADD CONSTRAINT `Pokemon2` FOREIGN KEY (`PokemonSpeciesName2`) REFERENCES `Pokemon` (`SpeciesName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
