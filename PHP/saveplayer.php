<?php
include 'connect.php';
if(empty($_REQUEST['PlayerID'])) {
  $sql = "insert into Player (PlayerName, BadgeCount, DexCount) Values ('" . $_REQUEST["PlayerName"] . "','";
  $sql .= $_REQUEST["BadgeCount"] . "','".$_REQUEST["DexCount"]. "')";
}
else 
{
  $sql = "update Player set PlayerName = '" . $_REQUEST["PlayerName"] . "',BadgeCount = '" . $_REQUEST["BadgeCount"] . "',DexCount = '" . $_REQUEST["DexCount"] ."' ";
  $sql .= "where PlayerID = " . $_REQUEST['PlayerID'];
}
$mysqli->query($sql);
?>
<script>
window.location = 'player.php';
</script>