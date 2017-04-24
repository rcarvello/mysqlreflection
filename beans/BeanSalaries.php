<?php
include_once("bean.config.php");

/**
 * Class BeanSalaries
 * Bean class for object oriented management of the MySQL table salaries
 *
 * Comment of the managed table salaries: Not specified.
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
 * @filesource BeanSalaries.php
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

class BeanSalaries extends MySqlRecord
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
     * Class attribute for mapping table field emp_no
     *
     * Comment for field emp_no: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var int $empNo
     */
    private $empNo;

    /**
     * Class attribute for mapping table field salary
     *
     * Comment for field salary: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $salary
     */
    private $salary;

    /**
     * Class attribute for mapping table field from_date
     *
     * Comment for field from_date: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var string $fromDate
     */
    private $fromDate;

    /**
     * Class attribute for mapping table field to_date
     *
     * Comment for field to_date: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $toDate
     */
    private $toDate;

    /**
     * Class attribute for storing the SQL DDL of table salaries
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBzYWxhcmllc2AgKAogIGBlbXBfbm9gIGludCgxMSkgTk9UIE5VTEwsCiAgYHNhbGFyeWAgaW50KDExKSBOT1QgTlVMTCwKICBgZnJvbV9kYXRlYCBkYXRlIE5PVCBOVUxMLAogIGB0b19kYXRlYCBkYXRlIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgZW1wX25vYCxgZnJvbV9kYXRlYCksCiAgS0VZIGBlbXBfbm9gIChgZW1wX25vYCksCiAgQ09OU1RSQUlOVCBgc2FsYXJpZXNfaWJma18xYCBGT1JFSUdOIEtFWSAoYGVtcF9ub2ApIFJFRkVSRU5DRVMgYGVtcGxveWVlc2AgKGBlbXBfbm9gKSBPTiBERUxFVEUgQ0FTQ0FERQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg=";

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
     * setSalary Sets the class attribute salary with a given value
     *
     * The attribute salary maps the field salary defined as int(11).<br>
     * Comment for field salary: Not specified.<br>
     * @param int $salary
     * @category Modifier
     */
    public function setSalary($salary)
    {
        $this->salary = (int)$salary;
    }

    /**
     * setFromDate Sets the class attribute fromDate with a given value
     *
     * The attribute fromDate maps the field from_date defined as string|date.<br>
     * Comment for field from_date: Not specified.<br>
     * @param string $fromDate
     * @category Modifier
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = (string)$fromDate;
    }

    /**
     * setToDate Sets the class attribute toDate with a given value
     *
     * The attribute toDate maps the field to_date defined as string|date.<br>
     * Comment for field to_date: Not specified.<br>
     * @param string $toDate
     * @category Modifier
     */
    public function setToDate($toDate)
    {
        $this->toDate = (string)$toDate;
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
     * getSalary gets the class attribute salary value
     *
     * The attribute salary maps the field salary defined as int(11).<br>
     * Comment for field salary: Not specified.
     * @return int $salary
     * @category Accessor of $salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * getFromDate gets the class attribute fromDate value
     *
     * The attribute fromDate maps the field from_date defined as string|date.<br>
     * Comment for field from_date: Not specified.
     * @return string $fromDate
     * @category Accessor of $fromDate
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * getToDate gets the class attribute toDate value
     *
     * The attribute toDate maps the field to_date defined as string|date.<br>
     * Comment for field to_date: Not specified.
     * @return string $toDate
     * @category Accessor of $toDate
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Gets DDL SQL code of the table salaries
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
        return "salaries";
    }

    /**
    * The BeanSalaries constructor
    *
    * It creates and initializes an object in two way:
    *  - with null (not fetched) data if none ${ClassPkAttributeName} is given.
    *  - with a fetched data row from the table {TableName} having {TablePkName}=${ClassPkAttributeName}
	* @param int $empNo
	* @param date $fromDate
    * @return BeanSalaries Object
    */
    public function __construct($empNo=NULL,$fromDate=NULL)
    {
        parent::__construct();
        if (!empty($empNo) && !empty($fromDate)) {
            $this->select($empNo,$fromDate);
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
    * Fetchs a table row of salaries into the object.
    *
    * Fetched table fields values are assigned to class attributes and they can be managed by using
    * the accessors/modifiers methods of the class.
	* @param int $empNo
	* @param date $fromDate
    * @return int affected selected row
    * @category DML
    */
    public function select($empNo,$fromDate)
    {
        $sql =  "SELECT * FROM salaries WHERE emp_no={$this->parseValue($empNo,'int')} AND from_date={$this->parseValue($fromDate,'date')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->empNo = (integer)$rowObject->emp_no;
            @$this->salary = (integer)$rowObject->salary;
            @$this->fromDate = empty($rowObject->from_date) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->from_date));
            @$this->toDate = empty($rowObject->to_date) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->to_date));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
    return $this->affected_rows;
    }

    /**
    * Deletes a specific row from the table salaries
	* @param int $empNo
	* @param date $fromDate
    * @return int affected deleted row
    * @category DML
    */
    public function delete($empNo,$fromDate)
    {
        $sql = "DELETE FROM salaries WHERE emp_no={$this->parseValue($empNo,'int')} AND from_date={$this->parseValue($fromDate,'date')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
    * Insert the current object into a new table row of salaries
    *
    * All class attributes values defined for mapping all table fields are automatically used during inserting
    * @return mixed MySQL insert result
    * @category DML
    */
    public function insert()
    {
        // $constants = get_defined_constants();
        $sql = <<< SQL
        INSERT INTO salaries
        (emp_no,salary,from_date,to_date)
        VALUES({$this->parseValue($this->empNo)},
			{$this->parseValue($this->salary)},
			{$this->parseValue($this->fromDate,'date')},
			{$this->parseValue($this->toDate,'date')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
        }
        return $result;
    }

    /**
    * Updates a specific row from the table salaries with the values of the current object.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
    * Null values are used for all attributes not previously setted.
	* @param int $empNo
	* @param date $fromDate
    * @return mixed MySQL update result
    * @category DML
    */
    public function update($empNo,$fromDate)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                salaries
                SET 
				salary={$this->parseValue($this->salary)},
				to_date={$this->parseValue($this->toDate,'date')}
            WHERE
                emp_no={$this->parseValue($empNo,'int')} AND from_date={$this->parseValue($fromDate,'date')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($empNo,$fromDate);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
    * Facility for updating a row of salaries previously loaded.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function updateCurrent()
    {
        if (!empty($this->empNo) && !empty($this->fromDate)) {
           return $this->update($this->empNo,$this->fromDate);
        } else {
            return false;
        }
    }

}
?>
