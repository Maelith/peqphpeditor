  <div class="edit_form" style="width: 600px">
    <div class="edit_form_header">
      Edit Temp Merchant List for NPC: <?=$npcid?>
    </div>
    <div class="edit_form_content">
      <form name="merchantlist" method="post" action="index.php?editor=merchant&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=10">
        <table width="100%">
          <tr>
            <th>Old<br/>Slot</th>
            <th>New<br/>Slot</th>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Charges</th>
            <th>Fact<br/>Req</th>
            <th>Lvl<br/>Req</th>
            <th>Alt<br/>Curr</th>
          </tr>
<?$x=1; foreach ($slots as $slot => $v):?>
          <tr>
            <td align="center"><?=$slot?></td>
            <td align="center"><input type="text" size="3" name="newslot<?=$x?>" value="<?=$slot?>"/></td>
            <td align="center"><input type="text" size="7" name="itemid<?=$x?>" value="<?=$v['itemid']?>"/></td>
            <td><?=$v['item_name']?></td>
            <td align="center"><input type="text" size="3" name="charges<?=$x?>" value="<?=$v['charges']?>"/></td>
            <td align="center"><input type="text" size="3" name="faction_required<?=$x?>" value="<?=$v['faction_required']?>"/></td>
            <td align="center"><input type="text" size="3" name="level_required<?=$x?>" value="<?=$v['level_required']?>"/></td>
            <td align="center"><input type="text" size="3" name="alt_currency_cost<?=$x?>" value="<?=$v['alt_currency_cost']?>"/></td>
            <input type="hidden" name="slot<?=$x?>" value="<?=$slot?>">
          </tr>
<?$x++; endforeach?>
        </table><br/><br/>
        <center>
          <input type="hidden" name="count" value="<?=($x - 1)?>">
          <input type="submit" value="Submit Changes">
        </center>
      </form>
    </div>
  </div>
