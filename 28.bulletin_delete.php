<?php
    error_reporting(0);                                                            // 關閉錯誤報告
    session_start();                                                               // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {                                                        // 檢查用戶是否已登入
        echo "請登入帳號";                                                          // 如果未登入，顯示"請登入帳號"的訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";            // 設定網頁在3秒之後跳入"2.login.html"網頁
    }
    else{                                                                                      // 如果登入成功
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");               // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結               
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";                                // 準備SQL刪除語句，使用$_GET取得bid值
        #echo $sql;    
        if (!mysqli_query($conn,$sql)){                                                        // 執行SQL刪除語句，並檢查是否成功
            echo "佈告刪除錯誤";                                                                // 如果刪除失敗，顯示"佈告刪除錯誤"訊息
        }else{
            echo "佈告刪除成功";                                                                // 如果刪除成功，顯示"佈告刪除成功"訊息
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";                     // 設定網頁在3秒之後跳入"11.bulletin.php"網頁
    }
?>
