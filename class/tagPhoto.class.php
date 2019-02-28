<?php
class tagPhoto{

    private $idtagPhoto;
    private $idtag;
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

	public private getIdtagphoto()
	{
		return this.$idtagPhoto;
	}

	public void setIdtagphoto(private $idtagPhoto)
	{
		this.$idtagPhoto = $idtagPhoto;
	}

	public private getIdtag()
	{
		return this.$idtag;
	}

	public void setIdtag(private $idtag)
	{
		this.$idtag = $idtag;
	}

	public private getIdphoto()
	{
		return this.$idPhoto;
	}

	public void setIdphoto(private $idPhoto)
	{
		this.$idPhoto = $idPhoto;
	}
}
?>