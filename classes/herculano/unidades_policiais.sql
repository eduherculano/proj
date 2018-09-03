CREATE TABLE `unidades_policiais` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`unidade` CHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`local_id` INT(11) NOT NULL,
	`telefone_id` INT(11) NOT NULL,
	`email_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=12
;