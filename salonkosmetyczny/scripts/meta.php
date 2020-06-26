<?php 
//this function read and set meta site information
function metaSite($content){
	
	require("location: ./../scripts/connect.php");	
	
	$result = $conn->query("SELECT title, title_business FROM site");								
	if($result->num_rows != 0){
		while($row = $result -> fetch_assoc()){
			$title = $row["title"];
			$title_buisness = $row["title_business"];		
		}
	}
		
	$result = $conn->query("SELECT * FROM meta_tag where name_site='$content'");							
	if($result->num_rows != 0){
		while($row = $result -> fetch_assoc()){
				$description = $row["description"];
				$key_words = $row["keywords"];		
		}
	}else{	
		$result = $conn->query("SELECT * FROM meta_tag where name_site='home'");							
		if($result->num_rows != 0){
			while($row = $result -> fetch_assoc()){
					$description = $row["description"];
					$key_words = $row["keywords"];		
			}
		}
	}
	
	
	$conn->close();
		
	switch($content){
		case "o-mnie":
			setMeta("O mnie | $title_buisness",$description,$key_words);
		break;
		case "oferta":
			setMeta("Oferta | $title_buisness",$description,$key_words);
		break;
		case "cennik":
			setMeta("Cennik | $title_buisness",$description,$key_words);
		break;
		case "galeria":
			setMeta("Galeria | $title_buisness",$description,$key_words);
		break;
		case "kontakt":
			setMeta(
			"Kontakt | $title_buisness",$description,$key_words);
		break;
		case "recenzje":
			setMeta(
			"Recenzje | $title_buisness",$description,$key_words);
		break;
		case "zapisz-sie":
			setMeta(
			"Zapisz się | $title_buisness",$description,$key_words);
		break;
		case "regulamin":
			setMeta(
			"Regulamin | $title_buisness",$description,$key_words);
		break;
		case "polityka-prywatnosci":
			setMeta(
			"Polityka prywatności | $title_buisness",$description,$key_words);
		break;
		default:
			setMeta("$title | $title_buisness",$description,$key_words);
	}		
}

//function with the structure Meta elements for the site
function setMeta($title,$description,$keywords){
	echo <<<HTML
		<title>$title</title>
		<meta name="description" content="$description">
		<meta name="keywords" content="$keywords">	
HTML;
}
?>