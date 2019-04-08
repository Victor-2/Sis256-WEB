<?php
	if($_GET)
	{
		$n=$_GET["fil"];
		echo '<table border="1">';
			for($i=1;$i<=$n;$i++)
			{
				echo "<tr>";
				echo"<td>$i</td>";
				echo"</tr>";
			}
		echo"</table>";
	}
?>