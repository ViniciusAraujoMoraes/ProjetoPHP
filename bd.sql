--A 2ª etapa consiste em desenvolver o banco de dados, o programa HTML de formulário de 
--entrada de dados e o programa PHP de INCLUSÃO de dados na tabela do banco de dados.
--A tabela do BD deve armazenar as informações da explicação da 1ª etapa
--Obs,: Cole os códigos fontes e os prints da execução em um único arquivo word 

--#####################################################################################

-- ALUNOS RESPONSAVEIS: MIRIA ALVES DOS SANTOS E VINICIUS DE ARAUJO MORAES

--#####################################################################################
CREATE DATABASE  LDBD3;

CREATE TABLE DISCIPLINA (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NOME_DA_DISCIPLINA VARCHAR (120) NOT NULL,
    TITULO VARCHAR(120) NOT NULL,
    TEXTO VARCHAR(50000) NOT NULL
);

CREATE TABLE 'conta' (
  'usuario' varchar(255) PRIMARY KEY,
  'senha' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO 'conta' ('usuario', 'senha') VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');