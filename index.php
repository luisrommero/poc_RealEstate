<?php
if(!isset($_COOKIE['user'])) {
    // header("Location: public/"); // uncomment when cookies created
    header("location: public/");

} else {
  header("location: home.php");
}
