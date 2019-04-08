<?php
if($_GET)
{
	$fi=$_GET["fil"];
	$co=$_GET["col"];
	$al=$_GET["alt"];
	$an=$_GET["anc"];
	echo'<table border="1" width="100px" height="100px">';
	for($i=0;$i<=$fi;$i++)
	{
		
		echo "<tr>";
		for($j=0;$j<=$co;$j++)
		{
			if($i<1)
			{
				$k=$j;
				if($j==0)
					echo"<th>X</th>";
				else
					echo"<th>$k</th>";
			}
			else 
			{
				if($j<1)
					echo "<th>$i</th>";
				else
				{
					$m=$i*$j;
					echo"<td>$m</td>";
				}
			}				
		}
		echo "</tr>";
	}

	echo"</table>";	
}
?>