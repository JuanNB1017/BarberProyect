--Insertar datos por tabla
--Inserts de clientes
--Select clientes

INSERT INTO Clientes VALUES('Jesus','Rodriguez','Salvador', '6649874565', 'Jesus@gmail.com')
Go
INSERT INTO Clientes VALUES( 'Kevin', 'Anaya', 'Ayala', '6648003334', 'Kevin@gmail.com')
Go
INSERT INTO Clientes VALUES('Gustavo', 'Garcia', 'Ruiz', '6641288637', 'Gustavo@gmail.com')
Go
INSERT INTO Clientes VALUES('Gloria', 'Ruiz', 'Sotelo', '6649893437', 'Gloria@gmail.com')
Go
INSERT INTO Clientes VALUES('Alejandro', 'Angulo', 'Mendez', '6645767876', 'Alejandro@gmail.com')
Go
INSERT INTO Clientes VALUES('Margarita', 'Acosta ', 'Torres', '6641166832', 'Margarita@gmail.com')
Go
INSERT INTO Clientes VALUES('Jose', 'Alcaraz', 'Verduzco', '6645458978', 'Jose@gmail.com')
Go
INSERT INTO Clientes VALUES('Susana', 'Alvarez', 'Maldonado', '6643321211', 'Susana@gmail.com')
Go
INSERT INTO Clientes VALUES('Manuel', 'Angeles', 'Angeles', '6641288637', 'Manuel@gmail.com')
Go
--Estos clientes los usaremos para pruebas
INSERT INTO Clientes VALUES('Carolina', 'Avalos', 'Diaz', '6646754321', 'Carolina@gmail.com')
Go
INSERT INTO Clientes VALUES('Antonio', 'Aviña', 'Valencia', '6648435321', 'Antonio@gmail.com')
Go
INSERT INTO Clientes VALUES('Emanuel', 'Barrera', 'Franco', '6640652258', 'Emanuel@gmail.com')
Go
INSERT INTO Clientes VALUES('Zoel', 'Barroso', 'Villa', '6647093421', 'Zoel@gmail.com')
Go
INSERT INTO Clientes VALUES('Derian', 'Bedolla', 'Barajas', '6641325346', 'Derian@gmail.com')
Go
INSERT INTO Clientes VALUES('Francisco', 'Blanco', 'Favela', '6642980549', 'Francisco@gmail.com')
Go
SELECT * FROM Clientes
--------------------------------------------------------------------------------------------------------------------------------------------------------------------
--Insert de empleados
INSERT INTO Empleados VALUES('Pablo','Aguirre','Cruz', '6642769087', 'Pablo@gmail.com')
go
INSERT INTO Empleados VALUES('Victor','Borja','Aburto', '6642124388', 'Victor@gmail.com')
go
INSERT INTO Empleados VALUES('Laura','Calderon','Ortiz', '6647543221', 'Laura@gmail.com')
go
INSERT INTO Empleados VALUES('Carlos','Cantu','Brito', '6647875431', 'Carlos@gmail.com')
go
INSERT INTO Empleados VALUES('Miguel','Celis','Lopez', '6646126523', 'Miguel@gmail.com')
go
INSERT INTO Empleados VALUES('Mario','Chavez','Lopez', '6640321871', 'Marioi@gmail.com')
go
SELECT * FROM Empleados
-----------------------------------------------------------------------------------------------------------------------------------------------------------------
--Insert de EstatusCita
INSERT INTO EstatusCita VALUES('Atendido');
GO
INSERT INTO EstatusCita VALUES('No atendido');
GO
INSERT INTO EstatusCita VALUES('Cancelado');
GO
SELECT * FROM EstatusCita
----------------------------------------------------------------------------------------------------------------------------------------------------------------
--Insert de Horarios
INSERT INTO Horarios VALUES('08','09')
go
INSERT INTO Horarios VALUES('09','10')
go
INSERT INTO Horarios VALUES('10','11')
go
INSERT INTO Horarios VALUES('11','12')
go
INSERT INTO Horarios VALUES('12','13')
go
INSERT INTO Horarios VALUES('13','14')
go
INSERT INTO Horarios VALUES('14','15')
go
INSERT INTO Horarios VALUES('15','16')
go
INSERT INTO Horarios VALUES('16','17')
go
INSERT INTO Horarios VALUES('17','18')
go
Select * from Horarios
---------------------------------------------------------------------------------------------------------------------------------------------------------
--INSERT SERVICIOS
Insert into Servicios VALUES('CC','Corte de cabello','Corte de cabello','150')
GO
Insert into Servicios VALUES('AB','Arreglo de barba','Arreglo de barba','50')
GO
Insert into Servicios VALUES('AFC','Afeitado clasico','Afeitado clasico','150')
GO
Insert into Servicios VALUES('AFV','Afeitado victorious','Incluye exfoliante','190')
GO
Insert into Servicios VALUES('AFVIP','Afeitado vip','Incluye exfoliante y mascarilla negra','270')
GO
Insert into Servicios VALUES('PQC','Paquete clasico','Afeitado con toalla a vapor','300')
GO
Insert into Servicios VALUES('PQV','Paquete victorious','Afeitado con toalla a vapor, exfoliante y masaje relajante','370')
GO
Insert into Servicios VALUES('PQVIP','Paquete vip','Afeitado con toalla a vapor, exfoliante con vapor, mascarilla negra y masaje','490')
GO
Insert into Servicios VALUES('C','Ceja','Delineo y arreglo de ceja','40')
GO
Insert into Servicios VALUES('B','Bigote','Delineo y arreglo de bigote','50')
GO

SELECT * FROM Servicios
DROP TABLE Servicios
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--INSERT DE CITAS
INSERT INTO Citas VALUES('Corte de cabello y barba','2021-12-09','200',1,1,2)
Go
INSERT INTO Citas VALUES('Corte de cabello ','2021-12-10','150',2,2,2)
Go
INSERT INTO Citas VALUES('Afeitado vip','2021-12-11','270',3,3,2)
Go
INSERT INTO Citas VALUES('Arreglo de  barba','2021-12-08','50',4,4,2)
Go
INSERT INTO Citas VALUES('Corte de cabello','2021-12-09','150',5,5,2)
Go 
INSERT INTO Citas VALUES('Ceja','2021-12-10','40',6,6,2)
Go 
--Estos registros se deben corregir y luego se usaran como ejemplos
INSERT INTO Citas VALUES('Pintura para barba','2021-10-11',100,7,7)
Go 
INSERT INTO Citas VALUES('Mascarilla negra','2021-11-08',200,8,8)
Go 
INSERT INTO Citas VALUES('Paquetes victorios','2021-12-09',370,9,9)
Go 
INSERT INTO Citas VALUES('Bigote','2021-12-10',50,10,10)
Go 
SELECT * FROM Citas
----------------------------------------------------------------------------------------------------------------------------------------------------------------
INSERT INTO RegistroEmSe VALUES(1,1,'CC') --NumCita,NumEmpleado,Servicio
GO
INSERT INTO RegistroEmSe VALUES(1,1,'AB') 
GO

INSERT INTO RegistroEmSe VALUES(2,7,'CC') --NumCita,NumEmpleado,Servicio
GO

INSERT INTO RegistroEmSe VALUES(3,3,'AFVIP') 
GO

INSERT INTO RegistroEmSe VALUES(4,4,'AB') --NumCita,NumEmpleado,Servicio
GO

INSERT INTO RegistroEmSe VALUES(5,5,'CC') 
GO

INSERT INTO RegistroEmSe VALUES(6,6,'B') 
GO

SELECT * FROM RegistroEmSe