<?php
class PhotoLike{

    private $idPhotoLike;
    private $idPhoto;
    private $iduser;

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

	public private getIdphotolike()
	{
		return this.$idPhotoLike;
	}

	public void setIdphotolike(private $idPhotoLike)
	{
		this.$idPhotoLike = $idPhotoLike;
	}

	public private getIdphoto()
	{
		return this.$idPhoto;
	}

	public void setIdphoto(private $idPhoto)
	{
		this.$idPhoto = $idPhoto;
	}

	public private getIduser()
	{
		return this.$iduser;
	}

	public void setIduser(private $iduser)
	{
		this.$iduser = $iduser;
	}
}
?>