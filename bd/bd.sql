CREATE TABLE Usuario (
	id int NOT NULL IDENTITY,
	nome varchar(200) NOT NULL,
	email varchar(200) NOT NULL,
	senha varchar(200) NOT NULL,
	ativo bit NOT NULL DEFAULT(0),
	
	CONSTRAINT PK_Usuario PRIMARY KEY (id),
	CONSTRAINT UC_Email UNIQUE (email)
)

GO


CREATE TABLE Cliente (
	id int NOT NULL IDENTITY,
	nome varchar(200) NOT NULL,
	cpf varchar(15) NOT NULL,
	rg varchar(20),
	dataCadastro datetime NOT NULL DEFAULT(GETDATE()),
	dataAtualizacao datetime,
	idUser int not null,
	idUserMod int,
	dataNascimento date NOT NULL,
	localNascimento varchar(5) NOT NULL, 
	telefone varchar(30) NOT NULL,
	
	CONSTRAINT FK_Cliente PRIMARY KEY (id),
	
	CONSTRAINT FK_UsuarioCriacao FOREIGN KEY (idUser)
	REFERENCES Usuario(id),
	
	CONSTRAINT FK_UsuarioModificacao FOREIGN KEY (idUserMod)
	REFERENCES Usuario(id)
)

INSERT INTO clientes ([id], [nome], [cpf], [rg], [dataCadastro], [dataAtualizacao], [idUser], [idUserMod], [dataNascimento], [telefone], [localNascimento]) VALUES
	(6, 'Matheus Ferreira de Andrade Soares', '05904136510', '1476997977', '2018-11-29 12:03:57', '2018-11-29 12:20:09', 1, NULL, '1995-05-23', '7133920258', 'Bahia'),
	(7, 'Matheus Ferreira de Andrade Soares', '05904136510', '1476997977', '2018-11-29 12:16:38', '2018-11-29 12:20:19', 1, NULL, '1990-02-10', '7133920258', 'Bahia'),
	(8, 'Matheus Ferreira de Andrade Soares', '05904136510', '1476997977', '2018-11-29 12:21:41', '2018-11-29 12:21:41', 1, NULL, '0000-00-00', '7133920258', 'São Paulo'),
	(9, 'Matheus Ferreira de Andrade Soares', '05904136510', '1476997977', '2018-11-29 12:23:05', '2018-11-29 12:23:05', 1, NULL, '1995-05-23', '7133920258', 'São Paulo'),
	(10, 'Matheus Soares', '05904136510', '1476997977', '2018-11-29 12:23:16', '2018-11-29 12:23:16', 1, NULL, '1994-05-23', '7133407152', 'Bahia');

INSERT INTO usuario ([id], [nome], [email], [senha], [ativo]) VALUES
	(1, 'Matheus Soares', 'teste@teste.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1'),
	(3, 'MARIANA FERREIRA DE ANDRADE', 'jerusa.soares@sic.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1'),
	(4, 'MARIANA FERREIRA DE ANDRADE', 'jerusa.soares@bol.com.br', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'0');