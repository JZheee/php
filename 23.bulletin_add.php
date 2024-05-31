<?php
    error_reporting(0);            // 關閉錯誤報告
    session_start();               // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {        // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
        echo "please login first";    // 如果未登入，顯示請求登入的訊息("please login first")
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";    // 設定網頁在3秒之後跳入"2.login.html"網頁
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");        // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
        $sql="insert into bulletin(title, content, type, time)                          // 準備要執行的sql語句,插入佈告數據
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";     // 將使用者輸入表單中的資料傳送到資料庫的billetin表中,title=佈告標題、content=佈告內容、type=佈告類型、time=發布時間
        if (!mysqli_query($conn, $sql)){            // 檢查sql命令是否成功
            echo "新增命令錯誤";                     // 如果失敗,顯示"新增命令錯誤"訊息
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";                                    // 如果執行成功,顯示"新增佈告成功，三秒鐘後回到網頁"的訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";     // 設定網頁在3秒之後跳入"11.bulletin.php"網頁
        }
    }
?>
