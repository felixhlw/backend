<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="cond";

 $rows=all($useTable,['sh'=>'1']);

 //以迴圈的方式逐筆列出資料
?>
<div>
 <h3 style="font-weight: 600; color:#888">求職條件 / Job & Position</h3>
<div class="column py-3">
<?php
 foreach($rows as $r){
 ?>
    <div class="row  no-gutters">
        <div class="mt-4 mr-0 pr-1">
        <i class="fas fa-edit"></i>
        </div>
        <div class="mt-4 align-self-start">
          <?=$r['text'];?>
        </div>
    </div>
 <?php
 }
 ?>
 </div>

<?php        