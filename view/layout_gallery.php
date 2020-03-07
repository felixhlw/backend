
<?php
include_once "../base.php";
if (!empty($_GET['type'])){
    $type=$_GET['type'];
/*     $useTable=$_GET['useTable']; */
    $table=$_GET['useTable'];
    $id=$_GET['id'];
    $p=$_GET['p'];
    $layout=find($table,['id'=>$id]);
}

?>
<h3 class="cent" style="margin-top: -10px">選擇圖片顯示之版型</h3>
<hr>
<form action="./api/edit.php" method="post" enctype="multipart/form-data" style="width:90%;margin:auto;margin-top:40px">
<table  class="just3 cent">
    <tr >
        <td >橫幅寬版 ：</td>
        <td></td>
        <td><input type="radio" name="layout" id="layout" style="width:15px;height:15px" value="1" <?=($layout['layout']==0||$layout['layout']==1)?"checked":"";?>> </td>
    </tr>
    <tr >
        <td >直式版型 ：</td>
        <td></td>
        <td><input type="radio" name="layout" id="layout" style="width:15px;height:15px" value="2" <?=($layout['layout']==2)?"checked":"";?> > </td>
    </tr>
    <tr >
        <td >測試版型 ：</td>
        <td></td>
        <td><input type="radio" name="layout" id="layout" style="width:15px;height:15px" value="3" <?=($layout['layout']==3)?"checked":"";?> > </td>
    </tr>
    <tr >
        <td colspan="2">
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <input type="hidden" name="table" value="<?=$_GET['useTable'];?>">
            <input type="hidden" name="type" value="<?=$_GET['type'];?>">
            <input type="hidden" name="p" value="<?=$p;?>">
            <input type="reset" value="重置">
            <input type="submit" value="送出">
        </td>
    </tr>
</table>
</form>