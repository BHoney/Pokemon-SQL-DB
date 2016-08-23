<?php
include 'connect.php';

  $sql = "INSERT INTO Stats(PokemonSpeciesName,PokemonOT, Attack, Defense, `Special Attack`, `Special Defense`, Speed) Values ('" . $_REQUEST["PokemonSpeciesName"] . "','";
  $sql .= $_REQUEST["PokemonOT"]. "','".$_REQUEST["Attack"] . "','". $_REQUEST["Defense"] . "','". $_REQUEST["SpecialAttack"] ."','". $_REQUEST["SpecialDefense"] ."','". $_REQUEST["Speed"] ."')";
//echo $sql;
$mysqli->query($sql);
?>
<script>
window.location = 'stats.php';
</script>