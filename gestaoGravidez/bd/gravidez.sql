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
-- Table `gravidez`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`login` (
  `idlogin` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idlogin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`consultasGestacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`consultasGestacao` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME(6) NOT NULL,
  `medico` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  `sugerido` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`vacinasGestacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`vacinasGestacao` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME(6) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  `sugerido` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`humorGestacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`humorGestacao` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `nivel` CHAR(1) NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`desejosGestacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`desejosGestacao` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`albumGestacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`albumGestacao` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`diarioGestacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`diarioGestacao` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `peso` CHAR(10) NOT NULL,
  `altura` CHAR(10) NOT NULL,
  `posicao` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`fichaPos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`fichaPos` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  `nascimento` DATE NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `hospital` VARCHAR(100) NOT NULL,
  `genitor1` VARCHAR(100) NOT NULL,
  `genitor2` VARCHAR(100) NOT NULL,
  `medico` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`alimentacaoPos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`alimentacaoPos` (
  `id` INT NOT NULL,
  `cardapio` VARCHAR(100) NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME(6) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  `sugerido` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`banhoPos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`banhoPos` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME(6) NOT NULL,
  `observacao` VARCHAR(100) NULL,
  `sugerido` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`itensPos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`itensPos` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `quantidade` INT NOT NULL,
  `data` DATE NOT NULL,
  `local` VARCHAR(45) NOT NULL,
  `valor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`sonoPos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`sonoPos` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME(6) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`consultasPos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`consultasPos` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME(6) NOT NULL,
  `pediatra` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`vacinasPos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`vacinasPos` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `hora` TIME(6) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gravidez`.`albumPos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`albumPos` (
  `id` INT NOT NULL,
  `data` DATE NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
