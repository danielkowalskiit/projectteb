		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 siteswrap">
					<div class="siteswrap-content">
						<div class="col-md-8 col-sm-8 col-xs-6">
							<ul>
								<?php if(!empty(getContact('phone'))){echo "<li><i class='icon-phone'></i><span>".getContact("phone")."</span></li>";}?>
								<?php if(!empty(getContact('email'))){echo "<li class='hidden-xs'><a href='?content=kontakt#contact'><i class='icon-mail-alt'></i>".getContact("email")."</a></li>";}?>
							</ul>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6 text-right">
							<ul>
								<?php if(!empty(getContact('fb'))){echo "<li><a target='_blank' href='https://www.facebook.com/".getContact('fb')."'><i class='icon-facebook'></i></a></li>";}?>
								<?php if(!empty(getContact('ig'))){echo "<li><a target='_blank' href='https://www.instagram.com/".getContact('ig')."'><i class='icon-instagram'></i></a></li>";}?>
								<?php if(!empty(getContact('tw'))){echo "<li><a target='_blank' href='https://twitter.com/".getContact('tw')."'><i class='icon-twitter'></i></a></li>";}?>
								<?php if(!empty(getContact('yt'))){echo "<li><a target='_blank' href='https://www.youtube.com/".getContact('yt')."'><i class='icon-youtube-play'></i></a></li>";}?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Navigation -->
		<nav class="navbar navbar-default" role="navigation">    
			<div class="container-fluid">
				<div class="col-xs-12 col-sm-4 col-md-4 logo">
					<center><a href="./"><img class="img-responsive" src="./img/logotyp/<?php image("site","logo");?>"  alt="<?php alt_image("site","logo");?>"></a></center>
				</div>
				<!-- Grupowanie "marki" i przycisku rozwijania mobilnego menu -->
				<div class="navbar-header buttonnav">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
						<span class="sr-only">Rozwiń nawigację</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> 
				</div>
				<!-- Grupowanie elementów menu w celu lepszego wyświetlania na urządzeniach moblinych -->
				<div class="navbar-collapse collapse navbar-right text-center" id="bs-example-navbar-collapse-2" >
					<ul class="nav navbar-nav">
						<li><a href="./">Start</a></li>
						 <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  O mnie
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<ul class="nav navbar-dropdown text-center">
									<li><a href="./?content=o-mnie">Poznajmy się</a></li>
									<li><a href="./?content=galeria">Galeria</a></li>
									<li><a href="./?content=recenzje">Recenzje</a></li>
								</ul>
							</div>
						</li>
						<li><a class="double-link" href="./?content=oferta">Oferta</a> | <a class="double-link"  href="./?content=cennik">Cennik</a></li>
						<li><a href="./?content=zapisz-sie">Zapisz się</a></li>
						<li><a href="./?content=kontakt">Kontakt</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
        <div class="container-fluid">
            <div class="row">
				<div id="slide" class="col-sm-12 slide">
					<img class="img-responsive hidden-xs" src="./img/baner/<?php image("site","baner");?>"  alt="<?php alt_image("site","baner");?>">
					<img class="img-responsive visible-xs-block " src="./img/baner/<?php image("site","baner_mobile"); ?>"  alt="<?php alt_image("site","baner_mobile");?>">
					<div id="carousel-caption" class="carousel-caption">
						<?php
							if(!isset($_GET["content"]) || empty($_GET["content"])){
								titleCarusel(""); //default title Carusel
							}else{
								titleCarusel($_GET["content"]); //qunique titleCarusel
							}
						?>
                    </div>
				</div>
            </div>    
        </div>