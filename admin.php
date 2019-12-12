<?php
include_once "base.php";

?>


<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Felix個人履歷資訊網</title>
  <link rel="stylesheet" href="assets/css/all.min.css" />
	<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="./css/style.css" type="text/css">
  <link rel="stylesheet" href="./css/css.css" type="text/css">
  <!--載入jQuery-->
  <script src="./js/jquery-3.4.1.min.js"></script>
  <script src="./js/js.js"></script>
  <noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body>
<div id="cover" style="display:none; ">
    <div id="coverr">
      <a class="close" style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
        onclick="cl(&#39;#cover&#39;)">
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M17.953 7.453L13.422 12l4.531 4.547-1.406 1.406L12 13.422l-4.547 4.531-1.406-1.406L10.578 12 6.047 7.453l1.406-1.406L12 10.578l4.547-4.531z" fill-rule="evenodd"></path></svg>
      </a>
      <div id="cvr" style="z-index:9898;"></div>
    </div>
  </div>
  <div id="main">
    <div class="top">
      <div class="head" style="text-align:center;width:70px;display:inline-block">
        <a href="index.php"><img src="./img/head.jpg" alt="個人履歷資料網" title="個人履歷資料網"
            style="width:70px;height:70px"></a>
      </div>
      <div style="display:inline-block;text-align: left">
        <svg width="835" height="90">
          <text text-anchor='left' x="0" y="60"
            style="fill:#ffffff; font-size: 36px;text-shadow: 2px 2px 5px #333">個人履歷管理後台</text>
        </svg>
      </div>
      <div class="exit" onclick="location.replace('./api/logout.php')"><i class="fas fa-sign-out-alt"></i> 管理登出</div>

      


    </div>
    <div class="container">
      <div class="flex">


        <div class="menu">
          <div>
          <a href="?do=title"  id="title">選單標題區管理</a>
          <a href="?do=info" id="info">個人資料管理</a>
          <a href="?do=cond" id="cond">求職條件管理</a>
          <a href="?do=skill" id="skill">技能管理</a>
          <a href="?do=history" id="history">經歷管理</a>
          <a href="?do=school" id="school">學歷管理</a>
          <a href="?do=project" id="project">參與專案管理</a>
          <a href="?do=gallery" id="gallery">作品資料管理</a>
          <a href="?do=doc" id="doc">自傳管理</a>
          <a href="?do=admin" id="admin">管理者帳號管理</a>
          <a href="?do=menu" id="menu">前端選單管理</a>
          <a href="?do=total" id="total">進站總人數管理</a>
          <a href="?do=bottom" id="bottom">頁尾版權資料管理</a>
          </div>
          <div class="dbor" >
            <span class="t">進站總人數 :<?=$_SESSION['total'];?></span>
          </div>
        </div>
        <div class="content">
        <?php
              //利用網址傳值的方式來取得$_GET['do']的值，這個值代表我們要include進來的檔案
              $do=(!empty($_GET['do']))?$_GET['do']:"title";
              $type=(!empty($_GET['type']))?$_GET['type']:"video";

              //我們將所有要include進來的後台功能檔案都放在 ./admin 目錄下，因此根據GET的值來組合include檔的完整路徑
              $path="./admin/" . $do . ".php";

              //判斷檔案是否存在來決定是要匯入檔案還是預設匯入title.php
              if(file_exists($path)){
                include $path;
              }else{
                include "./admin/title.php";
              }
              echo $do
        ?>          
        </div>
      </div>
    </div>
    <div class="footer">
    <?php include "footer.php";?>
    <!--   最新更新日期：yyyy/mm/dd -->
    </div>
  </div>
</body>

</html>
<script>
  //建立一個函式loadpage(page)用來載入內容至content區塊中
/*   loadpage('title.php');

  function loadpage(page) { */


    /*  $.get("./results/"+page,function(res){
        console.log(res)
      $(".content").html(res)  
      }
      ) */
/*     $(".content").load("./admin/" + page) //最簡潔的模式，就這一行~

  } */

$(function(){

 var show ="#<?php echo $do ?>";
/* alert(show); */
    
  $(show).removeClass("menu a").addClass("menushow");
 /*  $(show).siblings().removeClass("menushow").addClass("menu a"); */
/*     let idx = $("menu a").get(do).index();
    $(".menu a").eq(idx).removeClass("menu a").addClass("menushow");
    $(".menu a").eq(idx).siblings().removeClass("menushow").addClass("menu a");
     */

  
/*   $(".menu a").on("click", function () {
    let idx = $(this).index();
    $(".menu a").eq(idx).removeClass("menu a").addClass("menushow");
    $(".menu a").eq(idx).siblings().removeClass("menushow").addClass("menu a");
    
  }) */
  
})

</script>