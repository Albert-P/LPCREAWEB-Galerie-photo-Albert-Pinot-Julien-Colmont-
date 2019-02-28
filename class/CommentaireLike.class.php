<?php
class commentaireLike{

    private $idcommentaireLike;
    private $idUser;
    private $idcommentaire;

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

	public private getIdcommentairelike()
	{
		return this.$idcommentaireLike;
	}

	public void setIdcommentairelike(private $idcommentaireLike)
	{
		this.$idcommentaireLike = $idcommentaireLike;
	}

	public private getIduser()
	{
		return this.$idUser;
	}

	public void setIduser(private $idUser)
	{
		this.$idUser = $idUser;
	}

	public private getIdcommentaire()
	{
		return this.$idcommentaire;
	}

	public void setIdcommentaire(private $idcommentaire)
	{
		this.$idcommentaire = $idcommentaire;
	}

}
?>