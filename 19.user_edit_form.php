<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);                // 關閉錯誤報告
    session_start();                   // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {            // 檢查用戶是否已登入
        echo "請登入帳號";              // 如果未登入，顯示請求登入的訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";        // 設定網頁在3秒之後跳入"2.login.html"網頁
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");        // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");     // 使用mysqli_query()函數查詢資料庫中要修改的使用者資料
        $row=mysqli_fetch_array($result);                                               // 使用While迴圈從查詢結果一筆一筆的擷取資料
        echo "
        <form method=post action=20.user_edit.php>       // method="post" 表示使用POST方式提交表單數據,適合密碼類的參數傳遞、action="20.user_edit.php" 指定了表單提交後要執行"15.user_add.php"的腳本
            <input type=hidden name=id value={$row['id']}>        // 隱藏帳號欄位
            帳號：{$row['id']}<br>                                 // 顯示帳號
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>    // 可修改的密碼欄位
            <input type=submit value=修改>                                 // 建議修改按鈕
        </form>
        ";
    }
    ?>
    </body>
</html>
