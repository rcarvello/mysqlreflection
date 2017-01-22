<?php

/**
 * Defines the constants for MySQL database connection parameters used by a Bean.
 */

define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASSWORD","letmysql");
define("DBNAME","bean_db");
define('DBPORT', '3306');

/**
 * Date formats:
 * @note HTML5 date format is like 2016/01/20 - aaaa/mm/dd
 */

/**
 * Defines a constant for the transformation of the date format of all
 * date fields fetched from mysql tables
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used  format: define("FETCHED_DATE_FORMAT","d/m/Y");
 */
define("FETCHED_DATE_FORMAT","d/m/Y");
// define("FETCHED_DATE_FORMAT","Y-m-d");

/**
 * Defines a constant for the transformation of the datetime format of all
 * datetime fields fetched from mysql tables.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("FETCHED_DATETIME_FORMAT","d/m/Y H:i:s");
 *
 */
define("FETCHED_DATETIME_FORMAT","d/m/Y H:i:s");
// define("FETCHED_DATETIME_FORMAT","Y-m-d H:i:s");

/**
 * Defines a constant for interpreting of dates format used into all the
 * SQL statements for inserting or updating mysql date fields.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("STORED_DATE_FORMAT","%d/%m/%Y");
 */
define("STORED_DATE_FORMAT","%d/%m/%Y");
// define("STORED_DATE_FORMAT","%Y-%m-%d");

/**
 * Defines a constant for interpreting of datetime format used into all the
 * SQL statements for inserting or updating mysql datetime fields.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("STORED_DATETIME_FORMAT","%d/%m/%Y %H:%i:%s");
 */
define("STORED_DATETIME_FORMAT","%d/%m/%Y %H:%i:%s");
// define("STORED_DATETIME_FORMAT","%Y-%m-%d %H:%i:%s");

/**
 *  Includes
 */
include_once("Model.php");
include_once("MySqlRecord.php");

