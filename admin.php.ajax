<?php
include_once "./base.php";

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
  <script src="./tinymce/js/tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
    selector:'textarea',
    branding: false,
    language: "zh_TW",
    plugins : "advlist autolink link image lists charmap print preview"
    });
  </script>
  <noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body>
  <div id="cover" style="display:none; ">
    <div id="coverr">
      <a style="position:absolute; right:5px; top:4px; border:solid 1px gray; padding:5px; border-radi  us:5px; cursor:pointer; z-index:9999;"
        onclick="cl(&#39;#cover&#39;)">
        CLOSE
      </a>
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; padding:20px;z-index:9898;"></div>
    </div>
  </div>
  <div id="main">
    <div class="top">
      <div class="head" style="text-align:center;width:70px;display:inline-block">
        <a href="index.html"><img src="./img/head.jpg" alt="個人履歷資料網" title="個人履歷資料網"
            style="width:70px;height:70px"></a>
      </div>
      <div style="display:inline-block;text-align: left">
        <svg width="835" height="90">
          <text text-anchor='left' x="0" y="60"
            style="fill:#ffffff; font-size: 36px;text-shadow: 2px 2px 5px #333">個人履歷管理後台</text>
        </svg>
      </div>
      <div class="exit" onclick="document.cookie='user=';location.replace('?')"><i class="fas fa-sign-out-alt"></i> 管理登出</div>
    </div>
    <div class="container">
      <div class="flex">


        <div class="menu">
          <div>
          <a href="#"  onclick="loadpage('title.php')" id="title">選單標題區管理</a>
          <a href="#" onclick="loadpage('info.php')" id="info">個人資料管理</a>
          <a href="#" onclick="loadpage('cond.php')" id="cond">求職條件管理</a>
          <a href="#" onclick="loadpage('skill.php')" id="skill">技能管理</a>
          <a href="#" onclick="loadpage('history.php')" id="history">經歷管理</a>
          <a href="#" onclick="loadpage('school.php')" id="school">學歷管理</a>
          <a href="#" onclick="loadpage('gallery.php')" id="gallery">作品資料管理</a>
          <a href="#" onclick="loadpage('doc.php')" id="doc">自傳管理</a>
          <a href="#" onclick="loadpage('admin.php')" id="admin">管理者帳號管理</a>
          <a href="#" onclick="loadpage('total.php')" id="total">進站總人數管理</a>
          <a href="#" onclick="loadpage('bottom.php')" id="bottom">頁尾版權資料管理</a>
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
              $p=(!empty($_GET['p']))?$_GET['p']:"0";
             /*  echo $p; */
             /* echo $do; */

              //我們將所有要include進來的後台功能檔案都放在 ./admin 目錄下，因此根據GET的值來組合include檔的完整路徑
 /*              $path="./admin/" . $do . ".php";

              //判斷檔案是否存在來決定是要匯入檔案還是預設匯入title.php
              if(file_exists($path)){
                include $path;
              }else{
                include "./admin/title.php";
              }*/
              

               /*  console.log($do); */             
                
              
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

  var show ="<?php echo $do ?>";
  var type ="<?php echo $type ?>";
  var p ="<?php echo $p ?>";
  /* console.log(p); */

  //建立一個函式loadpage(page)用來載入內容至content區塊中

/* if(show == 'gallery'){
 loadpage(show+'.php', type ); 
 function loadpage(page,sel) {
  $(".content").load("./admin/" + page + ' .'+sel);
}
}else{ */
 loadpage(show+'.php'); 
 function loadpage(page) {
  $(".content").load("./admin/" + page);
 }   
/* } */



   
/*  loadpage('title.php'); */

/*   function loadpage(page) {  */
    /*  $.get("./results/"+page,function(res){
        console.log(res)
      $(".content").html(res)  
      }) */
/*   $(".content").load("./admin/" + page + ' .'+sel); */
// $(".content").load("./admin/" + page); //最簡潔的模式，就這一行~
 
/*   } */
console.log(show);
console.log(type);
console.log(p);
/* alert(show); */
/*   $.get("./admin/gallery.php", p, function(res){
    $(".content").html(res);
  }); */

 //第一欄選單亮起
  $('#'+show).removeClass("menu a").addClass("menushow");
  $('#'+show).siblings().removeClass("menushow");
   
   $(".menu a").on("click", function () {
    let idx = $(this).index();
    $(".menu a").eq(idx).removeClass("menu a").addClass("menushow");
    $(".menu a").eq(idx).siblings().removeClass("menushow").addClass("menu a");
  
/*     loadpage(show+'.php'); 
    function loadpage(page) {
      $(".content").load("./admin/" + page);
    }  */ 
})




</script>