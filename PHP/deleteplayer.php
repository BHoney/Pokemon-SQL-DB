<?php
include 'connect.php';
$mysqli->query("DELETE from Player where PlayerID=" .$_REQUEST["PlayerID"]);
?>
<script>
window.location = 'player.php';
</script>