<?php
session_start();

if(!empty($_POST["inputName"]) && !empty($_POST["inputLastName"]) && !empty($_POST["inputAddress"]) 
	&& !empty($_POST["inputPostCode"]) && !empty($_POST["inputPhone"]) && !empty($_POST["inputEmail"])
	&& !empty($_POST["inputPassword"]) && !empty($_POST["inputPasswordConfirm"]) && $_POST["checkTerm"] == "agree"){
	
	require("connect.php");	
	if($conn->connect_errno !=0){ //problems with db
		$_SESSION["ERROR"] = "*Problem z zalogowaniem do bazy";
		header("Location: ../?content=zarejestruj-sie");
	}
	else{	
	
	if($_POST["inputPassword"]!=$_POST["inputPasswordConfirm"]){
		$_SESSION["ERROR_PASSWORD"] = "*Podane hasła nie są takie same";
	header("Location: ../?content=zarejestruj-sie");
	}	
    
    $pass_hashed= password_hash($_POST["inputPassword"],PASSWORD_ARGON2ID);

	//https://geekflare.com/sql-injection-prevention-php/		php sql inject
	$stmt = $conn->prepare("INSERT INTO clients (name, lastname, address, postcode, city, phone, email, password, role, access) 
								VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssssssss", $name, $lastname, $address, $postcode, $city, $phone, $email, $password, $role, $access);
	
		$name = $_POST["inputName"];
		$lastname = $_POST["inputLastName"];
		$address = $_POST["inputAddress"];
		$postcode = $_POST["inputPostCode"];
		$city = $_POST["selectCity"];
		$phone = $_POST["inputPhone"];
		$email = $_POST["inputEmail"];
		$password = $pass_hashed;
		$role = 1;
		$access = 0;
	
	if($stmt->execute()){ //before this duplication email
		$_SESSION["SUCCESS"] = "*Użytkownik, został dodany pomyślnie. 
			Na twój adres email: $email została wysłana wiadomość z linkiem aktywacyjnym, następnie możesz się zalogować</a>";
		header("Location: ../?content=zapisz-sie");
	}
	else{
		$_SESSION["ERROR"] = "*Użytkowik nie został stworzony, ponieważ już istnieje. <a href='./?content=zapisz-sie'>Zaloguj sie</a> 
			albo wypełnij formularz innymi danymi. Może zapomiałeś hasło to kliknij <a href='#'>tutaj</a>";
		header("Location: ../?content=zarejestruj-sie");
	}
	$stmt->close();
	$conn->close();
	}	
}
else{
	$_SESSION["ERROR"] = "*uzupełnij wszytskie pola";
	header("Location: ../?content=zarejestruj-sie");
}

?>