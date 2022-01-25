<?php
//システム用の modelを読み込む
require_once('./model/functions.php');
//TOPへ遷移
header('Location: ./index.php');
exit();
//デザインを読み込む
include_once('./view/delete_view.php');