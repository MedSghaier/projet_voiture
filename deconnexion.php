<?php
require_once('class_user.php');

session_start();

$liste=user::lister();
	foreach($liste as $cle=>$valeur)
	{
		for($i=0;$i<=count($cle);$i++)
		{
		   if($valeur[3]==$_SESSION['login'] && $valeur[5]==$_SESSION['mail'] )
			{
				user::modifier_user1($valeur[0],0);
				session_unset();
				session_destroy();
				header('Location: index.php');
				exit();
			}
		}
	}


?>