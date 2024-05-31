<?php

    error_reporting(0);                // 關閉錯誤報告
    session_start();                   // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {            // 檢查用戶是否已登入
        echo "請登入帳號";              // 如果未登入，顯示請求登入的訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";        // 設定網頁在3秒之後跳入"2.login.html"網頁
    }
    else{                                                                               // 如果登入成功
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");        // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){      // 使用mysqli_query()函數向資料庫發送使用者更新的帳號和密碼  
            echo "修改錯誤";                                                                                // 如果執行失敗,顯示"修改錯誤"訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";                                 // 設定網頁在3秒之後跳入"18.user.php"網頁
        }else{
            echo "修改成功，三秒鐘後回到網頁";                                                                // 如果執行成功,顯示"修改成功，三秒鐘後回到網頁"的訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";                                  // 設定網頁在3秒之後跳入"18.user.php"網頁
        }
    }

?>
