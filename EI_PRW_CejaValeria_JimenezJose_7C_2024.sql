DROP SCHEMA bar7b;
CREATE SCHEMA bar7b;

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Id`)
);

INSERT INTO `servicios` VALUES (41,'Peinado Mujer',80.00),(42,'Peinado Hombre',60.00),(43,'Tinte',300.00),(44,'Uñas',400.00),(45,'Lavado de Cabello',50.00),(46,'Tratamiento Capilar',50.00);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(36) NOT NULL,
  `contrasena` varchar(14) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`idusuarios`)
);

INSERT INTO `usuarios` VALUES (1,'admin1@upemor.edu.mx','12345678qaz','admin'),(2,'admin2@upemor.edu.mx','12345678qaz','admin'),(3,'alumno@upemor.edu.mx','1234567','cliente');

CREATE TABLE `citas` (
  `idcitas` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrecita` varchar(120) NOT NULL,
  `serviciocita` varchar(120) NOT NULL,
  `fechacita` date NOT NULL,
  `celularcita` varchar(45) NOT NULL,
  PRIMARY KEY (`idcitas`)
);

