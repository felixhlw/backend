<?php
include_once "../base.php";
?>

<div class="frame">
  <p class="t cent botli">進站總人數管理</p>
  <form method="post" action="./api/total.php">
    <table width="100%" style="margin:auto">
      <tbody>
      <tr class="yel" style="align:center;">
          <td  style="width:40%;text-align:right;">進站總人數：</td>
          <td style="width:60%;text-align:left;">
            <input type="text" name="total" id="total" value="<?=find("total",1)['total'];?>">
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