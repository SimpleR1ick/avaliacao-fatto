CREATE TABLE `fatto`.`tarefas` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nom_tarefa` VARCHAR(50) NOT NULL,
    `custo` FLOAT NOT NULL,
    `data_limite` DATE NOT NULL,
    `ordem` INT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;