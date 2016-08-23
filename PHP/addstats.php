<?php
include 'connect.php';
if ($result = $mysqli->query("SELECT * from Stats where PokemonOT=" . $_REQUEST['PokemonOT'])) {
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
       $PokemonOT = $row['PokemonOT'];
       $PokemonSpeciesName = $row['PokemonSpeciesName'];
       $Attack = $row['Attack'];
       $Defense = $row['Defense'];
       $SpecialAttack = $row['SpecialAttack'];
       $SpecialDefense = $row['SpecialDefense'];
       $Speed = $row['Speed'];
    }
}
?>
<form action="savestats.php">
OTID:  <input type = "text" name = "PokemonOT" value = "<?php echo $PokemonOT ?>"/> </br>
Pokemon: <input type="text" name="PokemonSpeciesName" value="<?php echo $PokemonSpeciesName ?>"/></br>
Attack: <input type="text" name="Attack" value="<?php echo $Attack ?>"/></br>
Defense: <input type="text" name="Defense" value="<?php echo $Defense ?>"/></br>
Special Attack: <input type = "text" name = "SpecialAttack" value ="<?php echo $SpecialAttack ?>"/></br>
Special Defense: <input type = "text" name = "SpecialDefense" value ="<?php echo $SpecialDefense ?>"/></br>
Speed: <input type = "text" name = "Speed" value ="<?php echo $Speed ?>"/></br>
<input type="submit" value="save"/>
</form>