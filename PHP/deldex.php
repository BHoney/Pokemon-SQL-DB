<?php
include 'connect.php';
$mysqli->query("DELETE from PokeDexEntry where DexNumber=" .$_REQUEST["DexNumber"]);
?>
<script>
window.location = 'dex.php';
</script>