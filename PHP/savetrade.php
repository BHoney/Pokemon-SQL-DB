<?php
include 'connect.php';
if(empty($_REQUEST['TradeID'])) {
  $sql = "insert into TradeRecord (PlayerPlayerID, PlayerPlayerName, PokemonSpeciesName, PlayerPlayerID2, PlayerPlayerName2, PokemonSpeciesName2) Values ('" . $_REQUEST["PlayerPlayerID"] . "','";
  $sql .= $_REQUEST["PlayerPlayerName"] . "','".$_REQUEST["PokemonSpeciesName"]."','".$_REQUEST["PlayerPlayerID2"]."','".$_REQUEST["PlayerPlayerName2"]. "','".$_REQUEST["PokemonSpeciesName2"]."')";
}
else 
{
  $sql = "update TradeRecord set PlayerPlayerID = '" . $_REQUEST["PlayerPlayerID"] . "',PlayerPlayerName = '" . $_REQUEST["PlayerPlayerName"] . "',PokemonSpeciesName = '" . $_REQUEST["PokemonSpeciesName"] ."',PlayerPlayerID2 = '" . $_REQUEST["PlayerPlayerID2"] ."',PlayerPlayerName2 = '" . $_REQUEST["PlayerPlayerName2"] ."',PokemonSpeciesName2 = '" . $_REQUEST["PokemonSpeciesName2"] ."' ";
  $sql .= "where TradeID = " . $_REQUEST['TradeID'];
}
echo $sql;
$mysqli->query($sql);
?>
<script>
window.location = 'trade.php';
</script>