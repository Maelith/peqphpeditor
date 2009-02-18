<?php

require_once("config.php");
require_once("lib/logging.php");
require_once("classes/mysql.php");
require_once("classes/template.php");
require_once("classes/session.php");
require_once("lib/common.php");
require_once("lib/data.php");
require_once("lib/zones.php");

$editor = (isset($_GET['editor']) ? $_GET['editor'] : '');
$action = (isset($_GET['action']) ? $_GET['action'] : 0);
$npcid = (isset($_GET['npcid']) ? $_GET['npcid'] : null);
$z = (isset($_GET['z']) ? $_GET['z'] : '');
$fid = (isset($_GET['fid']) ? $_GET['fid'] : '');
$ts = (isset($_GET['ts']) ? $_GET['ts'] : '');
$rec = (isset($_GET['rec']) ? intval($_GET['rec']) : '0');
$spellset = (isset($_GET['spellset']) ? $_GET['spellset'] : '');
$searchbar = '';
$body = '';
$javascript = '';
$breadcrumbs = '';

require_once('lib/headbars.php');
require_once('lib/breadcrumbs.php');

if (isset($_GET['admin'])) {
  if (session::is_admin()) {
    require_once('lib/admin.php');
  }
}

switch ($editor) {
  case '':
    $body = new Template("templates/intro.tmpl.php");
    break;
  case 'loot':
    require_once('lib/loot.php');
    break;
  case 'npc':
    require_once('lib/npc.php');
    break;
  case 'spawn':
    require_once('lib/spawn.php');
    break;
  case 'merchant':
    require_once('lib/merchant.php');
    break;
  case 'faction':
    require_once('lib/faction.php');
    break;
  case 'spellset':
    require_once('lib/spellset.php');
    break;
  case 'tradeskill':
    require_once('lib/tradeskill.php');
    break;
  case 'zone':
    require_once('lib/zone.php');
    break;
  case 'misc':
    require_once('lib/misc.php');
    break;
}

$tmpl->set('javascript', $javascript);
$tmpl->set('headbar', $headbar);
$tmpl->set('searchbar', $searchbar);
$tmpl->set('breadcrumbs', $breadcrumbs);
$tmpl->set('body', $body);

echo $tmpl->fetch('templates/index.tmpl.php');

?>