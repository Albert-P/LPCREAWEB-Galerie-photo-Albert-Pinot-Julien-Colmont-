<?php
class commentaire{

    private $idcommentaire;
    private $texte;
    private $dateCreate;
    private $idUserCreate;
    private $idPhoto;

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

	public private getIdcommentaire()
	{
		return this.$idcommentaire;
	}

	public void setIdcommentaire(private $idcommentaire)
	{
		this.$idcommentaire = $idcommentaire;
	}

	public private getTexte()
	{
		return this.$texte;
	}

	public void setTexte(private $texte)
	{
		this.$texte = $texte;
	}

	public private getDatecreate()
	{
		return this.$dateCreate;
	}

	public void setDatecreate(private $dateCreate)
	{
		this.$dateCreate = $dateCreate;
	}

	public private getIdusercreate()
	{
		return this.$idUserCreate;
	}

	public void setIdusercreate(private $idUserCreate)
	{
		this.$idUserCreate = $idUserCreate;
	}

	public private get$Idphoto()
	{
		return this.$idPhoto;
	}

	public void set$Idphoto(private $idPhoto)
	{
		this.$idPhoto = $idPhoto;
	}
}
?>