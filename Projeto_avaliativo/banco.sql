CREATE DATABASE db_brazuna;

USE db_brazuna;

CREATE TABLE tb_aluno(
id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
endereco VARCHAR(80) NOT NULL,
telefone VARCHAR(14) NOT NULL,
email VARCHAR(40) NOT NULL,
sexo CHAR(1) NOT NULL);