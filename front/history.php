<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="history";


                 // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
                 $sum=nums($useTable);
                 // 決定每個頁面的筆數
                 $div=4;
                 // 計算總頁數(無條件進位法)
                 $pages=ceil($sum/$div);
                 // 採用網址參數的方式來取得當前頁，預設為第一頁
                 $p=(!empty($_GET['p']))?$_GET['p']:1;
                 // 計算資料的開始筆數((當前頁-1)*每頁筆數)
                 $start=($p-1)*$div;
                 // 下SQL查詢語法(LIMIT start,amount) 及 取出分頁資料
                 /* $rows=all($useTable,['sh'=>'1']," LIMIT $start,$div ORDER BY `rank`"); */
                 $rows=q("select * from $useTable where sh=1 ORDER BY rank LIMIT $start,$div");
         //取出資料表的所有資料
         /* $rows=all($useTable); */
 
         //以迴圈的方式逐筆列出資料
         ?>
 <div>
   <h3 style="font-weight: 600; color:#888;">經歷 / Experience</h3>
   <div class="column h-100 w-100 py-3">
<?php
 foreach($rows as $r){
 ?>
    <div class="row mt-4 no-gutters">
        <div class="w-10 mr-0 pr-1">
        <i class="fas fa-briefcase"></i>
        </div>
        <div class="text-justify" style="width: 96%">
          <?=$r['text'];?>
        </div>
    </div>
 <?php
 }
 ?>
 </div>
 
 <?php        
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