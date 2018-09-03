CREATE TABLE `operacoes` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`usuarios_id` INT(11) NOT NULL DEFAULT '0',
	`nome` CHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_unicode_ci',
	`inquerito` CHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_unicode_ci',
	`processo` CHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_unicode_ci',
	`pessoa_id` INT(11) NOT NULL DEFAULT '0',
	`local_id` INT(11) NOT NULL DEFAULT '0',
	`unidadePolicial_id` INT(11) NOT NULL DEFAULT '0',
	`dataDoCadastro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`ultimaAtualizacao` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;