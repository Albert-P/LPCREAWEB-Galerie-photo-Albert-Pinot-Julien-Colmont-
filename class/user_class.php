<?php
class User{
    
    private $idUser;
    private $email;
    private $pseudo;
    private $mdp;
    private $admin;
    private $date_inscription;
    private $actif;
    
    public function __construct($id,$email,$pseudo,$mdp,$admin,$date_inscription,$actif){
              $this->setIdUser($id);    
              $this->setEmail($adresse);
              $this->setPseudo($name);
              $this->setMdp($password);
              $this->setAdmin($administrateur);
              $this->setDate_inscription($dateInsrciption);
              $this->setActif($activite);
    }

    public function hydrate(array $donnees){
            foreach($donnees as $key => $value){
                $method ='set'.ucfirst($key);
                if (method_exists($this,$method)){
                    $this->$method($value);
                }
            }
    }

    public function getIdUser(){
        return $this->idUser;
    }
    public function setIdUser($id){
        $this->idUser=$id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($adresse){
        $this->email = $adresse;
    }
    public function getPseudo(){
        return $this-> $pseudo;
    }
    public function setPseudo($name){
        $this->$pseudo = $name;
    }
    public function getMdp(){
        return $this-> $Mdp;
    }
    public function setMdp($password){
        $this->$mdp = $password;
    }
    public function getAdmin(){
        return $this-> $admin;
    }
    public function setAdmin($administrateur){
        $this->$admin = $administrateur;
    }
    public function getDate_inscription(){
        return $this-> $date_inscription;
    }
    public function setDate_inscription($dateInsrciption){
        $this->$date_inscription = $dateInsrciption;
    }
    public function getActif(){
        return $this-> $actif;
    }
    public function setActif($activite){
        $this->$actif = $activite;
    }
    
}
?>