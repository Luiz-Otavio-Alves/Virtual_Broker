
USE testesluizotav;

DROP TABLE IF EXISTS clientes;
CREATE TABLE clientes(
	id int(10) unsigned NOT NULL AUTO_INCREMENT,
	nome varchar(45) NOT NULL,
	CPF_CNPJ varchar(45) NOT NULL,
	nascimento datetime NOT NULL,
	endereco varchar(45) NOT NULL,
	bairro varchar(45) NOT NULL,
	cep int(10) unsigned NOT NULL,
	cidade varchar(45) NOT NULL,
	estado varchar(45) NOT NULL,
	fone int(10) unsigned NOT NULL,
	celular int(10) unsigned NOT NULL,
	criacao datetime NOT NULL,
	modificado datetime NOT NULL,
	usuario varchar(25) NOT NULL,
   senha int(10) unsigned NOT NULL,
	
  CONSTRAINT pk_clientes PRIMARY KEY(id)
)ENGINE="InnoDB";

DROP TABLE if EXISTS contatos;
CREATE TABLE contatos(
	id_contatos INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	email VARCHAR(45) NOT NULL,
	assunto VARCHAR(20) NOT NULL,
	mensagem VARCHAR(280) NOT NULL,
	
	CONSTRAINT pk_contatos PRIMARY KEY(id_contatos)
)ENGINE="InnoDB";

DROP TABLE if EXISTS imagens;
CREATE TABLE imagens(
	id_imagem INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	id INT(10) UNSIGNED NOT NULL,
	caminho VARCHAR(45) NOT NULL,
	nome_imagem VARCHAR(45) NOT NULL,
	
	CONSTRAINT pk_imagens PRIMARY KEY(id_imagem),
	CONSTRAINT fk_imagens_clientes FOREIGN KEY(id)
		REFERENCES clientes(id)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT 
)ENGINE="InnoDB";

DROP TABLE if EXISTS imoveis;
CREATE TABLE imoveis(
	id_imovel INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	id INT(10) UNSIGNED NOT NULL,
	endereco_imovel VARCHAR(70) NOT NULL,
	bairro_imovel VARCHAR(70) NOT NULL,
	tamanho_imovel VARCHAR(20) NOT NULL,
	preco_imovel VARCHAR(20) NOT NULL,
	descricao_imovel VARCHAR(200) NOT NULL,
	tipo_imovel VARCHAR(20) NOT NULL,
	
	CONSTRAINT pk_imoveis PRIMARY KEY(id_imovel),
	CONSTRAINT fk_imoveis_clientes FOREIGN KEY(id)
		REFERENCES clientes(id)
		ON DELETE RESTRICT 
		ON UPDATE RESTRICT 
)ENGINE="InnoDB";


DROP TABLE if EXISTS imagensImoveis;
CREATE TABLE imagensImoveis(
	id_imagemImovel INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	id_imovel INT(10) UNSIGNED NOT NULL,
	caminho VARCHAR(45) NOT NULL,
	nome_imagem VARCHAR(45) NOT NULL,
	
	CONSTRAINT pk_imagensImoveis PRIMARY KEY(id_imagemImovel),
	CONSTRAINT fk_imagensImoveis_Imoveis FOREIGN KEY(id_imovel)
		REFERENCES imoveis(id_imovel)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT 
)ENGINE="InnoDB";
/*
SELECT * FROM clientes c INNER JOIN imagens i ON c.id = i.id WHERE nome = 'Odilon Junior de lima';

SELECT AUTO_INCREMENT FROM information_schema.tables WHERE  table_name = 'imoveis' AND    table_schema = 'bd_corretorvirtual';
SELECT MAX(id) AS ultimo FROM imoveis

SELECT * FROM imagens;
INSERT INTO imagens(id,caminho,nome_imagem) VALUES
	(12,'imagens/odilon.jpg','odilon'),
	(14,'imagens/luiz.png','luiz');
	
SELECT * FROM clientes c INNER JOIN imagens i ON c.id = i.id WHERE c.id = 14;
SELECT * FROM imagens
UPDATE imagens SET caminho = 'imagens/luiz.jpg' WHERE id = 14*/
