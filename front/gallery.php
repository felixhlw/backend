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
<h3 style="font-weight: 600; color:#888"> 作品集 / Gallery</h3>
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


<div class="show mt-3">
  <!-- <p class="t cent botli">作品集<?=$type;?></p> -->
 
        <?php
        
        // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
        $sum=nums($useTable,['type'=>$type]);
        // 決定每個頁面的筆數
        $div=3;
        // 計算總頁數(無條件進位法)
        $pages=ceil($sum/$div);
        // 採用網址參數的方式來取得當前頁，預設為第一頁
        $p=(!empty($_GET['p']))?$_GET['p']:1;
        // 計算資料的開始筆數((當前頁-1)*每頁筆數)
        $start=($p-1)*$div;
        // 下SQL查詢語法(LIMIT start,amount) 及 取出分頁資料
        $rows=all($useTable,['type'=>$type]," LIMIT $start,$div");
/*         $test=print_r($rows[0][4]); */
        //echo $test;

        //取出資料表的所有資料
/*         $rows=all($useTable,['type'=>$type]);  */

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){

        ?>
          <!-- layout1 (橫幅寬版) begin -->
          <div class="row video fadeInUp wow px-0 my-2 mx-0" style="padding:0px 1px;border-radius:8px;background:rgb(170, 170, 170);overflow:hidden">
              <!-- 圖片區 -->   
              <?php
              if($r['type']=='video' && !empty($r['embed'])){
              ?>  
                <div class="col-12 col-md-5  p-0 vshow"  onclick="fp('#cover','#cvr','<?=$r['embed'];?>')" >
                
              <?php
              }else{
              ?>  

                <div class="col-12 col-md-5  p-0 gshow"  onclick="fp('#cover2','#cvr2','<img src=./img/<?=$r['file'];?> class=gshow align-self-center>')" >

              <?php
              } 
              ?>  
                  <img src="./img/<?=$r['file'];?>" class="w-100 h-100 object-fit"><!-- </a> -->
              </div>
              <!-- 文字區 -->
              <div class="col-12 col-md-7 mt-3 text-white align-self-center">
                  <!-- 標題 -->
                  <h6> <?=$r['title'];?> </h6>
                  <!-- 內文 -->
                  <p style="font-size: 14px">
                    <?=$r['text'];?>
                  </p>
                  <!-- 連結 -->
                  <p>
                    <a href="<?=$r['link'];?>"><i class="fas" style="color: rgb(255, 255, 255);"></i> 相關網站連結 </a> 
                  </p>
              </div>
          </div>   <!-- layout1 (橫幅寬版) end -->

        <?php
        }
          echo "<div class='container-fluid ' id='footer'>";
          echo "<div class='row justify-content-center align-items-center'>";
          if(($p-1)>0){
          echo "<a href='index.php?do=$useTable&type=$type&p=".($p-1)."' style='text-decoration:none;color:#888' class='mx-2'><i class='fas fa-caret-left'></i></a>";
          }
         for($i=1;$i<=$pages;$i++){
          $fontSize=($i==$p)?"24px":"16px";
          echo "<a href='index.php?do=$useTable&type=$type&p=$i' style='font-size:$fontSize;text-decoration:none;font-weight:600;color:#888' class='mx-2'> ".$i." </a>";
          }
        if(($p+1)<=$pages){
          echo "<a href='index.php?do=$useTable&type=$type&p=".($p+1)."' style='text-decoration:none;color:#888' class='mx-2'><i class='fas fa-caret-right'></i></a>";          
        }
        echo "</div>";
        echo "</div>";
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
    $(type).on("click", function(){
      $(".video").addClass("fadeOut wow");
            /* console.log($(this).index()); */
//            $(this).css("background", "rgb(167, 241, 157)");
//            $(this).siblings().css("background", "lightgray");
            /*                 self=$(this).index();
            $(".frame").hide();
            $(".frame").eq(self).show(); */
    })
                
//    $(window).on('load', function () {
//    })   
     /* }) */
 </script>