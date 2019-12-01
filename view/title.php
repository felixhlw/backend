<h3 class="cent">新增標題區圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:80%;margin:auto">
<table >
    <tr>
        <td>標題區圖片(頭像)：</td>
        <td><input type="file" name="file" id="file"></td>
    </tr>
    <tr>
        <td>標題：</td>
        <td><input type="title" name="text" id="text"></td>
    </tr>
    <tr>
        <td>說明：</td>
        <td>
                <textarea name="text" id="text" cols="70" rows="5"></textarea>
        </td>

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