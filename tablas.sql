CREATE TABLE usuarios(
    id int PRIMARY KEY,
	nombre varchar(128) NOT NULL,
    correo varchar(120) NOT NULL,
    contra varchar(255) NOT NULL,
    usuario varchar(60) NOT NULL
)

ALTER TABLE usuarios
    MODIFY id int NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;


CREATE TABLE forms(
    id int PRIMARY KEY,
	nombre varchar(128) NOT NULL,
    correo varchar(128) NOT NULL,
    sitio varchar(200),
    telefono varchar(12),
    mensaje varchar(300) NOT NULL
)

ALTER TABLE forms
    MODIFY id int NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;