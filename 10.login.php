<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");      // 使用mysqi_connect()函數建立與"db4free.net"資料庫的連結
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");         // 使用mysqli_query()函數向資料庫發送查詢user資料表
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;                                              // 設定初始登入狀態為FALSE
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
