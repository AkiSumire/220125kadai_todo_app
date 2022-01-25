<?php
// システム用のmodelを組み込む
require_once('./model/functions.php');

$title = filter_input(INPUT_POST,'title');
$body = filter_input(INPUT_POST,"body");
$finish_date = filter_input(INPUT_POST,"finish_date");
$status = filter_input(INPUT_POST,"status");

if($title && $body && $finish_date && $status != NULL){
    $create_date = date("y-m-d h:i:s");
    $sql = "";
    setData($host , $username , $passwd , $dbname , $sql);
    // TOPへ遷移
    header('Location: ./index.php');
    exit();
}

// デザインを読み込む
include_once('./view/create_view.php');