<?php
include_once("bean.config.php");

/**
 * Class BeanDepartments
 * Bean class for object oriented management of the MySQL table departments
 *
 * Comment of the managed table departments: Not specified.
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
 * @filesource BeanDepartments.php
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

class BeanDepartments extends MySqlRecord
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
     * Class attribute for mapping the primary key dept_no of table departments
     *
     * Comment for field dept_no: Not specified<br>
     * @var string $deptNo
     */
    private $deptNo;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field dept_name
     *
     * Comment for field dept_name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(40)
     *  - Null : NO
     *  - DB Index: UNI
     *  - Default: 
     *  - Extra:  
     * @var string $deptName
     */
    private $deptName;

    /**
     * Class attribute for storing the SQL DDL of table departments
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBkZXBhcnRtZW50c2AgKAogIGBkZXB0X25vYCBjaGFyKDQpIE5PVCBOVUxMLAogIGBkZXB0X25hbWVgIHZhcmNoYXIoNDApIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgZGVwdF9ub2ApLAogIFVOSVFVRSBLRVkgYGRlcHRfbmFtZWAgKGBkZXB0X25hbWVgKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg=";

    /**
     * setDeptNo Sets the class attribute deptNo with a given value
     *
     * The attribute deptNo maps the field dept_no defined as char(4).<br>
     * Comment for field dept_no: Not specified.<br>
     * @param string $deptNo
     * @category Modifier
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo = (string)$deptNo;
    }

    /**
     * setDeptName Sets the class attribute deptName with a given value
     *
     * The attribute deptName maps the field dept_name defined as varchar(40).<br>
     * Comment for field dept_name: Not specified.<br>
     * @param string $deptName
     * @category Modifier
     */
    public function setDeptName($deptName)
    {
        $this->deptName = (string)$deptName;
    }

    /**
     * getDeptNo gets the class attribute deptNo value
     *
     * The attribute deptNo maps the field dept_no defined as char(4).<br>
     * Comment for field dept_no: Not specified.
     * @return string $deptNo
     * @category Accessor of $deptNo
     */
    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * getDeptName gets the class attribute deptName value
     *
     * The attribute deptName maps the field dept_name defined as varchar(40).<br>
     * Comment for field dept_name: Not specified.
     * @return string $deptName
     * @category Accessor of $deptName
     */
    public function getDeptName()
    {
        return $this->deptName;
    }

    /**
     * Gets DDL SQL code of the table departments
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
        return "departments";
    }

    /**
     * The BeanDepartments constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $deptNo is given.
     *  - with a fetched data row from the table departments having dept_no=$deptNo
     * @param string $deptNo. If omitted an empty (not fetched) instance is created.
     * @return BeanDepartments Object
     */
    public function __construct($deptNo = null)
    {
        parent::__construct();
        if (!empty($deptNo)) {
            $this->select($deptNo);
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
     * Fetchs a table row of departments into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param string $deptNo the primary key dept_no value of table departments which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($deptNo)
    {
        $sql =  "SELECT * FROM departments WHERE dept_no={$this->parseValue($deptNo,'string')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->deptNo = $this->replaceAposBackSlash($rowObject->dept_no);
            @$this->deptName = $this->replaceAposBackSlash($rowObject->dept_name);
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table departments
     * @param string $deptNo the primary key dept_no value of table departments which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($deptNo)
    {
        $sql = "DELETE FROM departments WHERE dept_no={$this->parseValue($deptNo,'string')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of departments
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->deptNo = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO departments
            (dept_no,dept_name)
            VALUES({$this->parseValue($this->deptNo,'notNumber')},
			{$this->parseValue($this->deptName,'notNumber')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->deptNo = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table departments with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param string $deptNo the primary key dept_no value of table departments which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($deptNo)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                departments
            SET 
				dept_name={$this->parseValue($this->deptName,'notNumber')}
            WHERE
                dept_no={$this->parseValue($deptNo,'string')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($deptNo);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of departments previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->deptNo != "") {
            return $this->update($this->deptNo);
        } else {
            return false;
        }
    }

}
?>
