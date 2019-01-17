<?php

class UserManager{
  private $bd;

  public function __construct($bd){
    $this->setBd($bd);
  }
  public function setBd($bd){
    $this->bd = $bd;
  }
  public function getBd(){
    return $this->bd;
  }

  public function add(User $user){
    $req = $this->getBd()->prepare("INSERT INTO User (email,pseudo,mdp,actif,date_inscription,admin)" ."VALUES (:email,:pseudo,:mdp,:actif,:dateInscription,:admin);");
    $req->bindValue(':email', $user->getEmail());
    $req->bindValue(':pseudo', $user->getPseudo());
    $req->bindValue(':mdp', $user->getMdp());
    $req->bindValue(':actif', $user->getActif());
    $req->bindValue(':dateInscription', $user->getDateInscription());
    $req->bindValue(':admin', $user->getAdmin());
    $req->execute();

    $user->hydrate([
      'id' => $this->getBd()->lastInsertId()
    ]);
  }
}

/* A FAIRE POUR LA SEMAINE PRO !!!!!!!!!!!!!!!*/
/*
 edit
 delete 
 ---------------------
 count()// nb user
 getlist() // liste user
 getInfo(User)// Info user
 exist(User) //Vérifier l'existence user en BD ajouter dans le add si possible


*/