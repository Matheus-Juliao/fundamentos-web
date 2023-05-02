CREATE TABLE estado(
	id int primary key auto_increment,
    nome varchar(100)
);

SELECT * FROM estado;

ALTER DATABASE `si3a` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
ALTER TABLE estado CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE produto(
	idProduto int primary key auto_increment,
	nomeProduto varchar(100),
    pesoProduto double(3,2),
    precoProduto double(10,2)
);

CREATE TABLE pessoa(
	cpf integer(11),
    nomePessoa varchar(100),
    idadePessoa int
);

DROP TABLE pessoa;
