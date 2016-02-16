-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema altran_teste1
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema altran_teste1
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `altran_teste1` DEFAULT CHARACTER SET latin1 ;
USE `altran_teste1` ;

-- -----------------------------------------------------
-- Table `altran_teste1`.`cad_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `altran_teste1`.`cad_cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(255) NOT NULL,
  `email_cliente` VARCHAR(255) NOT NULL,
  `tel_cliente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `altran_teste1`.`cad_produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `altran_teste1`.`cad_produtos` (
  `id_produto` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` VARCHAR(255) NOT NULL,
  `des_produto` VARCHAR(255) NOT NULL,
  `preco_produto` FLOAT(9,2) NOT NULL,
  PRIMARY KEY (`id_produto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `altran_teste1`.`rel_pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `altran_teste1`.`rel_pedido` (
  `id_pedido` INT(11) NOT NULL AUTO_INCREMENT,
  `id_produto` INT(11) NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  INDEX `fk_pedido_produto_idx` (`id_produto` ASC),
  INDEX `fk_pedido_cliente` (`id_cliente` ASC),
  CONSTRAINT `fk_pedido_cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `altran_teste1`.`cad_cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_produto`
    FOREIGN KEY (`id_produto`)
    REFERENCES `altran_teste1`.`cad_produtos` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
