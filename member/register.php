<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="../css/register_style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<title>註冊會員</title>
		
		<!--動態判斷-->
		<script>
		function myAccount()
		{
			if(document.regist.account.value.length ==0) 
			{
				var not_ok=document.getElementById("ok_1").className = "icon into";
				return false;
			}
			
			if(document.regist.account.value.length>10) 
			{
				var not_ok=document.getElementById("ok_1").className = "icon into";
				return false;
			}
			
				var not_ok=document.getElementById("ok_1").className = "icon ticker";

		}
		
		
		function myPassword()
		{
			if(document.regist.pwd.value.length==0) 
			{
				var not_ok=document.getElementById("ok_3").className = "icon into";
				return false;
			}
			
			if(document.regist.pwd.value.length>10) 
			{
				alert("密碼字數超過10個");
				var not_ok=document.getElementById("ok_3").className = "icon into";
				return false;
			}
			
			if(document.regist.re_pwd.value.length!=0) 
			{
				if(document.regist.pwd.value!=document.regist.re_pwd.value){
					alert("密碼不一致");
					var not_ok=document.getElementById("ok_3").className = "icon into";
					var not_ok=document.getElementById("re_ok_3").className = "icon into";
					return false;
				}
				else{
					var not_ok=document.getElementById("ok_3").className = "icon ticker";
					var not_ok=document.getElementById("re_ok_3").className = "icon ticker";
					return true;
				}
			}

			var not_ok=document.getElementById("ok_3").className = "icon ticker";
			
		}
		
		function rePassword()
		{
			if(document.regist.re_pwd.value.length==0) 
			{
				var not_ok=document.getElementById("re_ok_3").className = "icon into";
				return false;
			}
			
			if(document.regist.re_pwd.value.length>10) 
			{
				alert("密碼字數超過10個");
				var not_ok=document.getElementById("re_ok_3").className="icon into";
				return false;
			}
			
			if(document.regist.pwd.value.length!=0) 
			{
				if(document.regist.re_pwd.value!=document.regist.pwd.value){
					alert("密碼不一致");
					var not_ok=document.getElementById("ok_3").className = "icon into";
					var not_ok=document.getElementById("re_ok_3").className="icon into";
					return false;
				}
				else{
					var not_ok=document.getElementById("ok_3").className = "icon ticker";
					var not_ok=document.getElementById("re_ok_3").className = "icon ticker";
					return true;
				}
			}
			var not_ok=document.getElementById("re_ok_3").className = "icon ticker";
		}
		
		
		
		
			function check_data()
			{
				/**if(head.value=='')
				{
					alert("請上傳一張圖片");
					return false;
				}
				if(!/\.(jpg|jpeg|png|JPG|JPEG|PNG)$/.test(head.value))
				{
					alert("大頭貼請上傳圖檔（jpg、jpeg、png）！");
					return false;
				}**/
				if(document.regist.account.value.length==0) 
				{
					return false;
				}
				
				if(document.regist.account.value.length>10) 
				{
					alert("使用者帳號過長!");
					return false;
				}
				if(document.regist.pwd.value.length==0) 
				{
					return false;
				}
				
				if(document.regist.pwd.value.length>10) 
				{
					alert("使用者密碼過長!");
					return false;
				}
				if(document.regist.re_pwd.value.length==0) 
				{
					return false;
				}
				
				if(document.regist.re_pwd.value!=document.regist.pwd.value) 
				{
					alert("輸入密碼不一制");
					return false;
				}
				regist.submit();
			}

	</script>
		
		
</head>
<body>
	<div class="main">
		<div class="header" >
			<h1>註冊會員</h1>
		</div>
		<p>歡迎註冊您的帳號，註冊完畢後，請妥善保存您的<strong style="color:red;">帳號</strong>及<strong style="color:red;">密碼</strong>！</p>
			<form action='add_member.php' method='post' name='regist'>
				<ul class="left-form">
					<li>
						<input type="text" name="account" onchange="myAccount()" size="15" placeholder="請輸入帳號" required="required"/>
						<a href="#" class="" id="ok_1"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password" name="pwd"  onchange="myPassword()"size="15"   placeholder="請輸入密碼" required="required"/>
						<a href="#" class="" id="ok_3"> </a>
						<div class="clear"> </div>
					</li>
					<li>
						<input type="password" name="re_pwd"  onchange="myPassword()"size="15"   placeholder="請再次輸入密碼" required="required"/>
						<a href="#" class="" id="re_ok_3"> </a>
						<div class="clear"> </div>
					</li> 
					<li style="border:0px solid #fff "> 
						<select name="sex">
						<option value="男">男性</option>
						<option value="女">女性</option>
						</select>
						<div class="clear"> </div>
					</li>
					<div style='text-align:center'>
						<input type="button" value="送出" onClick="check_data()">
					</div>
				</ul>
					
			</form>
			
		</div>
	
</body>
</html>