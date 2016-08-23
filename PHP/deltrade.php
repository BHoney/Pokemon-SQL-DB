<?php
include 'connect.php';
$mysqli->query("DELETE from TradeRecord where TradeID=" .$_REQUEST["TradeID"]);
?>
<script>
window.location = 'trade.php';
</script>