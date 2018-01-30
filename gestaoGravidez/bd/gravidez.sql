-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema gravidez
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gravidez
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gravidez` DEFAULT CHARACTER SET utf8 ;
USE `gravidez` ;

-- -----------------------------------------------------
-- Table `gravidez`.`gAlbuns`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gAlbuns` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pAlbuns`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pAlbuns` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pAlimentacoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pAlimentacoes` (
  `id` INT(11) NOT NULL,
  `cardapio` VARCHAR(100) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  `sugerido` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pBanhos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pBanhos` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `observacao` VARCHAR(100) NULL DEFAULT NULL,
  `sugerido` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`gConsultas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gConsultas` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `medico` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  `sugerido` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pConsultas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pConsultas` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `pediatra` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`gDesejos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gDesejos` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`gDiarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gDiarios` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `peso` CHAR(10) NOT NULL,
  `altura` CHAR(10) NOT NULL,
  `posicao` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pFichas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pFichas` (
  `id` INT(11) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  `nascimento` DATE NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `hospital` VARCHAR(100) NOT NULL,
  `genitor1` VARCHAR(100) NOT NULL,
  `genitor2` VARCHAR(100) NOT NULL,
  `medico` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`gHumores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gHumores` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `nivel` CHAR(1) NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pItens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pItens` (
  `id` INT(11) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `quantidade` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `local` VARCHAR(45) NOT NULL,
  `valor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`login` (
  `idlogin` INT(11) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idlogin`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pSonos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pSonos` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`gVacinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gVacinas` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  `sugerido` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pVacinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pVacinas` (
  `id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
