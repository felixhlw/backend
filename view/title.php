
<h3 class="cent">新增標題區圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:80%;margin:auto;margin-top:40px">
<table class="just3 ">
    <tr>
        <td>圖 片 ( 頭 像 )：</td>
        <td><input type="file" name="file" id="file"></td>
    </tr>
    <tr>
        <td>標 題：</td>
        <td ><input type="title" name="text" id="text" style="width:99%"></td>
    </tr>
    <tr>
        <td>說 明：</td>
        <td>
                <textarea name="text" id="text" cols="70" rows="5" style="width:99%"></textarea>
        </td>

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