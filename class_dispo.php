<?php
require_once("connexion.php");

class Dispo{

private $id;
private $idv;
private $daterd;
private $daterr;
private $dis;
private $nom;
//construncteur 
	
public function __construct($idv,$dd,$dr,$dis,$n){
  $this->idv=$idv;
 $this->daterd=$dd;
 $this->daterr=$dr;
 $this->dis=$dis;
 $this->nom=$n;
}
//ajouter 

public function ajouter(){

global $cnx;
$sql="INSERT INTO disponibilite (id_v,date_d,date_f,dispo,nom_loc) VALUES( '".$this->idv."' , '".$this->daterd."' , '".$this->daterr."', ".$this->dis.", '".$this->nom."' )";
$res=$cnx->exec($sql);
	}
//lister 

public static function lister(){
	global $cnx;
	$sql="SELECT * FROM disponibilite ";
	$res=$cnx->query($sql);
	 return($res->fetchAll(PDO::FETCH_NUM));

}

public static function lister1(){
	global $cnx;
	$sql="SELECT * FROM disponibilite where date_f < TO_DATE(SYSDATE-10,'YYYY-mm-dd')";
	$res=$cnx->query($sql);
	 return($res->fetchAll(PDO::FETCH_NUM));

}

//chercher 

public static function recherche_dis($idv){
	global $cnx;
	$sql="SELECT * FROM disponibilite WHERE id_v='".$idv."' " ;
	$res=$cnx->query($sql);
	 return($res->fetch(PDO::FETCH_NUM));

}
//rechercher voiture dispo

public static function rech_voit__dispo($nom){
global $cnx;
$sql="SELECT * FROM disponibilite WHERE nom_loc = '".$nom."' ";
$res=$cnx->query($sql);
return($res->fetch(PDO::FETCH_NUM));
}

//Supprimer 

public static function supprimer_dispo($ss){
	global $cnx;

	$sql="DELETE * FROM disponibilite WHERE id_v = '".$ss."'' ";
$res=$cnx->exec($sql);



}

//modifier  

public static function modifier_dis($id,$dis){
global $cnx;
$sql="update disponibilite set  
	
	dispo = '".$dis."'
	  where id = ".$id ." ";
$res=$cnx->exec($sql);
	
}

}

?>