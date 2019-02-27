<?php
include('database/con.php');
$con = connectionBD();

$name_List = $_POST["name_List"];
$inv_min = $_POST["inv_min"];
$inv_max = $_POST["inv_max"];
$p_goal = $_POST["p_goal"];
$p_type = $_POST["p_type"];
$p_desc = $_POST["p_desc"];
$sql_list = "INSERT INTO list SET name_list = '" . $name_List . "', name_owner = 'RealBLOCK', inv_min = " . $inv_min . ", percentage = 0.0, inv_max = " . $inv_max . ";";
$con->query($sql_list);
$sql_max = "select MAX(id_list) as al from list;";
$result_set_max = mysqli_query($con, $sql_max);
while ($row = mysqli_fetch_assoc($result_set_max)) {
  $max = $row['al'];
}
$sql_list = "INSERT INTO project SET id_list = " . $max . ", p_address = 'Jorge Loza', p_type = '" . $p_type . "', p_desc = '".$p_desc."', p_goal = " . $p_goal;

// img
/*
$target_dir = "assets/img/uploads";
echo $target_file = $tarjet_dir . basename($_FILES["fileToUpload"]["name"]);

echo "<br />";
*/
// img

// echo $sql_img_1 = "INSERT INTO p_img SET id_list = " . $max . ", path_img = '" . $target_file . "';";
$sql_img_1 = "INSERT INTO p_img SET id_list = " . $max . ", path_img = 'property-3.jpg';";
$con->query($sql_list);
$con->query($sql_img_1);
header("Location: list.php");
// ejemplos de escrituras
// predio, todos los archivos legales
