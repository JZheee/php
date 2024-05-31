<?php
    error_reporting(0);        // 關閉錯誤報告
    session_start();           // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {    // 檢查用戶是否已登入
        echo "please login first";        // 如果未登入，顯示請求登入的訊息("please login first")
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";        // 設定網頁在3秒之後跳入"2.login.html"網頁
    }
    else{                                            // 如果登入成功
        echo "
        <html>
            <head><title>新增佈告</title></head>                      // 顯示新增的佈告表格頁面
            <body>
                <form method=post action=23.bulletin_add.php>        // method="post" 表示使用POST方式提交表單數據,適合密碼類的參數傳遞、23.bulletin_add.php 指定了表單提交後要執行"23.bulletin_add.php"的腳本
                    標    題：<input type=text name=title><br>        // 用於輸入佈告標題
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>    // 用於輸入佈告內容,並指定文本區域的高度為20行文字、寬度為20列文字
                    佈告類型：<input type=radio name=type value=1>系上公告                   // 建立單選按鈕,用於選擇佈告類型(系上公告)
                            <input type=radio name=type value=2>獲獎資訊                    // 建立單選按鈕,用於選擇佈告類型(獲獎資訊)
                            <input type=radio name=type value=3>徵才資訊<br>                // 建立單選按鈕,用於選擇佈告類型(徵才資訊)
                    發布時間：<input type=date name=time><p></p>                            // 日期輸入框,用於選擇佈告發布日期
                    <input type=submit value=新增佈告> <input type=reset value=清除>        // 建立提交和重製按鈕,用於提交表單或是重製表單的內容
                </form>
            </body>
        </html>
        ";
    }
?>
