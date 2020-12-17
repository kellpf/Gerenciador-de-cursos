CREATE DATABASE  IF NOT EXISTS `bd_cursos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bd_cursos`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_cursos
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.13-MariaDB

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
-- Table structure for table `tb_cursos`
--

DROP TABLE IF EXISTS `tb_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` text NOT NULL,
  `descricao` text DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cursos`
--

LOCK TABLES `tb_cursos` WRITE;
/*!40000 ALTER TABLE `tb_cursos` DISABLE KEYS */;
INSERT INTO `tb_cursos` VALUES (51,'Programação em Python do básico ao avançado','Aprenda Python 3.8.5 com Expressões Lambdas, Iteradores, Geradores, Orientação a Objetos e muito mais!'),(53,'Java - Programação Orientada a Objetos ','Curso mais didático e completo de Java e OO. UML, JDBC, JavaFX, Spring Boot, JPA, Hibernate, MySQL, MongoDB e muito mais.'),(54,'Curso de PHP 7','Torne-se um Desenvolvedor PHP, aprenda com dois especialistas a programar do básico ao avançado em um projeto completo.');
/*!40000 ALTER TABLE `tb_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cursos_usuario`
--

DROP TABLE IF EXISTS `tb_cursos_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cursos_usuario` (
  `fk_id_curso` int(11) DEFAULT NULL,
  `fk_usuario` varchar(50) DEFAULT NULL,
  `status_curso` text NOT NULL,
  KEY `fk_id_curso` (`fk_id_curso`),
  KEY `fk_usuario` (`fk_usuario`),
  CONSTRAINT `tb_cursos_usuario_ibfk_1` FOREIGN KEY (`fk_id_curso`) REFERENCES `tb_cursos` (`id_curso`),
  CONSTRAINT `tb_cursos_usuario_ibfk_2` FOREIGN KEY (`fk_usuario`) REFERENCES `tb_usuarios` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cursos_usuario`
--

LOCK TABLES `tb_cursos_usuario` WRITE;
/*!40000 ALTER TABLE `tb_cursos_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_cursos_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usuarios` (
  `usuario` varchar(50) NOT NULL,
  `senha` text NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `sexo` text NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios`
--

LOCK TABLES `tb_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` VALUES ('','','','',''),('a','a','a','a','a'),('admin','admin','Administrador','admin','feminino'),('aluno1','123','aluno1','aluno1@email','feminino'),('aluno2','123','aluno1','aluno1@email','feminino'),('aluno3','123','aluno1','aluno1@email','feminino'),('anta','anta','anta@email.com','anta','feminino'),('Augusto','sadasd','augusto@email','sd',''),('bruno','senha','bruno','bruno.com','masculino'),('dada','ada','da@asdsa','da','feminino'),('dadeira','dadeira','dadeira','dadeira','dadeira'),('dede','dede','dede','dede','dede'),('dudu','dudu','dede@dede','dede@dede','feminino'),('kelly','123','kelly','kelly@email','feminino'),('novo','123','novo','novo@novo','masculino'),('pedrao','sadsd','pedrao','pedrao@dsfds','masculino'),('rose','123','Rose Dias Prado','rose@email','feminino'),('sadsa','saasdsa','sadasd','sadasd','sdfas'),('sas','sa','sasa@sad','asa','Feminino'),('sd','sd','s','ds','ds'),('sdsadsad','sad','sda@sad','sd',''),('teste','teste','Testet','teste@email','feminino'),('usuerteste','123','usuerteste@sajhduiosa','usuerteste@asdasd','feminino');
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-17 19:19:02
