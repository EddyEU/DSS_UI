

  CREATE TABLE USUARIO (
      id INT NOT NULL AUTO_INCREMENT ,
      nombre varchar(100) NOT NULL,
      apellido  varchar(100) NOT NULL,
      email  varchar(100) NOT NULL,
      estado int NOT NULL,
      PRIMARY KEY (id)
  );
  INSERT INTO USUARIO (id,nombre,apellido,email,estado) VALUES (1,'SATURNINO','MAMANI','SATURNINO@MAMANI.COM',1);
  INSERT INTO USUARIO (id,nombre,apellido,email,estado) VALUES (2,'TIMOTEO','PONCE','TIMOTEO@PONCE.COM',1);

