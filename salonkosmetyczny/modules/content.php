<?php
	if(!isset($_GET["content"]) || empty($_GET["content"])){
		issetPage("home"); //show default page
	}else{
		issetPage($_GET["content"]);	//show 
	}
?>