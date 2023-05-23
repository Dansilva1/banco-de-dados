CREATE DATABASE Login;
USE Login;

Create table tbUsuario
(
idUsuario int,
nmLogin varchar(20),
dsSenha varchar(20)
);

DROP TABLE tbUsuario;
select * FROM tbUsuario;

INSERT INTO tbUsuario values ('1', 'Joana', '12');