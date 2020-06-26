		<div class="container-fluid">
            <div class="row">
				<div class="col-xs-12 text-center about-company">
					<div class="container">
						<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-left">											
							<div class="col-xs-12 col-sm-8 col-sm-offset-2">
								<h3>Aby utworzyć konto uzupełnij wszystkie pola poniższego formularza</h3><br>
								<form class="form-user" action="./scripts/register.php" method="post">
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
									?>
									<p class="text-center">Dane personalne:</p>
									
									<div class="form-group input-two-rows">
										<label class="col-xs-12" style="padding: 0;" for="inputName">Imię <span class="hidden-xs">i Nazwisko</span></label>
										<div class="col-xs-12 col-sm-6" style="padding: 0;">
											<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Podaj imię">
										</div>
										<label class="col-xs-12 visible-xs" style="padding: 0; margin-top: 15px" for="inputLastName">Nazwisko</label>
										<div class="col-xs-12 col-sm-6" style="padding: 0;">
											<input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Podaj nazwisko">
										</div>
									</div>
									<div class="form-group input-two-rows">
										<label class="col-xs-12" style="padding: 0; margin-top: 15px" for="inputAddress">Adres<span class="hidden-xs"> i Miejscowość</span></label>
										<div class="col-xs-12 col-sm-5" style="padding: 0;">
											<input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Garbary 28/2">
										</div>
										<div class="col-xs-6 col-sm-3" style="padding: 0;">
											<input type="text" class="form-control" id="inputPostCode" name="inputPostCode" placeholder="51-987">
										</div>
										<div class="col-xs-6 col-sm-4" style="padding: 0;">
											<select class="custom-select my-1 mr-sm-2" id="selectCity" name="selectCity">
												<option selected value="1">Poznań</option>
											 </select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" style="margin-top: 15px">Telefon</label>
										<input type="tel" class="form-control" maxlength=9 id="inputPhone" name="inputPhone"  placeholder="345345345">
									</div>
									<br>
									<p class="text-center">Dane do konta:</p>
									
									<div class="form-group">
										<label for="inputEmail">Adres email </label>
										<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="uzytkownik@email.pl">
									</div>
									<div class="form-group">
										<label for="inputPassword">Twoje hasło</label>
										<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Podaj hasło">
									</div>
									<div class="form-group">
										<label for="inputPasswordConfirm">Potwierdź hasło</label>
										<input type="password" class="form-control" id="inputPasswordConfirm" name="inputPasswordConfirm" placeholder="Wpisz ponownie hasło">
									</div>
									<?php 
										//session info error
										if(isset($_SESSION["ERROR_PASSWORD"])){ 
											echo <<<HTML
											<div class="col-12 box-validation bg-danger">
												$_SESSION[ERROR_PASSWORD] 
											</div>
HTML;
										} 
										unset($_SESSION["ERROR_PASSWORD"]);
									?>
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="checkTerm" name="checkTerm" value="agree">
										<label class="form-check-label" for="checkTerm"> <small>Akceptuję <a target="_blank" href="./?content=regulamin">regulamin</a> serwisu </small></label>
									 </div>
									<div class="col-12">
										<small>Klikinij <a target="_blank" href="./?content=polityka-prywatnosci">tutaj</a> aby zapoznać się z polityką prywatności</small>
									</div>
									<button type="submit" class="button-default" style="display: inline-block; width: 100%;">Załóż konto</button> 
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