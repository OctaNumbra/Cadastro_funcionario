-- CREATE DATABASE dbBrazuna;

USE dbBrazuna;

CREATE TABLE funcionario(
	id_func INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   nome_func VARCHAR(100) NOT NULL,
	endereco_func VARCHAR(200) NOT NULL,
	fone_func VARCHAR(20) NOT NULL,
	cpf_func VARCHAR(20) NOT NULL,
	rg_func VARCHAR(20),
	nascimento_func DATE,
	email_func VARCHAR(100)
);