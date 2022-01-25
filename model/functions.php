<?php

// DBとの接続情報
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = ""; // DB名の入力

// DBから取得する関数
function getData( $host , $username , $passwd , $dbname , $sql ){
    // DBに接続
    $db = mysqli_connect($host,$username,$passwd,$dbname);
    if(!$db){
        echo "DBに接続出来ません。";
    }
    // 文字コードの指定
    mysqli_set_charset($db, "utf-8");
    // クエリの送信
    $query = $sql;
    $result = mysqli_query($db,$query);
    $data = array();
    // SELECT文の結果の取得
    if($result){
        while( $row = mysqli_fetch_array($result) ){
            $data[] = $row;
        }
    }else{
        echo "取得失敗";
    }
    // DBを切断
    if( !mysqli_close($db) ){
        echo "切断に失敗";
    }
    // 結果を呼び出した所に戻す
    return $data;
}

// DBの操作用の関数
function setData($host , $username , $passwd , $dbname , $sql){
    // DBに接続
    $db = mysqli_connect($host,$username,$passwd,$dbname);
    if(!$db){
        echo "DBに接続出来ません。";
    }
    // 文字コードの指定
    mysqli_set_charset($db, "utf-8");
    // クエリの送信
    $query = $sql;
    $result = mysqli_query($db,$query);
    // DBを切断
    if( !mysqli_close($db) ){
        echo "切断に失敗";
    }
}