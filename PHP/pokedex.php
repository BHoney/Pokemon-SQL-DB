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
	echo "<td><b>Pokedex Number</b></td>"; 
	echo "<td><b>Pokemon Name</b></td>"; 
	echo "<td><b>Pokedex Entry</b></td>"; 
	echo "</tr>"; 
	if ($result = $mysqli->query("SELECT * from PokeDexEntry Order by PokemonSpeciesName, DexNumber DESC")){
	while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
	echo "<tr>";  
	echo "<td valign='top'>" . ( $row['DexNumber']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PokemonSpeciesName']) . "</td>";  
	echo "<td valign='top'>" . ( $row['DexEntry']) . "</td>";  
	echo "</td><td><a href=deleteplayer.php?DexNumber=";
         echo $row["DexNumber"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         echo "<a href=addplayer.php?DexNumber=";
         echo $row["DexNumber"];
         echo ">EDIT</a>";
	echo "</tr>"; 
	} 
	echo "</table>"; 
	}
	echo "<br><a href=adddex.php>New Row</a>"; 
	?></center>


</body>
</html>