<?php include_once('main.php'); ?>

<!DOCTYPE html>

<html>

<head>


<meta http-equiv="content-type" content="text/html;charset=utf-8">
<noscript><meta http-equiv="refresh" content="0; url=error.php?error_code=2"></noscript>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-cookies.js" type="text/javascript"></script>
<script src="js/jquery-base64.js" type="text/javascript"></script>
<?php include('js/header-js.php'); ?>
<script src="js/main.js" type="text/javascript"></script>

<link href="css/style.css" rel="stylesheet" type="text/css">

</head>


<body>

<?php
if(isset($_SESSION['logged_in']))
{
	echo '<a href="cubbyStatus.php" class="update"> 
		<div>Check for Open Cubbies!</div></a>';
	echo'<h1> Manhattan College Library </h1>
<h2> Study Room Reservations </h2>';


}
elseif(!isset($_SESSION['logged_in']))
{
	echo'<br></br>';
	echo'<video autoplay muted loop id="myVideo">
  		<source src="flower.mp4" type="video/mp4">
		</video>';
}

?>

<div id="header_div"><?php include('header.php'); ?></div>




<div id="content_div"></div>

<div id="preload_div">
<img src="img/loading.gif" alt="Loading">
</div>
</body>
</html>
