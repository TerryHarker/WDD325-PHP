-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- USE `mydb` ;

-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `passwort` VARCHAR(255) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projekt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projekt` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `bild` VARCHAR(64) NULL,
  `titel` VARCHAR(64) NULL,
  `zeit` YEAR(4) NULL,
  `user_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `user_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kategorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kategorie` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kategorie_projekt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kategorie_projekt` (
  `kategorie_ID` INT NOT NULL,
  `projekt_ID` INT NOT NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
