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
    plugins : "code advlist autolink link image media hr table lists insertdatetime toc image imagetools charmap emoticons media print preview",
    /* toolbar: "code", "styleselect" */
   
 /*    menubar: "file edit insert view format table tools help" */
    });
  </script>
</head>

<h3 class="cent" style="margin-top: -10px">新增學歷資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:90%;margin:auto;margin-top:40px">
<table  class="just3 cent">
    <tr >
        <td >學 歷 資 料 ： </td>
        <td><textarea name="text" id="text" style="height:400px"></textarea></td>
    </tr>
    <tr >
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="reset" value="重置">
            <input type="submit" value="新增">
        </td>
    </tr>
</table>
</form>
