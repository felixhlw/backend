<?php
include_once "./base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="cond";

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="./tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  tinymce.init({
    selector:'textarea',
    branding: false,
    language: "zh_TW",
    plugins : "code advlist autolink link image media hr table lists insertdatetime toc image imagetools charmap emoticons media print preview iconfonts",
    forced_root_block : 'div',
    iconfonts_selector: '.fa, .fab, .fal, .far, .fas, .glyphicon', // optional (default shown)

    // To load the plugin from the tinymce/plugins directory...
    

    // ...or to load the plugin from a CDN or other external URL
/*     external_plugins: {
      'iconfonts': './tinymce/js/tinymce/plugins/iconfonts/plugin.js'
    } */
    /* toolbar: "code", "styleselect" */
   
 /*    menubar: "file edit insert view format table tools help" */
    });
  </script>
</head>
<div class="frame">
  <p class="t cent botli">求職條件管理</p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="80%">求職條件內容</td>
          <td width="10%">顯示</td>
          <td width="10%">刪除</td>
        </tr>
        <?php
        //取出資料表的所有資料
        $rows=all($useTable);

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <tr class="cent">
          <td>
            <textarea name="text[]" style="width:90%;height:60px"><?=$r['text'];?></textarea>
          </td>
          <td>
            <!--checkbox是多選的機制，因此name的屬性需要使用陣列的型式-->
            <input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>>
          </td>
          <td>
            <input type="checkbox" name="del[]" value="<?=$r['id'];?>">
          </td>
          <td>
            <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
            <input type="hidden" name="id[]" value="<?=$r['id'];?>">
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <table style="margin-top:0px; width:73%; margin-left:0px">
      <tbody>
      <tr class="just3">
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">

          <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
              同時利用get機制帶入相關的資料表名稱等資訊-->
          <td >
            <input type="button"      
                   onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                   value="新增求職條件資料">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>