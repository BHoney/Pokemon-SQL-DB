<?php
include 'connect.php';
$mysqli->query("DELETE from BattleRecord where ID=" .$_REQUEST["ID"]);
?>
<script>
window.location = 'battle.php';
</script>