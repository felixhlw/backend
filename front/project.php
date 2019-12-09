<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="project";


                // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
                $sum=nums($useTable);
                // 決定每個頁面的筆數
                $div=5;
                // 計算總頁數(無條件進位法)
                $pages=ceil($sum/$div);
                // 採用網址參數的方式來取得當前頁，預設為第一頁
                $p=(!empty($_GET['p']))?$_GET['p']:1;
                // 計算資料的開始筆數((當前頁-1)*每頁筆數)
                $start=($p-1)*$div;
                // 下SQL查詢語法(LIMIT start,amount) 及 取出分頁資料
                $rows=all($useTable,[]," LIMIT $start,$div");
        //取出資料表的所有資料
        /* $rows=all($useTable); */

        //以迴圈的方式逐筆列出資料
        ?>
<div>
<?php
        foreach($rows as $r){
        ?>
        <div>

          <?=$r['text'];?>
        </div>

        <?php
        }
    
          if(($p-1)>0){
          echo "<a href='index.php?do=$useTable&p=".($p-1)."' style='text-decoration:none'> < </a>";
          }
         for($i=1;$i<=$pages;$i++){
          $fontSize=($i==$p)?"24px":"16px";
          echo "<a href='index.php?do=$useTable&p=$i' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
          }
        if(($p+1)<=$pages){
          echo "<a href='index.php?do=$useTable&p=".($p+1)."' style='text-decoration:none'> > </a>";          
        }
    ?>
   
</div>