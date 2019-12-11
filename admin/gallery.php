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
<div id="btns" >
<a href="?do=gallery&type=video" ><input type="button" value="動畫及影片" class="btn" id="video"></a>
<a href="?do=gallery&type=cartoon" ><input type="button" value="參與製作之卡通" class="btn" id="cartoon"></a>
<a href="?do=gallery&type=art" ><input type="button" value="美術及平面設計"" class="btn" id="art"></a>
<a href="?do=gallery&type=cording" ><input type="button" value="網站及程式設計" class="btn" id="cording"></a>
</div>


<div class="frame" style="overflow:auto">
  <p class="t cent botli">作品資料管理-<?=$type;?></p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="10%">作品圖片</td>
          <td width="20%">標題</td>
          <td width="30%">簡介</td>
          <td width="20%">連結</td>
          <td width="10%">顯示</td>
          <td width="10%">刪除</td>
          <td></td>
        </tr>
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
        <tr class="cent">
          <td>
            <img src="./img/<?=$r['file'];?>" style="width:auto;height:90px">
          </td>
          <td>
            <textarea name="title[]" id="title" cols="30" rows="10" style="width:100%;height:91px"><?=$r['title'];?></textarea>
            <!-- <input type="text" name="title[]" value="<?=$r['title'];?>" style="width:90%;"> -->
          </td>
          <td >
            <textarea name="text[]" id="text" cols="30" rows="10" style="width:100%;height:91px"><?=$r['text'];?></textarea>
            <!-- <input type="text" name="text[]" value=""> -->
          </td>
          <td>
            <textarea name="link[]" id="link" cols="30" rows="10" style="width:100%;height:91px"><?=$r['link'];?></textarea>
<!--             <input type="text" name="link[]" value="<?=$r['link'];?>" style="width:95%;"> -->
          </td>
          <td>
          <!--checkbox是多選的機制，因此name的屬性需要使用陣列的型式-->
          <label class='hasborder-c'><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>></label>
          </td>
          <td>
          <label class='hasborder-s'><input type="checkbox" name="del[]" value="<?=$r['id'];?>">
          </td>
          <td>
            <!--這裹使用素材提供的op()函式來載入更新圖片需要的表單檔案，
                同時利用get機制帶入相關的資料id及資料表名稱等資訊-->
            <input type="button" value="更新圖片" onclick="op('#cover','#cvr','./view/update_<?=$useTable;?>.php?id=<?=$r['id'];?>&table=<?=$useTable;?>&type=<?=$type;?>')" ></label>

            <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
         <input type="hidden" name="id[]" value="<?=$r['id'];?>">
         <input type="hidden" name="p" value="<?=$p;?>">


            <!-- <label class='hasborder'><input type='checkbox' /></label> -->
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>


    <!--插入一個DIV用來放置分頁及頁碼-->
    <div class="cent"> 

     <?php
          if(($p-1)>0){
          echo "<a href='admin.php?do=$useTable&type=$type&p=".($p-1)."' style='text-decoration:none'> < </a>";
          }
         for($i=1;$i<=$pages;$i++){
          $fontSize=($i==$p)?"24px":"16px";
          echo "<a href='admin.php?do=$useTable&type=$type&p=$i' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
          }
        if(($p+1)<=$pages){
          echo "<a href='admin.php?do=$useTable&type=$type&p=".($p+1)."' style='text-decoration:none'> > </a>";          
        }
    ?>
   </div> 


    <table style="margin-top:0px; width:98%;">
      <tbody>
        <tr class="just3 cent">
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">
          <input type="hidden" name="type" value="<?=$type;?>">
          
          <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
          同時利用get機制帶入相關的資料表名稱等資訊-->
          <td >
            <input type="button"      
            onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>&type=<?=$type;?>')" 
            value="新增<?=$type;?>圖片">
          </td>
          <td style="padding-left:50px"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>




<script>
        /* $(function(){ */
          var type = '<?php echo $type ?>';
          /* console.log(type); */
/*           $(".frame type").on("load", function(){
          $(".frame type").show();
          $(".frame type").siblings().hide(); */
          $("#"+type).siblings().css("background", "lightgray");
          $("#"+type).css("background", "rgb(167, 241, 157)");
          

          /* $("#content div").eq(0).siblings().hide(); */
          /* $("#content div").eq(0).show(); */
          $(".btn").on("click", function(){
            /* console.log($(this).index()); */
            $(this).css("background", "rgb(167, 241, 157)");
            $(this).siblings().css("background", "lightgray");
            /*                 self=$(this).index();
            $(".frame").hide();
            $(".frame").eq(self).show(); */
          })
                
     /* }) */
 </script>