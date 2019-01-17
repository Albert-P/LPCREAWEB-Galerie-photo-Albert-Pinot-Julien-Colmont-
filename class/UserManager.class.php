<?php

class UserManager{

  private fuction__construst($bd){
    $this->setBd($bd);
  }

  private fuction setBd($bd){
    $this->bd = $bd;
  }

  private fuction getBd(){
    return $this->$bd;
  }

  public function add(User $user){
    $req = $this->getBd()->prepare("INSERT INTO user (email,...) VALUES (:email,...);");
    $req->binValue(':email', $user->getEmail());
    .
    .
    .
    $req->execute();

    $user->hydrate([
      'id' => $this->getBd()->lastInsertId()
    ]);
  }
}
