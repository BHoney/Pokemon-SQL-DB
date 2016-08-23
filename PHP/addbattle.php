<?php
include 'connect.php';
if ($result = $mysqli->query("SELECT * from BattleRecord where ID=" . $_REQUEST['ID'])) {
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
	$PlayerID1 = $row['PlayerID1'];
	$Player1 = $row['Player1'];
	$PlayerID2 = $row['PlayerID2'];
	$Player2 = $row['Player2'];
	$Winner = $row['Winner'];



    }
}
?>
<form action="savebattle.php">
<input type="hidden" name="PlayerID" value="<?php echo $_REQUEST['ID'] ?>">
Player 1ID: <input type = "text" name = "PlayerID1" value = "<?php $PlayerID1 ?>"/><br>
Player 1 Name: <input type = "text" name = "Player1" value = "<?php $Player1 ?>"/><br>
Player 2ID: <input type = "text" name = "PlayerID2" value = "<?php $PlayerID2 ?>"/><br>
Player 2 Name: <input type = "text" name = "Player2" value = "<?php $Player2 ?>"/><br>
Winner: <input type = "text" name = "Winner" valye = "<?php Winner ?>" /><br>

<input type="submit" value="save"/>
</form>