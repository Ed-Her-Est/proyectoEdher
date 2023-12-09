create database clinica;
use clinica;

CREATE TABLE BackupRecords (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    file_path VARCHAR(255) NOT NULL
);

-- Crear la tabla Usuario
CREATE TABLE Usuario (
    ID_Usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    apellidoPaterno VARCHAR(255),
    apellidoMaterno VARCHAR(255),
    usuario VARCHAR(50),
    contrasenia VARCHAR(255),
    email VARCHAR(255),
    created_at datetime,
updated_at datetime null,
deleted_at datetime null
);

INSERT INTO Usuario (nombre, apellidoPaterno, apellidoMaterno, usuario, contrasenia, email, created_at)
VALUES
    ('Juan', 'Pérez', 'López', 'juanperez', 'contrasenia1', 'juan.perez@example.com', '2023-11-07 10:08:00'),
    ('María', 'Gómez', 'Sánchez', 'mariagomez', 'contrasenia2', 'maria.gomez@example.com', '2023-11-07 10:15:00'),
    ('Pedro', 'Rodríguez', 'Martínez', 'pedrorodriguez', 'contrasenia3', 'pedro.rodriguez@example.com', '2023-11-07 10:30:00'),
    ('Laura', 'Fernández', 'García', 'laurafernandez', 'contrasenia4', 'laura.fernandez@example.com', '2023-11-07 10:45:00'),
    ('Carlos', 'López', 'Hernández', 'carloslopez', 'contrasenia5', 'carlos.lopez@example.com', '2023-11-07 11:00:00');

   
-- Crear la tabla Fisioterapeuta
CREATE TABLE Fisioterapeuta (
    ID_Fisioterapeuta INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    apellidoPaterno VARCHAR(255),
    apellidoMaterno VARCHAR(255),
    usuario VARCHAR(50),
    contrasenia VARCHAR(255),
    genero VARCHAR(10),
    telefono VARCHAR(20),
    created_at datetime,
updated_at datetime null,
deleted_at datetime null
);

INSERT INTO Fisioterapeuta (nombre, apellidoPaterno, apellidoMaterno, usuario, contrasenia, genero, telefono, created_at)
VALUES
    ('Juan', 'Pérez', 'García', 'juanperez', 'contrasenia1', 'Masculino', '555-123-4567', '2023-11-08 10:00:00'),
    ('Ana', 'López', 'Martínez', 'analopez', 'contrasenia2', 'Femenino', '555-987-6543', '2023-11-08 10:15:00'),
    ('Carlos', 'González', 'Fernández', 'carlosgonzalez', 'contrasenia3', 'Masculino', '555-555-5555', '2023-11-08 10:30:00'),
    ('María', 'Sánchez', 'Rodríguez', 'mariasanchez', 'contrasenia4', 'Femenino', '555-789-1234', '2023-11-08 10:45:00'),
    ('David', 'Martín', 'Hernández', 'davidmartin', 'contrasenia5', 'Masculino', '555-111-2222', '2023-11-08 11:00:00');

   
-- Crear la tabla Paciente
CREATE TABLE Paciente (
    ID_Paciente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    apellidoPaterno VARCHAR(255),
    apellidoMaterno VARCHAR(255),
    ine VARCHAR(20),
    genero VARCHAR(10),
    created_at datetime,
updated_at datetime null,
deleted_at datetime null
);

INSERT INTO Paciente (nombre, apellidoPaterno, apellidoMaterno, ine, genero, created_at)
VALUES
    ('Juan', 'Gómez', 'López', 'ABC12345', 'Masculino', '2023-11-08 09:00:00'),
    ('Ana', 'Pérez', 'Sánchez', 'XYZ98765', 'Femenino', '2023-11-08 09:15:00'),
    ('Luis', 'Ramírez', 'Martínez', 'DEF67890', 'Masculino', '2023-11-08 09:30:00'),
    ('María', 'Fernández', 'García', 'MNO54321', 'Femenino', '2023-11-08 09:45:00'),
    ('Carlos', 'González', 'Torres', 'PQR12345', 'Masculino', '2023-11-08 10:00:00');

-- Crear la tabla Consultorio
CREATE TABLE Consultorio (
    ID_Consultorio INT PRIMARY KEY AUTO_INCREMENT,
    estatus VARCHAR(20),
    numeroConsultorio INT,
    created_at datetime,
updated_at datetime null,
deleted_at datetime null
);

INSERT INTO Consultorio (estatus, numeroConsultorio, created_at)
VALUES
    ('Disponible',1, '2023-11-08 09:00:00'),
    ('Ocupado',2, '2023-11-08 09:15:00'),
    ('Disponible',3, '2023-11-08 09:30:00'),
    ('Ocupado',4, '2023-11-08 09:45:00'),
    ('Disponible',5, '2023-11-08 10:00:00');

   
