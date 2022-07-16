use CtrlBarberia2

CREATE TABLE RegCitEm(
CodRegCitEm INT PRIMARY KEY IDENTITY(1,1) not null,
NumCita INT not null,
NumEmpleado INT not null,
CodServicio char(6) not null,
CONSTRAINT FkCita FOREIGN KEY (NumCita) REFERENCES Cita (NumCita),
CONSTRAINT FkEmpleado FOREIGN KEY (NumEmpleado) REFERENCES Empleado (NumEmpleado),
CONSTRAINT FkServicio FOREIGN KEY (CodServicio) REFERENCES Servicio (CodServicio)
);

CREATE TABLE Cita(
NumCita INT PRIMARY KEY IDENTITY(1,1) not null,
Descripcion VARCHAR(50) null,
Fecha Date not null,
PrecioFinal Money not null,
IdCliente INT not null,
IdHorario INT not null,
IdEstatus Varchar(5) not null
CONSTRAINT FkCliente FOREIGN KEY (IdCliente) REFERENCES Cliente (NumCliente),
CONSTRAINT FkHorario FOREIGN KEY (IdHorario) REFERENCES Horario (CodHorario),
CONSTRAINT FkEstatus FOREIGN KEY (IdEstatus) REFERENCES Estatus (Codigo)
);


DROP TABLE Cita
DELETE  FROM Cita Where NumCita=1
DELETE FROM RegCitEm WHERE CodRegCitEm=6
SELECT * FROM RegCitEm
SELECT * FROM Servicio
SELECT * FROM Cita
SELECT * FROM Empleado
INSERT INTO RegCitEm (NumCita,NumEmpleado,CodServicio)VALUES(1,1,'PQC')


INSERT INTO Cita VALUES('Solicitud de cita','2021-12-09','200',1,1,'NA')--Almacenamos NumCita, Cliente, Horario
Go
INSERT INTO RegCitEm VALUES(1,1,'CC')--Almacenamos el NumCita, Empleado
GO
INSERT INTO RegCitEm VALUES(1,1,'AB')--Almacenamos el NumCita, Empleado
GO
------
INSERT INTO Cita VALUES('Solicitud de cita','2021-12-09','150',2,1,'NA')--Almacenamos NumCita, Cliente, Horario
Go
INSERT INTO RegCitEm VALUES(2,2,'AFC')--Almacenamos el NumCita, Empleado
GO
------
INSERT INTO Cita VALUES('Solicitud de cita','2021-12-09','240',3,1,'NA')--Almacenamos NumCita, Cliente, Horario
Go
INSERT INTO RegCitEm VALUES(3,3,'CC')--Almacenamos el NumCita, Empleado
GO
INSERT INTO RegCitEm VALUES(3,3,'B')--Almacenamos el NumCita, Empleado
GO
INSERT INTO RegCitEm VALUES(3,3,'C')--Almacenamos el NumCita, Empleado
GO

----------------------------
INSERT INTO Cita VALUES('Solicitud de cita','2021-12-09','490',4,1,'NA')--Almacenamos NumCita, Cliente, Horario
Go
INSERT INTO RegCitEm VALUES(4,4,'PQVIP')--Almacenamos el NumCita, Empleado
GO

-----------------------------
INSERT INTO Cita VALUES('Solicitud de cita','2021-12-09','350',5,2,'NA')--Almacenamos NumCita, Cliente, Horario
Go
INSERT INTO RegCitEm VALUES(5,5,'PQC')--Almacenamos el NumCita, Empleado
GO
INSERT INTO RegCitEm VALUES(5,5,'B')--Almacenamos el NumCita, Empleado
GO
---------------------------------------------------------
INSERT INTO Cita VALUES('Solicitud de cita','2021-12-09','240',6,8,'NA')--Almacenamos NumCita, Cliente, Horario
Go
INSERT INTO RegCitEm VALUES(6,6,'CC')--Almacenamos el NumCita, Empleado
GO
INSERT INTO RegCitEm VALUES(6,6,'AB')--Almacenamos el NumCita, Empleado
GO
INSERT INTO RegCitEm VALUES(6,6,'B')--Almacenamos el NumCita, Empleado
GO