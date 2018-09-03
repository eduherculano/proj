CREATE TABLE `usuarios` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`email` CHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`pass` CHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`nome` CHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`perfil_id` INT(11) NOT NULL,
	`unidadePolicial_id` INT(11) NOT NULL,
	`dataDoCadastro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`ultimaAtualizacao` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=16
;
