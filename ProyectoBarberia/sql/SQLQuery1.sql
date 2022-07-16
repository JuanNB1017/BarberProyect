--Uso de la base de datos
drop database CtrlBarberia
USE sakila;
--Creacion de la base de datos
CREATE DATABASE CtrlBarberia;  
GO
--Delete de tablas
DROP TABLE  Citas;
TRUNCATE TABLE Clientes

--Delete clientes
TRUNCATE TABLE Clientes;
--Uso de la base de datos
USE CtrlBarberia;
GO
--Creacion de tablas
--Primer tabla

DROP TABLE Clientes
CREATE TABLE Clientes(
NumCliente INT PRIMARY KEY IDENTITY  (1,1) not null,
NomPila VARCHAR (30) not null,
ApePaterno VARCHAR(30) not null,
ApeMaterno VARCHAR(30) not null, 
NumTelefono VARCHAR(10) not null,
Correo VARCHAR(50) UNIQUE  
);
GO
--Segunda tabla
DROP Table Horarios
CREATE TABLE Horarios(
CodHorario INT PRIMARY KEY IDENTITY(1,1) not null,
HoraInicio Varchar(5) not null,
HoraFin Varchar(5) not null
);
GO
--Tercera tabla
DROP TABLE Empleados
CREATE TABLE Empleados(
NumEmpleado INT PRIMARY KEY IDENTITY(1,1) not null,
NomPila VARCHAR (30) not null,
ApePaterno VARCHAR(30) not null,
ApeMaterno VARCHAR(30) not null, 
NumTelefono VARCHAR(10) not null,
Correo VARCHAR(50) UNIQUE
);
GO
--Cuarta tabla
DROP TABLE EstatusCita
CREATE TABLE EstatusCita(
Codigo INT  PRIMARY KEY IDENTITY(1,1) not null,
Descripcion VARCHAR(30)
);
GO
--Quinta tabla
DROP TABLE Citas
CREATE TABLE Citas(
NumCita INT PRIMARY KEY IDENTITY(1,1) not null,
Descripcion VARCHAR(50) not null,
Fecha Date not null,
PrecioFinal Money not null,
IdCliente INT not null,
IdHorario INT not null,
IdEstatus INT not null
CONSTRAINT FkCliente FOREIGN KEY (IdCliente) REFERENCES Clientes (NumCliente),
CONSTRAINT FkHorario FOREIGN KEY (IdHorario) REFERENCES Horarios (CodHorario),
CONSTRAINT FkEstatus FOREIGN KEY (IdEstatus) REFERENCES EstatusCita (Codigo)
);
--Sexta tabla
DROP TABLE Servicios
CREATE TABLE Servicios(
CodigoServicio Char(6) PRIMARY KEY not null,
Nombre VARCHAR (50) not null,
Descripcion VARCHAR (80) not null,
Precio Money not null
);
Go
--Sexta tabla
DROP TABLE RegistroEmSe
CREATE TABLE RegistroEmSe(
CodigoReEmSe INT PRIMARY KEY IDENTITY(1,1) not null,
NumCita INT not null,
NumEmpleado INT not null,
Servicio Char(6) not null,
CONSTRAINT FkCita FOREIGN KEY (NumCita) REFERENCES Citas (NumCita),
CONSTRAINT FkNumEmpleado FOREIGN KEY (NumEmpleado) REFERENCES Empleados (NumEmpleado),
CONSTRAINT FkServicio FOREIGN KEY (Servicio) REFERENCES Servicios (CodigoServicio)
);