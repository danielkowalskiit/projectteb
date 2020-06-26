
/*Title site
<h1 id="title">SITE</h1>  <span>SALON KOSMETYCZNY</span>
titleSite = document.title.replace(" | Salon Kosmetyczny", "");
document.querySelector("#title").innerHTML = titleSite ;
*/


if(document.querySelectorAll("#carousel-caption h1").length==0){
	document.querySelector("#carousel-caption").style.display = 'none';	
}

