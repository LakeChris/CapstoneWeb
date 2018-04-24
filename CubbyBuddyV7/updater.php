<?php
$connection = mysqli_connect("aaylum6h7nz1z1.c6f0fyzcst2v.us-east-2.rds.amazonaws.com","cubbybuddy","cubbyone","ebdb");     
$db = mysqli_select_db($connection,"login");
$query = mysqli_query($connection,"SELECT * FROM cubbyStatus");

if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

$result = mysqli_query($connection,"SELECT * FROM cubbyStatus");
$all_property = array();  
$result2 = mysqli_query($connection,"SELECT status FROM cubbyStatus");

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green1"></div></div></div>';
else
	echo '<div class="map"><div class="red1"></div></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green2"></div></div>';
else
	echo '<div class="map"><div class="red2"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green3"></div></div>';
else
	echo '<div class="map"><div class="red3"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green4"></div></div>';
else
	echo '<div class="map"><div class="red4"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green5"></div></div>';
else
	echo '<div class="map"><div class="red5"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green6"></div></div>';
else
	echo '<div class="map"><div class="red6"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green7"></div></div>';
else
	echo '<div class="map"><div class="red7"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green8"></div></div>';
else
	echo '<div class="map"><div class="red8"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green9"></div></div>';
else
	echo '<div class="map"><div class="red9"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green10"></div></div>';
else
	echo '<div class="map"><div class="red10"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green11"></div></div>';
else
	echo '<div class="map"><div class="red11"></div></div>';

$row2 = mysqli_fetch_assoc($result2);
if($row2['status']==0)
	echo '<div class="map"><div class="green12"></div></div>';
else
	echo '<div class="map"><div class="red12"></div></div>';
?>