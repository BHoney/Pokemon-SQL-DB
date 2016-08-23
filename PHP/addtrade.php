<?php
include 'connect.php';
if ($result = $mysqli->query("SELECT * from Pokemon where TradeID=" . $_REQUEST['TradeID'])) {
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
       $PlayerPlayerID = $row['PlayerPlayerID'];
       $PlayerPlayerName = $row['PlayerPlayerName'];
       $PokemonSpeciesName = $row['PokemonSpeciesName'];
       $PlayerPlayerID2 = $row['PlayerPlayerID2'];
       $PlayerPlayerName2 = $row['PlayerPlayerName2'];
       $PokemonSpeciesName2 = $row['PokemonSpeciesName2'];
    }  
}	
?>

<h1>Only Pokemon With An Original Trainer ID May Be Traded!</h1>

<form action = 'savetrade.php'>
Player 1 ID: <input type = "text" name = "PlayerPlayerID" value = "<?php echo $PlayerPlayerID ?>"><br>
Player 1 Name: <input type = "text" name = "PlayerPlayerName" value = "<?php echo $PlayerPlayerName?>"><br>
Pokemon: <input type = "text" name = "PokemonSpeciesName" value ="<?php echo $PokemonSpeciesName ?>" /><br><br>
Player 2 ID: <input type="text" name="PlayerPlayerID2" value="<?php echo $PlayerPlayerID2 ?>"/></br>
Player 2 Name: <input type="text" name="PlayerPlayerName2" value="<?php echo $PlayerPlayerName2 ?>"/></br>
Pokemon: <input type="text" name="PokemonSpeciesName2" value="<?php echo $PokemonSpeciesName2 ?>"/></br>

<input type="submit" value="save"/>
</form>