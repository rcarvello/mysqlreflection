# MySQLReflection
## A useful utility for the Object Relation Mapping of MySQL databases
The utility generates automatically PHP classes for any tables of a given database
schema.

Package is extracted from my personal PHP Web MVC Framework.

To run the utility:

1) Set your database by modifying mysqlreflection.config.php file.
2) Then just run app_create_beans.php to launch utility GUI. (Note: GUI uses Bootstrap and jQuery from CDN. So you must have internet connection alive)
3) Click "Generate Classes" button.

After running the utility you will find all generated classes into "beans"
folder.

Note:

- Auto generated classes are prefixed with "Bean".
- Each auto generated class uses bean\bean.config.php for configuration info.
- Each auto generated class uses Model.php and MySqlRecord.php


An auto generated MySQL class provides the following services:

* A constructor for managing a fetched table’s row or for a adding a new one
* Management for both single or composite Primary Keys
* Automatic mapping of the different date formats may occurs between
	application and database
* Destructor to automatically close database connection
* Defines a set of attributes corresponding to the table fields
* Setter and Getter methods for each attribute
* OO methods for simplify DML select, insert, update and delete operations
* A facility for quickly updating a previously fetched row
* Useful methods to obtain table DDL and the last executed SQL statement
* Error handling of SQL statements
* Camel/Pascal case naming convention for Attributes/Class used for mapping
	Fields/Table
* Useful PHPDOC information about table, fields and the usage of class,
	attributes and methods.
    
Developers can quickly use these classes on their application.

Into the beans directory are located some auto generated classes of a MySQL schema.

DDL for MySQL schema is into a script file located into "sql" directory.

There is also a simple tester script "app_run_bean.php" for showing usage of a generated class.


### Utility GUI
![alt tag](https://raw.githubusercontent.com/rcarvello/mysqlreflection/master/docs/gui.png)

### Overview
![alt tag](https://raw.githubusercontent.com/rcarvello/mysqlreflection/master/docs/MySQLReflection.png)

### UML Class Model
![alt tag](https://raw.githubusercontent.com/rcarvello/mysqlreflection/master/docs/UMLClassModel.png)

### Convert MySQL into PHP Classes automatically - Video Tutorial (old user interface)
[![IMAGE ALT TEXT HERE](https://i.ytimg.com/vi/7Aa_k_hWDYk/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=3wURVxGteSMWeF9OtZCnrOpeVRk)](https://www.youtube.com/watch?v=7Aa_k_hWDYk)
