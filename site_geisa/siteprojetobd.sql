-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.36-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema db_siteprojeto
--

CREATE DATABASE IF NOT EXISTS db_siteprojeto;
USE db_siteprojeto;

--
-- Definition of table `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE `avaliacoes` (
  `idavaliacoes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) NOT NULL,
  `nota` varchar(45) NOT NULL,
  `img` varchar(175) DEFAULT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `idpessoas` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idavaliacoes`,`idpessoas`) USING BTREE,
  KEY `FK_avaliacoes_pessoas` (`idpessoas`),
  CONSTRAINT `FK_avaliacoes_pessoas` FOREIGN KEY (`idpessoas`) REFERENCES `pessoas` (`idpessoas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avaliacoes`
--

/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;


--
-- Definition of table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `idbanner` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(155) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `descricao` longtext NOT NULL,
  `video` longtext NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` (`idbanner`,`img`,`titulo`,`descricao`,`video`,`cadastro`,`alteracao`,`ativo`) VALUES 
 (1,'https://www.infoescola.com/wp-content/uploads/2010/08/doberman_223996249-1000x667.jpg','Aproveite sua saudável e<br>Deliciosa Comida','aaaa','https://www.youtube.com/watch?v=dQw4w9WgXcQ','2023-07-22 13:45:25','2023-06-02 21:25:31','A');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;


--
-- Definition of table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `idbooking` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(175) NOT NULL,
  `databooking` varchar(45) NOT NULL,
  `horariobooking` varchar(45) NOT NULL,
  `numeropessoas` varchar(10) NOT NULL,
  `mensagem` varchar(145) NOT NULL,
  `horapedido` datetime NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `idpessoas` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idbooking`,`idpessoas`) USING BTREE,
  KEY `FK_booking_pessoas` (`idpessoas`),
  CONSTRAINT `FK_booking_pessoas` FOREIGN KEY (`idpessoas`) REFERENCES `pessoas` (`idpessoas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;


--
-- Definition of table `cardapio`
--

