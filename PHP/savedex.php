<?php
include 'connect.php';
  $sql = "insert into PokeDexEntry (DexNumber, PokemonSpeciesName, DexEntry) Values ('" . $_REQUEST["DexNumber"] . "','";
  $sql .= $_REQUEST["PokemonSpeciesName"] . "','".$_REQUEST["DexEntry"]. "')";


$mysqli->query($sql);
?>
<script>
window.location = 'dex.php';
</script>