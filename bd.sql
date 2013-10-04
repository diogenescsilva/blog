CREATE TABLE usuario (
	id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome varchar(32) NOT NULL,
	email varchar(55) NOT NULL,
	senha varchar(32) NOT NULL,
	avatar varchar(55) NULL
) Engine = InnoDB;

CREATE TABLE categoria (
	id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome varchar(22) NOT NULL
) Engine = InnoDB;

CREATE TABLE post (
	id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	title varchar(75) NOT NULL,
	content text NOT NULL,
	data datetime NOT NULL,
	autor int(11) NOT NULL,
	categoria int(11) NOT NULL
) Engine = InnoDB;

ALTER TABLE post ADD CONSTRAINT fk_autor FOREIGN KEY(autor) REFERENCES usuario(id);

ALTER TABLE post ADD CONSTRAINT fk_categoria FOREIGN KEY(categoria) REFERENCES categoria(id);