-- Adjunto script de la base de datos la cual utilizo para el CRUD

-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema database
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema database
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8 ;
USE `database` ;

-- -----------------------------------------------------
-- Table `database`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `database`.`usuarios` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(50) NOT NULL,
  `apellidos` VARCHAR(50) NOT NULL,
  `cedula` INT(255) NOT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(50) NULL,
  `f_registro` DATETIME NULL,
  `f_modificacion` TIMESTAMP NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
