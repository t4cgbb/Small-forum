<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="../css/register_style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<title>註冊成功</title>
<?php
	require_once("../db/db_connect.php");
	$account = str_replace("'", "''", $_REQUEST["account"]);
	$pwd = sha1(str_replace("'","''",$_REQUEST["pwd"]));
	$sex = $_REQUEST["sex"];

	$link = create_connection();
	$sql = "select * from member where account ='$account'";
	$result = execute_sql($link, 'm056', $sql);
	if(mysqli_num_rows($result) != 0){
?>
</head>
	<body>
	<div class="main">
		<div class="header" >
			<h1>會員註冊失敗</h1>
		</div>
		<p>恭喜您註冊成功，<strong style="color:red;">這個帳號已經被註冊</strong>
			<form action='add_member.php' method='request' name='regist'>
				<ul class="left-form">
					<a href="register.php"><li style="color:blue;">
						返回註冊頁面
					</li></a>
					<a href="../index.php"><li style="color:blue;">
						返回首頁
					</li></a>
				</ul>

				<div class="clear"> </div>
					
			</form>
			
		</div>
	
</body>
</html>

<?php
	}else{
		$sql = "insert into member values('$account','$pwd','$sex')";	
		$result =execute_sql($link, 'm056', $sql);
?>

</head>
<body>
	<div class="main">
		<div class="header" >
			<h1>會員註冊成功</h1>
		</div>
		<p>恭喜您註冊成功，<strong style="color:red;">你現在可以進行...</strong>
			<form action='add_member.php' method='request' name='regist'>
				<ul class="left-form">
					<a href="../index.php"><li style="color:blue;">
						返回首頁
					</li></a>
				</ul>

				<div class="clear"> </div>
					
			</form>
			
		</div>
	
</body>
</html>
<?php
	}
	mysqli_close($link);
	
?>