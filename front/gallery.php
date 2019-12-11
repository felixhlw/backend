<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="gallery";

 if(!empty($_GET['type'])){
    $type=$_GET['type'];
 }else{
    $type="video";
 }
/*  echo $type; */
 ?>
<h3> 作品集 / Gallery</h3>
<div class="col-12 bttn" >
  <li>
    <a href="?do=gallery&type=video" class="bttnshow" id="video">動畫及影片</a>
  </li>
  <li>
    <a href="?do=gallery&type=cartoon" id="cartoon">參與製作之卡通</a>
  </li>
  <li>
    <a href="?do=gallery&type=art" id="art">美術及平面設計</a>
  </li>
  <li>
    <a href="?do=gallery&type=cording" id="cording">網站及程式設計</a>
  </li>
</div>


<div class="show my-3 pr-3">
  <!-- <p class="t cent botli">作品集<?=$type;?></p> -->
 
        <?php
        
        // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
        $sum=nums($useTable,['type'=>$type]);
        // 決定每個頁面的筆數
        $div=5;
        // 計算總頁數(無條件進位法)
        $pages=ceil($sum/$div);
        // 採用網址參數的方式來取得當前頁，預設為第一頁
        $p=(!empty($_GET['p']))?$_GET['p']:1;
        // 計算資料的開始筆數((當前頁-1)*每頁筆數)
        $start=($p-1)*$div;
        // 下SQL查詢語法(LIMIT start,amount) 及 取出分頁資料
        $rows=all($useTable,['type'=>$type]," LIMIT $start,$div");

        //取出資料表的所有資料
/*         $rows=all($useTable,['type'=>$type]);  */

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
          <div class="row video">
              <div class="col-12 col-md-6 my-1">
                  <img src="./img/<?=$r['file'];?>" class="w-100 h-100 object-fit">
              </div>
              <div class="col-12 col-md-6 my-3 text-white align-self-center">
                  <h6> <?=$r['title'];?> </h6>
                  <p style="font-size: 14px">
                    <?=$r['text'];?>
                  </p>
                  <p>
                    <?=$r['link'];?>
                  </p>
              </div>
          </div>  

        <?php
        }
 
          if(($p-1)>0){

          echo "<p class='col-12'><a href='index.php?do=$useTable&type=$type&p=".($p-1)."' style='text-decoration:none'> < </a>";
          }
         for($i=1;$i<=$pages;$i++){
          $fontSize=($i==$p)?"24px":"16px";
          echo "<a href='index.php?do=$useTable&type=$type&p=$i' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
          }
        if(($p+1)<=$pages){
          echo "<a href='index.php?do=$useTable&type=$type&p=".($p+1)."' style='text-decoration:none'> > </a></p>";          
        }
    ?>

</div>


<script>
        /* $(function(){ */
          var type = "#<?php echo $type ?>";
          /* console.log(type); */
/*           $(".frame type").on("load", function(){
          $(".frame type").show();
          $(".frame type").siblings().hide(); */
/*           $(type).siblings().css("background", "red");
          $(type).css("background", "rgb(167, 241, 157)"); */
          /* $("#"+type).removeClass("bttn").addClass("bttnshow");   
               */
    /* alert(show);  */
    console.log(type);
    $(type).parent("li").siblings().find("a").removeClass("bttnshow"); 
    $(type).addClass("bttnshow");
/*    $(show).on("click",function(){
        $(this).addClass("menushow"); */
          /* $("#content div").eq(0).siblings().hide(); */
          /* $("#content div").eq(0).show(); */
//$(".bttn a").on("click", function(){
            /* console.log($(this).index()); */
//            $(this).css("background", "rgb(167, 241, 157)");
//            $(this).siblings().css("background", "lightgray");
            /*                 self=$(this).index();
            $(".frame").hide();
            $(".frame").eq(self).show(); */
 //         })
                
//    $(window).on('load', function () {
//    })   
     /* }) */
 </script>