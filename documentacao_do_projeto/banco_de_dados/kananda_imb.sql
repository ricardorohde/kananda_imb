-- MySQL Script generated by MySQL Workbench
-- 02/04/17 14:59:55
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema kananda_imb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema kananda_imb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `kananda_imb` DEFAULT CHARACTER SET utf8 ;
USE `kananda_imb` ;

-- -----------------------------------------------------
-- Table `kananda_imb`.`ka_imb_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kananda_imb`.`ka_imb_usuario` (
  `cod_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(60) CHARACTER SET 'utf8' NOT NULL,
  `email_usuario` VARCHAR(50) NOT NULL,
  `senha_usuario` VARCHAR(32) NOT NULL,
  `status_usuario` TINYINT(1) UNSIGNED NOT NULL,
  `nivel_usuario` TINYINT(1) UNSIGNED NOT NULL,
  `imagem_usuario` VARCHAR(100) NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE INDEX `email_usuario_UNIQUE` (`email_usuario` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `kananda_imb`.`ka_imb_imovel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kananda_imb`.`ka_imb_imovel` (
  `cod_imovel` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `referencia_imovel` VARCHAR(10) NULL,
  `status_imovel` TINYINT(1) UNSIGNED NOT NULL,
  `imovel_imovel` VARCHAR(50) NOT NULL,
  `finalidade_imovel` VARCHAR(50) NOT NULL,
  `categoria_imovel` VARCHAR(50) NULL,
  `quartos_imovel` INT(1) UNSIGNED NULL,
  `banheiro_imovel` INT(1) UNSIGNED NULL,
  `suite_imovel` INT(1) UNSIGNED NULL,
  `garagem_imovel` INT(1) UNSIGNED NULL,
  `largura_imovel` VARCHAR(20) NULL,
  `comprimento_imovel` VARCHAR(20) NULL,
  `are_total_imovel` VARCHAR(20) NULL,
  `area_contruida_imovel` VARCHAR(20) NULL,
  `valor_imovel` VARCHAR(100) NULL,
  `descricao_imovel` LONGTEXT CHARACTER SET 'utf8' NULL,
  `data_imovel` DATE NULL,
  PRIMARY KEY (`cod_imovel`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `kananda_imb`.`ka_imb_endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kananda_imb`.`ka_imb_endereco` (
  `cod_endereco` INT NOT NULL,
  `cod_imovel` INT NOT NULL,
  `logradouro_endereco` VARCHAR(50) NULL,
  `numero_endereco` VARCHAR(10) NULL,
  `bairro_endereco` VARCHAR(50) NULL,
  `cidade` VARCHAR(20) NULL,
  `complemento` VARCHAR(100) NULL,
  `latitude` VARCHAR(40) NULL,
  `longitude` VARCHAR(40) NULL,
  PRIMARY KEY (`cod_endereco`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `kananda_imb`.`ka_imb_imagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kananda_imb`.`ka_imb_imagem` (
  `cod_imagem` INT NOT NULL AUTO_INCREMENT,
  `cod_imovel` INT NOT NULL,
  `imagem_imagem` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`cod_imagem`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `kananda_imb`.`ka_imb_banner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kananda_imb`.`ka_imb_banner` (
  `cod_banner` INT NOT NULL AUTO_INCREMENT,
  `imagem_banner` VARCHAR(100) NOT NULL,
  `descricao_banner` VARCHAR(100) NULL,
  PRIMARY KEY (`cod_banner`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `kananda_imb`.`ka_imb_configuracao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kananda_imb`.`ka_imb_configuracao` (
  `cod_configuracao` INT NOT NULL AUTO_INCREMENT,
  `titulo_configuracao` VARCHAR(50) NULL,
  `email_configuracao` VARCHAR(40) NULL,
  `descrica_imagem_configuracao` VARCHAR(40) NULL,
  `logotipo_configuracao` VARCHAR(100) NULL,
  PRIMARY KEY (`cod_configuracao`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
