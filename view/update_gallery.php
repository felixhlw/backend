<?php
include_once "../base.php";
if (!empty($_GET['type'])){
    $type=$_GET['type'];
}

?>


<h3 class="cent">更新作品<?=$type;?>圖片</h3>
<hr>
<form action="./api/update_img.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;margin-top:40px">
<table class="just3">
    <tr>
    <td style="width:40%">作品<?=$type;?>圖片：</td>
        <td><input type="file" name="file" id="file" style="width:100%"></td>
    </tr>
    <tr>
        <td colspan="2" style="height: 60px;padding-top:20px">
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="hidden" name="type" value="<?=$_GET['type'];?>">
            <input type="reset" value="重置">
            <input type="submit" value="更新">
        </td>
      
    </tr>
</table>
</form>