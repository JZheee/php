<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");        // 使用mysqli_connect()函數建立與"db4free.net"資料庫連結
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");            // 使用mysqli_query()函數向資料庫發送查詢
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);                             // 使用myssqli_fetch_array()函數從查詢結果中一行一行擷取資料
    echo $row["id"] . " " . $row["pwd"]."<br>";                   // 輸出第一行的資料
    $row=mysqli_fetch_array($result);                             // 擷取下一行的資料
    echo $row["id"] . " " . $row["pwd"];                          // 輸出第二行的資料
?>
