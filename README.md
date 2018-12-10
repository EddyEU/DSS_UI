# DSS_UI
User interface ABM

### UI Users
ABM Users

### Installing


* Execute Script

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
  
* Execute file 	
```
	app/database/database.sql
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
  
 * Run file index.html		

 
 
 
 
 
 
 