<?php
require_once("class_user.php");
$x=0;
			if(isset($_POST['ok'])){
				if (!isset($_FILES['image']['tmp_name'])) {
				echo "Erreur";
				}
					else
					{
						$file=$_FILES['image']['tmp_name'];
						$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
						$image_name= addslashes($_FILES['image']['name']);
						
						move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/users/" . $_FILES["image"]["name"]);
						
						$location="uploads/users/" . $_FILES["image"]["name"];
					
						//$liste=article::recherche_articlet($_POST['titre']);
					
						$liste=user::recherche_usermail($_POST['mail']);
			
						if($liste[6] != $_POST['mail']){
						$md5 = md5($_POST['mdp1']);						 
						$obj=new user($_POST['nom'],$_POST['prenom'],$_POST['login'],$md5,$_POST['type'],$_POST['mail'],$location,0);
						$obj->ajouter();
						$x=1;
						}	
					}
			}

?>
<html lang="en">

<head><title>SaYara-Inscription</title>
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
                <div class="page-register rlp">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table" style="padding-top:9px;"><a href="index.php"><img src="assets/images/1.png" alt="" class="login" style="  width: 27%;"/></a>
									
                                <div class="register-title rlp-title">Inscription !</div>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="register-form bg-w-form rlp-form" enctype="multipart/form-data">
									<?php
								if(isset($_POST['ok'])){
								if($x!=0){
									echo '  <div   style="cursor: pointer;" class="alert-box success" id="clickme"><span>success: </span>un cliquez pour envoyer vers la page d accueil.</div> ';
								}
								else{
								echo '  <div   style="cursor: pointer;" id ="clickme1" class="alert-box error" ><span>Error: </span>Compte existe déja </div> ';
								}
								}
								?>
                                    <div class="row">
                                        <div class="col-md-6"><label for="regname" class="control-label form-label">Nom <span class="highlight">*</span></label><input id="regname" name="nom" type="text" placeholder="Nom Utilisateur" class="form-control form-input" required /></div>
                                        <div class="col-md-6"><label for="regname" class="control-label form-label">Prenom <span class="highlight">*</span></label><input id="regpreno" name="prenom" type="text" placeholder="Prénom Utilisateur" class="form-control form-input" required /></div>
										<div class="col-md-6"><label for="regemail" class="control-label form-label">Login <span class="highlight">*</span></label><input id="regemail" name="login" type="text" placeholder="Foolen007" class="form-control form-input" required /></div>
                                        <div class="col-md-6"><label for="regpassword" class="control-label form-label">Mot de passe <span class="highlight">*</span></label><input id="regpassword" name="mdp1" type="password" placeholder="********" class="form-control form-input" required /></div>
                                        <div class="col-md-6"><label for="regname" class="control-label form-label">E-Mail <span class="highlight">*</span></label><input id="regmail" type="email" name="mail" placeholder="email@gmail.com" class="form-control form-input" required /></div>
										<div class="col-md-6"><label for="regname" class="control-label form-label">Type <span class="highlight">*</span></label>
										<select style=" margin-left: 6%;" name="type">
										<option>Client</option>
										</select>
										</div>
										<div class="col-md-6"><label for="regname" class="control-label form-label">Choisissez votre image : <span class="highlight">*</span></label>
										
											<input type="file" name="image" />
										</div>

									</div>
                                
                                <div class="register-submit" style="  margin-left: 38%;margin-top:3%">		
                                    <button type="submit" name="ok" class="btn btn-register btn-green"><span>Inscription</span></button>
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
$('#clickme').click(function(){
   window.location.href='index.php';
})
//$( "#clickme" ).click(function( event ) {
  //event.preventDefault();
  //$( this ).slideToggle("slow");
//});

</script>
<script>
$( "#clickme1" ).click(function( event ) {
  event.preventDefault();
  $( this ).slideToggle("slow");
});

</script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE--></body>

</html>
