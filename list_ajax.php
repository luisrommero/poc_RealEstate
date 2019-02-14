<?php
include('database/con.php');
$con = connectionBD();

$sql = "select id_list from list";

$result_set = mysqli_query($con, $list_sql);

$data = array();

 while($row = mysql_fetch_array($result_set)){
  $row_data = array(
   'id_list' => $row['id_list']
   );
  array_push($data, $row_data);
 }

 echo json_encode($data);
