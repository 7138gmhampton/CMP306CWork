<?php
require_once '../model/api-employee.php';

$updates = array();

foreach ($_POST as $key => $value)
    if ($key != 'id') $updates[$key] = $value;

$data = json_encode($updates);

$outcome = updateEmployeeById($_POST['eno'], $data);

//if ($outcome == 1) {
//    echo
//    '<script type="text/javascript">window.open("../../../displayall.php", name="_self")</script>';
//}
//else echo '<p>Error Failure to Update</p>';
?>