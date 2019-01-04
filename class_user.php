<?php
require_once("connexion.php");

class user{

private $nom;
private $prenom;
private $login;
private $mdp;
private $mail;
private $type;
private $avatar;
private $connecte;

//construncteur

public function __construct($n,$p,$l,$m,$t,$ma,$a,$c){
 $this->nom =$n;
 $this->prenom=$p;
 $this->login=$l;
 $this->mdp=$m;
 $this->type=$t;
 $this->mail=$ma;
 $this->avatar=$a;
  $this->connecte=$c;
 		
}


//ajouter un utilisateur

public function ajouter(){

global $cnx;
$sql="INSERT INTO user (nom,prenom,login,mdp,type,mail,avatar,connecte) 
VALUES('".$this->nom."' , '".$this->prenom."' ,
 '".$this->login."' , '".$this->mdp."' , '".$this->type."' ,
  '".$this->mail."','".$this->avatar."' ,".$this->connecte."  )";
$res=$cnx->exec($sql);
	}

//lister tous les utilisateurs 

public static function lister(){
	global $cnx;
	$sql="SELECT * FROM user ORDER BY type ASC";
	$res=$cnx->query($sql);
	 return($res->fetchAll(PDO::FETCH_NUM));

}

//chercher un utilisateur

public static function recherche_user($id){
	global $cnx;
	$sql="SELECT * FROM user WHERE id='".$id."' " ;
	$res=$cnx->query($sql);
	 return($res->fetch(PDO::FETCH_NUM));

}

//chercher un utilisateur par mail

public static function recherche_usermail($mail){
	global $cnx;
	$sql="SELECT * FROM user WHERE mail='".$mail."' " ;
	$res=$cnx->query($sql);
	 return($res->fetch(PDO::FETCH_NUM));

}


//supprimer un utilisateur 
public static function supprimer_user($id){
global $cnx;
$sql="DELETE FROM user WHERE id ='".$id ."' ";
$res=$cnx->exec($sql);
	

}

//modifier un utilisateur 
public static function modifier_user($id,$n,$p,$l,$md,$m,$a){
global $cnx;
$sql="UPDATE user set  
	nom = '".$n."' ,
	prenom = '".$p."' ,
	login = '".$l."' ,
	mdp = '".$md."' ,

	mail = '".$m."',
	avatar = '".$a."'
	  where id = ".$id ." ";
$res=$cnx->exec($sql);
	
}

public static function modifier_user1($id,$c){
global $cnx;
$sql="UPDATE user set  
	connecte = '".$c."' 
	  where id = ".$id ." ";
$res=$cnx->exec($sql);

}

}

?>