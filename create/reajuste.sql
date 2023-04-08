CREATE DATABASE barbearia;

USE barbearia;

CREATE TABLE niveis_acessos (
  id int(10) PRIMARY KEY NOT NULL,
  nome varchar(20) NOT NULL
);

INSERT INTO niveis_acessos (id, nome) VALUES
(1, 'Administrador'),
(2, 'Colaborador'),
(3, 'Cliente');

CREATE TABLE usuarios (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  nome varchar(220) NOT NULL,
  cpf varchar(14) NOT NULL,
  tel varchar(30) NOT NULL,
  dtnasc date NOT NULL,
  email varchar(520) NOT NULL,
  senha varchar(50) NOT NULL,
  niveis_acesso_id int(10) NOT NULL,
  FOREIGN KEY (niveis_acesso_id) REFERENCES niveis_acessos (id)
);

INSERT INTO usuarios (id, nome, cpf, tel, dtnasc, email, senha, niveis_acesso_id) VALUES
(1, 'Administrador', '111.111.111-11', '(11)11111-1111', '2016-02-14 00:00:01', 'administrador@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Colaborador', '222.222.222-22', '(22)22222-2222', '2016-02-14 00:00:01', 'colaborador@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(3, 'Cliente', '333.333.333-33', '(33)33333-3333', '2016-02-14 00:00:01', 'cliente@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(4, 'Eduardo', '444.444.444-44', '(44)44444-4444', '2016-02-14 00:00:01', 'eduardo@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(5, 'ricardo', '555.555.555-55', '(55)55555-5555', '1999-08-25', 'ricardo@gmail.com', '202cb962ac59075b964b07152d234b70\n', 2),
(6, 'domingos', '666.666.666-66', '(66)66666-6666', '1999-08-25', 'domingos@gmail.com', '202cb962ac59075b964b07152d234b70', 3);

CREATE TABLE produto (
  codprod_PK int(11) PRIMARY KEY NOT NULL,
  nomeprod varchar(100) NOT NULL,
  catprod varchar(50) NOT NULL,
  qtprod int(11) NOT NULL,
  precoun decimal(10,3) NOT NULL,
  imgprod blob DEFAULT NULL,
  pesoprod decimal(10,3) NOT NULL
);

CREATE TABLE pedido (
  codped_PK int(11) PRIMARY KEY NOT NULL,
  id_usuarios_FK int(11) DEFAULT NULL,
  codprod_FK int(11) DEFAULT NULL,
  descr varchar(400) DEFAULT NULL,
  vlped decimal(10,3) DEFAULT NULL,
  FOREIGN KEY (id_usuarios_FK) REFERENCES usuarios (id),
  FOREIGN KEY (codprod_FK) REFERENCES produto (codprod_PK)
);

CREATE TABLE Servicos 
(
codServ INT PRIMARY KEY, 
tipoServ VARCHAR(20),
vlServ DECIMAL(10,3),
dtServ DATE,
hrServ TIME
);

CREATE TABLE Agendas 
(
codAge INT PRIMARY KEY, 
nomeCli VARCHAR(40), 
telCli VARCHAR(20), 
emailCli VARCHAR(20), 
tpServ VARCHAR(20), 
hrAgenda TIME,
id_usuarios_FK INT(11),
FOREIGN KEY (id_usuarios_FK) REFERENCES usuarios (id)
);