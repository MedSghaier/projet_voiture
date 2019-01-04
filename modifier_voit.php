<?php
require_once("voit.php");

		if(isset($_POST['ok'])){
				if (!isset($_FILES['image']['tmp_name'])) {
			echo "";
			}else{
			$file=$_FILES['image']['tmp_name'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/voitures/" . $_FILES["image"]["name"]);
			
			$location="uploads/voitures/" . $_FILES["image"]["name"];
			
			$liste=voiture::recherche_voit($_POST['id']);
			
			
				voiture::modifier_voit($_POST['id'],$_POST['mat'],$location,$_POST['date']);
					header('Location: affiche_voit.php');
			
			}
		}

		
			

?>
<html lang="en">

<head><title>Edugate | Courses</title>
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
	<link type="text/css" rel="stylesheet" href="assets/form_ajouter.css">
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
                                <li><a href="events.html" class="link-page">Tous les voitures</a></li>
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
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Toutes les articles</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li ><a href="courses.php">voiture</a></li>
								<li class="active"><a href="#">Modifier voiture</a></li>
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
                                    <div class="result-output text-left"><p class="result-count">Nombres des voitures <strong>
									<?php require_once('voit.php');$liste=voiture::lister(); echo count($liste); ?>
									</strong> </p></div>
                                </div>
                                <div class="col-md-6">
								<?php
									if(isset($_SESSION['login'])){
                                    echo '<ul role="tablist" class="nav nav-tabs edugate-tabs">
                                        <li role="presentation" ><a href="ajouter_article.php"  class="text">Ajouter Article</a></li>
                                        <li role="presentation"><a href="courses.php"  class="text">Lister Article</a></li>
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
                                
                                <div id="wrapper">
								<?php 
									require_once('class_user.php');
										$a=$_GET['id'];
										$liste=voiture::recherche_voit($a);
										$b=$liste[2];
								?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Modifier Voiture</legend>
				<div>
				<img src="<?php echo $liste[8]  ;?>" style="width:50%;height:30%;" /></br></br>
				</div>
                <div>
	                <input type="text" name="id" placeholder="id" value="<?php echo $_GET['id']  ;?>" hidden />
                    <input type="text" name="mat" placeholder="titre de l'article" value="<?php echo $liste[1]  ;?>" />
                </div>
                <div>
                    <input type="file" name="image" "/>
                </div>
                <div>
                    <input type="text" name="date"   value="<?php echo date("Y-m-d H:i:s"); ?>" hidden />
                </div>
                   
                <input type="submit" name="ok" value="Modifier"/>
            </fieldset>    
        </form>
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
                                <div class="title-widget">EDUGATE</div>
                                <div class="content-widget"><p>Edugate is a great start for an education personnel or organization to start the online business with 1 Click.</p>

                                    <div class="info-list">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i><a href="#">hello@edugate.com</a></li>
                                            <li><i class="fa fa-phone"></i><a href="#">P: 3333 222 1111</a></li>
                                            <li><i class="fa fa-map-marker"></i><a href="#"><p>99 Barnard St - Suite 111</p>

                                                <p>United States - GA 22222</p></a></li>
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
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Teachers</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Courses</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Support</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Why Edugate</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Social Media</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Site Map</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Company</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Latest Courses</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Partners</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Blog Post</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Help Topic</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Policies</a></li>
                                                </ul>
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
                                <div class="title-widget">GALLERY</div>
                                <div class="content-widget">
                                    <div class="gallery-list"><a href="#" class="thumb"><img src="assets/images/gallery/gallery-01.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-02.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-03.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-04.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-05.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-06.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-07.jpg" alt="" class="img-responsive"/></a><a href="#" class="thumb"><img src="assets/images/gallery/gallery-08.jpg"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        alt="" class="img-responsive"/></a></div>
                                    <div class="clearfix"></div>
                                    <a href="#" class="view-more">View more&nbsp;<i class="fa fa-angle-double-right mls"></i></a></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="hyperlink">
                <div class="pull-left hyper-left">
                    <ul class="list-inline">
                        <li><a href="index-2.html">HOME</a></li>
                        <li><a href="courses.html">COURSES</a></li>
                        <li><a href="about-us.html">ABOUT</a></li>
                        <li><a href="categories.html">PAGES</a></li>
                        <li><a href="news.html">NEWS</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </div>
                <div class="pull-right hyper-right">@ SWLABS</div>
            </div>
        </div>
    </div>
</footer>
<!-- THEME SETTING-->
<div class="theme-setting">
    <div class="theme-loading">
        <div class="theme-loading-content">
            <div class="dots-loader"></div>
        </div>
    </div>
    <a href="javascript:;" class="btn-theme-setting"><i class="fa fa-tint"></i></a>

    <div class="content-theme-setting"><h2 class="title">setting color</h2>
        <ul class="list-unstyled list-inline color-skins">
            <li data-color="color-1"></li>
            <li data-color="color-2"></li>
            <li data-color="color-3"></li>
            <li data-color="color-4"></li>
            <li data-color="color-5"></li>
            <li data-color="color-6"></li>
            <li data-color="color-7"></li>
            <li data-color="color-8"></li>
            <li data-color="color-9"></li>
            <li data-color="color-10"></li>
        </ul>
    </div>
</div>
<!-- LOADING--><!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
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
<script src="assets/js/pages/courses.js"></script>
</body>

<!-- Mirrored from swlabs.co/edugate/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jan 2016 15:45:31 GMT -->
</html>