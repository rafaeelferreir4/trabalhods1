CREATE TABLE `rafael`.`medicamento` ( 
    `cod` INT NOT NULL AUTO_INCREMENT ,
    `nome` VARCHAR(50) NOT NULL ,
    `fabricante` VARCHAR(50) NOT NULL ,
    `controlado` VARCHAR(3) NOT NULL ,
    `quantidade` INT NOT NULL ,
    `preco` FLOAT NOT NULL ,
    PRIMARY KEY (`cod`)
)
ENGINE = InnoDB;