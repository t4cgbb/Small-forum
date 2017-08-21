<?php

	$keyword = str_replace("'","''",$_REQUEST['keyword']);

	require_once("db/db_connect.php");
	$link = create_connection();
	$sql = "select * from article where theme like '%$keyword%'";
	$result = execute_sql($link,'u351919982_kao',$sql);
	$num = mysqli_num_rows($result);
	echo $num."=";
	while($row = mysqli_fetch_row($result))
	{
		$row[1]=preg_replace('/\s(?=)/', '', $row[1]);
		$row[2]=preg_replace('/\s(?=)/', '', $row[2]);
		echo trim($row[1]).'#'.trim($row[0]).'=';
	}
	
                                                                        
?>