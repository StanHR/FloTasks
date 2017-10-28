<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "flowtasks";


$conn = mysqli_connect($host, $user, $pass, $db);
$count = 0;


if($conn)
{
	echo "Connection Established. Moving Ahead...<br><br>";
	echo "{ <br> { <br>";
	$sql = "SELECT c1 as 'c1',c2 as 'c2',GROUP_CONCAT(CONCAT('&emsp;&emsp;{<br>&emsp;&emsp;&emsp;c3 : ', c3),CONCAT('<br>&emsp;&emsp;&emsp;c4 : ',c4),CONCAT('<br>&emsp;&emsp;}<br>')) as '<br>c4' FROM json_wala_table GROUP BY c1,c2" ; 
	$result = $conn->query($sql);
	while($val = $result->fetch_assoc())
	{
		echo json_encode($val);
		echo "<br>";
	}

	echo "} <br> }";























}
else
{
	echo "Connection Could Not Be Established...";
}












?>