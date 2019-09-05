<?php 
	function pageAccess()
	{
		if (!isset($_SESSION['username'])) {
			header("location:".URL);
		}
	}
	function sanitize($value)
	{
		trim($value);
		htmlspecialchars($value);
		strip_tags($value);
		return $value;
	}

	function encrypt($value)
	{
		$password = md5($value).TOKEN;
		return $password;
	}


?>