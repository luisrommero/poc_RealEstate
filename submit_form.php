<?php
include('database/con.php');
$con = connectionBD();

$name_List = $_POST["name_List"];
$inv_min = $_POST["inv_min"];
$p_goal = $_POST["p_goal"];
$p_type = $_POST["p_type"];
$p_desc = $_POST["p_desc"];
echo $sql_list = "INSERT INTO list SET name_list = '" . $name_List . "', name_owner = 'Jorge Loza', inv_min = " . $inv_min . ", percentage = 0.0";
$con->query($sql_list);
$sql_max = "select MAX(id_list) as al from list;";
echo "<br >";
$result_set_max = mysqli_query($con, $sql_max);
while ($row = mysqli_fetch_assoc($result_set_max)) {
  $max = $row['al'];

}
echo $sql_list = "INSERT INTO project SET id_list = " . $max . ", p_address = 'Jorge Loza', p_type = '" . $p_type . "', p_desc = '".$p_desc."', p_goal = " . $p_goal;
$con->query($sql_list);
header("Location: list.php");
