

<h3 class="cent" style="margin-top: -10px">新增專案資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:90%;margin:auto;margin-top:40px">
<table  class="just3 cent">
    <tr >
        <td >專 案 資 料 ：</td>
        <td><textarea name="text" id="text" style="width:400px;height:200px"></textarea></td>
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
