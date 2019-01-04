<?php
require_once('class_user.php');
$tab=user::supprimer_user($_GET['id']);
header('Location: lister.php');
?>