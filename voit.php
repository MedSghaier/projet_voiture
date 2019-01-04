<?php
require_once("connexion.php");

class voiture{

	private $matricule;
	private $marque;
	private $puissance;
	private $nbr_place;
	private $type_boite;
	private $prix;
	private $date;
	private $avatar;
	private $type;
//construncteur 

public function __construct($m,$ma,$p,$nb,$ty,$pr,$d,$a,$t){
 $this->matricule =$m;
  $this->marque=$ma;
 $this->puissance=$p;
 $this->nbr_place=$nb;
 $this->type_boite=$ty;
 $this->prix=$pr;
 $this->date=$d;
 $this->avatar=$a;
 $this->type=$t;
}
//ajouter une voiture

public function ajouter(){
global $cnx;
$sql="INSERT INTO voiture (matricule,marque,puissance,nbr_place,type_boite,prix,date,avatar,type) VALUES('".$this->matricule."'  , '".$this->marque."' , ".$this->puissance." , ".$this->nbr_place.",
 '".$this->type_boite."',".$this->prix.",'".$this->date."','".$this->avatar."', '".$this->type."' )";
$res=$cnx->exec($sql);
	}
//lister tous les voitures

public static function lister(){
	global $cnx;
	$sql="SELECT * FROM voiture ORDER BY date DESC";
	$res=$cnx->query($sql);
	 return($res->fetchAll(PDO::FETCH_NUM));

}

//chercher une voiture

public static function recherche_voit($id){
	global $cnx;
	$sql="SELECT * FROM voiture WHERE id='".$id."' " ;
	$res=$cnx->query($sql);
	 return($res->fetch(PDO::FETCH_NUM));

}

//chercher une voiture par matricule

public static function recherche_voitm($m){
	global $cnx;
	$sql="SELECT * FROM voiture WHERE matricule='".$m."' " ;
	$res=$cnx->query($sql);
	 return($res->fetch(PDO::FETCH_NUM));

}


//supprimer une voiture

public static function supprimer_voit($id){
global $cnx;
$sql="DELETE FROM voiture WHERE id ='".$id ."' ";
$res=$cnx->exec($sql);
	

}

//modifier une voiture 
 
public static function modifier_voit($id,$m,$i,$d){
global $cnx;
$sql="UPDATE voiture set  
	matricule = '".$m."' ,
	avatar = '".$i."' ,
	date = '".$d."',
	  where id = ".$id ." ";
$res=$cnx->exec($sql);
	
}

}

?>