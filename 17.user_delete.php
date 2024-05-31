<?php
    error_reporting(0);            //關閉錯誤報告
    session_start();               // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {        // 檢查用戶是否已登入
        echo "請登入帳號";          // 如果未登入，顯示請求登入的訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";        // 設定網頁在3秒之後跳入"2.login.html"網頁
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");        // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
        $sql="delete from user where id='{$_GET["id"]}'";        // 建立sql刪除命令
        #echo $sql;
        if (!mysqli_query($conn,$sql)){        // 檢查sql命令是否成功
            echo "使用者刪除錯誤";              // 如果失敗,顯示"使用者刪除錯誤"訊息
        }else{    
            echo "使用者刪除成功";              // 如果成功,顯示"使用者刪除成功"訊息
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";            // 設定網頁在3秒之後跳入"18.user.php"網頁
    }
?>
