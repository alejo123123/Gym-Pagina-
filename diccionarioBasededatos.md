Tabla: areas
codigo: Código único del área. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre del área. Tipo: varchar(100), NOT NULL
piso: Piso donde se encuentra el área. Tipo: int, NOT NULL
capacidad: Capacidad máxima del área. Tipo: int, NOT NULL
codigo_gimnasio: Código del gimnasio al que pertenece el área. Tipo: int, NOT NULL, FOREIGN KEY

Tabla: articulo_deportivo
codigo: Código único del artículo deportivo. Tipo: int, NOT NULL, PRIMARY KEY, FOREIGN KEY (codigo) REFERENCES bienespropios (codigoBien)
Tabla: asesor
dni: DNI del asesor. Tipo: int, NOT NULL, PRIMARY KEY
Tabla: cliente

dni: DNI del cliente. Tipo: int, NOT NULL, PRIMARY KEY
fecha_ini: Fecha de inicio de la membresía. Tipo: date, NOT NULL
fecha_fin: Fecha de fin de la membresía. Tipo: date, NOT NULL
ocupacion: Ocupación del cliente. Tipo: varchar(50), DEFAULT NULL
telefono_emergencia: Teléfono de emergencia del cliente. Tipo: int, NOT NULL
codigo_plan: Código del plan al que está suscrito el cliente. Tipo: int, NOT NULL
codigo_promocion: Código de la promoción aplicada al cliente. Tipo: int, DEFAULT NULL
num_boleta: Número de la boleta de pago. Tipo: int, NOT NULL

Tabla: dias_trabaja
dni_empleado: DNI del empleado. Tipo: int, NOT NULL, PRIMARY KEY
dia: Día de la semana en que trabaja el empleado. Tipo: varchar(20), NOT NULL
hora_ini: Hora de inicio del turno del empleado. Tipo: time, NOT NULL
hora_fin: Hora de fin del turno del empleado. Tipo: time, NOT NULL

Tabla: distrito
nombre: Nombre del distrito. Tipo: varchar(100), NOT NULL, PRIMARY KEY
Tabla: empleado

dni: DNI del empleado. Tipo: int, NOT NULL, PRIMARY KEY
sueldo: Sueldo del empleado. Tipo: double, NOT NULL
ocupacion: Ocupación del empleado. Tipo: varchar(50), DEFAULT NULL

Tabla: enc_limpieza
dni: DNI del encargado de limpieza. Tipo: int, NOT NULL, PRIMARY KEY

Tabla: entrenador
dni: DNI del entrenador. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre del entrenador. Tipo: varchar(50), DEFAULT NULL

Tabla: evento
codigo: Código único del evento. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre del evento. Tipo: varchar(100), NOT NULL
descripcion: Descripción del evento. Tipo: text, NOT NULL
fecha_ini: Fecha de inicio del evento. Tipo: date, NOT NULL
fecha_fin: Fecha de fin del evento. Tipo: date, NOT NULL
hora_ini: Hora de inicio del evento. Tipo: time, NOT NULL
hora_fin: Hora de fin del evento. Tipo: time, NOT NULL
costo_entrada: Costo de entrada al evento. Tipo: int, NOT NULL
presupuesto: Presupuesto asignado al evento. Tipo: int, NOT NULL
codigo_gimnasio: Código del gimnasio que organiza el evento. Tipo: int, NOT NULL
codigo_areas: Código del área donde se realizará el evento. Tipo: int, NOT NULL

Tabla: fichamedica
codigo: Código único de la ficha médica. Tipo: int, NOT NULL, PRIMARY KEY
fecha: Fecha de la ficha médica. Tipo: date, NOT NULL
peso: Peso del cliente. Tipo: int, NOT NULL
talla: Talla del cliente. Tipo: int, NOT NULL
med_cintura: Medida de la cintura del cliente. Tipo: int, NOT NULL
med_cadera: Medida de la cadera del cliente. Tipo: int, NOT NULL
med_cuello: Medida del cuello del cliente. Tipo: int, NOT NULL
porc_grasa_corporal: Porcentaje de grasa corporal del cliente. Tipo: int, NOT NULL
masa_corp_magra: Masa corporal magra del cliente. Tipo: int, NOT NULL
objetivo: Objetivo del cliente (p.ej., pérdida de peso, ganancia muscular). Tipo: varchar(500), NOT NULL
dni_nutricionista: DNI del nutricionista a cargo. Tipo: int, NOT NULL
dni_cliente: DNI del cliente. Tipo: int, NOT NULL

