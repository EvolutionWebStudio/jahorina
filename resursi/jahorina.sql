SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `jahorina` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `jahorina` ;

-- -----------------------------------------------------
-- Table `jahorina`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `jahorina`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `hotel` VARCHAR(45) NULL ,
  `role` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jahorina`.`post`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `jahorina`.`post` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NULL ,
  `content` TEXT NULL ,
  `created_at` DATE NULL ,
  `user_id` INT NOT NULL ,
  `published` TINYINT(1) NULL ,
  `social` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_post_user_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_post_user`
    FOREIGN KEY (`user_id` )
    REFERENCES `jahorina`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jahorina`.`page`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `jahorina`.`page` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NULL ,
  `content` TEXT NULL ,
  `created_at` DATE NULL ,
  `social` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jahorina`.`newyear`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `jahorina`.`newyear` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `price` VARCHAR(45) NULL ,
  `phone` VARCHAR(45) NULL ,
  `mobile` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `created_at` VARCHAR(45) NULL ,
  `published` TINYINT(1) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `jahorina` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
