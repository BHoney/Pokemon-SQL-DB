<?php
include 'connect.php';
?>

<form action="savedex.php">
Dex No.: <input type="text" name="DexNumber" value="<?php echo $DexNumber ?>"/></br>
Name: <input type="text" name="PokemonSpeciesName" value="<?php echo $PokemonSpeciesName ?>"/></br>
Entry : <input type="text" name="DexEntry" value="<?php echo $DexEntry ?>"/></br>
<input type="submit" value="save"/>
</form>