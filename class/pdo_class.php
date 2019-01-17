<?php 
class PDO{

      protected $dbn ='mysql:dbname=albertpinot;host=http://ipabdd.iut-lens.univ-artois.fr/phpmyadmin';
      protected $user ='albert.pinot';
      protected $mdp ='O/btfYTu';
      
      public function __construct(){
           try{
                  $bdd = new PDO($dbn,$user,$mdp);
            }
            catch(PDOExeption $e){
                  echo $e->getMessage();
            }
      }
} 

?>