-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: greenpark
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aula`
--

DROP TABLE IF EXISTS `aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aula` (
  `id_usuario` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL,
  KEY `fk_usuario_aula` (`id_usuario`),
  KEY `fk_aula_oficina` (`id_oficina`),
  CONSTRAINT `fk_aula_oficina` FOREIGN KEY (`id_oficina`) REFERENCES `oficina` (`id_oficina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_aula` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aula`
--

LOCK TABLES `aula` WRITE;
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
INSERT INTO `aula` VALUES (7,1),(8,2),(1,1),(2,1),(3,1),(5,1),(4,2),(6,2);
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `cep_endereco` varchar(20) NOT NULL,
  `bairro_endereco` varchar(50) NOT NULL,
  `rua_endereco` varchar(50) NOT NULL,
  `num_casa_endereco` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `fk_usuario_id_usuario` (`id_usuario`),
  CONSTRAINT `fk_usuario_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'86182-692','Jardim Terra Nova','Rua do Sol Nascente',245,7),(2,'82650-280','Boa Vista','Rua Raymundo Bon',1250,8),(3,'87309-136','Jardim Curitiba','Avenida Capitão Índio Bandeira',115,7),(4,'81930-580','Esmeralda','Rua João Domingos Vizintin',564,8);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id_eventos` int(11) NOT NULL,
  `nome_enventos` varchar(100) NOT NULL,
  `data_eventos` date NOT NULL,
  `desc_eventos` varchar(250) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  PRIMARY KEY (`id_eventos`),
  KEY `fk_eventos_endereco` (`id_endereco`),
  CONSTRAINT `fk_eventos_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (1,'Feira Saul Elkind','2022-10-16','Feira todos os domingos.',0),(2,'Festa de Halloween','2022-10-30','Venha participar da festa de Halloween!!',0);
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficina`
--

DROP TABLE IF EXISTS `oficina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oficina` (
  `id_oficina` int(11) NOT NULL,
  `data_oficina` date NOT NULL,
  `horario_oficina` time NOT NULL,
  `desc_oficina` varchar(100) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_oficina`),
  KEY `fk_usuario_id_endereco` (`id_endereco`),
  KEY `fk_usuario_oficina` (`id_usuario`),
  CONSTRAINT `fk_usuario_id_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_oficina` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficina`
--

LOCK TABLES `oficina` WRITE;
/*!40000 ALTER TABLE `oficina` DISABLE KEYS */;
INSERT INTO `oficina` VALUES (1,'2022-09-23','09:00:00','Aula de vôlei',3,7),(2,'2022-09-24','16:00:00','Aula de futebol',4,8);
/*!40000 ALTER TABLE `oficina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsavel`
--

DROP TABLE IF EXISTS `responsavel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsavel` (
  `id_responsavel` int(11) NOT NULL,
  `nome_responsavel` varchar(100) NOT NULL,
  `cpf_responsavel` int(20) NOT NULL,
  PRIMARY KEY (`id_responsavel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsavel`
--

LOCK TABLES `responsavel` WRITE;
/*!40000 ALTER TABLE `responsavel` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsavel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (0,'adm'),(1,'aluno'),(2,'professor');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `nasc_usuario` date NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `fone_usuario` varchar(20) NOT NULL,
  `cpf_usuario` varchar(20) NOT NULL,
  `senha_usuario` varchar(30) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `id_responsavel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_usuario_tipo_usuario` (`id_tipo_usuario`),
  KEY `fk_usuario_responsavel` (`id_responsavel`),
  CONSTRAINT `fk_usuario_responsavel` FOREIGN KEY (`id_responsavel`) REFERENCES `responsavel` (`id_responsavel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_tipo_usuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Marcele','2009-06-10','marcele.dutra@geradornv.com.br','(43) 99205-2454 ','485.860.166-83   ','hKz=BWy07@G',1,0),(2,'Rosiméri','2005-07-12','rosimeri.souza@geradornv.com.br','(43) 96781-1358 ','771.877.469-46','tJdsTvG+*VNN',1,0),(3,'Douglas','2006-10-06','douglas.almeida@geradornv.com.br','(43) 98230-1546','349.464.319-93','AIZgbvvugQO7',1,0),(4,'Joana','2005-08-26','joana.franca@geradornv.com.br','(43) 97105-3285','315.011.579-57','3TACsD**6073',1,0),(5,'Caio','2009-08-27','caio.padua@geradornv.com.br','(43) 98636-6748','622.166.799-25','_UcKkUKctWjC',1,0),(6,'Adson','2007-11-15','adson.guerini@geradornv.com.br','(43) 98515-6256','453.871.109-89','5TYu0gYS_N(G',1,0),(7,'Evelyn','1992-08-22','evelyn.branco@geradornv.com.br','(43) 96788-7887','510.266.609-63','GS#LW)r0+u6*',2,0),(8,'Raimundo','1996-01-25','raimundo.campelo@geradornv.com.br','(43) 98753-2667','305.838.329-03','auOvU@Rn9TWB',2,0),(9,'ADM','2000-09-15','greenpower.adm@gmail.com','43 956689253','155.040.196-60   ','green123',0,0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-26 17:23:54
