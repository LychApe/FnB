<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnMB version:1.0.5
 * Author: HanFen
 **/
require_once("FnKu/FnKu.php");
FnKu::Go();
require(CONFIG_PATH.'/config.php');

#连接MySql
$Fn_DBConn = new mysqli( mysql_servername,mysql_username,mysql_password,mysql_database);
if( $Fn_DBConn->connect_errno <> 0 ){
    echo $Fn_DBConn->connect_error;
    die("SQL NO... (FnKu_E002_SQL)");
}
$Fn_DBConn->query("SET NAMES UTF8");
#查询MySql_1
$sql = "SELECT * FROM FnB_Msg ORDER BY ID DESC";
$mysqli_result = $Fn_DBConn->query($sql);
if( $mysqli_result === false ){
    echo "SQL NO... (FnKu_E002_SQL)";
    exit;
}
$rows = [];
while( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC ) ){
    $rows[] = $row; 
}
#查询MySql_2
$ALLNUM_Query = 'SELECT * FROM FnB_Msg';
$ALLNUM = mysqli_query( $Fn_DBConn, $ALLNUM_Query );

require(Usr_Themes_PATH.'/main.php');
require(Usr_Themes_PATH.'/index.php');


