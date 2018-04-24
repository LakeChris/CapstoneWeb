<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/dots.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 align="center">CubbyBuddy Occupancy</h1>
<h1 align="center" style="font-size:24px;">First Floor</h1>
<h1 align="center"><a href="index.php">Home</a></h1>

<div><img src="map.png" class="map"></div>



<div id="getdata"></div>


<script type="text/javascript">
		function cubUpdate()
		{
			xmlhttp=new XMLHttpRequest();
			xmlhttp.open("GET","updater.php",false);
			xmlhttp.send(null);
			document.getElementById("getdata").innerHTML=xmlhttp.responseText;
		}
		cubUpdate();
		setInterval(function(){cubUpdate();},2000);
	</script>
</body>
</html>