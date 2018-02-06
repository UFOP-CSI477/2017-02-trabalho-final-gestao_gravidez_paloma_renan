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

CREATE USER `sistema`@`localhost` identified by "12345";
GRANT ALL PRIVILEGES ON academico.* TO `sistema`@`localhost`;

USE `gravidez` ;


-- -----------------------------------------------------
-- Table `gravidez`.`gAlbuns`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gAlbuns` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pAlbuns`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pAlbuns` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `foto` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pAlimentacoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pAlimentacoes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`gDiarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gDiarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `idlogin` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idlogin`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`pSonos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`pSonos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gravidez`.`gVacinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gravidez`.`gVacinas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
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

INSERT INTO `gAlbuns` (`id`, `data`, `foto`) VALUES(1, '2018-02-01', 'aaaaaaaa');
INSERT INTO `gAlbuns` (`id`, `data`, `foto`) VALUES(2, '2018-02-02', 'bbbbbbbb');
INSERT INTO `gAlbuns` (`id`, `data`, `foto`) VALUES(3, '2018-02-03', 'cccccccc');
INSERT INTO `gAlbuns` (`id`, `data`, `foto`) VALUES(4, '2018-02-04', 'dddddddd');
INSERT INTO `gAlbuns` (`id`, `data`, `foto`) VALUES(5, '2018-02-05', 'eeeeeeee');

INSERT INTO `pAlbuns` (`id`, `data`, `foto`) VALUES(1, '2018-03-01', 'ffffffff');
INSERT INTO `pAlbuns` (`id`, `data`, `foto`) VALUES(2, '2018-03-02', 'gggggggg');
INSERT INTO `pAlbuns` (`id`, `data`, `foto`) VALUES(3, '2018-03-03', 'hhhhhhhh');
INSERT INTO `pAlbuns` (`id`, `data`, `foto`) VALUES(4, '2018-03-04', 'iiiiiiii');
INSERT INTO `pAlbuns` (`id`, `data`, `foto`) VALUES(5, '2018-03-05', 'jjjjjjjj');

INSERT INTO `pAlimentacoes` (`id`, `cardapio`, `data`, `hora`, `obs`, `sugerido` ) VALUES(1, 'leite materno', '2018-02-01', '08:00', '10 min', '*Alimente seu bebê recém nascido a cada 40 min');
INSERT INTO `pAlimentacoes` (`id`, `cardapio`, `data`, `hora`, `obs`, `sugerido` ) VALUES(2, 'leite materno', '2018-02-01', '08:40', '15 min', '*Alimente seu bebê recém nascido a cada 40 min');
INSERT INTO `pAlimentacoes` (`id`, `cardapio`, `data`, `hora`, `obs`, `sugerido` ) VALUES(3, 'leite materno', '2018-02-01', '09:00', '5 min', '*Alimente seu bebê recém nascido a cada 40 min');
INSERT INTO `pAlimentacoes` (`id`, `cardapio`, `data`, `hora`, `obs`, `sugerido` ) VALUES(4, 'leite materno', '2018-02-01', '09:40', '10 min', '*Alimente seu bebê recém nascido a cada 40 min');
INSERT INTO `pAlimentacoes` (`id`, `cardapio`, `data`, `hora`, `obs`, `sugerido` ) VALUES(5, 'leite materno', '2018-02-01', '10:00', '10 min', '*Alimente seu bebê recém nascido a cada 40 min');

INSERT INTO `pBanhos` (`id`, `data`, `hora`, `observacao`, `sugerido`) VALUES(1, '2018-02-01', '9:00', 'sem assadura', '*Ao dar banho no recém nascido é importante se atentar ao secar as dobras da pele!');
INSERT INTO `pBanhos` (`id`, `data`, `hora`, `observacao`, `sugerido`) VALUES(2, '2018-02-01', '15:00', 'sentiu frio', '*Ao dar banho no recém nascido é importante se atentar ao secar as dobras da pele!');
INSERT INTO `pBanhos` (`id`, `data`, `hora`, `observacao`, `sugerido`) VALUES(3, '2018-02-02', '9:00', 'sem assadura', '*Ao dar banho no recém nascido é importante se atentar ao secar as dobras da pele!');
INSERT INTO `pBanhos` (`id`, `data`, `hora`, `observacao`, `sugerido`) VALUES(4, '2018-02-02', '15:00', 'chorou no banho', '*Ao dar banho no recém nascido é importante se atentar ao secar as dobras da pele!');
INSERT INTO `pBanhos` (`id`, `data`, `hora`, `observacao`, `sugerido`) VALUES(5, '2018-02-01', '18:00', 'sem assadura', '*Ao dar banho no recém nascido é importante se atentar ao secar as dobras da pele!');

INSERT INTO `gConsultas` (`id`, `data`, `hora`, `medico`, `obs`, `sugerido`) VALUES(1, '2017-09-01', '10:00', 'Dr. Marcos', 'Consulta mensal','*As consultas mensais são muito importantes!');
INSERT INTO `gConsultas` (`id`, `data`, `hora`, `medico`, `obs`, `sugerido`) VALUES(2, '2017-10-01', '10:00', 'Dr. Marcos', 'Consulta mensal','*As consultas mensais são muito importantes!');
INSERT INTO `gConsultas` (`id`, `data`, `hora`, `medico`, `obs`, `sugerido`) VALUES(3, '2017-11-01', '10:00', 'Dr. Marcos', 'Consulta mensal','**As consultas mensais são muito importantes!');
INSERT INTO `gConsultas` (`id`, `data`, `hora`, `medico`, `obs`, `sugerido`) VALUES(4, '2017-12-01', '10:00', 'Dr. Marcos', 'Consulta mensal','*As consultas mensais são muito importantes!');
INSERT INTO `gConsultas` (`id`, `data`, `hora`, `medico`, `obs`, `sugerido`) VALUES(5, '2018-01-01', '10:00', 'Dr. Marcos', 'Consulta mensal','*As consultas mensais são muito importantes!');

INSERT INTO `pConsultas` (`id`, `data`, `hora`, `pediatra`, `obs`) VALUES(1, '2018-02-01', '10:00', 'Dr. André','*As consultas mensais do seu bebê são muito importantes!');
INSERT INTO `pConsultas` (`id`, `data`, `hora`, `pediatra`, `obs`) VALUES(2, '2018-03-01', '10:00', 'Dr. André', '*As consultas mensais do seu bebê são muito importantes!');
INSERT INTO `pConsultas` (`id`, `data`, `hora`, `pediatra`, `obs`) VALUES(3, '2018-04-01', '10:00', 'Dr. André', '*As consultas mensais do seu bebê são muito importantes!');
INSERT INTO `pConsultas` (`id`, `data`, `hora`, `pediatra`, `obs`) VALUES(4, '2018-05-01', '10:00', 'Dr. André','*As consultas mensais do seu bebê são muito importantes!');
INSERT INTO `pConsultas` (`id`, `data`, `hora`, `pediatra`, `obs`) VALUES(5, '2018-06-01', '10:00', 'Dr. André', '*As consultas mensais do seu bebê são muito importantes!');

INSERT INTO `gDesejos` (`id`, `data`, `descricao`) VALUES(1, '2017-12-03','Sonho');
INSERT INTO `gDesejos` (`id`, `data`, `descricao`) VALUES(2, '2017-12-06','Torta de frango');
INSERT INTO `gDesejos` (`id`, `data`, `descricao`) VALUES(3, '2017-12-10','Suco de beterraba');
INSERT INTO `gDesejos` (`id`, `data`, `descricao`) VALUES(4, '2017-12-19','Mingau de milho verde');
INSERT INTO `gDesejos` (`id`, `data`, `descricao`) VALUES(5, '2017-12-31','Salada de frutas');

INSERT INTO `gDiarios` (`id`, `data`, `peso`, `altura`, `posicao`, `descricao`) VALUES(1, '2017-09-01', '65Kg', '10cm','Sentado', 'Na ultrasson bebê estava dormindo!');
INSERT INTO `gDiarios` (`id`, `data`, `peso`, `altura`, `posicao`, `descricao`) VALUES(2, '2017-10-01', '66Kg', '15cm','Sentado', 'Na ultrasson bebê estava chutando!');
INSERT INTO `gDiarios` (`id`, `data`, `peso`, `altura`, `posicao`, `descricao`) VALUES(3, '2017-11-01', '68Kg', '20cm','Atravessado', 'Na ultrasson bebê estava quieto!');
INSERT INTO `gDiarios` (`id`, `data`, `peso`, `altura`, `posicao`, `descricao`) VALUES(4, '2017-12-01', '72Kg', '30cm','Cabeça para baixo', 'Na ultrasson bebê estava dormindo!');
INSERT INTO `gDiarios` (`id`, `data`, `peso`, `altura`, `posicao`, `descricao`) VALUES(5, '2018-01-01', '75Kg', '40cm','Cabeça para baixo', 'Na ultrasson bebê estava se mexendo muito!');

INSERT INTO `pFichas` (`id`, `nome`, `foto`, `nascimento`, `cidade`, `hospital`, `genitor1`, `genitor2`, `medico`) VALUES(1, 'Nicole', 'aaaaaaaa', '2018-01-10','Belo Horizonte', 'Materdei', 'José Gomes', 'Ana Gomes', 'Dr. Marcos');

INSERT INTO `gHumores` (`id`, `data`, `nivel`, `descricao`) VALUES(1, '2017-09-01', '1', 'Estou me sentindo muito bem hoje');
INSERT INTO `gHumores` (`id`, `data`, `nivel`, `descricao`) VALUES(2, '2017-10-01', '1', 'Estou me sentindo muito bem hoje');
INSERT INTO `gHumores` (`id`, `data`, `nivel`, `descricao`) VALUES(3, '2017-11-01', '2', 'Estou me sentindo mal por passar o dia sozinha');
INSERT INTO `gHumores` (`id`, `data`, `nivel`, `descricao`) VALUES(4, '2017-12-01', '3', 'As séries que assisti me deixaram muito sensível');
INSERT INTO `gHumores` (`id`, `data`, `nivel`, `descricao`) VALUES(5, '2018-01-01', '1', 'Estou me sentindo muito bem hoje');

