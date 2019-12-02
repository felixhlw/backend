
<?php
include_once "../base.php";
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="doc";

?>
<!DOCTYPE html>
<html lang="en">
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
    plugins : "advlist autolink link image lists charmap print preview"
    });
  </script>
</head>
<body>
  

<div class="frame">
  <p class="t cent botli">自傳資料管理</p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="80%">自傳資料內容</td>
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
            <textarea name="text[]" id="editor1" style="width:98%;height:260px"><?=$r['text'];?></textarea>




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
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">

          <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
              同時利用get機制帶入相關的資料表名稱等資訊-->
          <td width="200px">
            <input type="button"      
                   onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                   value="新增自傳資料">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>
</body>
</html>
<!-- <textarea id="editor1"></textarea> -->
  <script>
  	tinyMCE.init({
  		// 初始化參數設定[註1]
  		selector: "textarea", // 目標物件
  		auto_focus: "editor1", // 聚焦物件
  		language: "zh_TW", // 語系(CDN沒有中文，需要下載原始source才有)
      branding: false,
  		theme: "modern", // 模板風格
  		plugins : "advlist autolink link image lists charmap print preview", // 套件設定: 進階清單、自動連結、連結、上傳圖片、清單、特殊字元表、列印、預覽
  		mobile: { // 行動裝置設定
  		  	theme: "mobile", // 模板風格
  			plugins: [ "autosave", "lists", "autolink" ],  // 套件設定: 自動儲存、清單、自動連結
  			toolbar: [ "undo", "bold", "italic", "styleselect","table","link image media","mybutton" ]  // 工具列設定: 復原、粗體、斜體、樣式表
  		} 
  	});
  </script>