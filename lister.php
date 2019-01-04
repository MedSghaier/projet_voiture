<html lang="en">

<head><title>Home</title>
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
	<style>
table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    
    color: white;
}
</style>
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
	<div style="margin-top:5%;margin-bottom:5%;">
	<h1 style="margin-left:3%;"> Tous les utilisateurs :</h1>
        <?php
		require_once('class_user.php');
		require_once('class_dispo.php');
		require_once('voit.php');
		if(($_SESSION['login'])){
			if($_SESSION['type']=="Admin"){
			
			$liste=user::lister();
				echo '<table align="center" border="1" width="90%">';
				echo ' <tr style="background-color:#86bc42">
						<th style="text-align:center">Avatar</th>
						<th style="text-align:center">Nom</th>
						<th style="text-align:center">Prenom</th>
						<th style="text-align:center">Type</th>
						<th style="text-align:center">Mail</th>
						<th style="text-align:center">Action</th>
						<th style="text-align:center">Voiture</th>
						</tr>';
				foreach($liste as $cle=>$valeur)
				{	
				$liste1=Dispo::rech_voit__dispo($valeur[1]);		
				$liste2=voiture::recherche_voit($liste1[1]);
				echo'<tr>';
						echo '<td style="text-align:center"><img src="'.$valeur[7] .'" style="width:15em;height:7em;"/></td>';
						echo '<td style="text-align:center">'.$valeur[1] .'</td>';
						echo '<td style="text-align:center">'.$valeur[2] .'</td>';
						echo '<td style="text-align:center">'.$valeur[6] .'</td>';
						echo '<td style="text-align:center">'.$valeur[5] .'</td>';
					echo '<td style="text-align:center"><a class="boutonsupprimer" href=supprimer_user.php?id='.$valeur[0] .' ">Supprimer</a>
					| <a href="modifier_user.php?id='.$valeur[0] .' ">Modifier </a>
					</td>';
					
					echo '<td style="text-align:center"><img src="'.$liste2[8] .'" style="width:8em;height:7em;"/><br>'.$liste2[1].'</td>
					</tr>';									
				} 		
					echo'</table>';
			}
			else{
				$liste=user::lister();
					
				echo '<table align="center" border="1" width="90%">';
				echo ' <tr style="background-color:#86bc42">
						<th style="text-align:center">Avatar</th>
						<th style="text-align:center">Nom</th>
						<th style="text-align:center">Prenom</th>
						<th style="text-align:center">Type</th>
						<th style="text-align:center">Mail</th>
						<th style="text-align:center">Action</th></tr>';
				foreach($liste as $cle=>$valeur)
				{	
				if(($valeur[6]!="Admin")){
				echo'<tr>';
						echo '<td style="text-align:center"><img src="'.$valeur[7] .'" style="width:15em;height:7em;" /></td>';
						echo '<td style="text-align:center">'.$valeur[1] .'</td>';
						echo '<td style="text-align:center">'.$valeur[2] .'</td>';
						echo '<td style="text-align:center">'.$valeur[6] .'</td>';
						echo '<td style="text-align:center">'.$valeur[5] .'</td>';
					echo '<td style="text-align:center"><a class="boutonsupprimer" href=supprimer_user.php?id='.$valeur[0] .' ">Supprimer</a>
					| <a href="modifier_user.php?id='.$valeur[0] .' ">Modifier </a>
					</td>
					</tr>';									
				}} 		
					echo'</table>';
				
				
			}
			
		}
		
				
					
				?>
				</div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<footer>
    
    <div class="footer-main" >
        <div class="container">
            <div class="footer-main-wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="edugate-widget widget">
                                <div class="title-widget">SAYARA</div>
                                <div class="content-widget"><p>Site SaYara vous facilite la location de voitures il a été crée par un jeune étudiant Yassine Meaoui.</p>
                                    <div class="info-list">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i><a href="#">SaYara@gmail.com</a></li>
                                            <li><i class="fa fa-phone"></i><a href="#">+21698998877</a></li>

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
                                               <!-- <ul class="list-unstyled">
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
                                <div class="title-widget">GALLERY</div>
                                <div class="content-widget">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="mailing-widget widget">
                                <div class="title-widget">MAILING</div>
                                <div class="content-wiget">

                                   
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
                        <li><b>SaYara.tn</b> est sponsorisé par IMSET By Yassine Meaoui</li>
                    </ul>
                </div>
                <div class="pull-right hyper-right">@  Yassine Meaoui</div>
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
<script src="assets/test.js"></script>
 

<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="assets/js/pages/homepage.js"></script>
</body>

</html>