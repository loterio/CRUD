CREATE DATABASE v4;

USE v4;

DROP TABLE estados;

CREATE TABLE estados (
codigo INTEGER AUTO_INCREMENT PRIMARY KEY,
nome varchar(30),
sigla varchar(2) unique
);

insert into estados(nome, sigla) values
('Santa Catarina', 'SC'),
('Paraná','PR'),
('Rio Grande do Sul','RS'),
('São Paulo','SP'),
('Rio de Janeiro','RJ'),
('Bahia','BH'),
('Mato Grosso do Sul','MS');

# select * from estados;

# ========================================

DROP TABLE cliente;

create table cliente(
codigo integer auto_increment primary key,
nome varchar(45) not null,
email varchar(50) not null,
telefone varchar(11)
);

insert into cliente(nome, email, telefone) values
('Fabiana E','fabiana@gmail.com',47933333333),
('Antonio F','fabio@gmail.com',47922222222),
('Caio E','caio@gmail.com',47911111111),
('Fabio V','vitorloterio@gmail.com',47984698924);

# select * from cliente;

#=================================================

DROP TABLE vendedor;

create table vendedor (
codigo integer auto_increment primary key,
nomeDeUsuario varchar(12) unique not null,
senha varchar(8) not null,
nome varchar(45) not null,
email varchar(40),
telefone varchar(11) unique	
);

insert into vendedor(nomeDeUsuario,senha,nome,email,telefone) values
('noobmaster69','imgaypls','Leo','leon@hotmail.com',9998326473),
('celebro',91857245,'Jôn','jon.lenon@yahuhuhu.com',12935445678),
('iorgute',12121212,'Linguini','lilin@hotmail.com',22566667873);

# SELECT * FROM vendedor;

#====================================================================

DROP TABLE escola;

create table escola (
cod integer auto_increment primary key,
nomeEscola varchar(45) not null,
cidade varchar(50) not null,
numAlunos integer,
nomeDiretora varchar(45)
);

insert into escola(nomeEscola,cidade,numAlunos,nomeDiretora) values
('João Alberto Schmit','Vidal Ramos',63,'Jucineia'),
('IFC Campus Rio do Sul','Rio do Sul',600,'Veiga'),
('COC','Rio do Sul','450','James Bond'),
('Dom Bosco','Rio do Sul',760,'Papa Fr.'),
('Roberto Moritz','Ituporanga',500,'Dega'),
('Cacilda Guimaraes','Vidal Ramos','1000','Betcha');

# select * from escola;

# ==============================================================

DROP TABLE paises;

CREATE TABLE paises (
cod integer auto_increment primary key,
nome varchar(45) not null,
sigla varchar(5) not null unique,
continente varchar(20)
);

INSERT INTO paises(nome,sigla,continente) VALUES
('Brasil','BR','America'),
('Estados Unidos','EUA','America'),
('Africa do Sul','AFK','Africa'),
('Canada','CND','America'),
('França','FR','Europa'),
('Belgica','BEL','Europa'),
('Australia','AUST','Oceania'),
('Argentina','ARG','America');

# SELECT * FROM paises;

#===========================================================

DROP TABLE alunos;

CREATE TABLE alunos (
codigo integer auto_increment primary key,
nome varchar(45) not null,
dataNasc date not null,
curso varchar(60)
);

insert into alunos(nome,dataNasc,curso) values
('Jenifernando','1997/05/09','Mecatronica'),
('Bertoldo','1962/01/19','Cacheta'),
('Claldio','2000/11/10','Eletroeletrônica'),
('Angelino','1959/07/03','Domino'),
('Pierre','1989/04/29','Música'),
('Lebdowsky','1993/07/03','Teatro'),
('Algusto','1999/09/12','Técnico em Mineração'); 

# select * from alunos;

