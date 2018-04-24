<?php

include_once('main.php');

if(isset($_GET['login']))
{
	$user_email = mysqli_real_escape_string($con, $_POST['user_email']);
	$user_password = mysqli_real_escape_string($con, $_POST['user_password']);
	$user_remember = $_POST['user_remember'];
	echo login($user_email, $user_password, $user_remember);
	}
elseif(isset($_GET['logout']))
{
	logout();
}
elseif(isset($_GET['create_user']))
{
	$user_name = mysqli_real_escape_string($con, trim($_POST['user_name']));
	$user_email = mysqli_real_escape_string($con, $_POST['user_email']);
	$user_password = mysqli_real_escape_string($con, $_POST['user_password']);
	$user_secret_code = $_POST['user_secret_code'];
	echo create_user($user_name, $user_email, $user_password, $user_secret_code);
}
elseif(isset($_GET['new_user']))
{

?>
	<div class="box_div" id="login_div">
	<div class="box_top_div"><a href="#">Start</a> &gt;</div>
	
	<label for="user_name_input">Name:</label><br>
	<input type="text" id="user_name_input"><br><br>
	<label for="user_email_input">Email:</label><br>
	<input type="text" id="user_email_input" autocapitalize="off"><br><br>
	<label for="user_password_input">Password:</label><br>
	<input type="password" id="user_password_input"><br><br>
	<label for="user_password_confirm_input">Confirm password:</label><br>
	<input type="password" id="user_password_confirm_input"><br><br>

<?php

	if(global_secret_code != '0')
	{
		echo '<label for="user_secret_code_input">Secret code: <sup><a href="." id="user_secret_code_a" tabindex="-1">What\'s this?</a></sup></label><br><input type="password" id="user_secret_code_input"><br><br>';
	}

?>


<div class="cubInfo">Login to see real-time Cubby availabilites and make study room reservations</div>

	
<?php

}
elseif(isset($_GET['forgot_password']))
{

?>

	<div class="box_div" id="login_div"><div class="box_top_div"><a href="#">Start</a> &gt; Forgot password</div><div class="box_body_div">

	<p>Contact one of the admins below by email and write that you've forgotten your password, and you will get a new one. The password can be changed after logging in.</p>

	<?php echo list_admin_users(); ?>

	</div></div>

<?php

}
else
{







?>

	<div class="layoutofLogin">
	<div class="box_div" id="login_div">
	<div class="box_top_div" style="color:white;">Log in</div>
	<div class="box_body_div">
	
	<div class="cubInfo">
		
<ul style="list-style: none;">
  		<li>Log in to see real-time cubicle</li>
  		<li>availabilites and make library</li>
  		<li>study room reservations.</li>
	</ul>
	
	</div>
	<div class="homeTitle">CubbyBuddy</div>
	<form action="." id="login_form" autocomplete="off"><p>
	<label for="user_email_input">Email:</label><br><input type="text" id="user_email_input" value="<?php echo get_login_data('user_email'); ?>" autocapitalize="off"><br><br>
	<label for="user_password_input">Password:</label><br><input type="password" id="user_password_input" value="<?php echo get_login_data('user_password'); ?>"><br><br>
	<input type="checkbox" id="remember_me_checkbox" checked="checked"> <label for="remember_me_checkbox">Remember me</label><br><br>		
	<input type="submit" value="Login">

	</p></form>

	<p id="login_message_p"></p>
	<p><a href="https://start.manhattan.edu/activate/request_reset">Forgot password</a></p>

	</div>
	</div>
</div>
<?php

}

?>
