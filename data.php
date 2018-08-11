<?php
require 'config.php';
date_default_timezone_set('Asia/Chongqing');   

$resp = array('code'=>0, 'msg'=>'', 'count'=>200, 'data'=>array());
do {
    if(!empty($_REQUEST['team'])){
        $team = $_REQUEST['team'];
    }
    if(!empty($_REQUEST['rate'])){
        $rate = floatval($_REQUEST['rate']);
    }

    if(!empty($_REQUEST['limit'])){
        $limit = intval($_REQUEST['limit']);
    }

    if(!empty($_REQUEST['page'])){
        $page = intval($_REQUEST['page']);
    }

    $start = ($page - 1) * $limit;

    $connect = mysql_connect($mysql_host, $mysql_user, $mysql_pwd) or die('数据库连接错误');
    mysql_select_db("football", $connect);
    //$time = date('Y-m-d H:i:s');
    //$result = mysql_query("insert into analysis(time) values('$time')");
    
    $datas = array();
    if(empty($_REQUEST['team']) && empty($_REQUEST['rate'])) {

        $result = mysql_query("select * from analysis order by id DESC limit $start,$limit");
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            
            $datas[] = $row;
        }
    }else {
        $result = null;
        if(!empty($_REQUEST['team']) && !empty($_REQUEST['rate'])){
            $result = mysql_query("select * from analysis where left_team='$team' or right_team='$team' or rate_win=$rate or rate_even=$rate or rate_lose=$rate  order by id DESC limit $limit");
        }else if (!empty($_REQUEST['team'])){
            $result = mysql_query("select * from analysis where left_team='$team' or right_team='$team'  order by id DESC limit $limit");
        }else{
            $result = mysql_query("select * from analysis where rate_win=$rate or rate_even=$rate or rate_lose=$rate  order by id DESC limit $limit");
        } 
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            $datas[] = $row;
        }

    }
    $resp['data'] = $datas;
}while(false);

echo json_encode($resp);

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
