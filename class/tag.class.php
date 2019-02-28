<?php
class tag{

    private $idtag;
    private $nom;
    private $couleur;

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

	public private getIdtag()
	{
		return this.$idtag;
	}

	public void setIdtag(private $idtag)
	{
		this.$idtag = $idtag;
	}

	public private getNom()
	{
		return this.$nom;
	}

	public void setNom(private $nom)
	{
		this.$nom = $nom;
	}

	public private getCouleur()
	{
		return this.$couleur;
	}

	public void setCouleur(private $couleur)
	{
		this.$couleur = $couleur;
	}

}
?>