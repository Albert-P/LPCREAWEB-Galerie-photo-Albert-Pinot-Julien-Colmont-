<?php
    class GalerieManager{
            private $bd;
          
            public function __construct($bd){
              $this->setBd($bd);
            }
            public function setBd($bd){
              $this->bd = $bd;
            }
            public function getBd(){
              return $this->bd;
            }
    }
?>