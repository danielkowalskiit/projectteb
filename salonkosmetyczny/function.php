<?php
//this function checks if a page exists
function issetPage($page){
	$file = ".../../pages/$page.php";
	
	if(file_exists($file)){
		include("location: $file");
	}else{
		echo "<div class='col-xs-12' style='padding: 40px 10px'><h4>UPS... Przepraszamy, ale strona, której szukasz, nie istnieje.</h4></div>";
	}
}

//this function checks if a page exists
function siteMainInfo($type){
	$data = "";
	require("location: ./../scripts/connect.php");	
	$result = $conn->query("SELECT title, title_business from site");
														
	if($result->num_rows != 0){
		while($row = $result -> fetch_assoc()){
			switch($type)
			{
				case "title":
					$data= $row["title"];
				break;
				case "title_business":
					$data= $row["title_business"];
				break;
			}
		}
	}	
	$conn->close();
			
	echo $data;	
}

//file with sets meta tag
include("./scripts/meta.php");

//file with sets image
include("./scripts/image.php");

//file with sets data carousel
include("./modules/carousel.php");

//file with data cotact
include("./scripts/contact_data.php");

?>