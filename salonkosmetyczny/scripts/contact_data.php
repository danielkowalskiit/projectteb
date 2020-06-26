<?php 
//this function return contact and social
function getContact($type){	
	$data = "";
	require("location: ./../scripts/connect.php");	
	$result = $conn->query("SELECT facebook, instagram, twitter, youtube, phone, email from information");
														
	if($result->num_rows != 0){
		while($row = $result -> fetch_assoc()){
			switch($type)
			{
				case "fb":
					$data= $row["facebook"];
				break;
				case "ig":
					$data= $row["instagram"];
				break;
				case "tw":
					$data= $row["twitter"];
				break;
				case "yt":
					$data= $row["youtube"];
				break;
				case "phone":
					$data= $row["phone"];
				break;
				case "email":
					$data= $row["email"];
				break;
			}
		}
	}	
	$conn->close();
			
	return $data;		
}
?>