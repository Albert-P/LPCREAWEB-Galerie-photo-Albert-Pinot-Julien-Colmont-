<?php

include('autoload.php');//script autoload
include('connexion.php');// connexion a la bdd

$userManager = new UserManager($bdd);

  if(isset($_POST['creer'])){
    if(!empty($_POST['email'])&& !empty($_POST['pseudo']) && !empty($_POST['mdp'])){
      $array_user = array(
        'email' => $_POST['email'],
        'pseudo' => $_POST['pseudo'],
        'mdp'=>$_POST['mdp'],
        'actif'=>1,
        'dateInscription'=>date('Y-m-d'),
        'admin'=>0
      );
      $user = new User($array_user);

      $userManager->add($user);
    }
  }
?>
<h1>Inscription</h1>

<form method="POST" action="">
  <label for="name"> Pseudo </label>
  <input type="text" name="pseudo" id="pseudo">
  <br/>
  <label for="email"> email </label>
  <input type="email" name="email" id="email">
  <br/>
  <label for="password"> Mot de passe </label>
  <input type="password" name="mdp" id="mdp">
  <br/>
  <input type="submit" name="creer" value="Créer l'utilisateur">
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
