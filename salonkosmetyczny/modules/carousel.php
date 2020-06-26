<?php 
function titleCarusel($content){
	$title="";
	$title_buisness="";
	
	require("location: ./../scripts/connect.php");	
	$result = $conn->query("SELECT title, title_business FROM site");
									
	if($result->num_rows != 0){
		while($row = $result -> fetch_assoc()){
			$title = $row["title"];		
			$title_buisness = strtoupper($row["title_business"]);		
		}
	}
	
	$conn->close();
	
	switch($content){
		case "o-mnie":
			echo "<h1>O mnie</h1><span>$title_buisness</span>";
		break;
		case "oferta":
			echo "<h1>Oferta</h1><span>$title_buisness</span>";
		break;
		case "cennik":
			echo "<h1>Cennik</h1><span>$title_buisness</span>";
		break;
		case "galeria":
			echo "<h1>Galeria</h1><span>$title_buisness</span>";
		break;
		case "kontakt":
			echo "<h1>Kontakt</h1><span><span>$title_buisness</span>";
		break;
		case "recenzje":
			echo "<h1>Recenzje</h1><span>$title_buisness</span>";
		break;
		case "zapisz-sie":
			echo "<h1>Rezerwacja wizyty</h1><span>$title_buisness</span>";
		break;
		case "zarejestruj-sie":
			echo "<h1>Zarejestruj się</h1><span>$title_buisness</span>";
		break;
		case "przypomnij-haslo":
			echo "<h1>Przypomnij hasło</h1><span>$title_buisness</span>";
		break;
		case "regulamin":
			echo "<h1>Regulamin</h1><span>$title_buisness</span>";
		break;
		case "polityka-prywatnosci":
			echo "<h1>Polityka prywatności</h1><span>$title_buisness</span>";
		break;
		default:
			if(!empty($title) || !empty($title_buisness)){echo "<h1>$title</h1><span>$title_buisness</span>";}
	}
}
?>