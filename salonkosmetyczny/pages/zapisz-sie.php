		<div class="container-fluid">
            <div class="row">
				<div class="col-xs-12 text-center about-company">
					<div class="container">
						<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-left">											
							<div class="col-xs-12 col-sm-8 col-sm-offset-2">
								<h3>Aby zarejstrować wizytę Zaloguj się albo Zadzwoń</h3><h5>Dla nowych klientów posiadających konto rabat 10% do wszystkich usług</h5><br>
								<form class="form-user" action="./scripts/login.php" method="post">
									<?php
										//session info error
										if(isset($_SESSION["ERROR"])){ 
											echo <<<HTML
											<div class="col-12 box-validation bg-danger">
												$_SESSION[ERROR]
											</div>
HTML;
										} 
										unset($_SESSION["ERROR"]);
										//session info SUCCESS
										if(isset($_SESSION["SUCCESS"])){ 
											echo <<<HTML
											<div class="col-12 box-validation bg-success">
												$_SESSION[SUCCESS]
											</div>
HTML;
										} 
										unset($_SESSION["SUCCESS"]);
									?>
									<div class="form-group">
										<label for="inputEmail">Adres email </label>
										<input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="uzytkownik@email.pl">
									</div>
									<div class="form-group">
										<label for="inputPassword">Twoje hasło</label>
										<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Hasło">
									</div>
									<button type="submit" class="button-default" style="display: inline-block">Zaloguj się</button> 
									<a class="button-default" href="./?content=zarejestruj-sie" style="display: inline-block">Zarejestruj się</a>
								</form>
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
			</div>
		</div>