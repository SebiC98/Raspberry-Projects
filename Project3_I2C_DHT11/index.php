<html>
<head>
<meta name="viewport" content="width=device-width"/>
<meta http-equiv ="refresh" content ="1"/>
<title>Smart Home</title>
</head>
	<style>
	body
	{
		background-color: rgb(212, 250, 252);
		font-family: 'Arial';
	}
	</style>
	<center><h1>Smart Home using Apache Webserver</h1>
	<div id="div1"><h2>Temperatura si umiditatea: </h2>
	<?php 
	$content = file("/home/pi/Projects/Project3_I2C_DHT11/data.txt");
	$data = implode ("<br>", $content);
	echo $data;
?>      	
</div></center>
