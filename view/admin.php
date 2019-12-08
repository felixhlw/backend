<h3 class="cent">新增管理者帳號</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;margin-top:40px">
<table class="just3">
    <tr>
        <td style="width:30%">帳&nbsp;&emsp;&nbsp;&emsp;&nbsp;號：</td>
        <td><input type="text" name="acc" style="width: 99%"></td>
    </tr>
    <tr>
        <td>密&nbsp;&emsp;&nbsp;&emsp;&nbsp;碼：</td>
        <td><input type="password" name="pw" style="width: 99%"></td>
    </tr>
    <tr>
        <td>確 認 密 碼：</td>
        <td><input type="password" name="pw2" style="width: 99%"></td>
    </tr>
    <tr style="height:70px; padding-top:20px">
        <td colspan="2" >
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="reset" value="重置">
            <input type="submit" value="新增">
        </td>
    </tr>
</table>
</form>