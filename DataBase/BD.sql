

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

USE `dbc` ;

-- -----------------------------------------------------
-- Table `dbc`.`paciente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbc`.`paciente` ;

CREATE TABLE IF NOT EXISTS `dbc`.`paciente` (
  `idpaciente` INT NOT NULL,
  `apellidoP` VARCHAR(45) NULL,
  `apellidoM` VARCHAR(45) NULL,
  `sexo` VARCHAR(45) NULL,
  `Peso` VARCHAR(45) NULL,
  `Direccion` VARCHAR(45) NULL,
  `edad` VARCHAR(45) NULL,
  PRIMARY KEY (`idpaciente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbc`.`alergias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbc`.`alergias` ;

CREATE TABLE IF NOT EXISTS `dbc`.`alergias` (
  `idalergias` INT NOT NULL,
  `alergeno` VARCHAR(100) NULL,
  `paciente_idpaciente` INT NOT NULL,
  PRIMARY KEY (`idalergias`),
  INDEX `fk_alergias_paciente_idx` (`paciente_idpaciente` ASC),
  CONSTRAINT `fk_alergias_paciente`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `dbc`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbc`.`EnfermedadesH`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbc`.`EnfermedadesH` ;

CREATE TABLE IF NOT EXISTS `dbc`.`EnfermedadesH` (
  `idEnfermedadesH` INT NOT NULL,
  `enfermedad` VARCHAR(100) NULL,
  `paciente_idpaciente` INT NOT NULL,
  PRIMARY KEY (`idEnfermedadesH`),
  INDEX `fk_EnfermedadesH_paciente1_idx` (`paciente_idpaciente` ASC),
  CONSTRAINT `fk_EnfermedadesH_paciente1`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `dbc`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbc`.`Vacunas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbc`.`Vacunas` ;

CREATE TABLE IF NOT EXISTS `dbc`.`Vacunas` (
  `idVacunas` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `fecha` DATE NULL,
  `paciente_idpaciente` INT NOT NULL,
  PRIMARY KEY (`idVacunas`),
  INDEX `fk_Vacunas_paciente1_idx` (`paciente_idpaciente` ASC),
  CONSTRAINT `fk_Vacunas_paciente1`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `dbc`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbc`.`UltimaEnfermedad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbc`.`UltimaEnfermedad` ;

CREATE TABLE IF NOT EXISTS `dbc`.`UltimaEnfermedad` (
  `idUltimaEnfermedad` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `fechaInicio` DATE NULL,
  `paciente_idpaciente` INT NOT NULL,
  PRIMARY KEY (`idUltimaEnfermedad`, `paciente_idpaciente`),
  INDEX `fk_UltimaEnfermedad_paciente1_idx` (`paciente_idpaciente` ASC),
  CONSTRAINT `fk_UltimaEnfermedad_paciente1`
    FOREIGN KEY (`paciente_idpaciente`)
    REFERENCES `dbc`.`paciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbc`.`Medicamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbc`.`Medicamento` ;

CREATE TABLE IF NOT EXISTS `dbc`.`Medicamento` (
  `idMedicamento` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `cantidad` INT NULL,
  `UltimaEnfermedad_idUltimaEnfermedad` INT NOT NULL,
  `UltimaEnfermedad_paciente_idpaciente` INT NOT NULL,
  PRIMARY KEY (`idMedicamento`, `UltimaEnfermedad_idUltimaEnfermedad`, `UltimaEnfermedad_paciente_idpaciente`),
  INDEX `fk_Medicamento_UltimaEnfermedad1_idx` (`UltimaEnfermedad_idUltimaEnfermedad` ASC, `UltimaEnfermedad_paciente_idpaciente` ASC),
  CONSTRAINT `fk_Medicamento_UltimaEnfermedad1`
    FOREIGN KEY (`UltimaEnfermedad_idUltimaEnfermedad` , `UltimaEnfermedad_paciente_idpaciente`)
    REFERENCES `dbc`.`UltimaEnfermedad` (`idUltimaEnfermedad` , `paciente_idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
