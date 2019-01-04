<?php
require_once('voit.php');
$tab=voiture::supprimer_voit($_GET['id']);
header('Location: affiche_voit.php');
?>