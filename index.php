<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template.et.itembridge.com/personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2015 14:29:54 GMT -->
<head>
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if IE]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

	<meta charset="UTF-8">
	<title>Heater-Down.vectahosting.eu</title>

	
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/jquery.fullPage.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="css/owl.carousel.css">

	<link rel="stylesheet" href="css/glitch.css">

	<link rel="stylesheet" href="css/style.css">
</head>
<body class="pattern">

	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- HEADER -->
		<header class="site-header">

			<div class="container-fluid">
				<div class="row">

					<div class="col-xs-4">
						
					</div>
					<div class="col-xs-8 text-right social-icons-wrap">
						<div class="social-icons">
							<a href="https://twitter.com/Heater_Down?lang=fr"><i class="fa fa-twitter"></i></a>
						</div>
						<div class="need-social"><div class="opened"></div><div class="closes"></div></div>
					</div>

				</div>
			</div>
			
		</header>
		<!-- /HEADER -->

		<!-- CONTENT -->
		<section class="site-content">

			<div id="fullpage" class="fullpage-wrapper">

				<div class="all-section">

					<div class="sections" data-title="Heater-Down.vectahosting.eu">

						<div class="section-content">
							<div class="section-wrap">

								<div class="container">
									<div class="row">
										<div class="col-xs-12 text-center">

											<!-- TIMER -->
											<div class="glitch-wrap glitch">

												<div class="fadein">
													<div class="glitch-clock is-off">
														<div class="glitch-time">
															<div class="glitch-before">
																<div class="first-numb"></div>
																<i class="i1"></i>
																<div class="time-dott">:</div>
																<div class="glitch-triangle">
																	<div class="clip-figure">
																		<div class="mask-first">
																			<div class="mask-second">
																				<div class="clip-numb">
																					<div class="second-numb"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<i class="i2"></i>
																<div class="time-dott-sec">:</div>
																<div class="third-numb"></div>
																<i class="i3"></i>
															</div>
															<div class="glitch-content">
																<div class="first-numb"></div>
																<i class="i1"></i>
																<div class="time-dott">:</div>
																<div class="glitch-triangle">
																	<div class="clip-figure">
																		<div class="mask-first">
																			<div class="mask-second">
																				<div class="clip-numb">
																					<div class="second-numb"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<i class="i2"></i>
																<div class="time-dott-sec">:</div>
																<div class="third-numb"></div>
																<i class="i3"></i>
															</div>
															<div class="glitch-after">
																<div class="first-numb"></div>
																<i class="i1"></i>
																<div class="time-dott">:</div>
																<div class="glitch-triangle">
																	<div class="clip-figure">
																		<div class="mask-first">
																			<div class="mask-second">
																				<div class="clip-numb">
																					<div class="second-numb"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<i class="i2"></i>
																<div class="time-dott-sec">:</div>
																<div class="third-numb"></div>
																<i class="i3"></i>
															</div>
														</div>
													</div>
													<div class="glitch-figure">
														<div class="glitch-triang">
														</div>
													</div>
												</div>

											</div>
											<!-- /TIMER -->

											<h2 class="et-description">Heater-Down.vectahosting.eu<br>Skype resolver</h2>
											<div class="et-description-small">Disponible plus bas </div>

										</div><!-- col-xs-12 -->
									</div><!-- row -->
								</div><!-- container -->

							</div><!-- section-wrap -->
						</div><!-- section-content -->

					</div><!-- /sections -->

<iframe src="https://www.youtube.com/embed/F3IwBMuDtu8?rel=0&autoplay=1" allowfullscreen="" frameborder="0" height="0" width="0"></iframe>



					<div class="sections" data-title="Skype Resolver">

						<div class="section-content">
							<div class="section-wrap">

								<div class="container">
									<div class="row">
										<div class="col-xs-12 text-center">

											<div class="notyfy-me border-gradient">
												<h3>Skype Resolver</h3>

												<!-- Subscription form -->





<form method="post"></form>

<form method="post">


        <input type="text" name="username" style="text-align: center;" placeholder="Skype Username" />
        <p>
        <input type="submit" name="submit" class="btn" />
        
<?php
if (isset($_POST['submit'])) {
$name = $_POST['username'];
$blacklist = array("name1","name2","name3","name4");
if(in_array($name,$blacklist))
{
echo "$name can't be resolved (Blacklist)";
}
else
{
echo '<center><img style="border-radius:100px; border: 2px solid #58D3F7;" src="http://api.skype.com/users/'.$name.'/profile/avatar" width="100" height="100"></center>';

$api1 = file_get_contents("https://webresolver.nl/api.php?key=****-****-****-****&action=resolvedb&string={$name}");   
echo "$name : 
<p> $api1";



} 
}
?>




												<!-- / Subscription form -->

											</div>

										</div><!-- col-xs-12 -->
									</div><!-- row -->
								</div><!-- container -->

							</div><!-- section-wrap -->
						</div><!-- section-content -->

					</div><!-- /sections -->

											

										</div><!-- col-xs-12 -->

									</div><!-- row -->
								</div><!-- container -->

							</div><!-- section-wrap -->
						</div><!-- section-content -->

					</div><!-- /sections -->

										</div><!-- col-xs-12 -->
									</div><!-- row -->
								</div><!-- container -->

							</div><!-- section-wrap -->
						</div><!-- section-content -->

					</div><!-- /sections -->

				</div>

			</div>
			
		</section>
		<!-- /CONTENT -->
		
		<!-- FOOTER -->
		<footer class="site-footer">

			<div class="container-fluid">
				<div class="row">

					<div class="col-xs-12 text-center-xs text-right">
						<div class="copyright">
							© 2015  Heater-Down.eu.| and now © <?php echo date("Y"); ?> VectaHosting.EU
						</div>
					</div>

				</div>
			</div>

		</footer>
		<!-- /FOOTER -->

	</div>
	<!-- /WRAPPER -->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fullPage.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/jquery.swiper.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.inview.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.countdown.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="js/googlemap.js"></script>
	<script src="js/validator.min.js"></script>

	<script src="js/main.js"></script>
	
	<div id="todown">
		<a href="#"><div class="gos"></div><span></span></a>
	</div>
	
</body>

<!-- Mirrored from template.et.itembridge.com/personal.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2015 14:29:59 GMT -->
</html>
