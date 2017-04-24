<?php
include_once("bean.config.php");

/**
 * Class BeanUser
 * Bean class for object oriented management of the MySQL table user
 *
 * Comment of the managed table user: users table.
 *
 * Responsibility:
 *
 *  - provides instance constructors for both managing of a fetched table or for a new row
 *  - provides destructor to automatically close database connection
 *  - defines a set of attributes corresponding to the table fields
 *  - provides setter and getter methods for each attribute
 *  - provides OO methods for simplify DML select, insert, update and delete operations.
 *  - provides a facility for quickly updating a previously fetched row
 *  - provides useful methods to obtain table DDL and the last executed SQL statement
 *  - provides error handling of SQL statement
 *  - uses Camel/Pascal case naming convention for Attributes/Class used for mapping of Fields/Table
 *  - provides useful PHPDOC information about the table, fields, class, attributes and methods.
 *
 * @extends MySqlRecord
 * @filesource BeanUser.php
 * @category MySql Database Bean Class
 * @package beans
 * @author Rosario Carvello <rosario.carvello@gmail.com>
 * @version GIT:v1.0.0
 * @note  This is an auto generated PHP class builded with MVCMySqlReflection, a small code generation engine extracted from the author's personal MVC Framework.
 * @copyright (c) 2016 Rosario Carvello <rosario.carvello@gmail.com> - All rights reserved. See License.txt file
 * @license BSD
 * @license https://opensource.org/licenses/BSD-3-Clause This software is distributed under BSD Public License.
*/

// namespace beans;

class BeanUser extends MySqlRecord
{
    /**
     * A control attribute for the update operation.
     * @note An instance fetched from db is allowed to run the update operation.
     *       A new instance (not fetched from db) is allowed only to run the insert operation but,
     *       after running insertion, the instance is automatically allowed to run update operation.
     * @var bool
     */
    private $allowUpdate = false;

    /**
     * Class attribute for mapping the primary key id of table user
     *
     * Comment for field id: Not specified<br>
     * @var int $id
     */
    private $id;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = true;

    /**
     * Class attribute for mapping table field email
     *
     * Comment for field email: Not specified.<br>
     * Field information:
     *  - Data type: varchar(80)
     *  - Null : NO
     *  - DB Index: UNI
     *  - Default: 
     *  - Extra:  
     * @var string $email
     */
    private $email;

    /**
     * Class attribute for mapping table field password
     *
     * Comment for field password: Not specified.<br>
     * Field information:
     *  - Data type: varchar(80)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $password
     */
    private $password;

    /**
     * Class attribute for mapping table field role
     *
     * Comment for field role: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $role
     */
    private $role;

    /**
     * Class attribute for storing the SQL DDL of table user
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGB1c2VyYCAoCiAgYGlkYCBpbnQoMTEpIE5PVCBOVUxMIEFVVE9fSU5DUkVNRU5ULAogIGBlbWFpbGAgdmFyY2hhcig4MCkgTk9UIE5VTEwsCiAgYHBhc3N3b3JkYCB2YXJjaGFyKDgwKSBOT1QgTlVMTCwKICBgcm9sZWAgaW50KDExKSBOT1QgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCksCiAgVU5JUVVFIEtFWSBgdXNlcl9lbWFpbF91aW5kZXhgIChgZW1haWxgKQopIEVOR0lORT1Jbm5vREIgQVVUT19JTkNSRU1FTlQ9MiBERUZBVUxUIENIQVJTRVQ9dXRmOCBDT01NRU5UPSd1c2VycyB0YWJsZSc=";

    /**
     * setId Sets the class attribute id with a given value
     *
     * The attribute id maps the field id defined as int(11).<br>
     * Comment for field id: Not specified.<br>
     * @param int $id
     * @category Modifier
     */
    public function setId($id)
    {
        $this->id = (int)$id;
    }

    /**
     * setEmail Sets the class attribute email with a given value
     *
     * The attribute email maps the field email defined as varchar(80).<br>
     * Comment for field email: Not specified.<br>
     * @param string $email
     * @category Modifier
     */
    public function setEmail($email)
    {
        $this->email = (string)$email;
    }

    /**
     * setPassword Sets the class attribute password with a given value
     *
     * The attribute password maps the field password defined as varchar(80).<br>
     * Comment for field password: Not specified.<br>
     * @param string $password
     * @category Modifier
     */
    public function setPassword($password)
    {
        $this->password = (string)$password;
    }

    /**
     * setRole Sets the class attribute role with a given value
     *
     * The attribute role maps the field role defined as int(11).<br>
     * Comment for field role: Not specified.<br>
     * @param int $role
     * @category Modifier
     */
    public function setRole($role)
    {
        $this->role = (int)$role;
    }

    /**
     * getId gets the class attribute id value
     *
     * The attribute id maps the field id defined as int(11).<br>
     * Comment for field id: Not specified.
     * @return int $id
     * @category Accessor of $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getEmail gets the class attribute email value
     *
     * The attribute email maps the field email defined as varchar(80).<br>
     * Comment for field email: Not specified.
     * @return string $email
     * @category Accessor of $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * getPassword gets the class attribute password value
     *
     * The attribute password maps the field password defined as varchar(80).<br>
     * Comment for field password: Not specified.
     * @return string $password
     * @category Accessor of $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * getRole gets the class attribute role value
     *
     * The attribute role maps the field role defined as int(11).<br>
     * Comment for field role: Not specified.
     * @return int $role
     * @category Accessor of $role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Gets DDL SQL code of the table user
     * @return string
     * @category Accessor
     */
    public function getDdl()
    {
        return base64_decode($this->ddl);
    }

    /**
    * Gets the name of the managed table
    * @return string
    * @category Accessor
    */
    public function getTableName()
    {
        return "user";
    }

    /**
     * The BeanUser constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table user having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return BeanUser Object
     */
    public function __construct($id = null)
    {
        parent::__construct();
        if (!empty($id)) {
            $this->select($id);
        }
    }

    /**
     * The implicit destructor
     */
    public function __destruct()
    {
        $this->close();
    }

    /**
     * Explicit destructor. It calls the implicit destructor automatically.
     */
    public function close()
    {
        unset($this);
    }

    /**
     * Fetchs a table row of user into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table user which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        $sql =  "SELECT * FROM user WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->id;
            @$this->email = $this->replaceAposBackSlash($rowObject->email);
            @$this->password = $this->replaceAposBackSlash($rowObject->password);
            @$this->role = (integer)$rowObject->role;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table user
     * @param int $id the primary key id value of table user which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM user WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of user
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->id = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO user
            (email,password,role)
            VALUES(
			{$this->parseValue($this->email,'notNumber')},
			{$this->parseValue($this->password,'notNumber')},
			{$this->parseValue($this->role)})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->id = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table user with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table user which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                user
            SET 
				email={$this->parseValue($this->email,'notNumber')},
				password={$this->parseValue($this->password,'notNumber')},
				role={$this->parseValue($this->role)}
            WHERE
                id={$this->parseValue($id,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($id);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of user previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->id != "") {
            return $this->update($this->id);
        } else {
            return false;
        }
    }

}
?>
