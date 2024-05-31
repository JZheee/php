<?php
    error_reporting(0);                //關閉錯誤報告
    session_start();                   // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {            // 檢查用戶是否已登入
        echo "please login first";     // 如果未登入，顯示請求登入的訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";        // 設定網頁在3秒之後跳入"2.login.html"網頁
    }
    else{
        
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");                // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");         // 使用mysqli_query()函數從資料庫中選擇佈告
        $row=mysqli_fetch_array($result);                                                       // 使用mysqli_fetch_array函數獲取結果 
        $checked1="";                        // 初始化勾選狀態
        $checked2="";                        // 初始化勾選狀態
        $checked3="";                        // 初始化勾選狀態
        if ($row['type']==1)                 // 如果佈告類型為1
            $checked1="checked";             // 設置為勾選狀態
        if ($row['type']==2)                 // 如果佈告類型為2
            $checked2="checked";             // 設置為勾選狀態
        if ($row['type']==3)                 // 如果佈告類型為3
            $checked3="checked";             // 設置為勾選狀態
        echo "                               // 輸出HTML表單
        <html>
            <head><title>新增佈告</title></head>                                                                   // 顯示新增的佈告表格頁面
            <body>
                <form method=post action=27.bulletin_edit.php>                                                    // method="post" 表示使用POST方式提交表單數據,適合密碼類的參數傳遞、27.bulletin_edit.php 指定了表單提交後要執行"27.bulletin_edit.php"的腳本
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告                              // 建立單選按鈕,用於選擇佈告類型(系上公告),如果$checked1為true則被選中
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊                               // 建立單選按鈕,用於選擇佈告類型(獲獎資訊),如果$checked2為true則被選中
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>                           // 建立單選按鈕,用於選擇佈告類型(徵才資訊),如果$checked3為true則被選中
                    發布時間：<input type=date name=time value={$row['time']}><p></p>                              // 日期輸入框,用於選擇佈告發布日期
                    <input type=submit value=修改佈告> <input type=reset value=清除>                               // 建立提交和重製按鈕,用於提交表單或是重製表單的內容
                </form>
            </body>
        </html>
        ";
    }
?>
