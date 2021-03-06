<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="info";

?>
<div class="frame">
  <p class="t cent botli">個人資料管理</p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="20%">相片</td>
          <td width="52%">簡歷</td>

          <td width="7%">顯示</td>
          <td width="7%">刪除</td>
          <td></td>
        </tr>
        <?php
        //取出資料表的所有資料
        $rows=all($useTable);

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <tr class="cent" >
          <td >
            <img src="./img/<?=$r['file'];?>" style="width:150px;height:auto">
          </td>
          <td>

            <span class="just">
            <table >
            <tr >
              <td>姓&nbsp;&emsp;&nbsp;&emsp;&nbsp;名:</td>
              <td style="width:300px">
                <input type="text" name="name[]" value="<?=$r['name'];?>" style="width:280px">
              </td>
            </tr>
            <tr>
            <td>生&nbsp;&emsp;&nbsp;&emsp;&nbsp;日:</td>
              <td>
              <input type="date" name="birthday[]" value="<?=$r['birthday'];?>" style="width:280px">
              </td>
            </tr>
          <tr>
            <td>電&nbsp;&emsp;&nbsp;&emsp;&nbsp;話:</td>
              <td>
              <input type="text" name="tel[]" value="<?=$r['tel'];?>" style="width:280px">                
              </td>
            </tr>
            <tr>
            <td>地&nbsp;&emsp;&nbsp;&emsp;&nbsp;址:</td>
              <td>
              <input type="text" name="addr[]" value="<?=$r['addr'];?>" style="width:280px">
              </td>
            </tr>
            <tr>
            <td>電 子 郵 件:</td>
              <td>
              <input type="text" name="email[]" value="<?=$r['email'];?>" style="width:280px">
              </td>
            </tr> 
            <tr>
            <td>簡&nbsp;&emsp;&nbsp;&emsp;&nbsp;介:</td>
              <td>
              <textarea name="intro[]" id="intro" cols="30" rows="10" style="width:280px"><?=$r['intro'];?></textarea>
              
              </td>
            </tr>
            </table>
        </span>
          </td>
          <td>
            <!--radio是單選的機制，因此name的屬性不需使用陣列的型式-->
            <input type="radio" name="sh" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>>
          </td>
          <td>
            <input type="checkbox" name="del[]" value="<?=$r['id'];?>">
          </td>
          <td>
            
            <!--這裹使用素材提供的op()函式來載入更新圖片需要的表單檔案，
                同時利用get機制帶入相關的資料id及資料表名稱等資訊-->
            <input type="button" value="更新圖片" onclick="op('#cover','#cvr','./view/update_<?=$useTable;?>.php?id=<?=$r['id'];?>&table=<?=$useTable;?>')" >

            <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
            <input type="hidden" name="id[]" value="<?=$r['id'];?>">
          </td>
        </tr>
        <tr><td colspan="5">
          <hr>

        </td></tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <table style="margin-top:0px; width:96%;">
      <tbody>
        <tr>
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">

          <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
              同時利用get機制帶入相關的資料表名稱等資訊-->
          <td width="200px">
            <input type="button"      
                   onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                   value="新增履歷相片">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>