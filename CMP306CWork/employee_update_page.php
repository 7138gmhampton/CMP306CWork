<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Gareth M. Hampton" />

    <title></title>

    <link rel="stylesheet" type="text/css" href="general_styles.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
    <h1>Update Employee Details</h1>
    <?php
    //echo '<form action="scripts/server/controller/update_employee.php?id='.$_GET['id'].
    //    '" method="post">'
    ?>
    <form action="scripts/server/controller/update_employee.php" method="post" 
          name="update_employee">
        <!--<label>
            <?php
            //echo 'Employee Number: '.$_GET['id'];
            ?>
        </label>-->
        <ul>
            <li>Employee Number<input type="text" name="eno" /></li>
		    <li>Employee Name<input type="text" name="ename" /></li>
		    <li>Employee Job<input type="text" name="ejob" /></li>
		    <li>Employee Department<input type="text" name="edepartment" /></li>
		    <li>Room Number<input type="text" name="eroom" /></li>
		    <li>Phone Number<input type="text" name="ephone" /></li>
		    <li>E-Mail<input type="text" name="eemail" /></li>
		    <li><input type="submit"></li>
        </ul>
        <button id="updateSubmit">Submit</button>
    </form>

    <script src="scripts/client/common.js"></script>
</body>
</html>