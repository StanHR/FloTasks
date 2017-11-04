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
	$sql = mysqli_query($conn, "SELECT * from json_wala_table ");

	while ($val = mysqli_fetch_array($sql,MYSQLI_ASSOC))
	{	
		if(empty($result[$val['C1']]))
		{
			$result[$val['C1']] = array('C1'=>$val['C1'],'C2'=>$val['C2']);
			$C4 = array('C3'=>$val['C3'],'C4'=>$val['C4']);
			$result[$val['C1']]['C4'][] = $C4;
		}
		else
		{
			$C4 = array('C3'=>$val['C3'],'C4'=>$val['C4']);
			array_push($result[$val['C1']]['C4'], $C4);
		}
	}
		
	$json_data = json_encode($result,JSON_NUMERIC_CHECK|JSON_PRETTY_PRINT);
	echo "<pre>" . $json_data . "</pre>";

















}
else
{
	echo "Connection Could Not Be Established...";
}












?>