-- Crear la tabla DatosGenerales
CREATE TABLE DatosGenerales (
    ID_DatosGenerales INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    domicilio VARCHAR(255),
    numeroEmergencia VARCHAR(20),
    edad INT,
    estatura DECIMAL(5, 2),
    peso DECIMAL(5, 2),
    estadoCivil VARCHAR(20),
    escolaridad VARCHAR(50),
    religion VARCHAR(50),
    motivoConsulta TEXT,
    Paciente_ID INT,
    created_at datetime,
updated_at datetime null,
deleted_at datetime null,
    FOREIGN KEY (Paciente_ID) REFERENCES Paciente(ID_Paciente)
);

INSERT INTO DatosGenerales (nombre, domicilio, numeroEmergencia, edad, estatura, peso, estadoCivil, escolaridad, religion, motivoConsulta, Paciente_ID, created_at)
VALUES
    ('Juan Pérez', 'Calle 123, Ciudad', '555-123-4567', 35, 1.75, 70.5, 'Casado', 'Licenciatura', 'Católico', 'Dolor de espalda', 1, '2023-11-08 09:00:00'),
    ('María López', 'Avenida XYZ, Pueblo', '555-987-6543', 28, 1.60, 55.2, 'Soltero', 'Secundaria', 'Ateísta', 'Lesión en la rodilla', 2, '2023-11-08 09:15:00'),
    ('Ana Martínez', 'Calle ABC, Villa', '555-222-3333', 45, 1.68, 75.0, 'Casado', 'Maestría', 'Protestante', 'Dolor crónico', 3, '2023-11-08 09:30:00'),
    ('Pedro Gómez', 'Bulevar 456, Ciudad', '555-444-5555', 32, 1.80, 85.8, 'Soltero', 'Licenciatura', 'Hinduismo', 'Esguince en el tobillo', 4, '2023-11-08 09:45:00'),
    ('Luisa Ramírez', 'Av. Principal, Pueblo', '555-678-9012', 50, 1.70, 70.0, 'Casado', 'Doctorado', 'Budismo', 'Lesión de hombro', 5, '2023-11-08 10:00:00');

   
-- Crear la tabla SignosVitales
CREATE TABLE SignosVitales (
    ID_SignosVitales INT PRIMARY KEY AUTO_INCREMENT,
    presionArterial VARCHAR(15),
    frecuenciaCardiaca INT,
    tensionArterial VARCHAR(15),
    saturacionOxigeno DECIMAL(4, 2),
    temperatura DECIMAL(4, 2),
    Paciente_ID INT,
    created_at datetime,
updated_at datetime null,
deleted_at datetime null,
    FOREIGN KEY (Paciente_ID) REFERENCES Paciente(ID_Paciente)
);

INSERT INTO SignosVitales (presionArterial, frecuenciaCardiaca, tensionArterial, saturacionOxigeno, temperatura, Paciente_ID, created_at)
VALUES
    ('120/80', 75, '120/80', 98.5, 36.5, 1, '2023-11-08 10:00:00'),
    ('130/85', 80, '130/85', 98.0, 36.7, 2, '2023-11-08 10:15:00'),
    ('140/90', 72, '140/90', 98.2, 36.4, 3, '2023-11-08 10:30:00'),
    ('125/82', 78, '125/82', 98.3, 36.8, 4, '2023-11-08 10:45:00'),
    ('110/75', 70, '110/75', 97.8, 36.6, 5, '2023-11-08 11:00:00');

   
-- Crear la tabla APHF
CREATE TABLE APHF (
    ID_APHF INT PRIMARY KEY AUTO_INCREMENT,
    diabetes BOOLEAN,
    HTA BOOLEAN,
    cardioPatia BOOLEAN,
    enfReumaticas BOOLEAN,
    Paciente_ID INT,
    created_at datetime,
updated_at datetime null,
deleted_at datetime null,
    FOREIGN KEY (Paciente_ID) REFERENCES Paciente(ID_Paciente)
);

INSERT INTO APHF (diabetes, HTA, cardioPatia, enfReumaticas, Paciente_ID, created_at)
VALUES
    (1, 0, 1, 0, 1, '2023-11-08 12:00:00'),
    (0, 1, 0, 1, 2, '2023-11-08 12:15:00'),
    (1, 0, 0, 0, 3, '2023-11-08 12:30:00'),
    (0, 1, 1, 0, 4, '2023-11-08 12:45:00'),
    (1, 1, 0, 1, 5, '2023-11-08 13:00:00');

   
