<?php
$default_page = 1;
$default_size = 20;
$default_sort = 1;

$columns = array(
  1 => 'id',
  2 => 'name',
  3 => 'charid',
  4 => 'npcid',
  5 => 'zoneid'
);

switch ($action) {
  case 0: // View QGlobals
    check_authorization();
    $curr_page = (isset($_GET['page'])) ? $_GET['page'] : $default_page;
    $curr_size = (isset($_GET['size'])) ? $_GET['size'] : $default_size;
    $curr_sort = (isset($_GET['sort'])) ? $columns[$_GET['sort']] : $columns[$default_sort];
    if ($_GET['filter'] == 'on') {
      $filter = build_filter();
    }
    $body = new Template("templates/qglobal/qglobal.tmpl.php");
    $page_stats = getPageInfo("quest_globals", $curr_page, $curr_size, $_GET['sort'], $filter['sql']);
    if ($filter) {
      $body->set('filter', $filter);
    }
    if ($page_stats['page']) {
      $qglobals = get_qglobals($page_stats['page'], $curr_size, $curr_sort, $filter['sql']);
    }
    if ($qglobals) {
      $body->set('qglobals', $qglobals);
      foreach ($page_stats as $key=>$value) {
        $body->set($key, $value);
      }
    }
    break;
  case 1: // Search QGlobals
    check_authorization();
    //TODO: Add search function
    break;
  case 2: //Create QGlobal
    check_authorization();
    $breadcrumbs .= " >> Create Quest Global";
    $body = new Template("templates/qglobal/qglobal.add.tmpl.php");
    $nextid = get_next_qglobalid();
    $body->set('nextid', $nextid);
    break;
  case 3: //Insert QGlobal
    check_authorization();
    insert_qglobal();
    header("Location: index.php?editor=qglobal");
    exit;
  case 4: //Edit QGlobal
    check_authorization();
    $qglobal = view_qglobal($_GET['qglobalid']);
    if ($qglobal) {
      $breadcrumbs .= " >> Edit Quest Global";
      $body = new Template("templates/qglobal/qglobal.edit.tmpl.php");
      foreach ($qglobal as $key=>$value) {
        $body->set($key, $value);
      }
      break;
    }
    else {
      header("Location: index.php?editor=qglobal");
      exit;
    }
  case 5: //Update QGlobal
    check_authorization();
    update_qglobal();
    header("Location: index.php?editor=qglobal");
    exit;
  case 6: //Delete QGlobal
    check_authorization();
    delete_qglobal();
    $return_address = $_SERVER['HTTP_REFERER'];
    header("Location: $return_address");
    exit;
}

function get_qglobals($page_number, $results_per_page, $sort_by, $where = "") {
  global $mysql;
  $limit = ($page_number - 1) * $results_per_page . "," . $results_per_page;

  $query = "SELECT * FROM quest_globals";
  if ($where) {
    $query .= " WHERE $where";
  }
  $query .= " ORDER BY $sort_by LIMIT $limit";
  $results = $mysql->query_mult_assoc($query);

  return $results;
}

function view_qglobal($qglobalid) {
  global $mysql;

  $query = "SELECT * FROM quest_globals WHERE id = \"$qglobalid\"";
  $result = $mysql->query_assoc($query);
  
  return $result;
}

function insert_qglobal() {
  global $mysql;
  $fields = '';

  $fields = "id=\"" . $_POST['id'] . "\", ";
  $fields .= "name=\"" . $_POST['name'] . "\", ";
  $fields .= "value=\"" . $_POST['value'] . "\", ";
  $fields .= "charid=\"" . $_POST['charid'] . "\", ";
  $fields .= "npcid=\"" . $_POST['npcid'] . "\", ";
  $fields .= "zoneid=\"" . $_POST['zoneid'] . "\", ";
  $fields .= ($_POST['expdate'] == "") ? "expdate=NULL" : "expdate=\"" . $_POST['expdate'] . "\"";

  $query = "INSERT INTO quest_globals SET $fields";
  $mysql->query_no_result($query);
}

