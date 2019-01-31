<?php
if(!isset($_COOKIE['user'])) {
    // header("Location: public/"); // uncomment when cookies created
    header("location: public/sign-in.php");

} else {
  header("location: home.php");
}