-- Crear la tabla ExploracionFisica
CREATE TABLE ExploracionFisica (
    ID_ExploracionFisica INT PRIMARY KEY AUTO_INCREMENT,
    escalaDolor INT,
    ROM VARCHAR(100),
    fuerza VARCHAR(100),
    tonoMuscular VARCHAR(100),
    dermatomas VARCHAR(100),
    reflejos VARCHAR(100),
    Paciente_ID INT,
    created_at datetime,
updated_at datetime null,
deleted_at datetime null,
    FOREIGN KEY (Paciente_ID) REFERENCES Paciente(ID_Paciente)
);

INSERT INTO ExploracionFisica (escalaDolor, ROM, fuerza, tonoMuscular, dermatomas, reflejos, Paciente_ID, created_at)
VALUES
    (3, 120, 4, 5, 12, 4, 1, '2023-11-08 12:00:00'),
    (2, 135, 5, 4, 10, 3, 2, '2023-11-08 12:15:00'),
    (4, 110, 3, 5, 14, 5, 3, '2023-11-08 12:30:00'),
    (3, 125, 4, 4, 11, 4, 4, '2023-11-08 12:45:00'),
    (2, 140, 5, 3, 10, 3, 5, '2023-11-08 13:00:00');

   
-- Crear la tabla Control
CREATE TABLE Control (
    ID_Control INT PRIMARY KEY AUTO_INCREMENT,
    fechaConsulta DATE,
    telefono VARCHAR(20),
    Paciente_ID INT,
    Consultorio_ID INT,
    created_at datetime,
updated_at datetime null,
deleted_at datetime null,
    FOREIGN KEY (Paciente_ID) REFERENCES Paciente(ID_Paciente),
    FOREIGN KEY (Consultorio_ID) REFERENCES Consultorio(ID_Consultorio)
);

INSERT INTO Control (fechaConsulta, telefono, Paciente_ID, Consultorio_ID, created_at)
VALUES
    ('2023-11-08', '555-123-4567', 1, 1, '2023-11-08 10:00:00'),
    ('2023-11-09', '555-234-5678', 2, 2, '2023-11-09 10:15:00'),
    ('2023-11-10', '555-345-6789', 3, 3, '2023-11-10 10:30:00'),
    ('2023-11-11', '555-456-7890', 4, 4, '2023-11-11 10:45:00'),
    ('2023-11-12', '555-567-8901', 5, 5, '2023-11-12 11:00:00');


-- Crear la tabla Expediente
CREATE TABLE Expediente (
    ID_Expediente INT PRIMARY KEY AUTO_INCREMENT,
    numExpediente INT,
    fechaIngreso DATE,
    Paciente_ID INT,
    Consultorio_ID INT,
    created_at datetime,
updated_at datetime null,
deleted_at datetime null,
    FOREIGN KEY (Paciente_ID) REFERENCES Paciente(ID_Paciente),
    FOREIGN KEY (Consultorio_ID) REFERENCES Consultorio(ID_Consultorio)
);

INSERT INTO Expediente (numExpediente, fechaIngreso, Paciente_ID, Consultorio_ID, created_at)
VALUES
    (1001, '2023-11-01', 1, 1, '2023-11-08 10:00:00'),
    (1002, '2023-11-02', 2, 2, '2023-11-08 10:15:00'),
    (1003, '2023-11-03', 3, 3, '2023-11-08 10:30:00'),
    (1004, '2023-11-04', 4, 4, '2023-11-08 10:45:00'),
    (1005, '2023-11-05', 5, 5, '2023-11-08 11:00:00');


-- Crear la tabla Cita
CREATE TABLE Cita (
    ID_Cita INT PRIMARY KEY AUTO_INCREMENT,
    fecha DATE,
    numConsultorio INT,
    fisioterapeuta_ID INT,
    Paciente_ID INT,
    Consultorio_ID INT,
    created_at datetime,
updated_at datetime null,
deleted_at datetime null,
    FOREIGN KEY (fisioterapeuta_ID) REFERENCES Fisioterapeuta(ID_Fisioterapeuta),
    FOREIGN KEY (Paciente_ID) REFERENCES Paciente(ID_Paciente),
    FOREIGN KEY (Consultorio_ID) REFERENCES Consultorio(ID_Consultorio)
);

INSERT INTO Cita (fecha, numConsultorio, fisioterapeuta_ID, Paciente_ID, Consultorio_ID, created_at)
VALUES
    ('2023-11-08', 1, 1, 1, 1, '2023-11-08 10:00:00'),
    ('2023-11-08', 2, 2, 2, 2, '2023-11-08 10:15:00'),
    ('2023-11-08', 3, 3, 3, 3, '2023-11-08 10:30:00'),
    ('2023-11-08', 4, 4, 4, 4, '2023-11-08 10:45:00'),
    ('2023-11-08', 5, 5, 5, 5, '2023-11-08 11:00:00');



