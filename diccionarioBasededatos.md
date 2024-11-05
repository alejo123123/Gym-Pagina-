

Tabla: cliente
dni: DNI del cliente. Tipo: int, NOT NULL, PRIMARY KEY
fecha_ini: Fecha de inicio de la membresía. Tipo: date, NOT NULL
fecha_fin: Fecha de fin de la membresía. Tipo: date, NOT NULL
ocupacion: Ocupación del cliente. Tipo: varchar(50), DEFAULT NULL
telefono_emergencia: Teléfono de emergencia del cliente. Tipo: int, NOT NULL
codigo_plan: Código del plan al que está suscrito el cliente. Tipo: int, NOT NULL
codigo_promocion: Código de la promoción aplicada al cliente. Tipo: int, DEFAULT NULL
num_boleta: Número de la boleta de pago. Tipo: int, NOT NULL

Tabla: empleado
dni: DNI del empleado. Tipo: int, NOT NULL, PRIMARY KEY
sueldo: Sueldo del empleado. Tipo: double, NOT NULL
ocupacion: Ocupación del empleado. Tipo: varchar(50), DEFAULT NULL


Tabla: gimnasio
codigo: Código único del gimnasio. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre del gimnasio. Tipo: varchar(100), NOT NULL
telefono: Teléfono del gimnasio. Tipo: int, NOT NULL
direccion: Dirección del gimnasio. Tipo: varchar(100), NOT NULL


Tabla: maquina
codigo: Código único de la máquina. Tipo: int, NOT NULL, PRIMARY KEY
marca: Marca de la máquina. Tipo: varchar(20), DEFAULT NULL
modelo: Modelo de la máquina. Tipo: varchar(20), DEFAULT NULL


Tabla: persona
dni: DNI de la persona. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre de la persona. Tipo: varchar(100), NOT NULL
direccion: Dirección de la persona. Tipo: varchar(100), NOT NULL
telefono: Teléfono de la persona. Tipo: int, NOT NULL
correo: Correo electrónico de la persona. Tipo: varchar(100), DEFAULT NULL
fecha_nacimiento: Fecha de nacimiento de la persona. Tipo: date, NOT NULL
sexo: Sexo de la persona. Tipo: varchar(1), DEFAULT NULL
codigo_gimnasio: Código del gimnasio asociado a la persona. Tipo: int, NOT NULL
ocupacion: Ocupación de la persona. Tipo: varchar(50), DEFAULT NULL

Tabla: plan
codigo: Código único del plan. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre del plan. Tipo: varchar(100), NOT NULL
precio: Precio del plan. Tipo: int, NOT NULL
descripcion: Descripción del plan. Tipo: text

Tabla: promocion
codigo: Código único de la promoción. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre de la promoción. Tipo: varchar(100), NOT NULL
descripcion: Descripción de la promoción. Tipo: text
descuento: Porcentaje de descuento de la promoción. Tipo: int, NOT NULL
fecha_ini: Fecha de inicio de la promoción. Tipo: date, NOT NULL
fecha_fin: Fecha de fin de la promoción. Tipo: date, NOT NULL



Tabla: trabaja
dni_empleado: DNI del empleado. Tipo: int, NOT NULL, PRIMARY KEY
codigo_area: Código del área donde trabaja el empleado. Tipo: int, NOT NULL, PRIMARY KEY

Tabla: usuarios
U_id: ID del usuario. Tipo: tinyint, NOT NULL, AUTO_INCREMENT, PRIMARY KEY
U_nombre: Nombre del usuario. Tipo: varchar(50), DEFAULT NULL
U_correo: Correo electrónico del usuario. Tipo: varchar(50), DEFAULT NULL
U_mensaje: Mensaje del usuario. Tipo: varchar(100), DEFAULT NULL
