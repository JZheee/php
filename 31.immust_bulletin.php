<html>
    <head><title>明新科技大學資訊管理系</title>                // 網頁標題
    <meta charset="utf-8">                                   // 設定字元編碼
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">    // 導入外部CSS
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>                    // 導入外部jQuery
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>     // 導入外部Flexslider插件
    <script>
        $(window).load(function() {                    // 當視窗加載完成後執行
            $('.flexslider').flexslider({
                animation: "slide",                    // 動畫效果設定為滑動
                rtl: true                              // 設定從右到左
            });
        });
    </script>
    <style>
        *{
            margin:0;                                  // 設定所有元素的外邊距為0
            color:gray;                                // 設定所有文字顏色為灰色
            text-align:center;                         // 設定所有文字置中對齊
        }
        /* top */
        .top{
             background-color: white;                  // 頂部背景顏色為白色
        }
        .top .container{
            display: flex;                             // 使用彈性盒子(flexbox)佈局模式
            align-items: center;                       // 垂直方向上置中對齊
            justify-content: space-between;            // 水平方向上兩端對齊
            padding:10px;                              // 內邊距設定為10px(像素)
        }
        .top .logo{
            /*border:1px solid red;*/                  // 設定1px紅色實線邊框
            font-size: 35px;                           // 字體大小設定為35px
            font-weight: bold;                         // 字體加粗
        }
        .top .logo img{
            width: 100px;                              // 圖片寬度設定為100px
            vertical-align: middle;                    // 圖片垂直置中對齊
        }
        .top .top-nav{
            /*border:1px solid red;*/                  // 設定1px紅色實線邊框
            font-size: 25px;                           // 字體大小設定為25px
            font-weight: bold;                         // 字體加粗
        }
        .top .top-nav a{
            text-decoration: none;                     // 去除文字裝飾
        }
        /* nav */
        .nav {
            background-color:#333;                     // 背景顏色設定為深灰色
            display: flex;                             // 使用彈性盒子(flexbox)佈局模式
            justify-content: center;                   // 水平置中對齊
        }
        .nav ul {
            list-style-type: none;                     // 去除列表樣式
            margin: 0;                                 // 外邊距設定為0
            padding: 0;                                // 內邊距設定為0
            overflow: hidden;                          // 隱藏溢出內容
            background-color: #333;                    // 背景顏色設定為深灰色
        }
        .nav li {
            float: left;                               // 元素左浮動
        }
        .nav li a {    
            display: block;                            // 設定為區塊元素
            color: white;                              // 文字顏色設定為白色
            text-align: center;                        // 文字置中對齊
            padding: 14px 16px;                        // 內邊距設定為14px 16px
            text-decoration: none;                     // 去除文字裝飾
        }
        .nav li a:hover {
            background-color: #111;                    // 滑鼠懸停時背景顏色變為黑色
        }
        /*下拉式選單*/
        .dropdown:hover .dropdown-content {
            display: block;   /*使用block呈現上下排列*/        
        }
        li.dropdown:hover{
            background-color: #333;  /*設定背景顏色*/
        }
        .dropdown-content {  /*設定下拉選單內容格式*/
            display: none;
            position: absolute;                        // 絕對定位
            background-color: #333;                    // 背景顏色設定為深灰色
            min-width: 160px;                          // 最小寬度設定為160px
            z-index: 1;                                // 設定z-index為1，確保下拉選單顯示在最上層
        }
        .dropdown-content a {/*設定下拉選單連結內容格式*/
            color: black;                              // 文字顏色設定為黑色
            padding: 12px 16px;                        // 內邊距設定為12px 16px
            text-decoration: none;                     // 去除文字裝飾
            display: block;                            // 設定為區塊元素
            text-align: left;                          // 文字左對齊
        }

        /* slider */
        .slider{
            background-color: black;                  // 背景顏色設定為黑色
        }
        /* banner*/
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);        // 設定線性漸變背景
            padding:30px;                            // 內邊距設定為30px
        }
        .banner h1{
            padding: 20px;                           // 內邊距設定為20px
        }        
        /*faculty*/
        .faculty {
            display: block;                          // 設定為區塊元素
            justify-content: center;                 // 水平置中對齊
            background-color:white;                  // 背景顏色設定為白色
            padding:40px;                            // 內邊距設定為40px
        }
        .faculty h2 {
            font-size: 25px;                         // 字體大小設定為25px
            color: rgb(50,51,52);                    // 文字顏色設定為深灰色
            padding-bottom:40px;                     // 底部內邊距設定為40px
        }
        .faculty .container {
            /*border:1px solid red;*/    
            display: flex;                           // 使用彈性盒子(flexbox)佈局模式
            justify-content: space-around;           // 元素間距均勻分佈
            align-items: center;                     // 垂直置中對齊
        }
        .faculty .teacher{
            /*border:1px solid blue;*/
            display:block;                           // 設定為區塊元素
            text-decoration: none;                   // 去除文字裝飾
        }
        .faculty .teacher img{
            height: 200px;                           // 圖片高度設定為200px
            width: 200px;                            // 圖片寬度設定為200px
        }
        .faculty .teacher h3{
            color: White;                            // 文字顏色設定為白色
            background-color: rgba(39,40,34,.500);   // 背景顏色設定為半透明深灰色
            text-align: center;                      // 文字置中對齊
        }
        /*contact*/
        .contact {
            display: block;                          // 設定為區塊元素
            justify-content: center;                 // 水平置中對齊
            margin-top: 30px;                        // 上外邊距設定為30px    
            margin-bottom: 30px;                     // 下外邊距設定為30px
        }
        .contact h2{
            color: rgb(54, 82, 110);                 // 文字顏色設定為深藍色
            font-size: 25px;                         // 字體大小設定為25px
        }
        .contact .infos{
            display:flex;                            // 使用彈性盒子(flexbox)佈局模式
            margin-top: 30px;                        // 上外邊距設定為30px
            justify-content: center;                 // 水平置中對齊
        }
        .contact .infos .left{
            display:block;                           // 設定為區塊元素
            text-align: left;                        // 文字左對齊
            margin-right: 30px;                      // 右外邊距設定為30px
        }
        .contact .infos .left b{
            display:block;                           // 設定為區塊元素
            text-align: left;                        // 文字左對齊
            margin-top: 10px;                        // 上外邊距設定為10px
            text-decoration: bold;                   // 文字加粗
            color: Gray;                             // 文字顏色設定為灰色
            font-size: 18px;                         // 字體大小設定為18px
            line-height: 18px;                       // 行高設定為18px
        }
        .contact .infos .left span{
            display:block;                           // 設定為區塊元素
            text-align: left;                        // 文字左對齊
            margin-top: 10px;                        // 上外邊距設定為10px
            color: rgba(39,40,34,0.5);               // 文字顏色設定為半
            font-size: 16px;                         // 設定字體大小為16px
            padding-left: 27px;                      // 設定左邊內邊距為27px
        }
        .contact .infos .right{
            height: 200px;                           // 設定右邊區塊的高度為200px
        }
        .contact .infos .right iframe{
            width: 100%;                             // 設定iframe的寬度為100%
            height: 100%;                            // 設定iframe的高度為100%
            border: 1px solid rgba(39,40,34,0.50);   // 設定邊框為1像素寬，顏色為深灰色
        }
        /*footer*/
        .footer{
            display: flex;                           // 使用彈性盒子(flexbox)佈局模式
            justify-content: center;                 // 水平居中對齊
            background-color: rgb(25,26,30);         // 設定背景顏色為灰黑色
            padding: 30px 0;                         // 設定上下內邊距為30px
        }
        /*登入畫面css*/
        .modal {
            display: none; /* Hidden by default */   // 預設為隱藏
            position: fixed; /* Stay in place */     // 設定為固定定位
            z-index: 1; /* Sit on top */             // 設定z-index為1
            right: 50;                               // 設定右邊距離為50像素
            top: 50;                                 // 設定上邊距離為50像素
            width: 20%; /* Full width */             // 設定寬度為20%
            height: 20%; /* Full height */           // 設定高度為20%
            overflow: auto; /* Enable scroll if needed */    // 若內容超出範圍則顯示滾動條
            background-color: rgba(255,255,255,0.9); /* Black w/ opacity */    // 設定背景顏色為白色
            padding-top: 50px;                       // 設定上內邊距為50px
        }  /*登入畫面css*/
        /*佈告欄*/
        .bulletin{
            display: block;                          // 設定為區塊級元素
            justify-content: center;                 // 水平居中對齊
            background-color: rgb(255,204,153);      // 設定背景顏色為淺橙色
            padding: 30px 0;                         // 設定上下內邊距為30px

        }
        .bulletin h1{
            padding:10px;                            // 設定內邊距為10px
        }
        .bulletin table{
            border-collapse:collapse;                // 設定邊框合併
            font-family: 微軟正黑體;                  // 設定字體為微軟正黑體
            font-size:16px;                          // 設定字體大小為16像素
            border:1px solid #000;                   // 設定邊框為1像素寬，顏色為黑色
        }
        .bulletin table th{
            background-color: #abdcff;               // 設定背景顏色為淡藍色
            color: #ffffff;                          // 設定文字顏色為白色
        }
        .bulletin table td{
            background-color: #ffffff;               // 設定背景顏色為白色
            color: #0396ff;                          // 設定文字顏色為亮藍色
        }
    </style>
    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!---跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                  <!---登入畫面-->
                </div>
              </div>
        </div>
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!---佈告欄--->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                $result=mysqli_query($conn, "select * from bulletin");
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!---佈告欄--->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>
