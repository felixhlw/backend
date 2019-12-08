<h3 class="cent">新增個人圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;margin-top:40px">
<table class="just3">
    <span class="just2 cent">
    <tr>
        <td style="width: 30%">履 歷 相 片:</td>
        <td><input type="file" name="file" id="file" style="width: 99%"></td>
    </tr>
    <tr>

          <td>

           
            <tr>
              <td>姓&nbsp;&emsp;&nbsp;&emsp;&nbsp;名:</td>
              <td><input type="text" name="name[]" value="" style="width: 99%"></td>
            </tr>
            <tr>
              <td>生&nbsp;&emsp;&nbsp;&emsp;&nbsp;日:</td>
              <td><input type="date" name="birthday[]" value="" style="width: 99%"></td>
            </tr>
            <tr>
              <td>電&nbsp;&emsp;&nbsp;&emsp;&nbsp;話:</td>
              <td><input type="text" name="tel[]" value="" style="width: 99%"></td>
            </tr>
            <tr>
              <td>地&nbsp;&emsp;&nbsp;&emsp;&nbsp;址:</td>
              <td><input type="text" name="addr[]" value="" style="width: 99%"></td>
            </tr>
            <tr>
              <td>電 子 郵 件:</td>
              <td><input type="text" name="email[]" value="" style="width: 99%"></td>
            </tr> 
            <tr>
              <td>簡&nbsp;&emsp;&nbsp;&emsp;&nbsp;介:</td>
              <td><textarea name="intro[]" id="intro" cols="30" rows="10" style="width: 99%"></textarea>
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