DROP TABLE IF EXISTS `cardapio`;
CREATE TABLE `cardapio` (
  `idcardapio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(145) NOT NULL,
  `titulo` varchar(75) NOT NULL,
  `descricao` varchar(155) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `idmenucardapio` int(10) unsigned NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idcardapio`,`idmenucardapio`) USING BTREE,
  KEY `FK_cardapio_menucardapio` (`idmenucardapio`),
  CONSTRAINT `FK_cardapio_menucardapio` FOREIGN KEY (`idmenucardapio`) REFERENCES `menucardapio` (`idmenucardapio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardapio`
--

/*!40000 ALTER TABLE `cardapio` DISABLE KEYS */;
INSERT INTO `cardapio` (`idcardapio`,`img`,`titulo`,`descricao`,`preco`,`idmenucardapio`,`cadastro`,`alteracao`,`ativo`) VALUES 
 (8,'assets/img/menu/menu-item-1.png','Magnam Tiste','Lorem, deren, trataro, filede, nerada','$5.95',1,'0000-00-00 00:00:00','2023-06-05 20:50:46','A'),
 (9,'assets/img/menu/menu-item-2.png','Aut Luia','Lorem, deren, trataro, filede, nerada','$14.95',1,'0000-00-00 00:00:00','2023-06-05 20:50:46','A'),
 (10,'assets/img/menu/menu-item-3.png','Est Eligendi','Lorem, deren, trataro, filede, nerada','$8.95',1,'0000-00-00 00:00:00','2023-06-05 20:50:46','A'),
 (11,'assets/img/menu/menu-item-4.png','Eos Luibusdam','Lorem, deren, trataro, filede, nerada','$12.95',1,'0000-00-00 00:00:00','2023-06-05 20:50:46','A'),
 (12,'assets/img/menu/menu-item-5.png','Eos Luibusdam','Lorem, deren, trataro, filede, nerada','$12.95',1,'0000-00-00 00:00:00','2023-06-05 20:50:46','A'),
 (13,'assets/img/menu/menu-item-6.png','Laboriosam Direva','Lorem, deren, trataro, filede, nerada','$9.95',1,'0000-00-00 00:00:00','2023-06-05 20:50:46','A');
/*!40000 ALTER TABLE `cardapio` ENABLE KEYS */;


--
-- Definition of table `cardschefs`
--

DROP TABLE IF EXISTS `cardschefs`;
CREATE TABLE `cardschefs` (
  `idcardschefs` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(175) NOT NULL,
  `descricao` varchar(175) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `idfuncionarios` int(10) unsigned NOT NULL,
  `idredessociais` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idcardschefs`,`idfuncionarios`,`idredessociais`) USING BTREE,
  KEY `FK_cardschefs_funcionarios` (`idfuncionarios`),
  KEY `FK_cardschefs_redessociais` (`idredessociais`),
  CONSTRAINT `FK_cardschefs_funcionarios` FOREIGN KEY (`idfuncionarios`) REFERENCES `funcionarios` (`idfuncionarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_cardschefs_redessociais` FOREIGN KEY (`idredessociais`) REFERENCES `redessociais` (`idredessociais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardschefs`
--

/*!40000 ALTER TABLE `cardschefs` DISABLE KEYS */;
/*!40000 ALTER TABLE `cardschefs` ENABLE KEYS */;


--
-- Definition of table `contatenos`
--

DROP TABLE IF EXISTS `contatenos`;
CREATE TABLE `contatenos` (
  `idcontatenos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(145) NOT NULL,
  `mapa` varchar(175) NOT NULL,
  `cardtitulo` varchar(75) NOT NULL,
  `icon` varchar(75) DEFAULT NULL,
  `descricao` varchar(145) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(145) NOT NULL,
  `mensagem` text NOT NULL,
  `cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `idpessoas` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idcontatenos`,`idpessoas`) USING BTREE,
  KEY `FK_contatenos_pessoas` (`idpessoas`),
  CONSTRAINT `FK_contatenos_pessoas` FOREIGN KEY (`idpessoas`) REFERENCES `pessoas` (`idpessoas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contatenos`
--

/*!40000 ALTER TABLE `contatenos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contatenos` ENABLE KEYS */;


--
-- Definition of table `dados`
--

DROP TABLE IF EXISTS `dados`;
CREATE TABLE `dados` (
  `iddados` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `valor` varchar(10) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `img` varchar(145) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`iddados`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dados`
--

/*!40000 ALTER TABLE `dados` DISABLE KEYS */;
INSERT INTO `dados` (`iddados`,`valor`,`titulo`,`img`,`cadastro`,`alteracao`,`ativo`) VALUES 
 (1,'232','clients','','0000-00-00 00:00:00','2023-06-05 19:39:24','A'),
 (2,'521','projects','','0000-00-00 00:00:00','2023-06-05 19:39:24','A'),
 (3,'1453','hours of support','','0000-00-00 00:00:00','2023-06-05 19:39:24','A'),
 (4,'32','workers','','0000-00-00 00:00:00','2023-06-05 19:39:24','A');
/*!40000 ALTER TABLE `dados` ENABLE KEYS */;


--
-- Definition of table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `ideventos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(145) NOT NULL,
  `img` varchar(175) NOT NULL,
  `tituloimg` varchar(75) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `descricao` varchar(175) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`ideventos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventos`
--

/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;


--
-- Definition of table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer` (
  `idfooter` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(125) DEFAULT NULL,
  `titulo` varchar(75) NOT NULL,
  `endereco` varchar(145) NOT NULL,
  `contato` varchar(145) NOT NULL,
  `horario` varchar(75) NOT NULL,
  `siganos` varchar(45) NOT NULL,
  `idredessociais` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idfooter`,`idredessociais`) USING BTREE,
  KEY `FK_footer_redessociais` (`idredessociais`),
  CONSTRAINT `FK_footer_redessociais` FOREIGN KEY (`idredessociais`) REFERENCES `redessociais` (`idredessociais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

/*!40000 ALTER TABLE `footer` DISABLE KEYS */;
/*!40000 ALTER TABLE `footer` ENABLE KEYS */;


--
-- Definition of table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE `funcionarios` (
  `idfuncionarios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idpessoas` int(10) unsigned NOT NULL,
  `admissao` datetime NOT NULL,
  `demissao` datetime NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idfuncionarios`,`idpessoas`),
  KEY `FK_funcionarios_pessoas` (`idpessoas`),
  CONSTRAINT `FK_funcionarios_pessoas` FOREIGN KEY (`idpessoas`) REFERENCES `pessoas` (`idpessoas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcionarios`
--

/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;


--
-- Definition of table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE `galeria` (
  `idgaleria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `img` varchar(175) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idgaleria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeria`
--

/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;


--
-- Definition of table `menucardapio`
--

DROP TABLE IF EXISTS `menucardapio`;
CREATE TABLE `menucardapio` (
  `idmenucardapio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idmenucardapio`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menucardapio`
--

/*!40000 ALTER TABLE `menucardapio` DISABLE KEYS */;
INSERT INTO `menucardapio` (`idmenucardapio`,`titulo`,`categoria`,`cadastro`,`alteracao`,`ativo`) VALUES 
 (1,'<p>Check Our <span>Yummy Menu</span></p>','Starters','0000-00-00 00:00:00','2023-06-05 20:11:06','A'),
 (2,'','Breakfast','0000-00-00 00:00:00','2023-06-05 20:07:21','A'),
 (3,'','Lunch','0000-00-00 00:00:00','2023-06-05 20:07:21','A'),
 (4,'<p>Check Our <span>Yummy Menu</span></p>','Dinner','0000-00-00 00:00:00','2023-06-05 20:11:46','A');
/*!40000 ALTER TABLE `menucardapio` ENABLE KEYS */;


--
-- Definition of table `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE `pessoas` (
  `idpessoas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(125) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `email` varchar(145) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `cargo` varchar(75) NOT NULL,
  PRIMARY KEY (`idpessoas`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pessoas`
--

/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;


--
-- Definition of table `pqnos`
--

DROP TABLE IF EXISTS `pqnos`;
CREATE TABLE `pqnos` (
  `idpqnos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(75) NOT NULL,
  `descricao` varchar(145) NOT NULL,
  `icone` varchar(75) DEFAULT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idpqnos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pqnos`
--

/*!40000 ALTER TABLE `pqnos` DISABLE KEYS */;
INSERT INTO `pqnos` (`idpqnos`,`titulo`,`descricao`,`icone`,`cadastro`,`alteracao`,`ativo`) VALUES 
 (1,'Why Choose Yummy?','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor','','0000-00-00 00:00:00','2023-06-05 19:36:38','A'),
 (2,'Corporis voluptates officia eiusmod','Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip\r\n\r\n','bi bi-clipboard-data','0000-00-00 00:00:00','2023-06-05 19:36:38','A'),
 (3,'Ullamco laboris ladore pan','Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt\r\n\r\n','bi bi-gem','0000-00-00 00:00:00','2023-06-05 19:36:38','A'),
 (4,'Labore consequatur incidid dolore','Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere\r\n\r\n','bi bi-inboxes','0000-00-00 00:00:00','2023-06-05 21:19:49','A');
/*!40000 ALTER TABLE `pqnos` ENABLE KEYS */;


--
-- Definition of table `redessociais`
--

DROP TABLE IF EXISTS `redessociais`;
CREATE TABLE `redessociais` (
  `idredessociais` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(145) NOT NULL,
  `link` varchar(145) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idredessociais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redessociais`
--

/*!40000 ALTER TABLE `redessociais` DISABLE KEYS */;
/*!40000 ALTER TABLE `redessociais` ENABLE KEYS */;


--
-- Definition of table `sobrenos`
--

DROP TABLE IF EXISTS `sobrenos`;
CREATE TABLE `sobrenos` (
  `idsobrenos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `img` varchar(155) NOT NULL,
  `imgcontato` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL,
  `video` varchar(155) NOT NULL,
  `cadastro` datetime NOT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` char(1) NOT NULL DEFAULT 'A',
  `msgcontato` varchar(145) NOT NULL,
  `contato` varchar(45) NOT NULL,
  PRIMARY KEY (`idsobrenos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sobrenos`
--

/*!40000 ALTER TABLE `sobrenos` DISABLE KEYS */;
INSERT INTO `sobrenos` (`idsobrenos`,`titulo`,`img`,`imgcontato`,`descricao`,`video`,`cadastro`,`alteracao`,`ativo`,`msgcontato`,`contato`) VALUES 
 (1,'Amogus','assets/img/about-2.jpg','assets/img/about.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n                magna aliqua.\r\n              </p>\r\n              <ul>\r\n                <li><i class=\"bi bi-check2-all\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>\r\n                <li><i class=\"bi bi-check2-all\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>\r\n                <li><i class=\"bi bi-check2-all\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>\r\n              </ul>\r\n              <p>\r\n                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\n                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident','https://www.youtube.com/watch?v=KOWcj7XKnfQ','0000-00-00 00:00:00','2023-06-05 19:17:38','A','pao','123');
/*!40000 ALTER TABLE `sobrenos` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
