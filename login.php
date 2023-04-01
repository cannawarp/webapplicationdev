<?php
include_once 'config/config.php';
include_once 'classes/class-user.php';

$user = new User();
if($user->get_session()){
	header("location: index.php");
}
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$login = $user->check_login($useremail,$password);
	if($login){
		header("location: index.php");
	}else{
		?>
        <div id='error_notif'>Wrong email or password.</div>
        <?php
	}
	
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SNW Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
    </head>
    <body>
        <div class="center">
            <h1>Login</h1>
            <form method="post">

            <div class="txt_field">
            <input type="email" class="input" required name="useremail"/>
                    <span></span>
                    <label>Username</label>

                <div class="txt_field">
                <input type="password" class="input" required name="password"/>
                    <span></span>
                    <label>Password</label>
                </div>

                <div class="pass">Forgot Password?</div>
                <input type="submit" name="submit" value="Login"/>
                <div class="signup_link">
                    Not a member? <a href="#">Signup</a>
                </div>
            </form>
    </div>
    </body>
</html>