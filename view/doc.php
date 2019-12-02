<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="./tinymce/js/tinymce/tinymce.js"></script>
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
    


<h3 class="cent">新增自傳資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:80%;margin:auto">
<table>
    <tr>
        <td>&nbsp; </td>
    </tr>
    <tr>
        <td><textarea name="text" id="editor1" style="width:640px;height:500px"></textarea></td>

    </tr>
    <tr class="cent">
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
</form>
</body>
</html>
<script>
  	tinyMCE.init({
  		// 初始化參數設定[註1]
  		selector: "textarea", // 目標物件
  		auto_focus: "editor1", // 聚焦物件
          branding: false,
  		language: "zh_TW", // 語系(CDN沒有中文，需要下載原始source才有)
  		theme: "modern", // 模板風格
  		plugins : "advlist autolink link image lists charmap print preview", // 套件設定: 進階清單、自動連結、連結、上傳圖片、清單、特殊字元表、列印、預覽
  		mobile: { // 行動裝置設定
  		  	theme: "mobile", // 模板風格
  			plugins: [ "autosave", "lists", "autolink" ],  // 套件設定: 自動儲存、清單、自動連結
  			toolbar: [ "undo", "bold", "italic", "styleselect","table","link image media","mybutton" ]  // 工具列設定: 復原、粗體、斜體、樣式表
                 
  		} 
  	});
  </script>