<html>
<head>
</head>
<body>
	<h1>Display All Employees</h1>
	<?php
    //ini_set('display_errors', 1);
    //error_reporting(E_ALL);

    include('scripts/server/model/api-employee.php');
	$employeetxt = getAllEmployees() ;
	//echo $employeetxt ;
	$employeejson = json_decode($employeetxt) ;
	// var_dump($employeejson) ;
	for ($i=0 ; $i<sizeof($employeejson) ; $i++) {
		echo "Employee :" ;			
		echo "<a href=displayemployee.php?id=" ;
		echo $employeejson[$i] -> eno ;
		echo ">" ;
		echo $employeejson[$i] -> ename ;
		echo "</a><br/>" ;
        echo '<a href="scripts/server/controller/delete_employee.php?id='.$employeejson[$i] -> eno.
        '">Delete Employee</a><br />';
	}
	?> 
</body>
</html>