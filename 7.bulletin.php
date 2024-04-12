<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");            // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
    $result=mysqli_query($conn, "select * from bulletin");                              // 使用mysqli_query()函數向資料庫發送查詢
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";        // 輸出表格開始標籤和標頭
    while ($row=mysqli_fetch_array($result)){            // 使用mysqli_fetch_array()函數從查詢結果中一行一行擷取資料,並將資料顯示到表格中
        echo "<tr><td>";             // 輸出表格的開始標籤和儲存格的開始標籤
        echo $row["bid"];            // 輸出佈告編號
        echo "</td><td>";            // 輸出儲存格的結束標籤,並開始下一個儲存格
        echo $row["type"];           // 輸出佈告編號類別
        echo "</td><td>";            // 輸出儲存格的結束標籤,並開始下一個儲存格
        echo $row["title"];          // 輸出佈告標題
        echo "</td><td>";            // 輸出儲存格的結束標籤,並開始下一個儲存格
        echo $row["content"];        // 輸出佈告內容
        echo "</td><td>";            // 輸出儲存格的結束標籤,並開始下一個儲存格
        echo $row["time"];           // 輸出發佈時間
        echo "</td></tr>";           // 輸出儲存格的結束標籤和表格行的結束標籤
    }
    echo "</table>"                  // 輸出表個結束標籤
?>
