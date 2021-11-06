<?php

	include_once 'dbc.php'; 		
	$imev = $_POST['ime'];	
	$adresav = $_POST['ulibr'];	
	$kolicinav = $_POST['brteg'];
	

	$sql = "INSERT INTO info (imeprezime, adresa, kolicina) 
	VALUES ('$imev','$adresav','$kolicinav');";
	mysqli_query($conn, $sql);
	
	header("location: ../proizvodi2.php?signup=success"); 