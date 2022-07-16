CREATE VIEW CitasXusuario
as
Select CONCAT (Cl.NomPila,' ',Cl.ApePaterno,' ',Cl.ApeMaterno) AS [Nombre del cliente],
Cit.Fecha AS [Fecha del servicio],
CONCAT (Hor.HoraInicio,'-',Hor.HoraFin) AS [Horario de la cita],
Ser.Nombre AS [Servicios seleccionados],
CONCAT (Emp.NomPila,' ',Emp.ApePaterno,' ',Emp.ApeMaterno) AS [Nombre del empleado],
Ser.Precio AS[Precio del servicio]
FROM Cita as Cit
JOIN Cliente as Cl on Cl.NumCliente= Cit.IdCliente
JOIN Horario as Hor on Hor.CodHorario=Cit.IdHorario
Join RegCitEm AS RCE on RCE.NumCita=Cit.NumCita
JOIN Servicio AS Ser on Ser.CodServicio=RCE.CodServicio
JOIN Empleado AS EmP on EmP.NumEmpleado=RCE.NumEmpleado

SELECT * FROM CitasXusuario

CREATE VIEW EmpleadosDisponibles AS
SELECT Emp.NumEmpleado As[Numero de empleado], CONCAT (Emp.NomPila,' ',Emp.ApePaterno,' ',Emp.ApeMaterno) AS [Nombre del empleado]
From Empleado as Emp



























CREATE VIEW HorariosDisponibles
AS
Select Hor.CodHorario as [Codigo del horario], CONCAT (Hor.HoraFin,' a ',Hor.HoraInicio) AS [Horario de la cita]
FROM Horario as Hor