<?php
$mysql_pwd ="123456";

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
