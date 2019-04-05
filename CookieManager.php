<?php
$user = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];

if ($user == 'rodrigo@tucasa.com') {
  $cookie_name = "user";
  $cookie_value = "root";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  header("Location: home.php");

} elseif($user == "admin@eos.com") {
  $cookie_name = "user";
  $cookie_value = "investor";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  header("Location: home.php");

} else {
  header("Location: public/sign-in.php#error");

}
// estadisticas de inversión home.php
//
