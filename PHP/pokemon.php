<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center><? 
	include('connect.php'); 
	include 'nav.php';
	echo "<table border=1 >"; 
	echo "<tr>"; 
	echo "<td><b>OT</b></td>"; 
	echo "<td><b>Pokedex #</b></td>"; 
	echo "<td><b>Pokemon</b></td>"; 
	echo "<td><b>Level</b></td>"; 
	echo "<td><b>Nickname</b></td>"; 
	echo "<td><b>Original Trainer</b></td>"; 
	echo "<td><b>Current Trainer ID</b></td>"; 


	echo "</tr>"; 
	if ($result = $mysqli->query("SELECT * FROM `Pokemon`")){
	while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
	echo "<tr>";  
	echo "<td valign='top'>" . ( $row['OT']) . "</td>";  
	echo "<td valign='top'>" . ( $row['DexNumber']) . "</td>";  
	echo "<td valign='top'>" . ( $row['SpeciesName']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Level']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Nickname']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PlayerPlayerName']) . "</td>"; 
	echo "<td valign='top'>" . ( $row['CurrentTrainer']) . "</td>";  
 

	echo "</td><td><a href=delpokemon.php?SpeciesName=";
         echo $row["SpeciesName"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         echo "<a href=addpokemon.php?SpeciesName=";
         echo $row["SpeciesName"];
         echo ">EDIT</a>";
	echo "</tr>"; 
	} 
	echo "</table>"; 
	}
	echo "<br><a href=addpokemon.php>New Row</a>"; 
	?></center>


</body>
</html>