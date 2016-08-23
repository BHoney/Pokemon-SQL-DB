<?php
include 'connect.php';
if ($result = $mysqli->query("SELECT * from Player where PlayerID=" . $_REQUEST['PlayerID'])) {
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
       $PlayerName = $row['PlayerName'];
       $BadgeCount = $row['BadgeCount'];
       $DexCount = $row['DexCount'];
    }
}
?>
<form action="saveplayer.php">
<input type="hidden" name="PlayerID" value="<?php echo $_REQUEST['PlayerID'] ?>">
Name: <input type="text" name="PlayerName" value="<?php echo $PlayerName ?>"/></br>
Badge: <input type="text" name="BadgeCount" value="<?php echo $BadgeCount ?>"/></br>
Dex: <input type="text" name="DexCount" value="<?php echo $DexCount ?>"/></br>

<input type="submit" value="save"/>
</form>