Tabla: fisioterapeuta
dni: DNI del fisioterapeuta. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre del fisioterapeuta. Tipo: varchar(50), NOT NULL, DEFAULT ''

Tabla: gimnasio
codigo: Código único del gimnasio. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre del gimnasio. Tipo: varchar(100), NOT NULL
telefono: Teléfono del gimnasio. Tipo: int, NOT NULL
direccion: Dirección del gimnasio. Tipo: varchar(100), NOT NULL

Tabla: instructor
dni: DNI del instructor. Tipo: int, NOT NULL, PRIMARY KEY
curso: Curso que imparte el instructor. Tipo: varchar(20), NOT NULL

Tabla: invitado_especial
dni: DNI del invitado especial. Tipo: int, NOT NULL, PRIMARY KEY
ocupacion: Ocupación del invitado especial. Tipo: varchar(100), NOT NULL
tarifa_hora: Tarifa por hora del invitado especial. Tipo: int, NOT NULL

Tabla: listacosas
codigo: Código único del artículo en la lista. Tipo: int, NOT NULL, PRIMARY KEY
nombre: Nombre del artículo en la lista. Tipo: varchar(120), NOT NULL

Tabla: mantenimiento
dni_tecnico: DNI del técnico encargado del mantenimiento. Tipo: int, NOT NULL, PRIMARY KEY
codigo_maquina: Código de la máquina que se mantiene. Tipo: int, NOT NULL, PRIMARY KEY
fecha: Fecha del mantenimiento. Tipo: date, NOT NULL
hora_ini: Hora de inicio del mantenimiento. Tipo: time, NOT NULL
hora_fin: Hora de fin del mantenimiento. Tipo: time, NOT NULL

Tabla: maquina
codigo: Código único de la máquina. Tipo: int, NOT NULL, PRIMARY KEY
marca: Marca de la máquina. Tipo: varchar(20), DEFAULT NULL
modelo: Modelo de la máquina. Tipo: varchar(20), DEFAULT NULL

Tabla: nutricionista
dni: DNI del nutricionista. Tipo: int, NOT NULL, PRIMARY KEY
colegiatura: Número de colegiatura del nutricionista. Tipo: varchar(20), DEFAULT NULL

Tabla: operaciones_ficha
codigo_ficha: Código de la ficha médica. Tipo: int, NOT NULL, PRIMARY KEY
operacion: Tipo de operación realizada en la ficha. Tipo: varchar(30), NOT NULL

Tabla: participa
dni_invitado: DNI del invitado que participa en un evento. Tipo: int, NOT NULL, PRIMARY KEY
codigo_evento: Código del evento en el que participa el invitado. Tipo: int, NOT NULL, PRIMARY KEY

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

Tabla: recepcionista
dni: DNI del recepcionista. Tipo: int, NOT NULL, PRIMARY KEY

Tabla: tecnico
dni: DNI del técnico. Tipo: int, NOT NULL, PRIMARY KEY
empresa_asoc: Empresa asociada al técnico. Tipo: varchar(100), DEFAULT NULL

Tabla: trabaja
dni_empleado: DNI del empleado. Tipo: int, NOT NULL, PRIMARY KEY
codigo_area: Código del área donde trabaja el empleado. Tipo: int, NOT NULL, PRIMARY KEY

Tabla: usuarios
U_id: ID del usuario. Tipo: tinyint, NOT NULL, AUTO_INCREMENT, PRIMARY KEY
U_nombre: Nombre del usuario. Tipo: varchar(50), DEFAULT NULL
U_correo: Correo electrónico del usuario. Tipo: varchar(50), DEFAULT NULL
U_mensaje: Mensaje del usuario. Tipo: varchar(100), DEFAULT NULL
