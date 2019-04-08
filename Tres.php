<?php
	if($_GET)
	{
		$b=$_GET["bas"];
		$a=$_GET["alt"];
		$A=($b*$a)/2;
		echo"Area: ".$A;
	}
?>