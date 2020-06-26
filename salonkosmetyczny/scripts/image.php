<?php 
function image($table,$type){
	$image = "";			
			
	require("location: ./../scripts/connect.php");	
	$result = $conn->query("SELECT url FROM $table inner join images on $table.$type = images.id_picture");
														
	if($result->num_rows != 0){
		while($row = $result -> fetch_assoc()){
			$image= $row["url"];
		}
	}
			
	$conn->close();
			
	echo $image;		
}

//function read and return alt image with db
function alt_image($table,$type){
	$alt_image = "";			
			
	require("location: ./../scripts/connect.php");	
	$result = $conn->query("SELECT alt FROM $table inner join images on $table.$type = images.id_picture");
														
	if($result->num_rows != 0){
		while($row = $result -> fetch_assoc()){
			$alt_image= $row["alt"];
		}
	}
			
	$conn->close();
			
	echo $alt_image;		
}
?>