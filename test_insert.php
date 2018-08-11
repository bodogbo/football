<?php
require 'config.php';
date_default_timezone_set('Asia/Chongqing');   
$connect = mysql_connect($mysql_host, $mysql_user, $mysql_pwd) or die('数据库连接错误');
mysql_select_db("football", $connect);
$time = date('Y-m-d H:i:s');
$result = mysql_query("insert into analysis(time) values('$time')");

//$result = mysql_query("select id from server where (now() - time) >= 0  order by id");
//$newestId = 0;
//while($row = mysql_fetch_row($result) ){
//    $id = intval($row[0]);
//    if( $id > $newestId) $newestId = $id;
//}
//echo $newestId;
//
//if( $action == 'weihu' ) {
//    if( $sid != "all" ) {
//        $result = mysql_query("update server set status=0 where  id='$sid' limit 1");
//    }else {
//        $result = mysql_query("update server set status=0 where id<='$newestId'");
//    }  
