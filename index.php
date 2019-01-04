
<!DOCTYPE html>
<html lang="en">

<head><title>SaYara</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
	<link type="text/css" rel="stylesheet" href="assets/liste.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
	<script src="js/j1.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }


    </script>
	<script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    
</head>
<body><!-- HEADER-->
<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
					

					
            </div>
            <div class="topbar-right pull-right">
                <div class="socials">
				</div>
				<?php
				session_start();
				if(!isset($_SESSION['login']) ){
					echo ' <div class="group-sign-in"><a href="login.php" class="login">Se Connecter</a><a href="register.php" class="register">Inscription</a></div> ';
				}else{
					if($_SESSION['type']=="Admin"){
						echo '<div class="group-sign-in">
						<a href="lister.php" class="register">Lister Les Membres</a>
						<a href="#" class="login"> | Connecté par  '.$_SESSION['login'] .' ( '.$_SESSION['mail'].' )  </a>
						<a href="deconnexion.php" class="register">Se Déconnecter</a></div>'; 
						}else{
						echo '<div class="group-sign-in">
						<a href="#" class="login"> Connecté par  '.$_SESSION['login'] .' ( '.$_SESSION['mail'].' )  </a><a href="deconnexion.php" class="register">Déconnecter</a></div>'; 						
						}
					}
				?>
                
            </div>
        </div>
    </div>
    <div class="header-main homepage-01">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="navbar-heade">
                    <div class="logo pull-left"><a href="index.php" class="header-logo"><img src="assets/images/1.png" alt=""/></a></div>
                    <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <nav class="navigation collapse navbar-collapse pull-right">
                    <ul class="nav-links nav navbar-nav">
                        <li ><a href="index.php" class="main-menu">Accueil</span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                 </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu">Voitures<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="affiche_voit.php" class="link-page">Nouvelles voitures</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="contact.php" class="main-menu">Contact</a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content"><!-- SLIDER BANNER-->
				<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>

        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/22.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #242C42; line-height: 60px;">SaYara.tn</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;"></div>
                

               
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/54.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/55.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>
    
                <!-- CHOOSE COURSES-->
				<div class="section section-padding top-courses" id="top">
                    <div class="container">
                        <div class="group-title-index"><h4 class="top-title">les derniers Voitures</h4>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="top-courses-wrapper">
                            <div class="top-courses-slider">
							<?php
									require_once('voit.php');
		
		
			
												$liste=voiture::lister();
												
														
											foreach($liste as $cle=>$valeur)
												{
												 if($cle<2){
												echo '
															<div class="top-courses-item">
												<div class="edugate-layout-2">
													<div class="edugate-layout-2-wrapper">
														<div class="edugate-content"><a href="#" class="title">'.$valeur[1].'</a>

                                                <div class="info">
                                                    <div class="author item"><a href="#">By Admin</a></div>
                                                     <div class="date-time item"><a href="#">'.$valeur[2].'</a></div>
                                                    <div class="date-time item"><a href="#">'.$valeur[7].'</a></div>
                                                </div>
                                                
                                                <div class="description"> Puissnace fiscal : '.$valeur[3].'<br>
														 Type Boite :'.$valeur[5].'<br>
														 Prix : '.$valeur[6].'</div>';
												if(isset($_SESSION['login']) && ($_SESSION['type']=="Admin")  ){
															echo '<ul style="list-style:none;">
														<li style="float:left;margin-right:5%;"><a href="modifier_voit.php?id='.$valeur[0].'"><i class="icon-remove">Modifier</i></a></li>
														<li><a href="supprimer_voit.php?id='.$valeur[0].'"><i class="icon-cog">Supprimer</i></a></li>
														</ul>';
															
														}
												echo '
                                                <a href="detail_voit.php?id='.$valeur[0] .'" class="btn btn-green"><span>Lire la suite</span></a>
                                            </div>
                                            <div class="edugate-image"><img src="'.$valeur[8].'" alt="" class="img-responsive"/></div>
                                        </div>
                                    </div>
                                </div>
												
												';
												
												}
												
												}
							
							?>
							
                                
                                
								</div>
                           <!-- <div class="group-btn-top-courses-slider">
                                <div class="btn-prev">&lsaquo;</div>
                                <div class="btn-next">&rsaquo;</div>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                <!-- PROGRESS BARS-->
                <div class="section progress-bars section-padding">
                    <div class="container">
                        <div class="progress-bars-content">
                            <div class="progress-bar-wrapper"><h2 class="title-2">Statistique</h2>

                                <div class="row">
                                    <div class="content">
                                        <div class="col-sm-3">
										<?php
											require_once('class_user.php');
											//require_once('class_article.php');
											$liste=user::lister();
											//$liste_art=voiture::lister();
											
										?>
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="<?php 
													$p=0;	
													foreach($liste as $cle=>$valeur)
													{	
													if(($valeur[6]=="Client")){
													$p++;
													}}
													echo $p;
												?>" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">Utilisateur</p></div>
												
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="progress-bar-number">
                                      <div data-from="0" data-to="<?php require_once('voit.php');$liste=voiture::lister(); echo count($liste); ?>" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">Voitures</p></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="<?php 
													require_once('class_dispo.php');
													require_once('voit.php');
													
												$liste1=Dispo::lister();
												$liste2= voiture::lister();
												
													
													foreach($liste1 as $cle=>$valeur)
													{	
													if(($valeur[3] <= date('Y-m-d') )){
												
													Dispo::supprimer_dispo($valeur[1]);

													}}
												echo count($liste2)-count($liste1);
												?>" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">Voitures Disponnible</p></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="<?php 
													echo count($liste1);
												?>" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">Voitures Non Disponible</p></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="group-btn-slider">
                                    <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <!-- SLIDER LOGO-->
                <div class="section slider-logo">
                    <div class="container">
                        <div class="slider-logo-wrapper">
                            <div class="slider-logo-content">
                                <div class="carousel-logos owl-carousel">
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/b.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/f.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/k.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/l.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/t.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/w.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/m.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/o.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/r.gif" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/c.jpg" alt="" class="img-responsive"/></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a>
	<?php if(isset($_SESSION['login'])){ ?>
	<div id="wrapper">
    <input type="checkbox" id="menu" name="menu" class="menu-checkbox">
	  
	</div>
<!-- #wrapper -->
	</div>
	<?php } ?>
	</div>
