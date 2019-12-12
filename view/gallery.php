<?php
$type=$_GET['type'];



?>

<h3 class="cent">新增<?=$type;?>作品圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:80%;margin:auto;margin-top:40px">
<table class="just3">
    <tr>
        <td>作 品 圖 片：</td>
        <td><input type="file" name="file" id="file" style="width:99%"></td>
    </tr>
    <tr>
        <td>標&nbsp;&emsp;&nbsp;&emsp;&nbsp;題：</td>
        <td><input type="text" name="title" id="text" style="width:99%"></td>
    </tr>
    <tr>
        <td>說&nbsp;&emsp;&nbsp;&emsp;&nbsp;明：</td>
        <td><textarea name="text" id="text" cols="250" rows="5" style="width:99%"></textarea></td>
    </tr>
    <tr>
<?php
if ($type=='video') {
?>
    <td>影 片 連 結：</td>
    <td><textarea name="embed" id="embed" cols="250" rows="5" style="width:99%"></textarea></td>
<?php
}        
?>
    </tr>
    <tr>
        <td>網 站 連 結：</td>
        <td><textarea name="link" id="link" cols="250" rows="5" style="width:99%"></textarea></td>

    </tr>
    <tr class="cent">
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="hidden" name="type" value="<?=$_GET['type'];?>">
            <input type="reset" value="重 置">
            <input type="submit" value="新 增">
        </td>
    </tr>
</table>
</form>