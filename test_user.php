<?php

include('class/User.class.php');

$array = array(
'id' => '11',
'email' => 'juliencolmont59@gmail.com'
);

$user = new User($array);

echo '<pre>';
print_r($user);
echo '</pre>';

?>
