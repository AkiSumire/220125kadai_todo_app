<?php
// システム用のmodelを組み込む
require_once('./model/functions.php');

// クエリの発行
$sql = "";
// データの取得
$data = getData( $host , $username , $passwd , $dbname , $sql );

// デザインを読み込む
include_once('./view/index_view.php');