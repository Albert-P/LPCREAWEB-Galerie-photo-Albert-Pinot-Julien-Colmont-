<?php
class GalerieLike{
    /* Donnée lors de l'inscription */
    private $IdPhoto;
    private $titre;
    private $image;
    private $description;
    private $idUserPhoto;
    private $credit;
    private $lieu;
    
    
    public function __construct(array $donnees){
              $this->hydrate($donnees);
    }

    public function hydrate(array $donnees){
            foreach($donnees as $key => $value){
                $method ='set'.ucfirst($key);
                if (method_exists($this,$method)){
                    $this->$method($value);
                }
            }
    }

    /* Asseceurs=getteurs mutateurs=setteurs */
    public function getIdPhoto(){
        return $this->IdPhoto;
    }
    public function setIdPhoto($id){
        $this->IdPhoto=$id;
    }
    public function getTitre(){
        return $this->Titre;
    }
    public function setTitre($title){
        $this->Titre = $title;
    }
    public function getImage(){
        return $this-> Image;
    }
    public function setImage($img){
        $this->Image = $img;
    }
    public function getDescription(){
        return $this->Description;
    }
    public function setDescription($desc){
        $this->Description=$desc;
    }
    public function getIdUserPhoto(){
        return $this->idUserPhoto;
    }
    public function setIdUserPhoto($idUser){
        $this->idUserPhoto = $idUser;
    }
    public function getCredit(){
        return $this-> credit;
    }
    public function setCredit($cred){
        $this->credit = $cred;
    }
    public function getLieu(){
        return $this-> Lieu;
    }
    public function setLieu($lieu){
        $this->Lieu = $lieu;
    }
}
?>