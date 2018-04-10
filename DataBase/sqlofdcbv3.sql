-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbc
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dbc_alergias`
--

DROP TABLE IF EXISTS `dbc_alergias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dbc_alergias` (
  `dbc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dbc_nombre` varchar(255) DEFAULT NULL,
  `dbc_idHijo` int(11) DEFAULT NULL,
  PRIMARY KEY (`dbc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dbc_alergias`
--

LOCK TABLES `dbc_alergias` WRITE;
/*!40000 ALTER TABLE `dbc_alergias` DISABLE KEYS */;
/*!40000 ALTER TABLE `dbc_alergias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dbc_consulta`
--

DROP TABLE IF EXISTS `dbc_consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dbc_consulta` (
  `dbc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dbc_idMedico` int(11) DEFAULT NULL,
  `dbc_descripcion` varchar(255) DEFAULT NULL,
  `dbc_timepo` int(11) DEFAULT NULL,
  `dbc_fechaLim` date DEFAULT NULL,
  `dbc_idHijo` int(11) DEFAULT NULL,
  `dbc_motivosConsulta` text,
  PRIMARY KEY (`dbc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dbc_consulta`
--

LOCK TABLES `dbc_consulta` WRITE;
/*!40000 ALTER TABLE `dbc_consulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `dbc_consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dbc_enfermedades_hereditarias`
--

DROP TABLE IF EXISTS `dbc_enfermedades_hereditarias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dbc_enfermedades_hereditarias` (
  `dbc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dbc_nombe` varchar(255) DEFAULT NULL,
  `dbc_idHijo` int(11) DEFAULT NULL,
  PRIMARY KEY (`dbc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dbc_enfermedades_hereditarias`
--

LOCK TABLES `dbc_enfermedades_hereditarias` WRITE;
/*!40000 ALTER TABLE `dbc_enfermedades_hereditarias` DISABLE KEYS */;
/*!40000 ALTER TABLE `dbc_enfermedades_hereditarias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dbc_hijos`
--

DROP TABLE IF EXISTS `dbc_hijos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dbc_hijos` (
  `dbc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dbc_nombre` varchar(255) DEFAULT NULL,
  `dbc_peso` float DEFAULT NULL,
  `dbc_altura` float DEFAULT NULL,
  `dbc_fechaNacimiento` date DEFAULT NULL,
  `dbc_sexo` tinyint(4) DEFAULT NULL,
  `dbc_idTutor` int(11) DEFAULT NULL,
  PRIMARY KEY (`dbc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dbc_hijos`
--

LOCK TABLES `dbc_hijos` WRITE;
/*!40000 ALTER TABLE `dbc_hijos` DISABLE KEYS */;
/*!40000 ALTER TABLE `dbc_hijos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dbc_tutor`
--

DROP TABLE IF EXISTS `dbc_tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dbc_tutor` (
  `dbc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dbc_nombre` varchar(255) DEFAULT NULL,
  `dbc_sexo` tinyint(4) DEFAULT NULL,
  `dbc_telefono` int(10) DEFAULT NULL,
  `dbc_nip` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`dbc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dbc_tutor`
--

LOCK TABLES `dbc_tutor` WRITE;
/*!40000 ALTER TABLE `dbc_tutor` DISABLE KEYS */;
/*!40000 ALTER TABLE `dbc_tutor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dbc_vacunas`
--

DROP TABLE IF EXISTS `dbc_vacunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dbc_vacunas` (
  `dbc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dbc_nombre` varchar(255) DEFAULT NULL,
  `dbc_fecha` date DEFAULT NULL,
  `dbc_idHijo` int(11) DEFAULT NULL,
  PRIMARY KEY (`dbc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dbc_vacunas`
--

LOCK TABLES `dbc_vacunas` WRITE;
/*!40000 ALTER TABLE `dbc_vacunas` DISABLE KEYS */;
/*!40000 ALTER TABLE `dbc_vacunas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dcb_medicos`
--

DROP TABLE IF EXISTS `dcb_medicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dcb_medicos` (
  `dcb_id` int(11) NOT NULL AUTO_INCREMENT,
  `dcb_nombre` varchar(255) DEFAULT NULL,
  `dcb_apellidoP` varchar(255) DEFAULT NULL,
  `dcb_apellidoM` varchar(255) DEFAULT NULL,
  `dcb_correo` varchar(255) DEFAULT NULL,
  `dcb_estatus` int(11) DEFAULT '1',
  PRIMARY KEY (`dcb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dcb_medicos`
--

LOCK TABLES `dcb_medicos` WRITE;
/*!40000 ALTER TABLE `dcb_medicos` DISABLE KEYS */;
INSERT INTO `dcb_medicos` VALUES (1,'Astrik Adrian','Zamudio','Lopez','a',1);
/*!40000 ALTER TABLE `dcb_medicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dcb_usuarios`
--

DROP TABLE IF EXISTS `dcb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dcb_usuarios` (
  `dcb_id` int(11) NOT NULL AUTO_INCREMENT,
  `dcb_Usuario` varchar(255) DEFAULT NULL,
  `dcb_Contrasenia` varchar(255) DEFAULT NULL,
  `dcb_IdMedico` int(11) DEFAULT NULL,
  `dcb_estatus` int(11) DEFAULT '1',
  `dcb_perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`dcb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dcb_usuarios`
--

LOCK TABLES `dcb_usuarios` WRITE;
/*!40000 ALTER TABLE `dcb_usuarios` DISABLE KEYS */;
INSERT INTO `dcb_usuarios` VALUES (1,'a','a',1,1,1);
/*!40000 ALTER TABLE `dcb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-10  9:16:54
