<?php
    session_start();            // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    unset($_SESSION["id"]);     // 移除session中的帳號
    echo "登出成功....";         // 顯示登出成功的訊息
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";    // 設定網頁在3秒之後跳入"2.login.html"網頁

?>
