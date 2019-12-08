<?php
include_once "../base.php";
?>.
<div class="frame">
  <p class="t cent botli">頁尾版權資料管理</p>
  <form method="post" action="./api/bottom.php">
    <table width="100%" style="margin:auto">
      <tbody>
        <tr class="yel" style="align:center;">
          <td  style="width:40%;text-align:right;">頁尾版權資料：</td>
          <td style="width:60%;text-align:left;">
            <input type="text" name="bottom" id="bottom" value="<?=find("bottom",1)['bottom'];?>" style="width:70%;">
          </td>
        </tr>
      </tbody>
    </table>
    <table style="margin-top:40px;margin:auto; width:50%;">
      <tbody>
        <tr>
          <td class="cent">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
          </td>
        </tr>
      </tbody>
    </table>

  </form>
</div>