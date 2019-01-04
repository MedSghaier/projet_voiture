<?php require_once('voit.php');
		
		$a=$_GET['id'];
		$liste=voiture::recherche_voit($a);
		
		
		?>
		<html lang="en">

<head><title>Detail voiture</title>
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
					echo ' <div class="group-sign-in"><a href="login.php" class="login">Connecter</a><a href="register.php" class="register">Inscription</a></div> ';
				}else{
					if($_SESSION['type']=="Admin" || $_SESSION['type']=="Super" ){
						echo '<div class="group-sign-in">
						<a href="lister.php" class="register">Lister Les Membres</a>
						<a href="#" class="login"> | Connecté par  '.$_SESSION['login'] .' ( '.$_SESSION['type'].' )  </a>
						<a href="deconnexion.php" class="register">deconnecter</a></div>'; 
						}else{
						echo '<div class="group-sign-in">
						<a href="#" class="login"> Connecté par  '.$_SESSION['login'] .' ( '.$_SESSION['type'].' )  </a><a href="deconnexion.php" class="register">deconnecter</a></div>'; 						
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
                                <li><a href="affiche_voit.php" class="link-page">Nouvelle</a></li>
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
                        <div class="page-title-wrapper"><h2 class="captions">Voiture detaillée</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="affiche_voit.php">Voiture</a></li>
                                <li class="active"><a href="#">Detail</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="section section-padding news-detail">
                    <div class="container">
                        <div class="news-detail-wrapper">
                            <div class="row">
                                <div class="col-md-9 col-sm-12" style="width:100%;">
                                    <div class="news-detail"><img src="<?php echo $liste[8]; ?>" height="60%;"  alt="" class="news-image"/>

                                        <h1 class="title-news"><?php echo $liste[2]; ?></h1>
											<div class="news-content">
                                            <div class="news-des"><p></p></div>
                                            <div class="text-news">
                                                <div class="wide-text">
												<p>
												<?php echo "Matricule : <b>".$liste[1]."</b>"; ?>
												</p>
												<p>
												<?php echo "Puissance : <b>".$liste[3]."</b>"; ?>
												</p>
												<p>
												<?php echo "Nombre de place : <b>".$liste[4]."</b>"; ?>
												</p>
												<p>
												<?php echo "Prix : <b>".$liste[6]." DT </b>"; ?>
												</p>
												<p>
												<?php 
												require_once('class_dispo.php');
												$liste1= Dispo :: recherche_dis( $_GET['id']);
												if($liste1){
												if(isset($_SESSION['login'])){
												if($_SESSION['type']=='Client'){
												if(date("Y-m-d")<$liste1[3]){
												echo "<b>voiture non Disponible jusqu'à : </b>".$liste1[3]; 
													}else{
														$liste3= Dispo :: lister();
														foreach($liste3 as $cle=>$valeur){
															if($liste1[3] < date("Y-m-d"))
															{
															$tab=Dispo::supprimer_dispo($liste1[0]);
															
															}
															
														}
														
														echo '<a href="dispo.php?id='.$_GET['id'].'" class="btn btn-green"><span>Allouer</span></a>';		
													}
												}
												}
												}else{
												if(isset($_SESSION['login'])){
												if($_SESSION['type']=='Client'){
												echo '<a href="dispo.php?id='.$_GET['id'].'" class="btn btn-green"><span>Allouer</span></a>';
												}
												
												}
												
												}
												
												
												?>
												</p>
												</div>                                            
                                        </div>
                                        
                                        
										
										
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
<script src="assets/js/pages/new-detail.js"></script>
</body>

<!-- Mirrored from swlabs.co/edugate/news-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jan 2016 15:46:46 GMT -->
</html>