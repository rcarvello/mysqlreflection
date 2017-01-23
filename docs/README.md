# MySQLReflection
## A useful utility for the Object Relation Mapping of MySQL databases
The utility generates automatically Model classes for any tables of a given database
schema.<br>
It's extracted from my PHP Web MVC Framework<br>
An auto generated MySQL class provides the following services:<br>
<ul>
    <li>A constructor for managing a fetched table’s row or for a adding a new one</li>
    <li>Management for both single or composite Primary Keys</li>
    <li>Automatic mapping of the different date formats may occurs between
        application and database</li>
    <li>Destructor to automatically close database connection</li>
    <li>Defines a set of attributes corresponding to the table fields</li>
    <li>Setter and Getter methods for each attribute</li>
    <li>OO methods for simplify DML select, insert, update and delete operations</li>
    <li>A facility for quickly updating a previously fetched row</li>
    <li>Useful methods to obtain table DDL and the last executed SQL statement</li>
    <li>Error handling of SQL statements</li>
    <li>Camel/Pascal case naming convention for Attributes/Class used for mapping
        Fields/Table</li>
    <li>Useful PHPDOC information about table, fields and the usage of class,
        attributes and methods.</li>
</ul>
Developers can quickly use these classes on their application.<br>
Into the beans directory are located some auto generated classes of a MySQL schema.<br>
DDL for MySQL schema is into a script file located into "sql" directory.<br>

### Overview
![alt tag](https://raw.githubusercontent.com/rcarvello/mysqlreflection/master/docs/MySQLReflection.png)

### UML Class Model
![alt tag](https://raw.githubusercontent.com/rcarvello/mysqlreflection/master/docs/UMLClassModel.png)

### Convert MySQL into PHP Classes automatically - Video Tutorial
[![IMAGE ALT TEXT HERE](https://i.ytimg.com/vi/7Aa_k_hWDYk/hqdefault.jpg?custom=true&w=196&h=110&stc=true&jpg444=true&jpgq=90&sp=68&sigh=3wURVxGteSMWeF9OtZCnrOpeVRk)](https://www.youtube.com/watch?v=7Aa_k_hWDYk)
