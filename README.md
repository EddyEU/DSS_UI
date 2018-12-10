# DSS_UI
User interface ABM

### UI Users
ABM Users

### Installing


* Execute Script
  
```
	app/database/database.sql
```

```
  CREATE TABLE USUARIO (
      id INT NOT NULL AUTO_INCREMENT ,
      nombre varchar(100) NOT NULL,
      apellido  varchar(100) NOT NULL,
      email  varchar(100) NOT NULL,
      estado int NOT NULL,
      PRIMARY KEY (id)
  );
 ```

* Change value connection database 	
```
	app/database/connection.php
```

```
define('DB_HOST', 'localhost'); // 'your-database-host';
define('DB_NAME', 'abm_soe');   // 'your-database-name';
define('DB_USER', 'root');      // 'your-database-user';
define('DB_PASS', '');      // 'your-database-password';
 ```

 ### Required
 * Server PHP (example Laragon)
 
 * Install Laragon: https://laragon.org/download/index.html
  
 * Run file index.php
 
 
 
 ### Proyect
 DSS_Emailing_Go: https://github.com/kevinsubieta/DSS_Emailing_Go.git
 
 DSS_Storage_Go: https://github.com/kevinsubieta/DSS_Storage_Go.git
 
 DSS_UI: https://github.com/EddyEU/DSS_UI.git
 
 
 
 
 
 
 
