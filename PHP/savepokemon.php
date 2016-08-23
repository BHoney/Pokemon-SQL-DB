<?php
include 'connect.php';
  $sql = "insert into Pokemon (SpeciesName, OT, DexNumber,Nickname, Level, PlayerPlayerName, CurrentTrainer) Values ('".$_REQUEST['SpeciesName'] . "','" . $_REQUEST["OT"] . "','";
  $sql .= $_REQUEST["DexNumber"] . "','"  . $_REQUEST["Nickname"] ."','" . $_REQUEST["Level"] ."','" . $_REQUEST["PlayerPlayerName"]."','"  . $_REQUEST["OT"] .  "')";

/*else 
{
  $sql = "update Pokemon set Nickname = '" . $_REQUEST["Nickname"] . "',Level = '" . $_REQUEST["Level"] . "' ";
  $sql .= "where SpeciesName = " . $_REQUEST['SpeciesName'];
}*/
$mysqli->query($sql);
//echo $sql;
?>
<script>
window.location = 'pokemon.php';
</script>
