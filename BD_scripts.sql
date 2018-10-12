create schema boomerang;
use boomerang; 
-- 	DROP SCHEMA boomerang;


-- create table TipoUsuario(
-- 	codigo int primary key,
--     descricao varchar(20)
-- );
-- insert into TipoUsuario values(1, 'Administrador');
-- insert into TipoUsuario values(2, 'Bolsista');

create table Usuario(
-- ID_User int auto_increment,
	Nome VARCHAR(50) NOT NULL,
	Matricula BIGINT NOT NULL,
    Senha varchar(500) NOT NULL,
    tipousuario INT NOT NULL,
    PRIMARY KEY(Matricula, tipousuario)
);
INSERT INTO Usuario VALUES('Talyana',201997, md5('senha123'),1);
INSERT INTO Usuario VALUES('Ana',46372,md5('senha543'),2);
INSERT INTO Usuario VALUES('Caio',65675,md5('senha765'),2);
SELECT*FROM Usuario;

create table Administrador(
	-- ID_Adm int auto_increment,
    Nome_Adm VARCHAR(50) NOT NULL, 
	Matricula_Adm BIGINT NOT NULL,
	Senha_Adm VARCHAR(500) UNIQUE NOT NULL,
    tipousuario INT NOT NULL,
    PRIMARY KEY(Matricula_Adm,tipousuario)
);
INSERT INTO Administrador VALUES('Talyana', 201997, md5('senha123'),1);
-- DROP TABLE Administrador;
SELECT*FROM Administrador;


create table Funcionario(
    -- ID_Fun int auto_increment,
    Nome_Fun VARCHAR(50) NOT NULL,
    Matricula_Fun INT NOT NULL,
	Senha_Fun VARCHAR(50) NOT NULL,
	tipousuario INT NOT NULL,
    PRIMARY KEY(Matricula_Fun,tipousuario)
);
INSERT INTO Funcionario VALUES('Caio',65675,md5('senha765'),2);
INSERT INTO Funcionario VALUES('Ana',46372,md5('senha543'),2);
SELECT * FROM Funcionario;


create table Objeto(
	ID_Obj INT PRIMARY KEY AUTO_INCREMENT,
    Local_Obj VARCHAR(50) NOT NULL,
    Nome_Obj VARCHAR(50) NOT NULL,
    Data DATE NOT NULL
);
SELECT*FROM Objeto;

create table Objeto_Devolvido(
	ID_ObjDev int NOT NULL AUTO_INCREMENT,
	ID_Obj INT NOT NULL, 
	Matricula_D BIGINT NOT NULL,
    Nome_ObjDev VARCHAR(50) NOT NULL,
    Nome_Dono VARCHAR(50) NOT NULL,
    Matricula_Dono INT UNIQUE NOT NULL, 
    Data_Dev DATE NOT NULL,
    PRIMARY KEY (ID_ObjDev),
    FOREIGN KEY (ID_Obj) REFERENCES Objeto(ID_Obj),
	FOREIGN KEY (Matricula_D) REFERENCES Usuario(Matricula)
);
-- DROP TABLE Objeto_Devolvido;

SELECT*FROM Objeto_Devolvido;
