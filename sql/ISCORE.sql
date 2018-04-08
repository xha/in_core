CREATE TABLE [dbo].[IS_Core](
	id_core tinyint identity primary key,
	[base_datos] [varchar](50) NOT NULL,
	[usuario] [varchar](50) NOT NULL,
	[clave] [varchar](255) NOT NULL,
	[ip] [varchar](100) NOT NULL,
	[puerto] [int] NOT NULL DEFAULT ('1433'),
	nombre_sistema varchar(50) not null,
	sigla_sistema varchar(10) not null,
	ruta varchar(50) not null,
	[activo] [bit] NOT NULL DEFAULT ((1))
)

CREATE TABLE [dbo].[IS_UsuariosCore](
	[id_usuario] [int] IDENTITY primary key,
	[usuario] [varchar](20) NOT NULL,
	[correo] [varchar](100) NOT NULL,
	[cedula] [varchar](15) NOT NULL,
	[clave] [varchar](100) NOT NULL,
	[nombre] [nvarchar](100) NOT NULL,
	[apellido] [varchar](100) NOT NULL,
	[sexo] [char](1) NOT NULL DEFAULT ('M'),
	[respuesta_seguridad] [varchar](1000) NULL,
	[fecha_registro] [datetime] NOT NULL DEFAULT (getdate()),
	[telefono] [varchar](20) NULL,
	[activo] [bit] NOT NULL DEFAULT ((1))
)

INSERT [dbo].[IS_UsuariosCore] ([usuario], [correo], [cedula], [clave], [nombre], [apellido], [sexo], [respuesta_seguridad], [telefono], [activo]) VALUES (N'001', N'nada@nada.com', N'123456', N'9df3bb42df815f39041a621f7282a475', N'Innova', N'Administrador', N'M', N'CCS', NULL, 1)
