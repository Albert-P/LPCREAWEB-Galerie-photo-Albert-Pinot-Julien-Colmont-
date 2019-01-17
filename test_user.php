<?php

function chargerClasse($classname)
{
  require 'class/'.$classname.'.class.php';
}

spl_autoload_register('chargerClasse');

  if(isset($_POST['creer'])){
    if(!empty($_POST['email'])/*&& */){
      $array_user = array(
        'email' => $_POST['email'],
      );
      $user = new User(array_user);
      $userManager->add($user);
    }
  }
?>
<form method="POST" action="">
  <label for="email"> email </label>
  <input type="email" name="email" id="email">
  <input tyoe="submit" name="creer" value="Créer l'utilisateur">
  </form>






<?php

/*$array = array(
'id' => '11',
'email' => 'juliencolmont59@gmail.com'
);

$user = new User($array);

echo '<pre>';
print_r($user);
echo '</pre>';*/

?>
