<?php
//システム用の modelを読み込む
require_once('./model/functions.php');

$get_id = filter_input(INPUT_GET, "id");
$post_id = filter_input(INPUT_POST,"id");

if($post_id){

}else{

}
//デザインを読み込む
include_once('./view/update_view.php');