<?php
date_default_timezone_set('Asia/Chongqing');   

do{
    //$raws = file_get_contents("php://input");
    //$data = json_decode($raws, true);
    //error_log(date("Y-m-d H:i:s")." $raws \r\n",3,"./debug");
    $time = date('Y-m-d H:i:s');
    $id = intval($_REQUEST['id']);
    $left_team = $_REQUEST['left_team'];
    $right_team = $_REQUEST['right_team'];
    $rate_win = floatval($_REQUEST['rate_win']);
    $rate_even = floatval($_REQUEST['rate_even']);
    $rate_lose = floatval($_REQUEST['rate_lose']);
    $handicap_up = floatval($_REQUEST['handicap_up']);
    $handicap_score = $_REQUEST['handicap_score'];
    $handicap_down = floatval($_REQUEST['handicap_down']);
    $score = $_REQUEST['score'];
    $note = $_REQUEST['note'];

    $connect = mysql_connect('localhost','root','123456') or die('数据库连接错误');
    mysql_select_db("football", $connect);
    $result = mysql_query("insert into analysis(id, time, left_team, right_team, rate_win, rate_even, rate_lose, handicap_up, handicap_score, handicap_down, score, note) values('$id','$time', '$left_team', '$right_team', '$rate_win', '$rate_even', '$rate_lose', '$handicap_up', '$handicap_score', '$handicap_down', '$score', '$note') on duplicate key update left_team='$left_team', right_team='$right_team', rate_win='$rate_win', rate_even='$rate_even', rate_lose='$rate_lose', handicap_up='$handicap_up', handicap_score='$handicap_score', handicap_down='$handicap_down', score='$score', note='$note'");

    echo mysql_error();
}while(false);

