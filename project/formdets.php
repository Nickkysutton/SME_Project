<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$type = htmlspecialchars($_POST["type_transaction"]);
	$description = htmlspecialchars($_POST["discribe"]);
	$trackDate = htmlspecialchars($_POST["time"]);
	$amount = htmlspecialchars($_POST["money"]);
	if(empty($type||$trackDate ||$amount)){
		header("location: ../project/track.php");	
	}
	echo "these are the details of your transactions";
	echo "<br>";
	echo "type : ",$type," description: ",$description," amount: $",$amount," date: ",$trackDate;
	
	header("location: ../project/track.php");
	
}
