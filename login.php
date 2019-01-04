<?php
include_once("class_user.php");
if(isset($_POST['ok'])){
	
	$md5=md5($_POST['mdp']);
	$liste=user::lister();
	$x=0;
	foreach($liste as $cle=>$valeur)
{
		for($i=0;$i<=count($cle);$i++)
		{
		   if($valeur[3]==$_POST['login'] && $valeur[4]==$md5 )
			{
				$x=1;
				user::modifier_user1($valeur[0],1); 
				session_start();
				$_SESSION['login']=$_POST['login'];
				$_SESSION['nom']=$valeur[1];
				//$_SESSION['mdp']=$md5;
				$_SESSION['type']=$valeur[6];
				$_SESSION['mail']=$valeur[5];
				$_SESSION['avatar']=$valeur[7];
				$_SESSION['connecte']=$valeur[8];
				header('Location: index.php');	
			}			
		}
	
} 
	
	
}

?>
<html lang="en">

<head><title>Login</title>
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
    <link type="text/css" rel="stylesheet" href="assets/box.css">

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
<header><!-- not include--></header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-login rlp">
                    <div class="container">
                        <div class="login-wrapper rlp-wrapper">
                            <div class="login-table rlp-table"><a href="index.php"><img src="assets/images/1.png" class="login"/></a>

                                <div class="login-title rlp-title"></div>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="login-form bg-w-form rlp-form" >
                                <?php
								if(isset($_POST['ok'])){
								if($x!=1){
									echo '  <div class="alert-box error" id="clickme"><span>error: </span>Membre non connu.</div> ';
								}}
								?>
                                    <div class="row">
                                        <div class="col-md-12"><label for="regemail" class="control-label form-label">Login <span class="highlight">*</span></label><input id="regemail" type="text" placeholder="email@gmail.com" class="form-control form-input" name="login" required /><!--p.help-block Warning !--></div>
                                        <div class="col-md-12"><label for="regpassword" class="control-label form-label">mot de passe <span class="highlight">*</span></label><input id="regpassword" type="password" placeholder="********" class="form-control form-input" name="mdp" required /><!-- p.help-block Warning !--></div>
                                    </div>
                                
                                <div class="login-submit" style="  margin-left: 38%;margin-top:3%">
                                    <button type="submit" onclick="" class="btn btn-login btn-green" name="ok"><span>Se Connecter</span></button>
                                </div>
								</form>
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
<footer></footer>
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
<script>
$( "#clickme" ).click(function( event ) {
  event.preventDefault();
  $( this ).slideToggle("slow");
});

</script>

<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE--></body>

</html>