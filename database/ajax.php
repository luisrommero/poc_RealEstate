<?php

$var = $_POST["range"];

$content = $var;
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "myText.txt","wb");
fwrite($fp,$content);
fclose($fp);
