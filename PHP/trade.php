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
	echo "<td><b>Trade ID</b></td>"; 
	echo "<td><b>Player 1 ID</b></td>"; 
	echo "<td><b>Player Name</b></td>"; 
	echo "<td><b>Pokemon</b></td>"; 
	echo "<td><b>Player 2 ID</b></td>"; 
	echo "<td><b>Player Name</b></td>"; 
	echo "<td><b>Pokemon</b></td>"; 


	echo "</tr>"; 
	if ($result = $mysqli->query("SELECT * FROM `TradeRecord`")){
	while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
	echo "<tr>";  
	echo "<td valign='top'>" . ( $row['TradeID']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PlayerPlayerID']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PlayerPlayerName']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PokemonSpeciesName']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PlayerPlayerID2']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PlayerPlayerName2']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PokemonSpeciesName2']) . "</td>"; 

	echo "</td><td><a href=deltrade.php?TradeID=";
         echo $row["TradeID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         echo "<a href=addtrade.php?TradeID=";
         echo $row["TradeID"];
         echo ">EDIT</a>";
	echo "</tr>"; 
	} 
	echo "</table>"; 
	}
	echo "<br><a href=addtrade.php>New Row</a>"; 
	?></center>


</body>
</html>