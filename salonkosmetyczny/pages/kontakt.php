        <div class="container-fluid">
            <div class="row">
				<div class="col-xs-12 content gaeery" id="contact">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-xs-12 text-center hidden-xs">
								<img class="img-responsive img-circle picture-center" src="./img/<?php image("information","avatar");?>"  
									alt="<?php alt_image("information","avatar");?>" style="margin-top: 10px;">
							</div>
							<div class="col-sm-6 col-xs-12">
								<address>
									<p>
										<h2><?php siteMainInfo("title");?></h2> 
										<strong><?php siteMainInfo("title_business");?></strong>
									</p>
									<p>
										<strong>Zarezerwuj wizytę:</strong>  <br /><br />
										<i class="icon-phone" style="margin-left: 10px;"></i> <?php echo getContact("phone");?>
									</p>
									
									<br />
									
									<p>
										<strong>Napisz do mnie</strong> <br /><br />
										<a href="mailto:" style="text-decoration: none; color: #4D163C;">
											<i class="icon-mail-alt" style="margin-left: 10px;"></i> <?php echo getContact("email");?>
										</a>
									</p>
								</address>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>