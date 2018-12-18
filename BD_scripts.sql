CREATE SCHEMA boomerang;
USE boomerang; 
-- drop schema boomerang;
CREATE TABLE Usuario(
-- ID_User int auto_increment,
	Nome VARCHAR(50) NOT NULL,
	Matricula BIGINT NOT NULL,
  Senha varchar(500) NOT NULL,
  Tipo INT NOT NULL,
  PRIMARY KEY(Matricula, Tipo)
);
INSERT INTO Usuario VALUES('Talyana',201997, md5('admin123'),1);
INSERT INTO Usuario VALUES('Ana',20161104020222,md5('bolsista123'),2);
INSERT INTO Usuario VALUES('Caio',2017110312148,md5('bolsista123'),2);
SELECT*FROM Usuario;

-- create table Administrador(
-- 	-- ID_Adm int auto_increment,
--     Nome_Adm VARCHAR(50) NOT NULL, 
-- 	Matricula_Adm BIGINT NOT NULL,
-- 	Senha_Adm VARCHAR(500) UNIQUE NOT NULL,
--     tipousuario INT NOT NULL,
--     PRIMARY KEY(Matricula_Adm,tipousuario)
-- );
-- INSERT INTO Administrador VALUES('Talyana', 201997, md5('senha123'),1);
-- -- DROP TABLE Administrador;
-- SELECT*FROM Administrador;
-- create table Funcionario(
--     -- ID_Fun int auto_increment,
--     Nome_Fun VARCHAR(50) NOT NULL,
--     Matricula_Fun INT NOT NULL,
-- 	Senha_Fun VARCHAR(50) NOT NULL,
-- 	tipousuario INT NOT NULL,
--     PRIMARY KEY(Matricula_Fun,tipousuario)
-- );
-- INSERT INTO Funcionario VALUES('Caio',65675,md5('senha765'),2);
-- INSERT INTO Funcionario VALUES('Ana',46372,md5('senha543'),2);
-- SELECT * FROM Funcionario;
-- OBJETO PERDIDO
CREATE TABLE ObjetoP(
	ID_ObjP INT PRIMARY KEY AUTO_INCREMENT,
	Nome_Obj VARCHAR(50) NOT NULL,
	Desc_Obj VARCHAR(200),
  Local_Obj VARCHAR(50) NOT NULL,
	Armazenamento VARCHAR(50) NOT NULL,
  Data_P DATE NOT NULL
);

-- OBJETO DEVOLVIDO
CREATE TABLE ObjetoD(
	ID_ObjD int NOT NULL AUTO_INCREMENT,
	ID_P INT NOT NULL, 
	M_User BIGINT NOT NULL,
  Dono_Nome VARCHAR(50) NOT NULL,
  Dono_Mat INT UNIQUE NOT NULL, 
  Data_D DATE NOT NULL,
  PRIMARY KEY (ID_ObjD),
  FOREIGN KEY (ID_P) REFERENCES Objeto(ID_ObjP),
	FOREIGN KEY (M_User) REFERENCES Usuario(Matricula)
);