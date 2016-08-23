<?php
include 'connect.php';
if ($result = $mysqli->query("SELECT * from Pokemon where SpeciesName=" . $_REQUEST['SpeciesName'])) {
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
       $OT = $row['OT'];
       $DexNumber = $row['DexNumber'];
       $Level = $row['Level'];
       $Nickname = $row['Nickname'];
       $PlayerPlayerName = $row['PlayerPlayerName'];
       $CurrentTrainer = $row['CurrentTrainer'];
    }  
}	
?>

<form action = 'savepokemon.php'>
OT: <input type = "text" name = "OT" value = "<?php echo $OT ?>"><br>
Dex No.: <input type = "text" name = "DexNumber" value = "<?php echo $DexNumber?>"><br>
Pokemon: <input type = "text" name = "SpeciesName" value ="<?php echo $SpeciesName ?>" /><br>
Name: <input type="text" name="Nickname" value="<?php echo $Nickname ?>"/></br>
Level: <input type="text" name="Level" value="<?php echo $Level ?>"/></br>
Original Trainer: <input type="text" name="PlayerPlayerName" value="<?php echo $PlayerPlayerName ?>"/></br>
<input type="hidden" name="CurrentTrainer" value="<?php echo $OT ?>">

<input type="submit" value="save"/>
</form>