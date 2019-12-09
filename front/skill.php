<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="skill";
?>
<div>
        <?php
        //取出資料表的所有資料
        $rows=all($useTable,['sh'=>'1']);

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <div style="display:inline-block">
        <?=$r['text'];?>
        </div>
        <?php
        }
        ?>

</div>