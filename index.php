CREATE TABLE categoria
(
	IdCategoria			INT PRIMARY KEY AUTO_INCREMENT,
    Nome				VARCHAR(100),
	email           	VARCHAR (100),  
    dtnacimento        	DATE    (100),  NOT NULL
    Cidade              VARCHAR   (100),
    senha               VARCHAR (100),
)
CREATE TABLE categoria
(
	IdCategoria			INT PRIMARY KEY AUTO_INCREMENT,
    Nome				VARCHAR(100),
	email           	VARCHAR (100),  
    dtnacimento        	DATE    (100),  NOT NULL
    Cidade              VARCHAR   (100),
    senha               VARCHAR (100),
)
CREATE TABLE modalidade
(
	idmodalidade		INT PRIMARY KEY AUTO_INCREMENT,
    nome                VARCHAR(100),
    descriçao          varchar(100),
    imagem              varchar(1500)
);
CREATE TABLE usuario
(
	idusuario		    INT PRIMARY KEY AUTO_INCREMENT,
    nome                VARCHAR(100),
    email              varchar(100),
    dtnascimento        date(50),
    cidade              varchar(50),
    senha               varchar(50) 
)
CREATE TABLE itemplano
(
iditemplano	          INT PRIMARY KEY AUTO_INCREMENT,
    modalidade          INT PRIMARY KEY AUTO_INCREMENT,
    plano               INT PRIMARY KEY AUTO_INCREMENT, 
CREATE TABLE matricula
    idmatricula        INT PRIMARY KEY AUTO_INCREMENT,
    dtinicio         date,
    dtvalidade       date,
    idusuario        INT PRIMARY KEY AUTO_INCREMENT,
CREATE TABLE plano
    idplano           INT PRIMARY KEY AUTO_INCREMENT,
    nome             varchar(100),
    descriçao       varchar(100),
    valor           numeric
 
 
