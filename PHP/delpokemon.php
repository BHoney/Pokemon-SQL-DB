<?php
include 'connect.php';
$mysqli->query("DELETE from Pokemon where SpeciesName=" .$_REQUEST["SpeciesName"]);
?>
<script>
//window.location = 'pokemon.php';
</script>