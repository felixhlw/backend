<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="info";


        //取出資料表的資料
        $r=find($useTable,['sh'=>'1']);

        ?> 
 <div class="row mr-2">
    <div class="col-12 col-md-5 order-1" style="height:280px;overflow:hidden">

      <img src="./img/<?=$r['file'];?>" class="w-100 h-100 object-fit" style="height:280px;border-radius:15px;">
    </div>
  

  <div class="col-12 col-md-7">
  <h3 style="font-weight: 600; color:#888">

      <?=$r['name'];?>
    </h3>

    <div>
      <?=$r['intro'];?>
    </div>
    <div>
      <!-- <?=$r['birthday'];?> -->

      <?=$r['tel'];?>            

      <?=$r['addr'];?>

      <?=$r['email'];?>

    </div>  
  </div>  
  </div>  


<?php
  $useTable="skill";
?>
<div>
        <?php
        //取出資料表的所有資料
        $rows=all($useTable,['sh'=>'1']);
        ?>
        <div>
                <h5 class="mt-5" style="font-weight: 600; color:#888">技能 / My Sill</h5>
                  <div class="row ">
            <?php
        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>

        <div class="col-4 mt-1 py-0">
        <?=$r['text'];?>
        </div>
        
        <?php
        }
        ?>

</div>
