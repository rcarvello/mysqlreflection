<?php
include_once("bean.config.php");

/**
 * Class BeanDeptEmp
 * Bean class for object oriented management of the MySQL table dept_emp
 *
 * Comment of the managed table dept_emp: Not specified.
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
 * @filesource BeanDeptEmp.php
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

class BeanDeptEmp extends MySqlRecord
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
     * Class attribute for mapping table field dept_no
     *
     * Comment for field dept_no: Not specified.<br>
     * Field information:
     *  - Data type: char(4)
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var string $deptNo
     */
    private $deptNo;

    /**
     * Class attribute for mapping table field from_date
     *
     * Comment for field from_date: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: 
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
     * Class attribute for storing the SQL DDL of table dept_emp
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBkZXB0X2VtcGAgKAogIGBlbXBfbm9gIGludCgxMSkgTk9UIE5VTEwsCiAgYGRlcHRfbm9gIGNoYXIoNCkgTk9UIE5VTEwsCiAgYGZyb21fZGF0ZWAgZGF0ZSBOT1QgTlVMTCwKICBgdG9fZGF0ZWAgZGF0ZSBOT1QgTlVMTCwKICBQUklNQVJZIEtFWSAoYGVtcF9ub2AsYGRlcHRfbm9gKSwKICBLRVkgYGVtcF9ub2AgKGBlbXBfbm9gKSwKICBLRVkgYGRlcHRfbm9gIChgZGVwdF9ub2ApLAogIENPTlNUUkFJTlQgYGRlcHRfZW1wX2liZmtfMWAgRk9SRUlHTiBLRVkgKGBlbXBfbm9gKSBSRUZFUkVOQ0VTIGBlbXBsb3llZXNgIChgZW1wX25vYCkgT04gREVMRVRFIENBU0NBREUsCiAgQ09OU1RSQUlOVCBgZGVwdF9lbXBfaWJma18yYCBGT1JFSUdOIEtFWSAoYGRlcHRfbm9gKSBSRUZFUkVOQ0VTIGBkZXBhcnRtZW50c2AgKGBkZXB0X25vYCkgT04gREVMRVRFIENBU0NBREUKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4";

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
     * Gets DDL SQL code of the table dept_emp
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
        return "dept_emp";
    }

    /**
    * The BeanDeptEmp constructor
    *
    * It creates and initializes an object in two way:
    *  - with null (not fetched) data if none ${ClassPkAttributeName} is given.
    *  - with a fetched data row from the table {TableName} having {TablePkName}=${ClassPkAttributeName}
	* @param int $empNo
	* @param string $deptNo
    * @return BeanDeptEmp Object
    */
    public function __construct($empNo=NULL,$deptNo=NULL)
    {
        parent::__construct();
        if (!empty($empNo) && !empty($deptNo)) {
            $this->select($empNo,$deptNo);
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
    * Fetchs a table row of dept_emp into the object.
    *
    * Fetched table fields values are assigned to class attributes and they can be managed by using
    * the accessors/modifiers methods of the class.
	* @param int $empNo
	* @param string $deptNo
    * @return int affected selected row
    * @category DML
    */
    public function select($empNo,$deptNo)
    {
        $sql =  "SELECT * FROM dept_emp WHERE emp_no={$this->parseValue($empNo,'int')} AND dept_no={$this->parseValue($deptNo,'string')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->empNo = (integer)$rowObject->emp_no;
            @$this->deptNo = $this->replaceAposBackSlash($rowObject->dept_no);
            @$this->fromDate = empty($rowObject->from_date) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->from_date));
            @$this->toDate = empty($rowObject->to_date) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->to_date));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
    return $this->affected_rows;
    }

    /**
    * Deletes a specific row from the table dept_emp
	* @param int $empNo
	* @param string $deptNo
    * @return int affected deleted row
    * @category DML
    */
    public function delete($empNo,$deptNo)
    {
        $sql = "DELETE FROM dept_emp WHERE emp_no={$this->parseValue($empNo,'int')} AND dept_no={$this->parseValue($deptNo,'string')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
    * Insert the current object into a new table row of dept_emp
    *
    * All class attributes values defined for mapping all table fields are automatically used during inserting
    * @return mixed MySQL insert result
    * @category DML
    */
    public function insert()
    {
        // $constants = get_defined_constants();
        $sql = <<< SQL
        INSERT INTO dept_emp
        (emp_no,dept_no,from_date,to_date)
        VALUES({$this->parseValue($this->empNo)},
			{$this->parseValue($this->deptNo,'notNumber')},
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
    * Updates a specific row from the table dept_emp with the values of the current object.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
    * Null values are used for all attributes not previously setted.
	* @param int $empNo
	* @param string $deptNo
    * @return mixed MySQL update result
    * @category DML
    */
    public function update($empNo,$deptNo)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                dept_emp
                SET 
				from_date={$this->parseValue($this->fromDate,'date')},
				to_date={$this->parseValue($this->toDate,'date')}
            WHERE
                emp_no={$this->parseValue($empNo,'int')} AND dept_no={$this->parseValue($deptNo,'string')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($empNo,$deptNo);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
    * Facility for updating a row of dept_emp previously loaded.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function updateCurrent()
    {
        if (!empty($this->empNo) && !empty($this->deptNo)) {
           return $this->update($this->empNo,$this->deptNo);
        } else {
            return false;
        }
    }

}
?>
