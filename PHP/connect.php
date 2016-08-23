<?php
$mysqli = new mysqli('127.0.0.1', 'robertm7_admin', 'w17ev13x', 'robertm7_Pokemon');

if ($mysqli->connect_errno) {
   
    echo "Errno: " . $mysqli->connect_errno . "</b>";
    echo "Error: " . $mysqli->connect_error . "</b>";
    
    exit;
}
?>