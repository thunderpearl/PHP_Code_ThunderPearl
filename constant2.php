

<?php
	define("NAME", "meliodas");

	echo NAME."<br>";
	echo constant("NAME")."<br>";
	
	echo __LINE__; #  This is a magic constant which tells the present line number. 

	# Basically there are 5 magic constants in the php i.e. 
	# __LINE__ , __FILE__ , __CLASS__ , __METHOD__ , __FUNCTION__

?>