<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../model/api-employee.php';

$outcome = deleteEmployeeById($_GET['id']);

if ($outcome == 1) {
    echo
    '<script type="text/javascript">window.open("../../../displayall.php", name="_self")</script>';
}
else echo '<p>Error Failure to Delete</p>';
?>