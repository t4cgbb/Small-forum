<?php
  function create_connection()
  {
    $link = @mysqli_connect("localhost", "自己設定帳號", "自己設定密碼")
      or die("無法建立資料連接: " . mysqli_connect_error());
	  
    mysqli_query($link, "SET NAMES utf8");
    return $link;
  }
	
  function execute_sql($link, $database, $sql)
  {
	  
    @mysqli_select_db($link, $database)
      or die("開啟資料庫失敗: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		
    return $result;
	
  }
?>