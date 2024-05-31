<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);                //關閉錯誤報告
    session_start();                   // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {            // 檢查用戶是否已登入
        echo "請登入帳號";              // 如果未登入，顯示請求登入的訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";    // 設定網頁在3秒之後跳入"2.login.html"網頁
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>               // method="post" 表示使用POST方式提交表單數據,適合密碼類的參數傳遞、action="15.user_add.php" 指定了表單提交後要執行"15.user_add.php"的腳本                 
                帳號：<input type=text name=id><br>                 // 這是一個文本輸入框,在這裡輸入帳號,name="id" 指定了這個輸入框的名稱,用在後端程式中辨識出
                密碼：<input type=text name=pwd><p></p>             // 這是一個文本輸入框,在這裡輸入密碼,name="pwd" 指定了這個輸入框的名稱 
                <input type=submit value=新增> <input type=reset value=清除>         //提交登入按鈕和重置按鈕,點擊提交框則將表單資料傳遞至後端,反之點擊重置則清空表單資料
            </form>
        ";
    }
?>
    </body>
</html>
