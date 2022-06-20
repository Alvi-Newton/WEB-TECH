<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Registration</title>
	</head>
	<body>
	    <form action="registration_check.php" method="post">
	        <fieldset>
	            <legend>Registration</legend>
	        <table>
	
	
	            <tr>
	                <td>
	                    ID:
	                </td>
	                <td>
	                    <input type="text" name="ID" value=""/>
	                </td>
	            </tr>
	            <tr>
	                <td>
	                    Password:
	                </td>
	                <td>
	                    <input type="" name="Password" value=""/>
	                </td>
	            </tr>
	            <tr>
	                <td>
	                    Confirm Password:
	                </td>
	                <td>
	                    <input type="password" name="Confirm password" value="">
	                </td>
	            </tr>

                <tr>
	                <td>
	                    Name:
	                </td>
	                <td>
	                    <input type="text" name="name" value="">
	                </td>
	            </tr>

                <tr>
	                <td>
	                    User type:
	                </td>
	                <td>
	                   
                        <input type="radio" name="Usertype" value=""/> User
					<input type="radio" name="Usertype" value=""/> Admin
	                </td>
	            </tr>
	
	            <tr>
	                <td>
	                    <input type="button" name="signup" value="Signup">
                        <a href="login.php" >Signin</a>
	                </td>
	            </tr>

        
	        </table>
	        </fieldset>
	    </form>
	</body>
	</html>


