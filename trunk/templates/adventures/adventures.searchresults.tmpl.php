      <div class="table_container" style="width:250px;">
        <div class="table_header">
          NPCs with Adventures:
        </div>
        <div class="table_content">
<?if($results != ''):?>
<?foreach($results as $result): extract($result);?>
          <a href="index.php?editor=adventures&z=<?=get_zone_by_npcid($id)?>&npcid=<?=$id?>"><?=$name?> - (<?=get_zone_by_npcid($id)?>)</a><br>
<?endforeach;?>
<?endif;?>
<?if($results == ''):?>
          No NPCs have Adventures!
<?endif;?>
        </div>
      </div>