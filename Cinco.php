<?php
	if($_GET)
	{
		$N=$_GET["Num"];
		if($N%2==0)
			echo "PAR!...";
		else
			echo "IMPAR!...";
	}
?>