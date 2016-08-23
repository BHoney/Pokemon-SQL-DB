<?php
include 'connect.php';
$mysqli->query("DELETE from Stats where PokemonOT=" .$_REQUEST["PokemonOT"]);
?>
<script>
window.location = 'stats.php';
</script>