<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="title";

?>
<div class="frame">
  <p class="t cent botli">選單標題區管理</p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="10%">頭像圖片</td>
          <td width="30%">標題</td>
          <td width="40%">簡介</td>
          <td width="10%">顯示</td>
          <td width="10%">刪除</td>
          <td></td>
        </tr>
        <?php
        //取出資料表的所有資料
        $rows=all($useTable);

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <tr class="cent">
          <td>
            <img src="./img/<?=$r['file'];?>" style="width:auto;height:90px">
          </td>
          <td>
            <!-- <input type="title" name="title[]" value="<?=$r['title'];?>" style="width:90%;"> -->
            <textarea name="title[]" id="title" cols="30" rows="10" style="width:90%;height:100px"><?=$r['title'];?></textarea>
          </td>
          <td >
            <textarea name="text[]" id="text" cols="30" rows="10" style="width:100%;height:100px"><?=$r['text'];?></textarea>
            <!-- <input type="text" name="text[]" value=""> -->
          </td>
          <td>
            <!--radio是單選的機制，因此name的屬性不需使用陣列的型式-->
          <label class='hasborder-c'><input type="radio" name="sh" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>></label>
          </td>
          <td>
          <label class='hasborder-s'><input type="checkbox" name="del[]" value="<?=$r['id'];?>">
          </td>
          <td>
            <!--這裹使用素材提供的op()函式來載入更新圖片需要的表單檔案，
                同時利用get機制帶入相關的資料id及資料表名稱等資訊-->
            <input type="button" value="更新圖片" onclick="op('#cover','#cvr','./view/update_<?=$useTable;?>.php?id=<?=$r['id'];?>&table=<?=$useTable;?>')" ></label>

            <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
         <input type="hidden" name="id[]" value="<?=$r['id'];?>">

            <!-- <label class='hasborder'><input type='checkbox' /></label> -->
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <table style="margin-top:40px; width:79%;">      <tbody>
        <tr>
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">

          <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
              同時利用get機制帶入相關的資料表名稱等資訊-->
          <td>
            <input type="button"      
                   onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                   value="新增選單區頭像標題圖片">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>