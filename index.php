
<style>

	html, body {
		width: 100%;
		height: 100%;
		border: 0;
		padding: 0;
		overflow: hidden;
		text-align: center;
	}
	
	input {
		height: 60px;
	}
	
	.heading {
		width: 100%;
		text-align: center;
		padding: 10px;
		box-sizing: border-box;
		font-family: Calibri;
		font-size: 50px;
	}
	
	.headingTwo {
		width: 100%; 
		text-align: center;
		box-sizing: border-box;
		font-family: Calibri;
		font-size: 20px;
		color: #555;
	}
</style>

<?php
	if(isset($_GET['myMessage'])){
		$parts = explode(' ',$_GET['myMessage']);
		for($i=0; $i<count($parts); $i++)			
			if(rand(0,2) != rand(0,2))
				$parts[$i] = strrev($parts[$i]);
		$string = "";
		for($i=0; $i<count($parts); $i++)
			$string .= $parts[$i]." ";
	}
?>

<?php
	$a = "     A
			  AAA
			 AA AA
			AA   AA
		   AAAAAAAAA
		  AAAAAAAAAAA
		  AAA     AAA
		  AAA     AAA
		  AAA     AAA
		";
	$b = "BBBBBBBBB
		  BBB   BBBB
		  BBB    BBBB
		  BBB   BBBB
		  BBBBBBBBB
		  BBB   BBBB
		  BBB    BBBB
		  BBB   BBBB
		  BBBBBBBBB
		";
	$c = "
		 CCCCCCCCCCC
		 CCCCCCCCCC
		 CCC
		 CCC
		 CCC
		 CCC
		 CCC
		 CCCCCCCCCC
		 CCCCCCCCCCC
		 ";
?>


<html>
<body>
<div class='heading'>
The Vussha Irritate-inator
</div>
<div class='headingTwo'>
Version 1.0
</div>

<form action="irritateinator.php" method="get" style='margin-top: 50px;'>
	<input type="textbox" placeholder='Enter text here'  style='width: 500px; padding-left: 20px; outline: none; font-size: 30px;' name="myMessage">
	
	<input type="submit" value="Convert">

</form>

<br>
<text style='font-size: 20px; color: #555; font-family: calbiri;'>
Converted Text: </text><br>

<text style='font-size: 25px; font-family: calbiri;'>
<?php echo $string; ?>
</text>
</body>
</html>

