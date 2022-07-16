USE CtrlBarberia2
CREATE VIEW CitasAdmin
AS
Select Cit.NumCita AS [Numero de cita],
Cl.NumCliente AS [Numero del cliente],
CONCAT (Cl.NomPila,' ',Cl.ApePaterno,' ',Cl.ApeMaterno) AS [Nombre del cliente],
Cit.Fecha AS [Fecha del servicio],
CONCAT (Hor.HoraInicio,'-',Hor.HoraFin) AS [Horario de la cita],
Ser.Nombre AS [Servicios seleccionados],
CONCAT (Emp.NomPila,' ',Emp.ApePaterno,' ',Emp.ApeMaterno) AS [Nombre del empleado],
Ser.Precio AS[Precio del servicio],
Es.Codigo AS [Codigo del estatus]
FROM Cita as Cit
JOIN Cliente as Cl on Cl.NumCliente= Cit.IdCliente
JOIN Horario as Hor on Hor.CodHorario=Cit.IdHorario
Join RegCitEm AS RCE on RCE.NumCita=Cit.NumCita
JOIN Servicio AS Ser on Ser.CodServicio=RCE.CodServicio
JOIN Empleado AS EmP on EmP.NumEmpleado=RCE.NumEmpleado
JOIN Estatus AS Es on Es.Codigo=Cit.IdEstatus

SELECT * FROM Estatus
UPDATE Cita SET IdEstatus='A' WHERE IdCliente=1 and NumCita=1

ALTER VIEW EmpleadosDisponibles AS
SELECT Emp.NumEmpleado ,Emp.NomPila,Emp.ApePaterno
From Empleado as Emp 

SELECT * FROM EmpleadosDisponibles

CREATe VIEW ServiciosDisponibles
AS
SELECT Ser.CodServicio, Ser.Nombre
FROM Servicio as Ser
Select * from ServiciosDisponibles

ALTER VIEW HorariosDisponibles
AS
Select Hor.CodHorario, Hor.HoraFin, Hor.HoraInicio
FROM Horario as Hor
Select * from HorariosDisponibles