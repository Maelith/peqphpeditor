<html>
  <body bgcolor="#FFCCCC">
<?
if(isset($_GET['name']) && ($_GET['name'] != '')) {
  require("../../config.php");
  require("../../classes/mysql.php");
  $name = $_GET['name'];
  $query = "SELECT name FROM account WHERE name RLIKE \"$name\" LIMIT 50";
  $results = $mysql->query_mult_assoc($query);
  if($results == '') {
    echo "No accounts found!<br/>";
  }
  else {
    echo (count($results) == 50) ? "<i>Results limited to 50. Narrow your search.</i>" : "";
    echo "<ul>";
    foreach($results as $result) {
      extract($result);
      echo "<li><a href=\"javascript:parent.document.getElementById('to_text').value='$name';parent.hideSearch();parent.prepareTransfer();\">$name</a></li>";
    }
    echo "</ul>";
  }
}
?>

<br/>
    <center>
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <form action="?" method="GET">
              Search account names:<br/>
              <input type="text" size="30" name="name"><br/><br/>
              <center><input type="submit" value="Search"></center>
            </form>
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>