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
	echo "<td><b>PlayerID</b></td>"; 
	echo "<td><b>PlayerName</b></td>"; 
	echo "<td><b>BadgeCount</b></td>"; 
	echo "<td><b>DexCount</b></td>"; 
	echo "</tr>"; 
	if ($result = $mysqli->query("SELECT * from Player P1")){
	while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
	echo "<tr>";  
	echo "<td valign='top'>" . ( $row['PlayerID']) . "</td>";  
	echo "<td valign='top'>" . ( $row['PlayerName']) . "</td>";  
	echo "<td valign='top'>" . ( $row['BadgeCount']) . "</td>";  
	echo "<td valign='top'>" . ( $row['DexCount']) . "</td>";  
	echo "</td><td><a href=deleteplayer.php?PlayerID=";
         echo $row["PlayerID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         echo "<a href=addplayer.php?PlayerID=";
         echo $row["PlayerID"];
         echo ">EDIT</a>";
	echo "</tr>"; 
	} 
	echo "</table>"; 
	}
	echo "<br><a href=addplayer.php>New Row</a>"; 
	?></center>


</body>
</html>