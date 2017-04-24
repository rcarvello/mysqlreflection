<?php
include_once("bean.config.php");

/**
 * Class BeanEmployees
 * Bean class for object oriented management of the MySQL table employees
 *
 * Comment of the managed table employees: Not specified.
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
 * @filesource BeanEmployees.php
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

class BeanEmployees extends MySqlRecord
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
     * Class attribute for mapping the primary key emp_no of table employees
     *
     * Comment for field emp_no: Not specified<br>
     * @var int $empNo
     */
    private $empNo;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field birth_date
     *
     * Comment for field birth_date: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $birthDate
     */
    private $birthDate;

    /**
     * Class attribute for mapping table field first_name
     *
     * Comment for field first_name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(14)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $firstName
     */
    private $firstName;

    /**
     * Class attribute for mapping table field last_name
     *
     * Comment for field last_name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(16)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $lastName
     */
    private $lastName;

    /**
     * Class attribute for mapping table field gender
     *
     * Comment for field gender: Not specified.<br>
     * Field information:
     *  - Data type: enum('M','F')
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $gender
     */
    private $gender;

    /**
     * Class attribute for mapping table field hire_date
     *
     * Comment for field hire_date: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $hireDate
     */
    private $hireDate;

    /**
     * Class attribute for storing the SQL DDL of table employees
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBlbXBsb3llZXNgICgKICBgZW1wX25vYCBpbnQoMTEpIE5PVCBOVUxMLAogIGBiaXJ0aF9kYXRlYCBkYXRlIE5PVCBOVUxMLAogIGBmaXJzdF9uYW1lYCB2YXJjaGFyKDE0KSBOT1QgTlVMTCwKICBgbGFzdF9uYW1lYCB2YXJjaGFyKDE2KSBOT1QgTlVMTCwKICBgZ2VuZGVyYCBlbnVtKCdNJywnRicpIE5PVCBOVUxMLAogIGBoaXJlX2RhdGVgIGRhdGUgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBlbXBfbm9gKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg=";

    /**
     * setEmpNo Sets the class attribute empNo with a given value
     *
     * The attribute empNo maps the field emp_no defined as int(11).<br>
     * Comment for field emp_no: Not specified.<br>
     * @param int $empNo
     * @category Modifier
     */
    public function setEmpNo($empNo)
    {
        $this->empNo = (int)$empNo;
    }

    /**
     * setBirthDate Sets the class attribute birthDate with a given value
     *
     * The attribute birthDate maps the field birth_date defined as string|date.<br>
     * Comment for field birth_date: Not specified.<br>
     * @param string $birthDate
     * @category Modifier
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = (string)$birthDate;
    }

    /**
     * setFirstName Sets the class attribute firstName with a given value
     *
     * The attribute firstName maps the field first_name defined as varchar(14).<br>
     * Comment for field first_name: Not specified.<br>
     * @param string $firstName
     * @category Modifier
     */
    public function setFirstName($firstName)
    {
        $this->firstName = (string)$firstName;
    }

    /**
     * setLastName Sets the class attribute lastName with a given value
     *
     * The attribute lastName maps the field last_name defined as varchar(16).<br>
     * Comment for field last_name: Not specified.<br>
     * @param string $lastName
     * @category Modifier
     */
    public function setLastName($lastName)
    {
        $this->lastName = (string)$lastName;
    }

    /**
     * setGender Sets the class attribute gender with a given value
     *
     * The attribute gender maps the field gender defined as enum('M','F').<br>
     * Comment for field gender: Not specified.<br>
     * @param string $gender
     * @category Modifier
     */
    public function setGender($gender)
    {
        $this->gender = (string)$gender;
    }

    /**
     * setHireDate Sets the class attribute hireDate with a given value
     *
     * The attribute hireDate maps the field hire_date defined as string|date.<br>
     * Comment for field hire_date: Not specified.<br>
     * @param string $hireDate
     * @category Modifier
     */
    public function setHireDate($hireDate)
    {
        $this->hireDate = (string)$hireDate;
    }

    /**
     * getEmpNo gets the class attribute empNo value
     *
     * The attribute empNo maps the field emp_no defined as int(11).<br>
     * Comment for field emp_no: Not specified.
     * @return int $empNo
     * @category Accessor of $empNo
     */
    public function getEmpNo()
    {
        return $this->empNo;
    }

    /**
     * getBirthDate gets the class attribute birthDate value
     *
     * The attribute birthDate maps the field birth_date defined as string|date.<br>
     * Comment for field birth_date: Not specified.
     * @return string $birthDate
     * @category Accessor of $birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * getFirstName gets the class attribute firstName value
     *
     * The attribute firstName maps the field first_name defined as varchar(14).<br>
     * Comment for field first_name: Not specified.
     * @return string $firstName
     * @category Accessor of $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * getLastName gets the class attribute lastName value
     *
     * The attribute lastName maps the field last_name defined as varchar(16).<br>
     * Comment for field last_name: Not specified.
     * @return string $lastName
     * @category Accessor of $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * getGender gets the class attribute gender value
     *
     * The attribute gender maps the field gender defined as enum('M','F').<br>
     * Comment for field gender: Not specified.
     * @return string $gender
     * @category Accessor of $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * getHireDate gets the class attribute hireDate value
     *
     * The attribute hireDate maps the field hire_date defined as string|date.<br>
     * Comment for field hire_date: Not specified.
     * @return string $hireDate
     * @category Accessor of $hireDate
     */
    public function getHireDate()
    {
        return $this->hireDate;
    }

    /**
     * Gets DDL SQL code of the table employees
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
        return "employees";
    }

    /**
     * The BeanEmployees constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $empNo is given.
     *  - with a fetched data row from the table employees having emp_no=$empNo
     * @param int $empNo. If omitted an empty (not fetched) instance is created.
     * @return BeanEmployees Object
     */
    public function __construct($empNo = null)
    {
        parent::__construct();
        if (!empty($empNo)) {
            $this->select($empNo);
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
     * Fetchs a table row of employees into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $empNo the primary key emp_no value of table employees which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($empNo)
    {
        $sql =  "SELECT * FROM employees WHERE emp_no={$this->parseValue($empNo,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->empNo = (integer)$rowObject->emp_no;
            @$this->birthDate = empty($rowObject->birth_date) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->birth_date));
            @$this->firstName = $this->replaceAposBackSlash($rowObject->first_name);
            @$this->lastName = $this->replaceAposBackSlash($rowObject->last_name);
            @$this->gender = $rowObject->gender;
            @$this->hireDate = empty($rowObject->hire_date) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->hire_date));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table employees
     * @param int $empNo the primary key emp_no value of table employees which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($empNo)
    {
        $sql = "DELETE FROM employees WHERE emp_no={$this->parseValue($empNo,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of employees
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->empNo = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO employees
            (emp_no,birth_date,first_name,last_name,gender,hire_date)
            VALUES({$this->parseValue($this->empNo)},
			{$this->parseValue($this->birthDate,'date')},
			{$this->parseValue($this->firstName,'notNumber')},
			{$this->parseValue($this->lastName,'notNumber')},
			{$this->parseValue($this->gender,'notNumber')},
			{$this->parseValue($this->hireDate,'date')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->empNo = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table employees with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $empNo the primary key emp_no value of table employees which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($empNo)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                employees
            SET 
				birth_date={$this->parseValue($this->birthDate,'date')},
				first_name={$this->parseValue($this->firstName,'notNumber')},
				last_name={$this->parseValue($this->lastName,'notNumber')},
				gender={$this->parseValue($this->gender,'notNumber')},
				hire_date={$this->parseValue($this->hireDate,'date')}
            WHERE
                emp_no={$this->parseValue($empNo,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($empNo);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of employees previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->empNo != "") {
            return $this->update($this->empNo);
        } else {
            return false;
        }
    }

}
?>
