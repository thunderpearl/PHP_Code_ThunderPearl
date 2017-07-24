

<?php
	$int = 0;
	
	if(filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false)
	{
		echo "Integer is Valid";
	}
	
	else
	{
		echo "Integer is not Valid";
		
	}

?>