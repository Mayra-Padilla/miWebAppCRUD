CREATE SCHEMA IF NOT EXISTS proyecto_jsp;
USE proyecto_jsp;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  Id int(11) AUTO_INCREMENT PRIMARY KEY,
  Nombre varchar(20),
  Apellido varchar(20),
  Usuario varchar(20),
  Contrasena varchar(20),
  Pais varchar(20),
  Tecnologia varchar(20)
);

INSERT INTO usuarios (Id, Nombre, Apellido, Usuario, Contrasena, Pais, Tecnologia) VALUES (1, 'Adrian', 'Torres', 'atorres', '0000', 'Mexico', 'JavaScript');
INSERT INTO usuarios (Id, Nombre, Apellido, Usuario, Contrasena, Pais, Tecnologia) VALUES (2, 'Mayra', 'Padilla', 'mpadilla', '1111', 'Mexico', 'Java');
INSERT INTO usuarios (Id, Nombre, Apellido, Usuario, Contrasena, Pais, Tecnologia) VALUES (3, 'Prueba', 'Piloto', 'ppiloto', '3333', 'Peru', 'JavaScript');
INSERT INTO usuarios (Id, Nombre, Apellido, Usuario, Contrasena, Pais, Tecnologia) VALUES (4, 'Diego', 'Vazquez', 'dvazquez', '4444', 'Colombia', 'PHP');