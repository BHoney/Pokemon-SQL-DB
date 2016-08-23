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
	echo "<td><b>Pokemon</b></td>"; 
	echo "<td><b>Original Trainer</b></td>"; 
	echo "<td><b>Attack</b></td>"; 
	echo "<td><b>Defense</b></td>";
	echo "<td><b>Special Attack</b></td>"; 
	echo "<td><b>Special Defense</b></td>"; 
	echo "<td><b>Speed</b></td>"; 
	echo "</tr>"; 
	if ($result = $mysqli->query("SELECT * from Stats")){
	while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
	echo "<tr>";  
	echo "<td valign='top'>" . ( $row['PokemonSpeciesName']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PokemonOT']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Attack']) . "</td>"; 
	echo "<td valign='top'>" . ( $row['Defense']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Special Attack']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Special Defense']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Speed']) . "</td>";
	echo "</td><td><a href=deletestats.php?PokemonOT=";
         echo $row["PokemonOT"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         echo "<a href=addstats.php?PokemonOT=";
         echo $row["PokemonOT"];
         echo ">EDIT</a>";
	echo "</tr>"; 
	} 
	echo "</table>"; 
	}
	echo "<br><a href=addstats.php>New Row</a>"; 
	?></center>


</body>
</html>