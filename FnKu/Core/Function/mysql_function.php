<?php
/**
 * FnKu MySql class
 */
class Fn_DB
{
    
    /**
     * Fn_DBConn
     */
    public function Fn_DBConn()
    {
        $Fn_DBConn = new mysqli( mysql_servername,mysql_username,mysql_password,mysql_database);
        if( $Fn_DBConn->connect_errno <> 0 ){
            echo $Fn_DBConn->connect_error;
            die("SQL NO... (FnKu_E002_SQL)");
        }
        $Fn_DBConn->query("SET NAMES UTF8");
    }
    
}