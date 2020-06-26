		<div class="container-fluid">
            <div class="row">
				<div class="col-xs-12 text-center about-company">
					<div class="container">
						<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 about-content"  id="o-mnie">
							
							
							<div class="col-sm-4 col-xs-12">
								<img class="img-responsive img-circle picture-center" src="./img/<?php image("information","avatar");?>"  
									alt="<?php alt_image("information","avatar");?>">
							</div>
							
							<div class="col-sm-8 col-xs-12 text-justify about-info">
								<?php 
									require("location: ./../scripts/connect.php");	
									$result = $conn->query("SELECT about_me_tips FROM information");
																						
									if($result->num_rows != 0){
										while($row = $result -> fetch_assoc()){
											echo $row["about_me_tips"];
										}
									}
									
									$conn->close();
								?>		
								<a class="button-default" href="?content=o-mnie#about-me">więcej</a>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-xs-12 offer-company text-center">
					<div class="container">
						<div class="row">
							<h2>Oferta dla Ciebie</h2>
								<ul> 
									<?php //str_replace(" ", "-", $w_czym_zamienic); ?>
									<?php 
										require("location: ./../scripts/connect.php");	
										$result = $conn->query("SELECT title, url from tag_offer limit 12");
																							
										if($result->num_rows != 0){
											while($row = $result -> fetch_assoc()){
												echo "<li><a href='?content=oferta#".$row["url"]."'> #".$row["title"]."</a></li>";
											}
										}
										
										$conn->close();
									?>
								</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 kontakt-company text-center" >
					<div class="container">
						<div class="row">
							<h2>Recenzje klientek <hr /></h2><br>
							<div class="col-xs-12">
								<div class="col-md-4 col-sm-4 box-short-opinion">
									<img class="img-circle" src="./img/people/avatar.png">
									<p>-----</p>
									<blockquote class="text-left">
										<span><b>Misia</b></span>
										<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate sollicitudin metus, sit amet dignissim nunc ullamcorper vel.</small>
										<small><b>Data</b></small>
									</blockquote>
								</div>
								<div class="col-md-4 col-sm-4 box-short-opinion">
									<img class="img-circle" src="./img/people/avatar.png">
									<p>-----</p>
									<blockquote class="text-left">
										<span><b>Misia</b></span>
										<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate sollicitudin metus, sit amet dignissim nunc ullamcorper vel.</small>
										<small><b>Data</b></small>
									</blockquote>
								</div>
								<div class="col-md-4 col-sm-4 box-short-opinion">
									<img class="img-circle" src="./img/people/avatar.png">
									<p>-----</p>
									<blockquote class="text-left">
										<span><b>Misia</b></span>
										<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate sollicitudin metus, sit amet dignissim nunc ullamcorper vel.</small>
									'	<small><b>Data</b></small>
									</blockquote>
								</div>
								<div class="col-xs-12"><a class="button-default" href="?content=recenzje#opinion">więcej</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 kontakt-company text-center" style="background-image: url('./img/background/seigaiha.png');">
					<div class="container">
						<div class="row">
							<h2>Skontaktuj się ze mną</h2>
							<div class="col-xs-12" style="background: rgba(0,0,0,.2)">eeeeeee</div>
							<div class="col-sm-6 text-right"> 
								Jeśli masz więcej pytań zadzwoń
							</div>
							<div class="col-sm-6 text-left">
								<i class="icon-phone"></i> 222222222
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>