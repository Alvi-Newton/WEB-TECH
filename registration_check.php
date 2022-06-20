<?php 
session_start();

if(isset($_REQUEST['submit'])){

	$ID = $_REQUEST['username'];
    
	$password = $_REQUEST['password'];
    $password = $_REQUEST['confirm password'];


	if($ID == null  && $password == null && $password == null){
        echo "invalid username/password ";
    }else{
        if($username == $password){
            $_SESSION['status'] = true; 
		    header('location: index.php');

	}else{
		echo "Invalid Request Try Again";
	}
}
}
?>