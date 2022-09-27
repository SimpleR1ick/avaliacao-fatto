/* Lista de tarefas */
DROP TABLE IF EXISTS tarefas;

-- Tabela tarefas
CREATE TABLE `fatto`.`tarefas` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nom_tarefa` VARCHAR(50) NOT NULL , 
    `custo` FLOAT(12) NOT NULL , 
    `data_limite` DATE NOT NULL , 
    `ordem` INT(9) NOT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;