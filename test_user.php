<?php

function chargerClasse($classname)
{
  require 'class/'.$classname.'.class.php';
}

spl_autoland_register('chagerClasse');

$array = array(
'id' => '11',
'email' => 'juliencolmont59@gmail.com'
);

$user = new User($array);

echo '<pre>';
print_r($user);
echo '</pre>';

?>
