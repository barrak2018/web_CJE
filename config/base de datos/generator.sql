CREATE DATABASE IF NOT EXISTS CJEDatabase;

USE CJEDatabase;

CREATE TABLE IF NOT EXISTS `marcas` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(200),
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `categorias` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`categoria` VARCHAR(100) NOT NULL,
	`icono` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `productos` (
	`id_producto` INT NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255) NOT NULL,
	`descripcion` TEXT,
	`precio` FLOAT(10, 2) NOT NULL,
	`unidades` INT,
	`marca` INT,
	`categoria` INT,
	PRIMARY KEY (`id_producto`),
	FOREIGN KEY (`marca`) REFERENCES `marcas`(`id`),
	FOREIGN KEY (`categoria`) REFERENCES `categorias`(`id`)
);