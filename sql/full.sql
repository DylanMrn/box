CREATE DATABASE IF NOT EXISTS `box`;
use `box`;

CREATE TABLE `card` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`learn` TEXT NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
;

CREATE TABLE `box` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`num` INT NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
;

CREATE TABLE `box_card` (
	`card_id` INT NOT NULL,
	`box_id` INT NOT NULL,
	`regroupement_id` INT NOT NULL
);

CREATE TABLE `box`.`regroupement` (
  `id` INT NOT NULL,
  `nom` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));
