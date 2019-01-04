<!DOCTYPE html>
<html lang="en">

<head><title>Affiche-voiture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
	<!-- <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">-->
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }


    </script>
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
						<a href="#" class="login"> Connecté par  '.$_SESSION['login'] .' ( '.$_SESSION['mail'].' )  </a><a href="deconnexion.php" class="register">Se Déconnecter</a></div>'; 						
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
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Toutes les voitures</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accuiel</a></li>
                                <li class="active"><a href="#">Voiture</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                    </div>
                </div>
                <div class="section section-padding courses">
                    <div class="container">
                        <div class="courses-wrapper"><!-- Nav tabs-->
                            <div class="row top-content">
                                <div class="col-md-3">
                                    <div class="result-output text-left"><p class="result-count">Nombres des Voitures : <strong>
									<?php require_once('voit.php');$liste=voiture::lister(); echo count($liste); ?>
									</strong> </p></div>
                                </div>
                                <div class="col-md-6">
                                   <?php
									if(isset($_SESSION['login']) && ($_SESSION['type']=="Admin")){
                                    echo '<ul role="tablist" class="nav nav-tabs edugate-tabs">
                                        <li role="presentation" ><a href="ajouter_voit.php"  class="text">Ajouter Voiture</a></li>
                                        <li role="presentation"><a href="affiche_voit.php"  class="text">Lister Voiture</a></li>
									</ul>';
									}else{
									 echo '<ul role="tablist" class="nav nav-tabs edugate-tabs">
                                        <li role="presentation"><a href="affiche_voit.php"  class="text">Lister Voiture</a></li>
									</ul>';
									}
										?>
                                </div>
                                <div class="col-md-3">
                                    <ul class="btn-list-grid list-unstyled text-right">
                                        <li class="active">
                                            <button class="btn-grid"><i class="fa fa-th-large"></i></button>
                                        </li>
                                        <li>
                                            <button class="btn-list"><i class="fa fa-th-list"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tab panes-->
                            <div class="tab-content courses-content">
                                <div id="campus" role="tabpanel" class="tab-pane fade in active">
                                    <div class="style-show style-grid row">
									
									<?php
									require_once('voit.php');
		
		
			
												$liste=voiture::lister();
												
														
											foreach($liste as $cle=>$valeur)
											{	
											
											
												echo'	<div class="col-style">
												<div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a href="#" class="title">'.$valeur[1].'</a>

                                                        <div class="info">
                                                            <div class="author item"><a href="#">Admin</a></div>
                                                            <div class="date-time item"><a href="#">'.$valeur[7].'</a></div>
                                                        </div>
                                                        
                                                            
                                                           
                                                        <div class="description"> Puissnace fiscal : '.$valeur[3].'<br>
														 Type Boite :'.$valeur[5].'<br>
														 Prix : '.$valeur[6].'</div>';
														if(isset($_SESSION['login']) && ($_SESSION['type']=="Admin")){
															echo '<ul style="list-style:none;">
														<li style="float:left;margin-right:5%;"><a href="modifier_voit.php?id='.$valeur[0].'"><i class="icon-remove">Modifier</i></a></li>
														<li><a href="supprimer_voit.php?id='.$valeur[0].'"><i class="icon-cog">Supprimer</i></a></li>
														</ul>';
															
														}
														echo '
                                                        <a href="detail_voit.php?id='.$valeur[0] .'"><button class="btn btn-green"><span>lire la suite</span></button></a>
                                                    </div>
                                                    <div class="edugate-image"><img src="'.$valeur[8].'" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div> ';
											
												
			
											}
									?>
									
                                        
                                         
				                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
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
                                <div class="content-widget"><p>Site SaYara vous facilite la location de voitures il a été crée par un jeune étudiant Yassine Meaoui.</p>

                                    <div class="info-list">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i><a href="#">SaYara@gmail.com</a></li>
                                            <li><i class="fa fa-phone"></i><a href="#">+21698998877</a></li>
                                            <li><i class="fa fa-map-marker"></i><a href="#">

                                                <p>Tunis L'Aouina</p></a></li>
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
                        <li><b>SaYara.tn</b> est sponsorisé par IMSET By Yassine Meaoui </li>
                    </ul>
                </div>
                <div class="pull-right hyper-right">@ Yassine Meaoui </div>
            </div>
        </div>
    </div>
</footer>
<!-- THEME SETTING-->

<!-- LOADING--><!-- JAVASCRIPT LIBS-->

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
<script src="assets/js/pages/courses.js"></script>
</body>

</html>