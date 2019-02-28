<?php
class PhotoGalerie{

    private $idPhotoGalerie;
    private $idPhoto;
    private $idgalerie;

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

	public private getIdphotogalerie()
	{
		return this.$idPhotoGalerie;
	}

	public void setIdphotogalerie(private $idPhotoGalerie)
	{
		this.$idPhotoGalerie = $idPhotoGalerie;
	}

	public private getIdphoto()
	{
		return this.$idPhoto;
	}

	public void setIdphoto(private $idPhoto)
	{
		this.$idPhoto = $idPhoto;
	}

	public private getIdgalerie()
	{
		return this.$idgalerie;
	}

	public void setIdgalerie(private $idgalerie)
	{
		this.$idgalerie = $idgalerie;
	}

}
?>