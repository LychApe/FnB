<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnMB version:1.0.5
 * Author: HanFen
 **/
require_once("FnKu/FnKu.php");
FnKu::Go();
require(CONFIG_PATH.'/config.php');
class input
{
    public function post( $Message )
    {
        if( !isset ($Message) ) {
            return false;
        }
        
        #if ( $Message == !isset($Message) ) {
        #            return false;
        #        }
        
        foreach ( $GLOBALS['SC'] as $SCV ) {
            if( $Message == $SCV ){
                return false;
            }
        }
            return true;
    }
}

#连接MySql
$Fn_DBConn = new mysqli( mysql_servername,mysql_username,mysql_password,mysql_database);
if( $Fn_DBConn->connect_errno <> 0 ){
    echo $Fn_DBConn->connect_error;
    die("SQL NO... (FnKu_E002_SQL)");
}
$Fn_DBConn->query("SET NAMES UTF8");

?>
<head>
    <meta charset="UTF-8">
        <title>FnB - Error喵?!</title>
    <link rel="stylesheet" href="Usr/Themes/Static/css/mdui.min.css">
    <script src="Usr/Themes/Static/js/mdui.min.js"></script>
</head>
<body>
        <div class="mdui-appbar">
          <div class="mdui-toolbar mdui-color-indigo-600">
            <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">&#xe3e7;</i></a>
            <a href="javascript:;" class="mdui-typo-headline">FnB - Error喵?!</a>
            <a href="javascript:;" class="mdui-typo-title"></a>
            <div class="mdui-toolbar-spacer"></div>
            <a href="index.php" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>
          </div>
        </div>
<?php
if(isset($_POST['Message'])&&!empty(trim($_POST['Message']))) {
    $Message = $_POST['Message']; 
}else{
    $notice = "数据不足！";
    header("HTTP/1.1 521 Not Acceptable");
    die('
    <style>
        .border-comm{
        border-radius:12px;
        }
    </style>
    <div class="mdui-progress">
      <div class="mdui-progress-indeterminate"></div>
    </div>
    <br/>
    <br/>
    <div class="mdui-container">
    <div class="mdui-row">
      <div class="mdui-card border-comm">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title">错误</div>
          <div class="mdui-card-primary-subtitle">Error!</div>
        </div>
        <div class="mdui-card-content">1.留言内容数据不正确！</div>
        <div class="mdui-card-actions">
          <a href="index.php"class="mdui-btn mdui-ripple mdui-float-right mdui-color-grey-200 border-comm">知 道 了 !</a>
        </div>
      </div>
    </div>
  </div>
    ');
} 

if(isset($_POST['User'])&&!empty(trim($_POST['User']))) {
    $User = $_POST['User']; 
}else{
    $notice = "数据不足！";
    header("HTTP/1.1 521 Not Acceptable");
    die('
    <style>
        .border-comm{
        border-radius:12px;
        }
    </style>
    <div class="mdui-progress">
      <div class="mdui-progress-indeterminate"></div>
    </div>
    <br/>
    <br/>
    <div class="mdui-container">
    <div class="mdui-row">
      <div class="mdui-card border-comm">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title">错误</div>
          <div class="mdui-card-primary-subtitle">Error!</div>
        </div>
        <div class="mdui-card-content">1.用户名数据不正确！</div>
        <div class="mdui-card-actions">
          <a href="index.php"class="mdui-btn mdui-ripple mdui-float-right mdui-color-grey-200 border-comm">知 道 了 !</a>
        </div>
      </div>
    </div>
  </div>
    ');
} 

if(isset($_POST['QQ'])&&!empty(trim($_POST['QQ']))) {
    $QQ = $_POST['QQ']; 
}else{
    $notice = "数据不足！";
    header("HTTP/1.1 521 Not Acceptable");
    die('
    <style>
        .border-comm{
        border-radius:12px;
        }
    </style>
    <div class="mdui-progress">
      <div class="mdui-progress-indeterminate"></div>
    </div>
    <br/>
    <br/>
    <div class="mdui-container">
    <div class="mdui-row">
      <div class="mdui-card border-comm">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title">错误</div>
          <div class="mdui-card-primary-subtitle">Error!</div>
        </div>
        <div class="mdui-card-content">1.QQ数据不正确！</div>
        <div class="mdui-card-actions">
          <a href="index.php"class="mdui-btn mdui-ripple mdui-float-right mdui-color-grey-200 border-comm">知 道 了 !</a>
        </div>
      </div>
    </div>
  </div>
    ');
} 

$input = new input();

    $is = $input->post( $Message );
#    if( $is == false ){
#        $notice = "留言内容数据不正确！";
#        die("留言内容数据不正确！");
#    }
    $is = $input->post( $User );
#    if( $is == false ){
#        $notice = "用户名数据不正确！";
#        die("用户名数据不正确！");
#    }
    $is = $input->post( $QQ );
#    if( $is == false ){
#        $notice = "QQ数据不正确！";
#        die("QQ数据不正确！");
#    }

$time = time();
$sql = "INSERT INTO FnB_Msg (Message,User,QQ,Intime) values ('{$Message}','{$User}','{$QQ}','{$time}')";
$is = $Fn_DBConn->query($sql);

header("location:index.php");