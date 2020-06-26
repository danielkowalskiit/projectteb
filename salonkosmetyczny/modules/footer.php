		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 div-footer">
					<div class="col-md-12 col-sm-12 col-xs-12 foot-info" >
						<div class="foot-content">
							<div class="col-md-6 col-sm-6 col-xs-12 text-center">
									<a target="_blank" href="<?php echo getContact("fb");?>"><i class="icon-facebook"></i></a>
									<a target="_blank" href="<?php echo getContact("ig");?>"><i class="icon-instagram"></i></a>
								</div>
							<div class="col-md-6 col-sm-6 col-xs-12 text-center">
								<p>Na skróty</p>
								<ul>
									<li><a href="?content=galeria">Galeria</a></li>
									<li><a href="?content=cennik">Cennik</a></li>
									<li><a href="#">Zapisz się</a></li>
									<li class="hidden-xs"><a href="?content=kontakt">Kontakt</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 foot text-center" >
						<div class="container">
							<div class="row">
								<span id="datacopyright">Copyright &copy 
									<?php
										$actualYear = date('Y');
										
										echo $actualYear.", ";
										echo siteMainInfo("title")." | ";
										echo siteMainInfo("title_business");
									?> 
										 
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <small><a href="#" id="scroll-to-top" class="scrol-css"><i class="icon-up-open-big"></i></a></small> 