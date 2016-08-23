<?php
include 'connect.php';
if(empty($_REQUEST['ID'])) {
  $sql = "insert into BattleRecord (PlayerID1, Player1, PlayerID2, Player2, Winner) Values ('" . $_REQUEST["PlayerID1"] . "','";
  $sql .= $_REQUEST["Player1"] . "','".$_REQUEST["PlayerID2"]."','".$_REQUEST["Player2"]."','".$_REQUEST["Winner"]. "')";
}
else 
{
  $sql = "update BattleRecord set PlayerID1 = '" . $_REQUEST["PlayerID1"] . "',Player1 = '" . $_REQUEST["Player1"] . "',PlayerID2 = '" . $_REQUEST["PlayerID2"] ."',Player2 = '" . $_REQUEST["Player2"] ."',Winner = '" . $_REQUEST["Winner"] ."' ";
  $sql .= "where ID = " . $_REQUEST['ID'];
}
$mysqli->query($sql);
?>
<script>
window.location = 'battle.php';
</script>