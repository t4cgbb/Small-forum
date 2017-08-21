<?php
	
	header("Content-Type:text/html; charset=utf-8");

	$account = str_replace("'", "''", $_REQUEST["account"]);
	$pwd = sha1(str_replace("'","''",$_REQUEST["pwd"]));

	require_once("../../db/db_connect.php");
	$link = create_connection();
	$sql = "select account, photo from member where account = '$account' and password='$pwd';";

	$result = execute_sql($link, 'final_work', $sql);
	$row = mysqli_fetch_row($result);

	echo $row[0], $row[1];
?>	