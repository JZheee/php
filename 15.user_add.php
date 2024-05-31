<?php

error_reporting(0);                //關閉錯誤報告
session_start();                   // 啟動session,要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
if (!$_SESSION["id"]) {            // 檢查用戶是否已登入
    echo "請登入帳號";              // 如果未登入，顯示請求登入的訊息
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";        // 設定網頁在3秒之後跳入"2.login.html"網頁
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");            // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";        // 將從表單接收到的用戶名和密碼插入到'user'表中
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {        // 使用mysqli_query()函數執行sql命令,查看是否成功
     echo "新增命令錯誤";                    // 如果執行失敗,顯示"新增命令錯誤"訊息
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";        // 顯示"新增使用者成功，三秒鐘後回到網頁"的訊息
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";        // 設定網頁在3秒之後跳入"18.user.php"網頁
   }
}
?>
