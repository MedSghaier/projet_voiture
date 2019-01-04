<?php require_once('class_user.php');
		
		$a=$_GET['id'];
		$liste=user::recherche_user($a);
		
		if(isset($_POST['ok'])){
				if (!isset($_FILES['image']['tmp_name'])) {
			echo "";
			}else{
			$file=$_FILES['image']['tmp_name'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/users/" . $_FILES["image"]["name"]);
			
			$location="uploads/users/" . $_FILES["image"]["name"];
			
  			user::modifier_user($_POST['id'],$_POST['nom'],$_POST['pr'],$_POST['login'],$_POST['mdp'],$_POST['mail'],$location); 
			 header('Location: lister.php');
			
			}
		}
		
		
				?>
		
		
<html lang="en">

<head><title>Modifier-user</title>
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
    <link type="text/css" rel="stylesheet" href="assets/form.css">

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
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post" enctype="multipart/form-data">
		<ul class="form-style-1">
		<li>
		<img src="<?php echo $liste[7]  ;?>" style="width:50%;height:30%;margin-left:25%;" /></br></br>
		</li>
			<li>
			<input type="text" name="id" class="field-long" value="<?php echo $_GET['id']; ?>" hidden />
				<label>Nom <span class="required"></span></label>
				<input type="text" name="nom" class="field-long" value="<?php echo $liste[1]; ?>" />
			</li>
			<li>
				<label>Prénom <span class="required"></span></label>
				<input type="text" name="pr" class="field-long" value="<?php echo $liste[2]; ?>" />
			</li>
			<li>
				<label>Login <span class="required"></span></label>
				<input type="text" name="login" class="field-long" value="<?php echo $liste[3]; ?>" />
			</li>
			<li>
				<label>Email <span class="required"></span></label>
				<input type="email" name="mail" class="field-long" value="<?php echo $liste[5]; ?>" />
			</li>
			<li>
                    <input type="file" name="image" "/>
            </li>
			<li>
				<input type="text" name="mdp" class="field-long" value="<?php echo $liste[4]; ?>" hidden />
			</li>
			<li>
				<input type="text" name="type" class="field-long" value="<?php echo $liste[6]; ?>" hidden />
			</li>
			<!--<li>
				<label>Type</label>
				<select name="field4" class="field-select">
				<option value="Advertise">Admin</option>
				<option value="Partnership">Prefesseur</option>
				<option value="General Question">Parent</option>
				<option value="General Question">Elève</option>
				</select>
			</li>-->
			
			<li>
				<input type="submit" value="Modifier" name="ok" />
			</li>
		</ul>
	</form>
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
                        <li><b>SaYara.tn</b>est sponsorisé par IMSET By Yassine Meaoui</li>
                    </ul>
                </div>
                <div class="pull-right hyper-right">@ Yassine Meaoui</div>
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
</body>

</html>