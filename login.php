<html>
<head>
<link rel="stylesheet" href="layout.css" />

<script src="jquery-3.1.0.js"></script>
<title>login page</title>
</head>
<body>
	<!--user-->
<div>
	<div id="login_user">
		<div id="login_select">
			<ul class="nosel">
				<li id="student">
					Students
				</li>
				<li id="shop">
					Shops
				</li>
				<li id="signup">
					Sign up
				</li>
			</ul>
		</div>
		<p style="color: black;" id="welcome">Welcome to Foy<span style="color: white">E</span>r.&nbsp;&nbsp;   Feel free to explore.</p>
		<form method="post" action="untitledlogin.php" id="login_student" class="hidden">
		UID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="txt_uname" ><br><br />
		PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_upassword"><br /><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="login"><br>
		</form>

		<form method="post" action="untitledshoplogin.php" id="login_shop" class="hidden">
		SHOPID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_sname"><br /><br />
		PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_spassword"><br /><br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="login as shopowner"><br />
		</form>
		
		<form method="post" action="untitledsignup.php" id="login_signup" class="hidden">
		UID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_sname"><br /><br />
		PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_spassword"><br /><br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="signup"><br />
		</form>
	</div>
	<!--shop-->

	<!--signup-->
		
</div>
<script>
	$("#student").click( function () {
					
		       		$('#login_shop').removeClass('nothidden').addClass('hidden');
       		$('#login_signup').removeClass('nothidden').addClass('hidden');
       		$('#login_student').addClass('nothidden');
	})
	$("#shop").click( function () {
		       		$('#login_student').removeClass('nothidden').addClass('hidden');
       		$('#login_signup').removeClass('nothidden').addClass('hidden');
       		$('#login_shop').addClass('nothidden');
	})
	$("#signup").click( function () {
		       		$('#login_shop').removeClass('nothidden').addClass('hidden');
       		$('#login_student').removeClass('nothidden').addClass('hidden');
       		$('#login_signup').addClass('nothidden');
	})
</script>
</body>
</html>