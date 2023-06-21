--Creacion de la tabla tipo_usuario--
CREATE TABLE `roles`.`tipo_usuario` 
( `tipo_usuario` INT NOT NULL AUTO_INCREMENT ,  
`nombre_Tipo` VARCHAR(100) NOT NULL ,    PRIMARY KEY  (`tipo_usuario`)) ENGINE = InnoDB;


--Creacion de la tabla usuario--
CREATE TABLE `roles`.`usuario` 
( `id_usuario` INT NOT NULL AUTO_INCREMENT ,  
`nombre` VARCHAR(200) NOT NULL ,  
`apellido_paterno` VARCHAR(200) NOT NULL ,  
`apellido_materno` VARCHAR(200) NOT NULL ,  
`usuario` VARCHAR(200) NOT NULL ,  
`clave` VARCHAR(200) NOT NULL ,  
`tipo_usuario` INT NOT NULL ,    
PRIMARY KEY  (`id_usuario`)) ENGINE = InnoDB;

--Agregar la llave foranea a la tabla usuario--
ALTER TABLE usuario ADD FOREIGN KEY(tipo_usuario) REFERENCES tipo_usuario(tipo_usuario)

--Insersion de usuarios en tabla usuario--
INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `usuario`, `clave`, `tipo_usuario`) 
VALUES (NULL, 'Alejandro Rubén', 'Mandujano', 'Vázquez', 'alejandro', '1234', '1');

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `usuario`, `clave`, `tipo_usuario`) 
VALUES (NULL, 'Diego', 'Mandujano', 'Vázquez', 'diego', '1234', '2');