# MySQLReflection
## A useful utility for the Object Relational Mapping of MySQL databases
This package generates PHP classes from MySQL tables.
It's extracted from my PHP Web MVC Framework.

It is able to access to a given MySQL database, to retrieve from a schema tables and fields. Then, for each  table, generates a class that provides methods for accessing, reading and writing its records by using object oriented programming logic.

Each auto-generated PHP class provides Setter and Getter methods for all table fields, as well as methods for  CRUD operations.

An auto generated PHP class provides the following services for a MySQL table:

- A constructor for managing a fetched table’s row or for a adding a new one
- Management for both single or composite Primary Keys
- Automatic mapping of the different date formats may occurs between application and database
- Destructor to automatically close database connection
- Defines a set of attributes corresponding to the table fields
- Setter and Getter methods for each attribute
- OO methods for simplify DML select, insert, update and delete operations
- A facility for quickly updating a previously fetched row
- Useful methods to obtain table DDL and the last executed SQL statement
- Error handling of SQL statements
- Camel/Pascal case naming convention for Attributes/Class used for mapping Fields/Table
- Escaping of Strings and casting of Integers into SQL sintax for preventing SQL injection
- Management of the Date type according to a custom localization
- Useful PHPDOC information about table, fields and the usage of class, attributes and methods

Developers can quickly use these generated classes on their application.

Into the beans directory are located some auto generated classes of a MySQL schema.

DDL for MySQL schema is into a script file located into "sql" directory.

### Overview
![Overview](https://raw.githubusercontent.com/rcarvello/mysqlreflection/master/docs/MySQLReflection.png)

### UML Class Model
![Uml Classes Model](https://raw.githubusercontent.com/rcarvello/mysqlreflection/master/docs/UMLClassModel.png)

### Convert MySQL into PHP Classes automatically - Video Tutorial
[![IMAGE Video Tutorial](https://i.ytimg.com/vi/7Aa_k_hWDYk/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=3wURVxGteSMWeF9OtZCnrOpeVRk)](https://www.youtube.com/watch?v=7Aa_k_hWDYk)
