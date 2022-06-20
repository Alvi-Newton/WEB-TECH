<?php
?>
<html>
<head>
	<title>Form Submission</title>
</head>
<body>
		<form action="loginCheck.php" method="post" enctype="">
			<fieldset>
				<legend>LOGIN</legend>
				<table>
					<tr>
						<td>User Id</td>
						<td><input type="text" name="User ID" value=""></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>

                    <tr>
	                <td>
	                    <input type="button" name="Login" value="Login">
                        <a href="registration.php" >Register</a>
	                </td>
	            </tr>

				
				</table>
			</fieldset>
		</form>
</body>
</html>