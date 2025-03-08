CREATE DATABASE EscuelaRobotica;
USE EscuelaRobotica;
-- Crear la tabla de usuarios
CREATE TABLE Usuarios (
    usuarioID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    rol ENUM('Estudiante', 'Docente', 'Administrativo') NOT NULL
);

-- Crear la tabla de grupos
CREATE TABLE Grupos (
    grupoID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

-- Crear la tabla de cursos
CREATE TABLE Cursos (
    cursoID INT AUTO_INCREMENT PRIMARY KEY,
    nombreCurso VARCHAR(255) NOT NULL,
    caratula VARCHAR(255),
    contenido TEXT,
    kitDeRobot VARCHAR(255) NOT NULL
);

-- Crear la tabla de materiales didácticos
CREATE TABLE MaterialDidactico (
    materialID INT AUTO_INCREMENT PRIMARY KEY,
    tipoMaterial ENUM('tutorial', 'video', 'manual') NOT NULL,
    contenido TEXT,
    cursoID INT,
    FOREIGN KEY (cursoID) REFERENCES Cursos(cursoID)
);

-- Crear la tabla de kits de robótica
CREATE TABLE KitsRobotica (
    kitID INT AUTO_INCREMENT PRIMARY KEY,
    nombreKit VARCHAR(255) NOT NULL,
    contenidoKit TEXT
);

-- Relación entre estudiantes y grupos (Un estudiante pertenece a un grupo)
CREATE TABLE EstudiantesGrupos (
    usuarioID INT,
    grupoID INT,
    PRIMARY KEY (usuarioID, grupoID),
    FOREIGN KEY (usuarioID) REFERENCES Usuarios(usuarioID),
    FOREIGN KEY (grupoID) REFERENCES Grupos(grupoID)
);

-- Relación entre grupos y cursos (Un grupo puede tener varios cursos)
CREATE TABLE GruposCursos (
    grupoID INT,
    cursoID INT,
    PRIMARY KEY (grupoID, cursoID),
    FOREIGN KEY (grupoID) REFERENCES Grupos(grupoID),
    FOREIGN KEY (cursoID) REFERENCES Cursos(cursoID)
);

-- Relación entre cursos y kits de robótica (Cada curso tiene un kit de robótica)
CREATE TABLE CursosKits (
    cursoID INT,
    kitID INT,
    PRIMARY KEY (cursoID, kitID),
    FOREIGN KEY (cursoID) REFERENCES Cursos(cursoID),
    FOREIGN KEY (kitID) REFERENCES KitsRobotica(kitID)
);