function update_qglobal() {
  global $mysql;
  $qglobal = view_qglobal($_POST['originalid']);
  $fields = '';
  extract($qglobal);

  if ($id != $_POST['id']) $fields .= "id=\"" . $_POST['id'] . "\", ";
  if ($name != $_POST['name']) $fields .= "name=\"" . $_POST['name'] . "\", ";
  if ($value != $_POST['value']) $fields .= "value=\"" . $_POST['value'] . "\", ";
  if ($charid != $_POST['charid']) $fields .= "charid=\"" . $_POST['charid'] . "\", ";
  if ($npcid != $_POST['npcid']) $fields .= "npcid=\"" . $_POST['npcid'] . "\", ";
  if ($zoneid != $_POST['zoneid']) $fields .= "zoneid=\"" . $_POST['zoneid'] . "\", ";
  if ($expdate != $_POST['expdate']) $fields .= ($_POST['expdate'] == "") ? "expdate=NULL" : "expdate=\"" . $_POST['expdate'] . "\"";

  $fields =  rtrim($fields, ", ");
  if ($fields != '') {
    $query = "UPDATE quest_globals SET $fields WHERE id=\"$id\"";
    $mysql->query_no_result($query);
  }
}

function delete_qglobal() {
  global $mysql;
  $qglobalid = $_GET['qglobalid'];

  $query = "DELETE FROM quest_globals WHERE id = \"$qglobalid\"";
  $mysql->query_no_result($query);
}

function get_next_qglobalid() {
  global $mysql;

  $query = "SELECT MAX(id) AS lastid FROM quest_globals";
  $result = $mysql->query_assoc($query);

  return ($result['lastid'] + 1);
}

function build_filter() {
  global $mysql;
  $filter1 = $_GET['filter1'];
  $filter2 = $_GET['filter2'];
  $filter3 = $_GET['filter3'];
  $filter4 = $_GET['filter4'];
  $filter_final = array();
  $playerid_list = array();
  $npcid_list = array();
  $zoneid_list = array();

  if ($filter1) { // Filter by name
    $filter_name = "name LIKE '%" . $filter1 . "%'";
    $filter_final['sql'] = $filter_name;
  }
  if ($filter2) { // Filter by character
    $query = "SELECT c.id FROM character_ c, quest_globals q WHERE c.id = q.charid AND c.name LIKE \"%$filter2%\" GROUP BY id";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
      $filter_charid = "charid IN (";
      foreach ($results as $result) {
        $filter_charid .= $result['id'] . ",";
      }
    }
    $filter_charid = rtrim($filter_charid, ",");
    $filter_charid .= ")";
    if ($filter_final['sql']) {
      $filter_final['sql'] .= " AND ";
    }
    $filter_final['sql'] .= $filter_charid;
  }
  if ($filter3) { // Filter by npc
    $query = "SELECT n.id FROM npc_types n, quest_globals q WHERE n.id = q.npcid AND n.name LIKE \"%$filter3%\" GROUP BY id";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
      $filter_npcid = "npcid IN (";
      foreach ($results as $result) {
        $filter_npcid .= $result['id'] . ",";
      }
    }
    $filter_npcid = rtrim($filter_npcid, ",");
    $filter_npcid .= ")";
    if ($filter_final['sql']) {
      $filter_final['sql'] .= " AND ";
    }
    $filter_final['sql'] .= $filter_npcid;
  }
  if ($filter4) { // Filter by zone
    $query = "SELECT z.zoneidnumber FROM zone z, quest_globals q WHERE z.zoneidnumber = q.zoneid AND z.short_name LIKE \"%$filter4%\" GROUP BY zoneidnumber";
    $results = $mysql->query_mult_assoc($query);
    if ($results) {
      $filter_zoneid = "zoneid IN (";
      foreach ($results as $result) {
        $filter_zoneid .= $result['zoneidnumber'] . ",";
      }
    }
    $filter_zoneid = rtrim($filter_zoneid, ",");
    $filter_zoneid .= ")";
    if ($filter_final['sql']) {
      $filter_final['sql'] .= " AND ";
    }
    $filter_final['sql'] .= $filter_zoneid;
  }

  $filter_final['url'] = "&filter=on&filter1=$filter1&filter2=$filter2&filter3=$filter3&filter4=$filter4";
  $filter_final['status'] = "on";
  $filter_final['filter1'] = $filter1;
  $filter_final['filter2'] = $filter2;
  $filter_final['filter3'] = $filter3;
  $filter_final['filter4'] = $filter4;

  return $filter_final;
}
?>