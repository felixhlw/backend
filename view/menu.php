<h3 class="cent">新增選單</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;margin-top:40px">
<table class="just3">
    <tr>
        <td style="width:30%"> 主 選 單 名 稱： </td>
        <td><input type="text" name="text" style="width: 99%"></td>
    </tr>
    <tr>
        <td> 連 結 網 址 ： </td>
        <td><input type="text" name="href" style="width: 99%"></td>
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