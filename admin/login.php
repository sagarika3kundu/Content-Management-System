<?php
session_start();
include ("lib/connection.php");
if($_REQUEST[flag]=="1")
{
	$pass=$_REQUEST[password];
	$sql=mysql_query("select * from `admin_acnt` where `email`='$_REQUEST[username]' and `pass`='$pass'");
	$num=mysql_num_rows($sql);
	if($num>0)
	{
		$row=mysql_fetch_array($sql);
		$_SESSION[login]="true";
		$_SESSION[admin_id]=$row[id];
		echo "<script>location.href='index.php'</script>";
	}
	else
	{
		echo "<script>location.href='login.php?msg=1'</script>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Administration Panel</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/admin-login.css"  />
<!--[if lte IE 6]><link media="screen" rel="stylesheet" type="text/css" href="css/admin-login-ie.css" /><![endif]-->

</head>

<body>
	<!--[if !IE]>start wrapper<![endif]-->
	<div id="wrapper">
		
		
		
		
		<!--[if !IE]>start login wrapper<![endif]-->
		<div id="login_wrapper">
			
			<?php 
			if($_REQUEST[msg]=="1")
			{
			?>
			<div class="error">
				<div class="error_inner">
					<strong>Access Denied</strong> | <span>user/password combination wrong</span>
				</div>
			</div>
			<?php
			}
			?>
			
			
			<!--[if !IE]>start login<![endif]-->
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="frmlogin">
			<input type="hidden" name="flag" value="1" />
				<fieldset>
					
					
					
					
					
					<h1 id="logo"><a href="#">websitename Administration Panel</a></h1>
					<div class="formular">
						<div class="formular_inner">
						
						<label>
							<strong>Username:</strong>
							<span class="input_wrapper">
								<input name="username" type="text" />
							</span>
						</label>
						<label>
							<strong>Password:</strong>
							<span class="input_wrapper">
								<input name="password" type="password" />
							</span>
						</label>
						<ul class="form_menu">
							<li><span class="button"><span><span>Submit</span></span><input type="submit" name=""/></span></li>
							<li><a href="#"><span><span>Back</span></span></a></li>
							<li><a href="#"><span><span>Forgot Pass</span></span></a></li>
						</ul>
						
						</div>
					</div>
				</fieldset>
			</form>
			<!--[if !IE]>end login<![endif]-->
		</div>
		<!--[if !IE]>end login wrapper<![endif]-->
	</div>
	<!--[if !IE]>end wrapper<![endif]-->
</body>
</html>
