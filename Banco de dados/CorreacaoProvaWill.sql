 CREATE database prova_will;
 USE prova_will;
 
 CREATE TABLE familia(
 	pessoa1 VARCHAR(30) NOT NULL,
 	pessoa2 VARCHAR(30) NOT NULL,
 	relacao VARCHAR(30) NOT NULL,
 	
 	CONSTRAINT pk_familia PRIMARY KEY(pessoa1,pessoa2)
)ENGINE="innodb";

INSERT INTO familia(pessoa1,pessoa2,relacao) VALUES
	('João','Rafael','Pai'),
	('Maria','Rafael','Mãe'),
	('Rafael','Gabriela','Pai'),
	('Gabriela','Rita','Mãe'),
	('Rita','Bruna','Mãe'),
	('Bruna','Ana','Mãe'),
	('Rafael','Rita','Avô');
	
INSERT INTO familia(pessoa1,pessoa2,relacao) VALUES
	('Rafael','Rita','Avô');

SELECT * FROM familia;

SELECT pessoa1, pessoa2 FROM familia WHERE relacao = 'Avô'

INTERSECT

SELECT f1.pessoa1, f2.pessoa2 FROM familia f1, familia f2
WHERE f1.pessoa2 = f2.pessoa1 and
f1.relacao IN('Mãe', 'Pai')  and  f2.relacao IN('Mãe', 'Pai');

SELECT pessoa1, pessoa2 FROM familia WHERE relacao = 'Avô';

SELECT f1.pessoa1, f2.pessoa2 FROM familia f1, familia f2
WHERE f1.pessoa2 = f2.pessoa1 and
f1.relacao IN('Mãe', 'Pai')  and  f2.relacao IN('Mãe', 'Pai');

DELETE FROM familia WHERE relacao = 'Avô' ;
