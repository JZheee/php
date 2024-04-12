<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))       // 利用if else 條件控制,判斷帳號和密碼是否符合要求
        echo "登入成功";                                                // 如果"id" 和 "pwd" 的資料符合,顯示登入成功
    else
        echo "登入失敗";                                                // 如果"id" 或 "pwd" 不符合,顯示登入失敗
?>
