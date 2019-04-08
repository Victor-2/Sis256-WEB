<?php
	if($_GET)
	{
		$d=$_GET["Dia"];
		echo'<form>';
		echo'	<select name="combo">';
		if($d==1)
    		echo'	<option value="1" selected>Lunes</option>';
    	else
    		echo'	<option value="1">Lunes</option>';
    	if($d==2)
    		echo'	<option value="2" selected>Martes</option>';
    	else
    		echo'	<option value="2">Martes</option>';
    	if($d==3)
    		echo'	<option value="3" selected>Miercoles</option>';
    	else
    		echo'	<option value="3">Miercoles</option>';
    	if($d==4)
    		echo'	<option value="4" selected>Jueves</option>';
    	else
    		echo'	<option value="4">Jueves</option>';
    	if($d==5)
    		echo'	<option value="5" selected>Viernes</option>';
    	else
    		echo'	<option value="5">Viernes</option>';
    	if($d==6)	
    		echo'	<option value="6" selected>Sabado</option>';
    	else
    		echo'	<option value="6">Sabado</option>';
    	if($d==7)
    		echo'	<option value="7" selected>Domingo</option>';
    	else
    		echo'	<option value="7">Domingo</option>';
  		echo'	</select>';
		echo'</form>';
	}
?>