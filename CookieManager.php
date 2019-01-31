<?php
$user = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];

if ($user == 'admin@eos.com') {
  $cookie_name = "user";
  $cookie_value = "root";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  header("Location: home.php");

} elseif($user == "rodrigo@investors.com") {
  $cookie_name = "user";
  $cookie_value = "guest";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  header("Location: home.php");

} else {
  header("Location: public/sign-in.html#error");

}
