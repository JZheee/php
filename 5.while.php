<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");      // 使用mysqli_connect()函數建立與資料的連結
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");         // 使用mysqli_query()函數向資料庫發送查詢
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) {                 // 使用While迴圈從查詢結果一筆一筆的擷取資料
     echo $row["id"]." ".$row["pwd"]."<br>";                  // 輸出每一行的 "id" 和 "pwd" 的字段
   } 
?>
