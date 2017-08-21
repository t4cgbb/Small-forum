<?php

	if(!isset($_SESSION)){
		session_start();  
	}

	$page_judge = $_REQUEST['judge'];

	if($page_judge == 1)
	{
		//回覆寫入資料庫
		$id = $_SESSION['id'];
		unset($_SESSION['id']);
		require_once("../../db/db_connect.php");
		$link = create_connection();
        $account = $_SESSION['account'];
        $content_reply = $_REQUEST['comment'];
        date_default_timezone_set('PRC');
        $date = date("y-m-d H:i:s");
        $sql = "insert into reply(reply_author, reply_content, theme_id, date) values('$account','$content_reply',$id,'$date')";
        $result = execute_sql($link, 'u351919982_kao', $sql);
        mysqli_close($link);
		header('location:page'.$id.'.php');

		//刪除資料
	}else if($page_judge == 2){
		$id = $_SESSION['id'];
		unset($_SESSION['id']);
		require_once("../../db/db_connect.php");
		$link = create_connection();

		$sql ="delete from reply where theme_id = $id;";
		$result1 = execute_sql($link, 'u351919982_kao', $sql);

		$sql ="delete from article where id = $id;";
		$result = execute_sql($link, 'u351919982_kao', $sql);

		if(file_exists("page".$id.".php")){
			unlink("page".$id.".php");
		}

		header('location:../../index.php');

		//修改資料
	}else if($page_judge == 3){
		$title = $_REQUEST['title'];
		$content = $_REQUEST['content'];
		$id = $_SESSION['id'];
		unset($_SESSION['id']);
		require_once("../../db/db_connect.php");
		$link = create_connection();
		$sql ="update article set theme='$title' where Id = $id";
		$result = execute_sql($link, 'u351919982_kao', $sql);
		$sql ="update article set article_content='$content' where Id = $id";
		$result = execute_sql($link, 'u351919982_kao', $sql);
		mysqli_close($link);
		header('location:page'.$id.'.php');

		//刪除留言
	}else if($page_judge == 4){
		$id = $_SESSION['id'];
		unset($_SESSION['id']);
		$reply_id = $_SESSION['reply_id'];
		unset($_SESSION['reply_id']);
		require_once("../../db/db_connect.php");
		$link = create_connection();
		$sql ="delete from reply where reply_id = $reply_id";
		$result = execute_sql($link, 'u351919982_kao', $sql);
		mysqli_close($link);
		header('location:page'.$id.'.php');
	}
		
?>