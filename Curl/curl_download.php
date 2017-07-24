

<?php

class Download 
{	
	// "const" is variable whose value can't be changed
	// "static" can be accessed without any object
	const URL_MAX_LENGTH = 2050;	
	
	// to clean url
	protected function cleanUrl($url)
	{
		if(isset($url))
		{
			if(!empty($url))
			{
				if(strlen($url) < self::URL_MAX_LENGTH)
				{	// "self" referes to the constant
					// "strip_tags" strip the html,xml tags from the string.
					// it can allow some tags also
					// This ca be done by "strip_tags($url, "<b>")".
					// This way it ll strip the tags except the "<br>" part
					return strip_tags($url);
				}
			}
		}
	}
	
	// To check if $url is url or not 
	protected function isurl($url)
	{
		$url = $this->cleanUrl($url);
		if(isset($url))
		{	
			// filter the url with specified filter.
			if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED))
			{
				return $url;
			}
		}
	}
	
	// This will return the extension.
	protected function returnExtension($url)
	{	
		// This is checking here that if "$url" have returned or not.
		// We have to use "$this" bcoz we are accessing a function from within the class. 
		if($this->isUrl($url))
		{	
			// splitting the url from the position of "."
			$end = end(preg_split("/[.]+/", $url));
			if(isset($end))
			{
				return $end;
			}
		}
	}
	
	
	// downloading file function.
	// public function as it is getting access from the outside.
	public function downloadFile($url)
	{
		if($this->isUrl($url))
		{
			$extension = $this->returnExtension($url);
			if($extension)
			{
				// echo $url;
				// This above code if commented will echo the entered url. We use it for testing :D
				
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url); // setting the option.
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //we don't want file to be return to browser hence, we use "true"
				// if we use "false" above then image in code form will return in browser.
				
				
				$return = curl_exec($ch); // execute session and return file.
				curl_close($ch);
				
				$destination = "curl/curl_downloads/file.$extension";
				$file = fopen($destination, "w+");
				fputs($file, $return); // get the contents which has been returned in "return" above.
				if(fclose($file))
				{
					echo "File Downloded";
				}
				}
			
		}
	}
	
} 

$obj = new Download();


if(isset($_POST['url']))
{
	$url = $_POST['url'];
}


?>

<!-- We tried to post $url entered in the text box by giving full path but did not work.
     But, it worked via below method.-->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<input type = "text" name = "url" maxlength = "2000" />
	<input type = "submit" value = "download" />
</form>

<?php
	if(isset($url))
	{
		$obj->downloadFile($url); 
	}
?>