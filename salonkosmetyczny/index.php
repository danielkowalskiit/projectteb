<?php
	session_start();
	if(isset($_GET["content"]) && $_GET["content"]=="zapisz-sie" && isset($_SESSION['logged']) 
			|| isset($_GET["content"]) && $_GET["content"]=="zarejestruj-sie" && isset($_SESSION['logged'])) header("location: ./scripts/login.php");
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php
			include("location: ./../function.php");
			if(!isset($_GET["content"]) || empty($_GET["content"])){
				metaSite(""); //default meta tags
			}else{
				metaSite($_GET["content"]); //qunique meta tags for site
			}
		?>
		
		<link rel="icon" href="./img/logotyp/<?php image("site","favicon");?>">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./main.css">
		<link rel="stylesheet" href="./css/scroll.css">  
		<link href="./css/fontello.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	</head>
	<body>
		<header>
			<?php require("location: ./../modules/header.php");?>
		</header>
		<main>
			<?php require("location: ./../modules/content.php");?>
		</main>	
		<footer>
			<?php require("location: ./../modules/footer.php");?>
		</footer>
			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/bootstrap.min.js"></script>
		<script src="./js/main.js"></script>
		<script src="./js/scroll.js"></script>
	</body>
</html>