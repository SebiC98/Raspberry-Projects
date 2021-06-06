<html>
<head>
<meta name="viewport" content="width=device-width"/>
<title>Control LED with Raspberry Pi using Apache Webserver</title>
</head>
	<style>
	body
	{
		background-color: rgb(212,250,252);
		font-family: 'Arial';
	}
	.blue{
		background-color: blue;
		width: 10em;height: 4em;
		font-size: 20px;
	}
	.red{
                background-color: red;
                width: 10em;height: 4em;
                font-size: 20px;
        }

	</style>
	<center><h1>Control LED from web using Apache Webserver</h1>
<form method="get" action="index.php">
<input class="blue" type="submit" value="Turn Blue LED on" name="bon">
<input class="blue" type="submit" value="Turn Blue LED off" name="boff">
<input class="red" type="submit" value="Turn Red LED on" name="ron">
<input class="red" type="submit" value="Turn Red LED off" name="roff">


</form>
	</center>
<?php
	shell_exec("gpio -g mode 17 out");
  	shell_exec("gpio -g mode 18 out");

	
	if(isset($_GET['boff'])){
		shell_exec("gpio -g  write 17 0");
	}else if(isset($_GET['bon'])){
		shell_exec("gpio -g write 17 1");
	}else if(isset($_GET['roff'])){
		shell_exec("gpio -g write 18 0");
	}else if(isset($_GET['ron'])){
		shell_exec("gpio -g write 18 1");
	}
?>
</body>
</html>
