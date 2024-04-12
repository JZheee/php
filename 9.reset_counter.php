<?php
    session_start();                    // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    unset($_SESSION["counter"]);        // 刪除計數器的值,session_unset() 或者session_destroy()也可以達成同樣功能
    echo "counter重置成功....";          // 輸出顯示"couter重置成功...."的訊息
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";        // 2秒過後跳入"8.counter.php"

?>
