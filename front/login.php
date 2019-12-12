
  




<div class="box text-center">
    <div class="inside mb-5 mr-3">
      <h4 >管理員登入區</h4>
      <hr>
      <form method="post" action="./api/login.php" enctype="multipart/  form-data" >
        <table  class="just3 ">
            <tr >
                <td >帳 號 ： </td>
                <td><input name="acc" autofocus="" type="text"></td>
            </tr>
            <tr >
                <td >密 碼 ： </td>
                <td><input name="pw" type="password"></td>
            </tr>
            
            <tr >
                <td colspan="2">
                    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
                    <input type="reset" value="清除">
                    <input type="submit" value="送出">
                </td>
            </tr>
        </table>
      </form>
    </div>
</div>