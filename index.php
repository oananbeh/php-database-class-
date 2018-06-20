<?php
/**
 * Created by Obieda Ananbeh.
 */

include "include.php";
include "database.php";

$student=new db('Student');

 $data['Name']="Ryan";
 $data['Age']="12";
 $data['Address']="Chicago IL USA";
 $data['Phone']="3456008506";

$student->insert($data);

if ($student) 
{
	echo"inset ok";
}
else 
{
	echo"Error";
}

?>

<html>

<head> <title>Php Class for Database</title></head>
<body>
	<form name"" method="POST" action="index.php">
     	<label>Insert Data</label>
		<input type="submit" name="insert">
	</form>



</body>
</html>