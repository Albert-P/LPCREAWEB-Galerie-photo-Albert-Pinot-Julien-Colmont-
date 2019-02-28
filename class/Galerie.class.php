<?php
class Galerie{
    /* Donnée lors de l'inscription */
    private $idGalerie;
    private $titre;
    private $description;
    private $dateCreation;
    private $idUserCreate;
    
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
    public function getIdGalerie(){
        return $this->idGalerie;
    }
    public function setIdGalerie($id){
        $this->idGalerie=$id;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function setTitre($title){
        $this->titre = $title;
    }
    public function getDescription(){
        return $this-> description;
    }
    public function setDescription($desc){
        $this->description = $desc;
    }
    public function getDateCreation(){
        return $this-> date;
    }
    public function setDateCreation($date){
        $this->date = $date;
    }
    public function getidUserCreate(){
        return $this-> idUserCreate;
    }
    public function setidUserCreate($idUser){
        $this->idUserCreate = $idUser;
    }
}
?>

