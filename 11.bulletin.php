<?php
    error_reporting(0);            // 關閉錯誤報告
    session_start();               // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!$_SESSION["id"]) {        // 檢查用戶是否已登入
        echo "請先登入";            // 如果未登入，顯示請求登入的訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";        //3秒後跳入"2.login.html"
    }
    else{                          
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";        // 如果已經登入，顯示歡迎訊息和用戶名稱
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");            // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
        $result=mysqli_query($conn, "select * from bulletin");                              // 使用mysqli_query()函數向資料庫發送查詢bulletin資料表
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";        // 輸出表格開始標籤和標頭
        while ($row=mysqli_fetch_array($result)){                                            // 使用mysqli_fetch_array()函數從查詢結果中一行一行擷取資料,並將資料顯示到表格中
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a>       // 輸出每一行佈告的資訊以及編輯和刪除的超連結
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";             
            echo $row["bid"];            // 輸出佈告編號
            echo "</td><td>";            // 輸出儲存格的結束標籤,並開始下一個儲存格
            echo $row["type"];           // 輸出佈告編號類別
            echo "</td><td>";            // 輸出儲存格的結束標籤,並開始下一個儲存格
            echo $row["title"];          // 輸出佈告標題
            echo "</td><td>";            // 輸出儲存格的結束標籤,並開始下一個儲存格
            echo $row["content"];        // 輸出佈告內容
            echo "</td><td>";            // 輸出儲存格的結束標籤,並開始下一個儲存格
            echo $row["time"];           // 輸出發佈時間
            echo "</td></tr>";           // 輸出儲存格的結束標籤,並開始下一個儲存格
        }
        echo "</table>";                 // 輸出表格結束標籤
    
    }

?>
