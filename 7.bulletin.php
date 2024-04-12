<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");            // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
    $result=mysqli_query($conn, "select * from bulletin");                              // 使用mysqli_query()函數向資料庫發送查詢
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";        // 輸出表格開始標籤和標頭
    while ($row=mysqli_fetch_array($result)){            // 使用mysqli_fetch_array()函數從查詢結果中一行一行擷取資料,並將資料顯示到表格中
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"                    // 輸出表個結束標籤
?>
