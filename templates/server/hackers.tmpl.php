        <div class="table_container" style="width: 650px;">
          <div class="table_header">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td>Hackers</td>
                <td align="right">&nbsp;</td>
              </tr>
            </table>
          </div>
          <table class="table_content2" width="100%">
<?if (isset($hackers)) :?>
            <tr>
              <td align="center" width="5%"><strong>ID</strong></td>
              <td align="center" width="5%"><strong>Account</strong></td>
              <td align="center" width="5%"><strong>Name</strong></td>
              <td align="center" width="5%"><strong>Zone</strong></td>
              <td align="center" width="15%"><strong>Date</strong></td>
              <td width="5%">&nbsp;</td>
            </tr>
<?$x=0; foreach($hackers as $hackers=>$v):?>
            <tr bgcolor="#<? echo ($x % 2 == 0) ? "AAAAAA" : "BBBBBB";?>">
              <td align="center" width="5%"><?=$v['hid']?></td>
              <td align="center" width="5%"><?=$v['account']?></td>
              <td align="center" width="5%"><?=$v['name']?></td>
              <td align="center" width="5%"><?=$v['zone']?></td>
              <td align="center" width="15%"><?=$v['date']?></td>
              <td align="right"><a href="index.php?editor=server&hid=<?=$v['hid']?>&action=8"><img src="images/edit2.gif" border="0" title="View Hacker"></a>&nbsp;<a onClick="return confirm('Really Delete Entry <?=$v['hid']?>?');" href="index.php?editor=server&hid=<?=$v['hid']?>&action=7"><img src="images/remove3.gif" border="0" title="Delete this entry"></a></td>
            </tr>
<?$x++; endforeach;?>
<?endif;?>
<?if (!isset($hackers)):?>
            <tr>
              <td align="left" width="100" style="padding: 10px;">No hackers</td>
            </tr>
<?endif;?>
          </table>
        </div>