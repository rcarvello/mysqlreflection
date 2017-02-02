<?php
/**
 * Demo usage of the generated  class by mysqlreflection tools
 * Generated bean used: BeanSinglePkDate
 *
 */

error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

include_once("beans/bean.config.php");
include_once("beans/BeanSinglePkDate.php");


// INSERT a new row and show result
$bean = new BeanSinglePkDate();
$bean->setIdDate("10/10/1950");
$bean->setFieldDate("10/10/1951");
$bean->setFieldDateTime("10/10/1952 10:11:12");
$bean->setFieldInt(100);
$bean->setFieldDecimal(100.35);
$bean->setFieldString('STRING with apho\'s and accènt');
$bean->setFieldText("TEXT with apho's and accènt");
$result = $bean->insert();
$lastInserted = $bean->getIdDate();

showBeanOperationResult("INSERT",$bean,$bean->affected_rows,false);
echo $lastInserted . " last inserted<br/>";
$bean->close();

// SELECT  previously inserted row and show result
$bean = new BeanSinglePkDate($lastInserted);

showBeanOperationResult("SELECT",$bean,$bean->affected_rows);
$bean->close();

// UPDATE previously inserted row and show result
$bean = new BeanSinglePkDate($lastInserted);
$bean->setFieldDate("10/10/1952");
$bean->setFieldDecimal(200.45);
$bean->setFieldInt(200);
$bean->setFieldString("This is a new STRING with apho's and accènt");
$bean->setFieldText("This is a new TEXT with apho's and accènt");
$result = $bean->updateCurrent();

showBeanOperationResult("UPDATE",$bean,$result,true);
$bean->close();

// DELETE previously updated row and show result
$bean = new BeanSinglePkDate($lastInserted);
$result = $bean->delete($lastInserted);

showBeanOperationResult("DELETE",$bean,$result);
$bean->close();

// Select after deletion and show result
$bean = new BeanSinglePkDate($lastInserted);

showBeanOperationResult("SELECT AFTER DELETION",$bean,$bean->affected_rows);
$bean->close();

/**
 * Support functions to show result
 */

/**
 * Show bean information and the MySQLi result for the current object operation
 * @param string $operation the class operation
 * @param mixed $bean current object
 * @param mysqli $result the mysql result for the operation
 * @param bool $ddl if true show the DDL
 */
function showBeanOperationResult($operation, BeanSinglePkDate $bean,$result,$ddl = false)
{
    echo "<br/><b>BEGIN</b> application operation: <b>$operation</b><br/>";
    showBean($bean,$operation,$ddl);
    showMySqlResult($result);
    echo "<b>END</b> application operation: <b>$operation</b><br/><br/><br/>";
}

/**
 * Shows some information about current sales agent object
 * @param mixed $bean
 * @param string $operation the class operation
 * @param bool $showDdl
 */
function showBean(BeanSinglePkDate $bean = null, $operation, $showDdl = false)
{
    // If no errors
    if ($bean && !$bean->isSqlError()) {
        echo "<br/>";
        echo "<b>Bean information:</b>:<hr>";
        echo "field_id          :   {$bean->getIdDate()}<br/>";
        echo "field_date          : {$bean->getFieldDate()}<br/>";
        echo "field_date_time     : {$bean->getFieldDateTime()}<br/>";
        echo "field_int           : {$bean->getFieldInt()}<br/>";
        echo "field_decimal       : {$bean->getFieldDecimal()}<br/>";
        echo "field_string        : {$bean->getFieldString()}<br/>";
        echo "field_text          : {$bean->getFieldText()}<br/>";
        echo "<br/>";
        // Shows sql statements
        echo "<div style='background: lightgrey'>";
        echo "<sup>Executed SQL statemtent:</sup><br/>";
        echo $bean->lastSql() . "<br/>";
        echo "</div>";
    }

    // If errors
    if ($bean && $bean->isSqlError()) {
        echo "<br/>";
        echo "<b>Error Unable to show bean object information:</b>";
        echo "<hr>";
        echo "<div style='background:indianred'>";
        echo "Error:" . $bean->lastSqlError();
        echo "<br/>";
        echo $bean->lastSql();
        echo "</div>";
    }

    // If DDL info requested and no error
    if ($bean && $showDdl){
        echo "<br/>";
        echo "<br/><sup>You requested to see DDL information:</sup><br/>";
        echo "<div style='background: yellowgreen'>";
        echo "<pre>";
        echo $bean->getDdl();
        echo "</pre>";
        echo "</div>";
    }

}

/**
 * Show MySql Result
 * @param mixed MySql $result
 */
function showMySqlResult($result){
    echo "<br/>";
    echo "<div style='background: lightcyan'>";
    echo "<sup>MySQL result for operation:</sup>";
    var_dump($result);
    echo "</div>";
}



