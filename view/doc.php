<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="./tinymce/js/tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
    selector:'textarea',
    branding: false,
    language: "zh_TW",
    plugins : "code advlist autolink link image media hr table lists insertdatetime toc image imagetools charmap emoticons media print preview",
    });
  </script>
</head>
<body>
    


<h3 class="cent">新增自傳資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:80%;margin:auto">
<table class="just3">
    <tr>
        <td>&nbsp; </td>
    </tr>
    <tr>
        <td><textarea name="text" id="editor1" style="width:100%;height:500px"></textarea></td>

    </tr>
    <tr class="cent">
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="reset" value="重置">
            <input type="submit" value="新增">
        </td>
    </tr>
</table>
</form>
</body>
</html>
