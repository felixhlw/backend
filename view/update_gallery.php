<?php
include_once "../base.php";
if (!empty($_GET['type'])){
    $type=$_GET['type'];
/*     $useTable=$_GET['useTable']; */
    $table=$_GET['useTable'];
    $id=$_GET['id'];
    $p=$_GET['p'];
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
            <input type="hidden" name="table" value="<?=$_GET['useTable'];?>">
            <input type="hidden" name="type" value="<?=$_GET['type'];?>">
            <input type="reset" value="重置">
            <input type="submit" value="更新">
        </td>
      
    </tr>
</table>
</form>
<?php
if(!empty($_GET['type']) && $_GET['type']=='video'){
    $embed=find($table,['id'=>$id]);
    
        
?>
<hr>
<br>
<!-- <h3 class="cent">更新<?=$id.$type;?>播放連結</h3> -->
<h3 class="cent">更新<?=$type;?>播放連結</h3>
<form action="./api/edit.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;margin-top:10px">
<table class="just3">
    <tr >
        <td  style="height: 60px;padding-top:0px">
                <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
                <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                <input type="hidden" name="table" value="<?=$_GET['useTable'];?>">
                <input type="hidden" name="type" value="<?=$_GET['type'];?>">
                <input type="hidden" name="p" value="<?=$p;?>">
                <textarea name="embed" id="embed" cols="30" rows="10" style="width: 100%;text-align:left"><?=$embed['embed'];?></textarea>
                <!--這裹使用素材提供的op函式來載入新增資料需要的表單檔案，
                同時利用get機制帶入相關的資料表名稱等資訊-->
            </td>
        </tr>
        <tr>    
            <td style="padding-left:0px">
                    <input type="reset" value="重置">
                    <input type="submit" value="修改確定">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>