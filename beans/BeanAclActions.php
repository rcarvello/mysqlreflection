<?php
include_once("bean.config.php");

/**
 * Class BeanAclActions
 * Bean class for object oriented management of the MySQL table acl_actions
 *
 * Comment of the managed table acl_actions: Not specified.
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
 * @filesource BeanAclActions.php
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

class BeanAclActions extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table acl_actions
     *
     * Comment for field id: Not specified<br>
     * @var string $id
     */
    private $id;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field date_entered
     *
     * Comment for field date_entered: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $dateEntered
     */
    private $dateEntered;

    /**
     * Class attribute for mapping table field date_modified
     *
     * Comment for field date_modified: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $dateModified
     */
    private $dateModified;

    /**
     * Class attribute for mapping table field modified_user_id
     *
     * Comment for field modified_user_id: Not specified.<br>
     * Field information:
     *  - Data type: char(36)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $modifiedUserId
     */
    private $modifiedUserId;

    /**
     * Class attribute for mapping table field created_by
     *
     * Comment for field created_by: Not specified.<br>
     * Field information:
     *  - Data type: char(36)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $createdBy
     */
    private $createdBy;

    /**
     * Class attribute for mapping table field name
     *
     * Comment for field name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(150)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $name
     */
    private $name;

    /**
     * Class attribute for mapping table field category
     *
     * Comment for field category: Not specified.<br>
     * Field information:
     *  - Data type: varchar(100)
     *  - Null : YES
     *  - DB Index: MUL
     *  - Default: 
     *  - Extra:  
     * @var string $category
     */
    private $category;

    /**
     * Class attribute for mapping table field acltype
     *
     * Comment for field acltype: Not specified.<br>
     * Field information:
     *  - Data type: varchar(100)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $acltype
     */
    private $acltype;

    /**
     * Class attribute for mapping table field aclaccess
     *
     * Comment for field aclaccess: Not specified.<br>
     * Field information:
     *  - Data type: int(3)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $aclaccess
     */
    private $aclaccess;

    /**
     * Class attribute for mapping table field deleted
     *
     * Comment for field deleted: Not specified.<br>
     * Field information:
     *  - Data type: tinyint(1)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $deleted
     */
    private $deleted;

    /**
     * Class attribute for storing the SQL DDL of table acl_actions
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBhY2xfYWN0aW9uc2AgKAogIGBpZGAgY2hhcigzNikgTk9UIE5VTEwsCiAgYGRhdGVfZW50ZXJlZGAgZGF0ZXRpbWUgREVGQVVMVCBOVUxMLAogIGBkYXRlX21vZGlmaWVkYCBkYXRldGltZSBERUZBVUxUIE5VTEwsCiAgYG1vZGlmaWVkX3VzZXJfaWRgIGNoYXIoMzYpIERFRkFVTFQgTlVMTCwKICBgY3JlYXRlZF9ieWAgY2hhcigzNikgREVGQVVMVCBOVUxMLAogIGBuYW1lYCB2YXJjaGFyKDE1MCkgREVGQVVMVCBOVUxMLAogIGBjYXRlZ29yeWAgdmFyY2hhcigxMDApIERFRkFVTFQgTlVMTCwKICBgYWNsdHlwZWAgdmFyY2hhcigxMDApIERFRkFVTFQgTlVMTCwKICBgYWNsYWNjZXNzYCBpbnQoMykgREVGQVVMVCBOVUxMLAogIGBkZWxldGVkYCB0aW55aW50KDEpIERFRkFVTFQgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCksCiAgS0VZIGBpZHhfYWNsYWN0aW9uX2lkX2RlbGAgKGBpZGAsYGRlbGV0ZWRgKSwKICBLRVkgYGlkeF9jYXRlZ29yeV9uYW1lYCAoYGNhdGVnb3J5YCxgbmFtZWApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmOA==";

    /**
     * setId Sets the class attribute id with a given value
     *
     * The attribute id maps the field id defined as char(36).<br>
     * Comment for field id: Not specified.<br>
     * @param string $id
     * @category Modifier
     */
    public function setId($id)
    {
        $this->id = (string)$id;
    }

    /**
     * setDateEntered Sets the class attribute dateEntered with a given value
     *
     * The attribute dateEntered maps the field date_entered defined as datetime.<br>
     * Comment for field date_entered: Not specified.<br>
     * @param string $dateEntered
     * @category Modifier
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = (string)$dateEntered;
    }

    /**
     * setDateModified Sets the class attribute dateModified with a given value
     *
     * The attribute dateModified maps the field date_modified defined as datetime.<br>
     * Comment for field date_modified: Not specified.<br>
     * @param string $dateModified
     * @category Modifier
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = (string)$dateModified;
    }

    /**
     * setModifiedUserId Sets the class attribute modifiedUserId with a given value
     *
     * The attribute modifiedUserId maps the field modified_user_id defined as char(36).<br>
     * Comment for field modified_user_id: Not specified.<br>
     * @param string $modifiedUserId
     * @category Modifier
     */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->modifiedUserId = (string)$modifiedUserId;
    }

    /**
     * setCreatedBy Sets the class attribute createdBy with a given value
     *
     * The attribute createdBy maps the field created_by defined as char(36).<br>
     * Comment for field created_by: Not specified.<br>
     * @param string $createdBy
     * @category Modifier
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = (string)$createdBy;
    }

    /**
     * setName Sets the class attribute name with a given value
     *
     * The attribute name maps the field name defined as varchar(150).<br>
     * Comment for field name: Not specified.<br>
     * @param string $name
     * @category Modifier
     */
    public function setName($name)
    {
        $this->name = (string)$name;
    }

    /**
     * setCategory Sets the class attribute category with a given value
     *
     * The attribute category maps the field category defined as varchar(100).<br>
     * Comment for field category: Not specified.<br>
     * @param string $category
     * @category Modifier
     */
    public function setCategory($category)
    {
        $this->category = (string)$category;
    }

    /**
     * setAcltype Sets the class attribute acltype with a given value
     *
     * The attribute acltype maps the field acltype defined as varchar(100).<br>
     * Comment for field acltype: Not specified.<br>
     * @param string $acltype
     * @category Modifier
     */
    public function setAcltype($acltype)
    {
        $this->acltype = (string)$acltype;
    }

    /**
     * setAclaccess Sets the class attribute aclaccess with a given value
     *
     * The attribute aclaccess maps the field aclaccess defined as int(3).<br>
     * Comment for field aclaccess: Not specified.<br>
     * @param int $aclaccess
     * @category Modifier
     */
    public function setAclaccess($aclaccess)
    {
        $this->aclaccess = (int)$aclaccess;
    }

    /**
     * setDeleted Sets the class attribute deleted with a given value
     *
     * The attribute deleted maps the field deleted defined as tinyint(1).<br>
     * Comment for field deleted: Not specified.<br>
     * @param int $deleted
     * @category Modifier
     */
    public function setDeleted($deleted)
    {
        $this->deleted = (int)$deleted;
    }

    /**
     * getId gets the class attribute id value
     *
     * The attribute id maps the field id defined as char(36).<br>
     * Comment for field id: Not specified.
     * @return string $id
     * @category Accessor of $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getDateEntered gets the class attribute dateEntered value
     *
     * The attribute dateEntered maps the field date_entered defined as datetime.<br>
     * Comment for field date_entered: Not specified.
     * @return string $dateEntered
     * @category Accessor of $dateEntered
     */
    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    /**
     * getDateModified gets the class attribute dateModified value
     *
     * The attribute dateModified maps the field date_modified defined as datetime.<br>
     * Comment for field date_modified: Not specified.
     * @return string $dateModified
     * @category Accessor of $dateModified
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * getModifiedUserId gets the class attribute modifiedUserId value
     *
     * The attribute modifiedUserId maps the field modified_user_id defined as char(36).<br>
     * Comment for field modified_user_id: Not specified.
     * @return string $modifiedUserId
     * @category Accessor of $modifiedUserId
     */
    public function getModifiedUserId()
    {
        return $this->modifiedUserId;
    }

    /**
     * getCreatedBy gets the class attribute createdBy value
     *
     * The attribute createdBy maps the field created_by defined as char(36).<br>
     * Comment for field created_by: Not specified.
     * @return string $createdBy
     * @category Accessor of $createdBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * getName gets the class attribute name value
     *
     * The attribute name maps the field name defined as varchar(150).<br>
     * Comment for field name: Not specified.
     * @return string $name
     * @category Accessor of $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * getCategory gets the class attribute category value
     *
     * The attribute category maps the field category defined as varchar(100).<br>
     * Comment for field category: Not specified.
     * @return string $category
     * @category Accessor of $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * getAcltype gets the class attribute acltype value
     *
     * The attribute acltype maps the field acltype defined as varchar(100).<br>
     * Comment for field acltype: Not specified.
     * @return string $acltype
     * @category Accessor of $acltype
     */
    public function getAcltype()
    {
        return $this->acltype;
    }

    /**
     * getAclaccess gets the class attribute aclaccess value
     *
     * The attribute aclaccess maps the field aclaccess defined as int(3).<br>
     * Comment for field aclaccess: Not specified.
     * @return int $aclaccess
     * @category Accessor of $aclaccess
     */
    public function getAclaccess()
    {
        return $this->aclaccess;
    }

    /**
     * getDeleted gets the class attribute deleted value
     *
     * The attribute deleted maps the field deleted defined as tinyint(1).<br>
     * Comment for field deleted: Not specified.
     * @return int $deleted
     * @category Accessor of $deleted
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Gets DDL SQL code of the table acl_actions
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
        return "acl_actions";
    }

    /**
     * The BeanAclActions constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table acl_actions having id=$id
     * @param string $id. If omitted an empty (not fetched) instance is created.
     * @return BeanAclActions Object
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
     * Fetchs a table row of acl_actions into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param string $id the primary key id value of table acl_actions which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        $sql =  "SELECT * FROM acl_actions WHERE id={$this->parseValue($id,'string')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = $this->replaceAposBackSlash($rowObject->id);
            @$this->dateEntered = empty($rowObject->date_entered) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->date_entered));
            @$this->dateModified = empty($rowObject->date_modified) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->date_modified));
            @$this->modifiedUserId = $this->replaceAposBackSlash($rowObject->modified_user_id);
            @$this->createdBy = $this->replaceAposBackSlash($rowObject->created_by);
            @$this->name = $this->replaceAposBackSlash($rowObject->name);
            @$this->category = $this->replaceAposBackSlash($rowObject->category);
            @$this->acltype = $this->replaceAposBackSlash($rowObject->acltype);
            @$this->aclaccess = (integer)$rowObject->aclaccess;
            @$this->deleted = (integer)$rowObject->deleted;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table acl_actions
     * @param string $id the primary key id value of table acl_actions which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM acl_actions WHERE id={$this->parseValue($id,'string')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of acl_actions
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
            INSERT INTO acl_actions
            (id,date_entered,date_modified,modified_user_id,created_by,name,category,acltype,aclaccess,deleted)
            VALUES({$this->parseValue($this->id,'notNumber')},
			{$this->parseValue($this->dateEntered,'datetime')},
			{$this->parseValue($this->dateModified,'datetime')},
			{$this->parseValue($this->modifiedUserId,'notNumber')},
			{$this->parseValue($this->createdBy,'notNumber')},
			{$this->parseValue($this->name,'notNumber')},
			{$this->parseValue($this->category,'notNumber')},
			{$this->parseValue($this->acltype,'notNumber')},
			{$this->parseValue($this->aclaccess)},
			{$this->parseValue($this->deleted)})
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
     * Updates a specific row from the table acl_actions with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param string $id the primary key id value of table acl_actions which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                acl_actions
            SET 
				date_entered={$this->parseValue($this->dateEntered,'datetime')},
				date_modified={$this->parseValue($this->dateModified,'datetime')},
				modified_user_id={$this->parseValue($this->modifiedUserId,'notNumber')},
				created_by={$this->parseValue($this->createdBy,'notNumber')},
				name={$this->parseValue($this->name,'notNumber')},
				category={$this->parseValue($this->category,'notNumber')},
				acltype={$this->parseValue($this->acltype,'notNumber')},
				aclaccess={$this->parseValue($this->aclaccess)},
				deleted={$this->parseValue($this->deleted)}
            WHERE
                id={$this->parseValue($id,'string')}
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
     * Facility for updating a row of acl_actions previously loaded.
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
