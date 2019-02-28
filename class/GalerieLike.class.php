<?php
class GalerieLike{
    /* Donnée lors de l'inscription */
    private $IdGalerieLike;
    private $IdGalerie;
    private $IdUser;
    
    
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
    public function getIdGalerieLike(){
        return $this->idGalerieLike;
    }
    public function setIdGalerieLike($id){
        $this->idGalerieLike=$id;
    }
    public function getIdGalerie(){
        return $this->IdGalerie;
    }
    public function setidGalerie($IdGalerie){
        $this->IdGalerie = $IdGalerie;
    }
    public function getIdUser(){
        return $this-> IdUser;
    }
    public function setIdUser($IdUser){
        $this->IdUser = $IdUser;
    }
}
?>
