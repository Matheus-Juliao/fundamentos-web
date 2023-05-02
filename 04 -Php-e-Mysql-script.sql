CREATE TABLE produto(
	idProduto int primary key auto_increment,
	nomeProduto varchar(100),
    pesoProduto double(3,2),
    precoProduto double(10,2)
);

CREATE TABLE pessoa(
	cpf bigint,
    nomePessoa varchar(100),
    idadePessoa int
);

-- INSERT INTO produto (nomeProduto, pesoProduto, precoProduto) VALUES ('Garrafa', '0.1', '12.89');
-- INSERT INTO pessoa (cpf, nomePessoa, idadePessoa) VALUES (78444743194, 'Gervásio Ombrósio da Silva', '72');

-- SELECT * FROM produto;
-- SELECT * FROM pessoa;

-- DELETE FROM produto WHERE nomeProduto='Garrafa';
-- DELETE FROM pessoa WHERE cpf=78444743194

-- DROP TABLE produto;
-- DROP TABLE pessoa;