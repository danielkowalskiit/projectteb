<?php
session_start();

if(isset($_SESSION['logged'])){
	switch($_SESSION["logged"]["role"]){
		case 1:
			echo 1;
			//header("Location: ./logged/client.php");
		break;
		case 2:
			//header("Location: ./logged/client.php");
		break;
	}
	exit();
}


if(!empty($_POST["inputEmail"]) && !empty($_POST["inputPassword"])){
    require("connect.php");	
	if($conn->connect_errno !=0){ //problems with db
		$_SESSION["ERROR"] = "*Problem z połączeniem do bazy";
		header("Location: ../?content=zapisz-sie");
        exit();
	}
	else{
        $login = htmlentities($_POST["inputEmail"], ENT_QUOTES, "UTF-8");
        $password = htmlentities($_POST["inputPassword"], ENT_QUOTES, "UTF-8");
        
        
        if($result = $conn->query(sprintf("SELECT * FROM clients WHERE email='%s'", mysqli_real_escape_string($conn,$login)))){
            $countUsers = $result->num_rows;
            
            if($countUsers > 0){
                        
                $rows = $result->fetch_assoc();
                //https://www.php.net/manual/en/function.password-verify.php
                //descrypt password argon2id if isset in db login
                if (password_verify($password, $rows['password'])) {
					
					if($rows['access']==1)
					{
					
					$_SESSION["logged"];
					$_SESSION["logged"]["email"] = $rows['email'];
					$_SESSION["logged"]["name"] = $rows['name'];
					$_SESSION["logged"]["lastname"] = $rows['lastname'];
					$_SESSION["logged"]["role"] = $rows['role'];
					
					
						$actualData=date("Y-m-d H:i:s");  
						$conn->query("UPDATE users SET last_login='$actualData' WHERE email='$rows[email]'"); 
						
						switch($_SESSION["logged"]["role"]){
							case 1:
								//header("Location: ./logged/client.php");
								echo 1;
							break;
							case 2:
								//header("Location: ./logged/admin.php");
							break;
							case 3:
								//header("Location: ./logged/user.php");
							break;
						}
					}
					else{
						$_SESSION["ERROR"] = "*Twoje konto o adresie email: $login nie jest aktywne. Aby je aktywować
													kliknij <a href='#'>tutaj</a>";
						header("Location: ../?content=zapisz-sie");
					}
                } 
                else{
                   $_SESSION["ERROR"] = "*Podałeś niepoprawne hasło, jeśli go nie pamiętasz kliknij <a href='#'>tutaj</a> aby utworzyć nowe";
	               header("Location: ../?content=zapisz-sie");
                } 

            }
            else{
                $_SESSION["ERROR"] = "*Adres email: $login jest nieprawidłowy $login albo takiego nie posiadamy";
	          header("Location: ../?content=zapisz-sie");
            }
        }
    }
}
else
{
	$_SESSION["ERROR"] = "*uzupełnij wszytskie pola";
	header("Location: ../?content=zapisz-sie");
}

?>