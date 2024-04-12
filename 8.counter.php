<?php
    session_start();                            // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!isset($_SESSION["counter"]))           // 檢查是否設置計數器,假如沒有,則將計數器初始值為1
        $_SESSION["counter"]=1;
    else                                            
        $_SESSION["counter"]++;                 // 假如已有設置計數器,則將計數器值加1

    echo "counter=".$_SESSION["counter"];       // 輸出計數器的值
    echo "<br><a href=9.reset_counter.php>重置counter</a>";        // 輸出一個重置計數器的超連結
?>
