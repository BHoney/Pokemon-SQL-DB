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
	echo "<td><b>Pokemon Name</b></td>"; 
	echo "<td><b>Trainer ID/b></td>"; 
	echo "<td><b>Move 1</b></td>"; 
	echo "<td><b>Move 2</b></td>"; 
	echo "<td><b>Move 3</b></td>"; 
	echo "<td><b>Move 4</b></td>"; 


	echo "</tr>"; 
	if ($result = $mysqli->query("SELECT * FROM `movelist`")){
	while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
	echo "<tr>";  
	echo "<td valign='top'>" . ( $row['Pokemon']) . "</td>";  
	echo "<td valign='top'>" . ( $row['OT']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Move1']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Move2']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Move3']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Move4']) . "</td>";  
	echo "</td><td><a href=delpokemon.php?Pokemon=";
         echo $row["Pokemon"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         echo "<a href=addpokemon.php?Pokemon=";
         echo $row["Pokemon"];
         echo ">EDIT</a>";
	echo "</tr>"; 
	} 
	echo "</table>"; 
	}
	echo "<br><a href=addpokemon.php>New Row</a>"; 
	?></center>


</body>
</html>