<!-- FOOTER-->
<footer>
    
    <div class="footer-main">
        <div class="container">
            <div class="footer-main-wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="edugate-widget widget">
                                <div class="title-widget">INFO</div>
                                <div class="content-widget"><p>Site SaYara vous facilite la location de voitures il a été crée par un jeune étudiante.</p>

                                    <div class="info-list">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i><a href="#">SaYara@gmail.com</a></li>
                                            <li><i class="fa fa-phone"></i><a href="#">+21629239959</a></li>
                                            <li><i class="fa fa-map-marker"></i>

                                                <span style="color: white"> Tunis Le Kram </span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="useful-link-widget widget">
                                <div class="title-widget">USEFUL LINKS</div>
                                <div class="content-widget">
                                    <div class="useful-link-list">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Membres</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Agences</a></li>
                                                 
                                                  
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Site Map</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <!--<ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Company</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Latest Courses</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Partners</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Blog Post</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Help Topic</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Policies</a></li>
                                                </ul>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="gallery-widget widget">
                                <div class="title-widget">Publicité</div>
                                <div class="content-widget">
                                    <div class="gallery-list">
                                        <a href="#" class="thumb"><img src="assets/images/gallery/golf.jpg"class="img-responsive"/></a>
                                        <a href="#" class="thumb"><img src="assets/images/gallery/symbole.jpg"class="img-responsive"/></a>
                                        <a href="#" class="thumb"><img src="assets/images/gallery/toyota.jpg" class="img-responsive"/></a>
                                        <a href="#" class="thumb"><img src="assets/images/gallery/s.jpg"class="img-responsive"/></a>
                                        <a href="#" class="thumb"><img src="assets/images/gallery/f.jpg"class="img-responsive"/></a>
                                        <a href="#" class="thumb"><img src="assets/images/gallery/p.jpg"class="img-responsive"/></a>
                                        <a href="#" class="thumb"><img src="assets/images/gallery/91.jpg"class="img-responsive"/></a>
                                        <a href="#" class="thumb"><img src="assets/images/gallery/c.png" class="img-responsive"/> </a> </div>
                                    <div class="clearfix"></div>
                                    <a href="#" class="view-more">View more&nbsp;<i class="fa fa-angle-double-right mls"></i></a></div>
                            </div>
                        </div>
                       <!--<div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="mailing-widget widget">
                                <div class="title-widget">MAILING</div>
                                <div class="content-wiget"><p>Sign up for our mailing list to get latest updates and offers.</p>

                                    <form action="http://swlabs.co/edugate/index.html">
                                        <div class="input-group"><input type="text" placeholder="Email address" class="form-control form-email-widget"/><span class="input-group-btn"><input type="submit" value="✓" class="btn btn-email"/></span></div>
                                    </form>
                                    <p>We respect your privacy</p>

                                    <div class="socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a><a href="#" class="blog"><i class="fa fa-rss"></i></a><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="hyperlink">
                <div class="pull-left hyper-left">
                    <ul class="list-inline">
                        <li><b>SaYara.tn</b> est sponsorisé par l'agence UNO </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<!-- THEME SETTING-->
<!-- LOADING-->
<div class="body-2 loading">
    <div class="dots-loader"></div>
</div>
<!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/1.png');
}</script>
<script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="assets/js/pages/homepage.js"></script>
<script>
        jssor_1_slider_init();
    </script>
	
</body>

</html>