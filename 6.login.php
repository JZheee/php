<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");         // 使用mysqli_connect()函數建立"db4free.net"資料庫連結
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");                           // 使用mysqli_query()函數向資料庫發送查詢資料
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;                                                                // 初始化登入狀態為FALSE
   while ($row=mysqli_fetch_array($result)) {                                   // 使用while迴圈從查詢結果中一筆一筆的擷取資料
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {          // 檢查用戶提供的帳號和密碼是否符不符合資料庫中的紀錄
       $login=TRUE;              // 如果成功,登入狀態設置為TRUE
     }
   } 
   if ($login==TRUE)
     echo "登入成功";            // 登入狀態為TRUE則顯示"登入成功"
  else
     echo "帳號/密碼 錯誤";      // 登入狀態為FALSE則顯示"帳號/密碼 錯誤"
?>
