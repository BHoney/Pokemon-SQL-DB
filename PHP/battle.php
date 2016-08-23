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
	echo "<td><b>Battle ID</b></td>"; 
	echo "<td><b>Player 1 ID</b></td>"; 
	echo "<td><b>Player Name</b></td>"; 
	echo "<td><b>Player 2 ID</b></td>"; 
	echo "<td><b>Player Name</b></td>"; 
	echo "<td><b>Winner</b></td>"; 


	echo "</tr>"; 
	if ($result = $mysqli->query("SELECT * FROM `BattleRecord`")){
	while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
	echo "<tr>";  
	echo "<td valign='top'>" . ( $row['ID']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PlayerID1']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Player1']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PlayerID2']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Player2']) . "</td>";  
	echo "<td valign='top'>" . ( $row['Winner']) . "</td>"; 

	echo "</td><td><a href=delbattle.php?ID=";
         echo $row["ID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         echo "<a href=addbattle.php?ID=";
         echo $row["ID"];
         echo ">EDIT</a>";
	echo "</tr>"; 
	} 
	echo "</table>"; 
	}
	echo "<br><a href=addbattle.php>New Row</a>"; 
	?></center>


</body>
</html>