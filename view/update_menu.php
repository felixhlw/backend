<?php
include_once "../base.php";
$rows=all("menu",["parent"=>$_GET['id']]);
?>
<h3 class="cent">編輯次選單</h3>
<hr>
<form action="./api/sub_menu.php" method="post" enctype="multipart/form-data" style="width:90%;margin:auto;margin-top:40px">
<table style="margin: auto; width: 700px" >
    <tr >
        <td style="width:30%">主選單名稱：</td>
        <td style="width:50%">連結網址：</td>
        <td style="width:20%;text-align:center">刪除</td>
        
    </tr>
    <?php

    foreach ($rows as $key => $r) {
        ?>
    <tr>
        <td><input type="text" name="text[]" value="<?=$r['text'];?>" style="width:90%;"></td>
        <td><input type="text" name="href[]" value="<?=$r['href'];?>" style="width:100%;"></td>
        <td style="width: 150px"><input type="checkbox" name="del[]" value="<?=$r['id'];?>" style="width: 100%"></td>
        <input type="hidden" name="id[]" value="<?=$r['id'];?>" >
    </tr>
 <?php   
}
?>




    <tr class="cent" id="flag">
        <td colspan=2 style="width:70%" class="just4">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="hidden" name="parent" value="<?=$_GET['id'];?>">
            <input type="submit" value="確認編輯">
            <input type="reset" value="重置">
            <input type="button" value="更多次選單" onclick="moreSub()">
        </td>
        <td style="width:30%"></td>
    </tr>
</table>
</form>

<script>
function moreSub(){
    let tr=`<tr>
                <td><input type="text" name="text2[]" value=""></td>
                <td><input type="text" name="href2[]" value=""></td>
                <td></td>
            </tr>`
        $("#flag").before(tr);

}

</script>