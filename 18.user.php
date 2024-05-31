<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);            //關閉錯誤報告
        session_start();               // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
        if (!$_SESSION["id"]) {        // 檢查用戶是否已登入
            echo "請登入帳號";          // 如果未登入，顯示請求登入的訊息
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";        // 設定網頁在3秒之後跳入"2.login.html"網頁
        }
        else{   
            echo "<h1>使用者管理</h1>                                                                              // 如果登入成功,顯示"新增使用者"標題和"回佈告欄列表",以及表格開頭的部分
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>        
                <table border=1>                                                                                  // 創造一個邊框寬度為1像素的表格
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";                                                 // 顯示使用者的帳號和密碼 
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");                              // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
            $result=mysqli_query($conn, "select * from user");                                                    // 執行查詢並獲得'user'表格中的所有資料
            while ($row=mysqli_fetch_array($result)){                                                             // 使用mysqli_fetch_array()函數從查詢結果中一行一行擷取資料,並將資料顯示到表格中
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }                                                                                                     // 顯示一行包含修改、刪除連結以及使用者的帳號和密碼的表格
            echo "</table>";        // 輸出表格結束標籤
        }
    ?> 
    </body>
</html>
