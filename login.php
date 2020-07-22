 <!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<style>

.container{
	width: 500px;
	height: 300px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 160px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
</style>
</head>
<body>
	<div class="container">
		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
		</div>
</body>
</html>


<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "sony");
    define("DB_PASSWORD", "premisony@1716");
    define("DB_DATABASE", "aish");

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
 mysqli_select_db($db,"aish");
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($db,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else
    {
    	echo "wrong password";
    	exit();
    }
}
    
 ?>
 <!-- create a dtabase  with 3 columns id  user and password and insert the usernames and passwords reqiured ,try to connect with your localhost username and password and then login using the username and password created in your database.-->
